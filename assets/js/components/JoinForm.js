/**
 * Created by batanayi on 2017/08/19.
 */


$(function () {

    var JoinFormViewModel = function (params) {

        self = this;

        self.email = ko.observable('').extend({
            required: {
                message: 'Email is required.'
            },
            email: {
                message: 'Email is invalid.'
            }
        });

        self.token = ko.observable(params._token);

        self.focusedEmail = ko.observable(false);

        self.isSubmitted = ko.observable(false);

        self.canGo = ko.observable(true);

        self.showAllMessages = function () {
            console.log("showAllMessages");
            JoinFormViewModel.errors.showAllMessages();

            var $this = $("._34JK span._1u7op");

            console.log(self.email.length > 0);
            console.log(!$this.is(':visible') + ">>>>");

            self.canGo(!$this.is(':visible'));
        };

        self.focusEmail = function () {
            self.focusedEmail(true);
        };

        self.blurEmail = function () {
            if (self.email.length === 0) {
                self.focusedEmail(false);
            }

            self.showAllMessages();

            console.log(JoinFormViewModel.errors().length);
            console.log("something...");
        };

        self.proceed = function () {
            self.showAllMessages();

            if (self.canGo()) {

                self.canGo(false);

                $.ajax("/register", {
                    data: ko.toJSON({
                        email: self.email(),
                        _token: self.token()
                    }),
                    type: "post",
                    contentType: "application/json",
                    success: function (response) {
                        self.isSubmitted(true);

                        self.canGo(true);
                        console.log(response);
                    }
                });

            }
        }
    };

    JoinFormViewModel.errors = ko.validation.group(JoinFormViewModel);

    ko.components.register('join-form', {
        viewModel: JoinFormViewModel,
        template: {element: 'join-form-template'}
    });
});