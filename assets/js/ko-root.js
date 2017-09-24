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
        self.showFanbaseForm = ko.observable(false);
        // self.currentUser = ko.observable(window.currentUser);
        self.showJoinForm = ko.observable(false);
        self.isSignedIn = ko.computed(function () {
            return window.isAuthenticated ? true : true;
        });

        console.log("self.isAuthenticated()");
        console.log(window.isAuthenticated);
        console.log("self.isSignedIn()");
        console.log(self.isSignedIn());

        self.showOverlay = ko.computed(function () {
            return  self.showJoinForm() || self.showUserForm() || self.showFanbaseForm() || self.showSettingsForm();
        });

        self.openJoinForm = function() {
            self.showJoinForm(true);
        };

        self.checkAuth = function() {
            if(!self.isSignedIn()){
                self.showJoinForm(true);
            }
        };

        self.hideJoinPopup = function() {
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

        self.setPage = function (pageId) {
            $(".page").show();
            $("#" + pageId).show();
        };

        // Sammy(function() {
        //     this.get('#p/:slug', function() {
        //         self.setPage("page-post");
        //     });
        //
        //     this.get('#u/:slug', function() {
        //         self.setPage("page-user");
        //         $.get("/mail", { mailId: this.params.mailId }, self.chosenMailData);
        //     });
        //
        //     this.get('', function() {
        //         self.setPage("page-home");
        //     });
        //
        // }).run();
    };


    ko.applyBindings(RootViewModel, document.getElementById('root'));
});