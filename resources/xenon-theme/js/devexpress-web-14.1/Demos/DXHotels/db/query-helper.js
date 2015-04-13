var util = require("util"),
    helper = {};

helper.specialOffers = function (req){
    return "SELECT \
    Hotels.Id, \
    Hotels.City_Id, \
    Hotels.Hotel_Name, \
    Cities.City, \
    Cities.Country, \
    Cities.City_Image, \
    min(Rooms.Nighly_Rate) as Price \
    FROM Hotels \
    JOIN Cities on Hotels.City_Id = Cities.ID \
    JOIN Rooms on Hotels.Id = Rooms.Hotel_Id \
    WHERE \
    Hotels.City_Id not null\
    group by Hotels.City_Id";
};

helper.cities = function (req) {
    var cityStatement = "";
    if(req.params.cityid)
        cityStatement = util.format("WHERE id=%d", req.params.cityid)
    
    return util.format("SELECT * FROM Cities %s", cityStatement);
};

helper.hotels = function (req) {
    var rangeStart = req.query.rangeStart || 0,
        rangeEnd = req.query.rangeEnd || 1000, 
        limitStatement = "",
        ourRatingStatement = "",
        priceStatement = util.format("AND Rooms.Nighly_Rate > %d AND Rooms.Nighly_Rate < %d", rangeStart, rangeEnd),
        customerRatingStatement = util.format("AND Hotels.Avg_Customer_Rating <= %d", req.query.customerRating || 5),
        locationRatingStatement = req.query.locationRating ? util.format("AND Hotels.Location_Rating = '%s'", req.query.locationRating) : "",
        hotelNameStatement = req.query.startswithHotelName ? util.format("AND Hotels.Hotel_Name like '%s%'", req.query.startswithHotelName) : "";
    
    if(req.query.limit)
        limitStatement = util.format(
            "LIMIT %d OFFSET %d", 
            req.query.limit, 
            req.query.offset || 0);
    
    if(req.query.ourRating) {
        var likeArray = [];
        req.query.ourRating.split(",").forEach(function (rating) {
            likeArray.push(util.format("Hotels.Our_Rating like '%d%'", rating));
        });
        ourRatingStatement = util.format("AND (%s)", likeArray.join(" OR "));
    }
    
    return util.format("SELECT \
        Hotels.Id,\
        Hotels.Hotel_Name, \
        Hotels.Address, \
        Hotels.Postal_Code, \        Hotels.Description, \
        Hotels.Avg_Customer_Rating, \
        Hotels.Our_Rating, \        Hotels.Location_Rating, \        Hotels.Hotel_Class, \
        Cities.City, \
        Cities.Country, \
        Cities.CIty_Image, \
        Cities.StateProvince, \        Rooms.Id as RoomId, \
        min(Rooms.Nighly_Rate) as Price, \
        Hotel_Images.Image_Filename\
        FROM Hotels \
        JOIN Cities ON Hotels.City_Id = Cities.ID \
        JOIN Rooms ON Hotels.Id = Rooms.Hotel_Id \
        JOIN Hotel_Images ON Hotel_Images.Hotel_ID = Hotels.Id \
        WHERE \
        Hotels.City_Id = %d \        %s %s %s %s %s\
        GROUP BY Hotels.Id\
        %s", 
        req.params.cityid, 
        ourRatingStatement,
        priceStatement,
        customerRatingStatement,
        locationRatingStatement,
        hotelNameStatement,
        limitStatement);
};

helper.hotel = function (req) {
    return util.format(
        "SELECT \
        Hotels.Hotel_Name, \
        Hotels.Address, \
        Hotels.Postal_Code, \
        Hotels.Description,\
        Hotels.Avg_Customer_Rating,\
        Cities.City, \
        Cities.Country, \
        Cities.StateProvince\
        FROM Hotels\
        JOIN Cities on Hotels.City_Id = Cities.ID\
        WHERE\
        Hotels.Id = %d", 
        req.params.hotelid);
};

helper.hotelImages = function (req) {
    return util.format(
        "SELECT\
        Hotels.Id, \
        Hotel_Images.Image_Filename\
        from Hotels\
        join Hotel_Images on Hotel_Images.Hotel_ID = Hotels.Id\
        where\
        Hotels.Id = %d", 
        req.params.hotelid);
};

helper.hotelReviews = function (req) {
    return util.format("SELECT Review, date(Posted_On) as Posted_On, Rating  FROM Reviews WHERE Hotel_Id = %d LIMIT 3", req.params.hotelid);
};

helper.hotelFeatures = function (req) {
    return util.format("SELECT Description FROM Hotel_Features WHERE Hotel_ID = %d", req.params.hotelid);
};

helper.hotelRooms = function (req) {
    var roomIdStatement = "";
    if(req.params.roomid)
        roomIdStatement = util.format("AND Rooms.Id = %d", req.params.roomid);
    
    return util.format(
        "SELECT\
        Rooms.Id,\
        Rooms.Room_Short_Description,\
        Rooms.Nighly_Rate,\
        Rooms.Room_Image1,\
        Rooms.Room_Image2,\
        Rooms.Room_Image3,\
        Rooms.Room_Image4,\
        Rooms.Room_Image5,\
        Room_Type.RoomType,\
        Features_List.Feature_Name,\
        Features_List.Icon\
        FROM Rooms\
        JOIN Room_Type ON Room_Type.ID = Rooms.RoomType\
        JOIN Room_Features ON Room_Features.Room_ID = Rooms.Id\
        JOIN Features_List ON Features_List.ID = Room_Features.Features_Id\
        WHERE\
        Rooms.Hotel_Id = %d\
        %s\
        ORDER BY Rooms.Nighly_Rate", 
        req.params.hotelid,
        roomIdStatement);
};

helper.roomImages = function (req) {
    return util.format(
        "SELECT\
        Rooms.Room_Image1,\
        Rooms.Room_Image2,\
        Rooms.Room_Image3,\
        Rooms.Room_Image4,\
        Rooms.Room_Image5\
        FROM Rooms\
        WHERE\
        Rooms.Id = %d", 
        req.params.roomid);
};

module.exports = helper;