var DXHotels = DXHotels || {};

DXHotels.getAdults = function (checkIn, checkOut, rooms, adults, children) {
    var str = "";
    var nights = Math.ceil((
        new Date(checkOut).getTime() - new Date(checkIn).getTime()) / (1000 * 60 * 60 * 24));
    if ((rooms != "") || (adults != "")) {
        if (nights > 1) {
            str = nights + " nights, ";
        } else str = nights + " night, "

        if (rooms > 1) {
            str += rooms + " rooms, ";
        } else str += rooms + " room, "

        if (children != "") {
            if (adults > 1) {
                str += adults + " adults, ";
            } else str += adults + " adult, ";

            if (children > 1) {
                str += children + " children ";
            } else str += children + " child";
        } else {
            if (adults > 1) {
                str += adults + " adults";
            } else str += adults + " adult "
        }
    }
    return str;
};

DXHotels.getDate = function (date) {
    return Globalize.format(new Date(date), "MM/dd/yyyy");
};

DXHotels.getDateForView = function (checkIn, checkOut, view) {
    var resulDataFunc = "";
    var dateCheckIn = new Date(checkIn);
    var dateCheckOut = new Date(checkOut);
    var monthCheckIn = Globalize.format(dateCheckIn, "MMMM");
    var monthCheckOut = Globalize.format(dateCheckOut, "MMMM");
    if (monthCheckIn == monthCheckOut & dateCheckIn.getFullYear() == dateCheckOut.getFullYear()) {
        if (view == "hotels") {
            resulDataFunc = Globalize.format(dateCheckIn, "ddd dd") + " - " + Globalize.format(dateCheckOut, "ddd dd, MMM yyyy");
        } else {
            resulDataFunc = Globalize.format(dateCheckIn, "dd") + "-" + Globalize.format(dateCheckOut, "dd, MMM yyyy");
        }
    } else if (monthCheckIn != monthCheckOut) {
        if (view == "hotels") {
            resulDataFunc = Globalize.format(dateCheckIn, "ddd dd, MMM yyyy") + " - " + Globalize.format(dateCheckOut, "ddd dd, MMM yyyy");
        } else {
            resulDataFunc = Globalize.format(dateCheckIn, "dd, MMM yyyy") + " - " + Globalize.format(dateCheckOut, "dd, MMM yyyy");
        }
    }
    return resulDataFunc;
};

DXHotels.getFullAddress = function (address, city, stateProvince, postalCode, country) {     
    if (stateProvince) {
        return (address + " " + city + ", " + stateProvince + ", " + postalCode + ", " + country);
    } else {

        return (address + " " + city + ", " + postalCode + ", " + country);
    }
};

DXHotels.getMaxDate = function (newValue, model) {
    if (newValue) {
        var dateMin = new Date(newValue);
        var dateMaxCheckOut = new Date(newValue);
        dateMaxCheckOut.setDate(dateMaxCheckOut.getDate() + 30);
        dateMin.setDate(dateMin.getDate() + 1);
        model.minDateCheckOut(dateMin);
        model.maxDateCheckOut(dateMaxCheckOut);
        if ((!model.maxDate()) || (model.maxDate() <= model.minDate()) || ((Math.floor((model.maxDate() - model.minDate()) / (1000 * 60 * 60 * 24))) > 30)) {
            var dateMax = new Date(newValue);
            dateMax.setDate(dateMax.getDate() + 1);
            model.maxDate(dateMax);
        }
        if (!model.rooms()) {
            model.rooms(1);
        }
        if (!model.adults()) {
            model.adults(1);
        }
    }
};

window.setCookie = function (name, value) {
    var cookieValue = name + "=" + escape(value) + ";";
    var currentDate = new Date(),
    cookiesFinishDate = new Date(currentDate.getFullYear(), currentDate.getMonth() + 1, currentDate.getDate());
    cookieValue += "expires=" + cookiesFinishDate.toUTCString() + ";";
    cookieValue += "path=/";

    document.cookie = cookieValue;
};
window.getCookie = function (name) {
    var matches = document.cookie.match(new RegExp(
      "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ));

    return matches ? decodeURIComponent(matches[1]) : undefined;
};