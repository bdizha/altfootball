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

        // console.log("self.isAuthenticated()");
        // console.log(window.isAuthenticated);
        // console.log("self.isSignedIn()");
        // console.log(self.isSignedIn());

        self.showOverlay = ko.computed(function () {
            return self.showJoinForm() || self.showUserForm() || self.showFanbaseForm() || self.showSettingsForm() || self.showItem();
        });

        self.openJoinForm = function () {
            self.showJoinForm(true);
        };

        self.openItem = function () {
            console.log("setting this value ::: ");
            self.showItem(true);
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
            console.log('closing this form :: RootViewModel');
            self.showFanbaseForm(false);
        };

        self.setPage = function (id) {
            $(".page").slideDown();
            $("#page-" + id).slideUp();
        };


        self.init = function () {
            console.log("initializing functions :::: ");
            // var pallet = $(".GLLyX");
            // var linesTotal = pallet.width();
            // pallet.prepend("<span class='one'></span>");
            // pallet.prepend("<span class='two'></span>");
            //
            // for (var line = 0; line <= linesTotal; line++) {
            //     var green = line / linesTotal;
            //     var blue = 1 - green;
            //     var color = {
            //         blue: 'rgba(0, 149, 208, ' + blue + ')',
            //         green: 'rgba(32, 198, 89, ' + green + ')'
            //     };
            //
            //     var blueSpan = "<span style='background-color: " + color.blue + "'></span>";
            //     var greenSpan = "<span style='background-color: " + color.green + "'></span>";
            //
            //     pallet.children('.one').append(blueSpan);
            //     pallet.children('.two').append(greenSpan);
            // }

        }();

        // Sammy(function() {
        //     this.get('/p/:slug', function() {
        //         console.log('#paging --- #p/:slug');
        //         self.setPage("post");
        //     });
        //
        //     this.get('/u/:slug', function() {
        //         console.log('#paging --- #u/:slug');
        //         self.setPage("user");
        //     });
        //
        //     this.get('/fanbases', function() {
        //         console.log('#paging --- #fanbases');
        //         self.setPage("user");
        //     });
        //
        //     this.get('/f/:slug', function() {
        //         console.log('#paging --- #f/:slug');
        //         self.setPage("user");
        //     });
        //
        //     this.get('', function() {
        //         console.log('#paging --- #');
        //         self.setPage("welcome");
        //     });
        //
        // }).run();
    };

    ko.extenders.overlay = function (target, option) {
        target.subscribe(function (newValue) {
            console.log(option + ": " + newValue);
        });
        return option;
    };


    ko.applyBindings(RootViewModel, document.getElementById('root'));
});