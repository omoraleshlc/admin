var util = require("util"),
    express = require("express"),
    sqlite3 = require("sqlite3").verbose(),
    qHelper = require("../db/query-helper"),
    db = new sqlite3.Database("db/dxhotels.db"),
    router = express.Router();

var routeTable = [
    { route: "/specialoffers", queryFunction: qHelper.specialOffers },
    { route: "/cities/:cityid?", queryFunction: qHelper.cities },
    { route: "/hotels/:cityid", queryFunction: qHelper.hotels },
    { route: "/hotel/:hotelid", queryFunction: qHelper.hotel },
    { route: "/hotel/:hotelid/images", queryFunction: qHelper.hotelImages },
    { route: "/hotel/:hotelid/reviews", queryFunction: qHelper.hotelReviews },
    { route: "/hotel/:hotelid/features", queryFunction: qHelper.hotelFeatures },
    { route: "/hotel/:hotelid/rooms/:roomid?", queryFunction: qHelper.hotelRooms },
    { route: "/roomimages/:roomid", queryFunction: qHelper.roomImages },
];

routeTable.forEach(function (route) {
    router.get(route.route, function (req, res, next) {
        res.contentType('application/json');
        
        db.all(route.queryFunction(req), function (err, rows) {
            res.send(JSON.stringify(rows));
        });
    
    });
});

module.exports = router;