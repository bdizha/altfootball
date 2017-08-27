/**
 * Created by batanayi on 2017/08/19.
 */


$(function () {

    var JoinFormViewModel = function (params) {

        self = this;

        self.email = ko.observable().extend({
            required: {
                message: 'Email is required.'
            }
        }).extend({
            email: {
                message: 'Email is invalid.'
            }
        });

        self.focusedEmail = ko.observable(false);

        self.canGo = ko.computed(function () {

            return true;
            // return $("._2Kdch").hasClass("p5bDW");
        });

        self.showAllMessages = function () {
            console.log("showAllMessages");
            JoinFormViewModel.errors().showAllMessages();
        };

        self.focusEmail = function () {
            self.focusedEmail(true);
        };

        self.blurEmail = function () {
            if (self.email.length === 0) {
                self.focusedEmail(false);
            }

            // console.log(JoinFormViewModel.errors());

            console.log("testing...");

            self.toggleErrors();
            self.showAllMessages();
        };

        self.toggleErrors = function () {
            $("._2Kdch").each(function () {
                var $this = $(this);

                if ($this.find('span._1u7op').is(':visible')) {
                    $this.addClass('p5bDW');
                }
                else {
                    $this.removeClass('p5bDW');
                }
            });
        };

        self.proceed = function () {
            self.showAllMessages();

            if (self.canGo) {
                $.ajax("/register", {
                    data: ko.toJSON({
                        email: self.email()
                    }),
                    type: "post",
                    contentType: "application/json",
                    success: function (response) {
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