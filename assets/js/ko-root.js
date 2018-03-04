$(function () {

    ko.validation.rules.pattern.message = 'Invalid.';

    ko.validation.init({
        insertMessages: true,
        decorateElement: true,
        errorMessageClass: "_1u7op",
        errorClass: '',
        errorsAsTitle: true,
        parseInputAttributes: true,
        messagesOnModified: true,
        decorateElementOnModified: true,
        decorateInputElement: true
    }, true);

    RootViewModel = function () {
        var self = this;

        self.showSettingsForm = ko.observable(false);
        self.showUserForm = ko.observable(false);
        self.showItem = ko.observable(false);
        self.showFanbaseForm = ko.observable(false);
        self.showJoinForm = ko.observable(false);
        self.isSignedIn = ko.computed(function () {
            return !!window.isAuthenticated;
        });

        self.showOverlay = ko.computed(function () {
            var showOverlay = self.showJoinForm() ||
                self.showUserForm() ||
                self.showFanbaseForm() ||
                self.showSettingsForm() ||
                self.showItem();

            if (showOverlay) {
                $("body").addClass("active");
            }
            else {
                $("body").removeClass("active");
            }
            return showOverlay;
        });

        self.openJoinForm = function () {
            self.showJoinForm(true);
        };

        self.openItem = function (item) {
            if (item.type() === "post") {
                self.setPost(item.post);
            }
            else if (item.type === "base") {

            }
            else if (item.type === "user") {

            }

            self.showItem(true);
        };

        self.closeItem = function () {
            self.showItem(false);
        };

        self.post = ko.observable({});
        self.setPost = function (item) {
            self.post(item);
        };

        self.checkAuth = function () {
            if (window.isAuthenticated === false) {
                self.showJoinForm(true);
                return false;
            }
            else {
                return true;
            }
        };

        self.hideJoinPopup = function () {
            self.showJoinForm(false);
        };

        self.openSettingsForm = function () {
            self.showSettingsForm(!self.showSettingsForm());
        };

        self.closeSettingsForm = function () {
            self.showSettingsForm(false);
        };

        self.openUserForm = function () {
            self.showSettingsForm(false);
            self.showUserForm(!self.showUserForm());
        };

        self.closeEditForm = function () {
            self.showUserForm(false);
        };

        self.openFanbaseForm = function () {
            self.showFanbaseForm(!self.showFanbaseForm());
        };

        self.closeFanbaseForm = function () {
            self.showFanbaseForm(false);
        };

        self.setPage = function (id) {
            $(".page").slideDown();
            $("#page-" + id).slideUp();
        };

        self.init = function () {
            var pallets = $("._1SLoN");

            var colors = [
                '_B34JK',
                '_GRT78',
                '_RRTGY',
                '_PRT78',
                '_ORT78'
            ];

            $.each(pallets, function (key, pallet) {
                console.log("key vs value", key, pallet);

                var random = Math.floor(Math.random() * colors.length);
                $(pallet).addClass(colors[random]);
            });

        }();
    };

    ko.extenders.overlay = function (target, option) {
        target.subscribe(function (newValue) {
            console.log(option + ": " + newValue);
        });
        return option;
    };


    ko.applyBindings(RootViewModel, document.getElementById('root'));
});