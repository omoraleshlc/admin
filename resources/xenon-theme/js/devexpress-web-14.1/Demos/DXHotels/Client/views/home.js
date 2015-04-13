
DXHotels.home = function () {
    var model = this,
        MAX_SHOWN_IMAGES = 9,
        FRIDAY = 5;
    model.closeOffer = function () {
        var offer = this;
        model.offers($.grep(model.offers(), function (item) {
            return item.name != offer.name;
        }));
    };

    model.offers = ko.observableArray([
        { name: "first" },
        { name: "second" },
        { name: "third" }
    ]);

    model.minDateCheckOut = ko.observable();
    model.minDateCheckIn = ko.observable();
    model.maxDateCheckOut = ko.observable();
    model.indexImg = ko.observable(0);
    model.maxDate = ko.observable();
    model.minDate = ko.observable();
    model.hotel = ko.observableArray();
    model.transformSlider = ko.observable(false);
    model.loading = ko.observable("Loading...");

    model.selectBoxData = ko.observable([]);

    model.cityID = ko.observable(null);

    var initDate = function () {
        var today = new Date();
        var minDate = new Date();
        var maxDateCheckOut = new Date();
        model.minDateCheckOut(today);
        minDate.setDate(today.getDate() - 1);
        maxDateCheckOut.setDate(minDate.getDate() + 31);
        model.minDateCheckIn(minDate);
        model.maxDateCheckOut(maxDateCheckOut);

    }
    initDate();

    model.rooms = ko.observable("");
    model.children = ko.observable("");
    model.adults = ko.observable("");
    model.galleryData = ko.observableArray();

    model.numberOfRooms = [ 1, 2, 3, 4 ];
    model.numberOfAdults = [ 1, 2, 3, 4 ];
    model.numberOfChildren = [ 0, 1, 2, 3, 4 ];

    model.init = function () {
        DXHotels.loadData({
            request: "cities"
        }).done(function (data) {
            model.selectBoxData(data);
            model.loading(" ");
        });

        DXHotels.loadData({
            request: "specialoffers"
        }).done(function (data) {
            var img = [];
            for(var i = 0 ; i < data.length; i++) {
                var hotel = data[i];
                img.push({
                    index: i,
                    cityId: hotel.City_Id,
                    hotelId: hotel.Id,
                    location: hotel.City + ", " + hotel.Country,
                    src: hotel.CIty_Image,
                    price: "$" + parseInt(hotel.Price),
                    name: hotel.Hotel_Name
                });
            }
            model.galleryData(img);
        });

        
    }

    model.changePicture = function () {
        model.indexImg(this.index);
    };

    model.indexImg.subscribe(function (newValue) {
        if (newValue == MAX_SHOWN_IMAGES)
            model.transformSlider(true);
        else if (newValue == 0)
            model.transformSlider(false);
    });

    model.showChangeImg = function (data) {
        model.indexImg(data.selectedIndex);
    };

    model.minDate.subscribe(function (newValue) {
        DXHotels.getMaxDate(newValue, model);
    });

    var getSpecialOfferDate = function () {
        var checkInOffer = new Date(),
            dayWeek = checkInOffer.getDay();
        if(dayWeek != FRIDAY)
            checkInOffer.setDate(checkInOffer.getDate() + FRIDAY - dayWeek);
        var checkOutOffer = new Date(checkInOffer);
        checkOutOffer.setDate(checkInOffer.getDate() + 2);
        return { startDate: checkInOffer, endDate: checkOutOffer };
    };

    model.specialOffers = function (data) {        
        var checkInOffer = getSpecialOfferDate();
        DXHotels.app.navigate({
            view: "currentHotel",
            rooms: "1",
            children: "",
            adults: "1",
            checkIn: DXHotels.getDate(checkInOffer.startDate),
            checkOut: DXHotels.getDate(checkInOffer.endDate),
            hotelId: data.itemData.hotelId,
            city: data.itemData.cityId,
        });
    };
    
    model.searchClick = function (params) {
        var result = params.validationGroup.validate();
        if (result.isValid) {
            DXHotels.app.navigate({
                view: "hotels",
                city: model.cityID(),
                rooms: model.rooms(),
                adults: model.adults(),
                children: model.children(),
                checkIn: DXHotels.getDate(model.minDate()),
                checkOut: DXHotels.getDate(model.maxDate())
            });
        }
    };
    model.init();

    return model;

};