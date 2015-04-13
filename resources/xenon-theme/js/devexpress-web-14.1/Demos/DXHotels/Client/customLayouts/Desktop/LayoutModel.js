var DXHotels = DXHotels || {};

DXHotels.LayoutModel = function () {
    var self = this;
    var USER_NAME_KEY = "userName";

    self.contactPopupVisible = ko.observable(false);
    self.loginPopupVisible = ko.observable(false);
    self.userName = ko.observable("");
    self.emailValue = ko.observable("");

    self.passwordValue = ko.observable("");

    self.init = function () {
        var userName = getCookie(USER_NAME_KEY);
        if (userName) {
            self.userName(userName);
        }
    };

    self.showContactPopup = function () {
        self.contactPopupVisible(true);
    };
    self.hideContactPopup = function () {
        self.contactPopupVisible(false);
    };

    self.showLoginPopup = function () {
        self.loginPopupVisible(true);
    };
    self.hideLoginPopup = function () {
        self.loginPopupVisible(false);
    };

    self.showWelcome = function (params) {
        var result = params.validationGroup.validate();
        if (result.isValid) {
            self.hideLoginPopup();
            self.userName(self.emailValue());
        }
    };

    self.userName.subscribe(function (newValue) {
        setCookie(USER_NAME_KEY, newValue);
    });

    self.logoClick = function () {
        DXHotels.app.navigate({
            view: "home"
        });
    };

    self.loginPopupVisible.subscribe(function (newValue) {
        var groupConfig;
        if(newValue) {
            groupConfig = DevExpress.validationEngine.getGroupConfig(self);
            if(groupConfig) {
                groupConfig.reset();
            }
        }
    });

    self.init();
};

DXHotels.layoutModel = new DXHotels.LayoutModel();