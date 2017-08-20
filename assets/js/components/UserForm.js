/**
 * Created by batanayi on 2017/08/19.
 */


$(function () {

    var UserFormViewModel = function (params) {
        self.firstName = ko.observable(params.first_name ? params.first_name : '').extend({
            required: {
                message: 'First name is required.'
            }
        });
        self.lastName = ko.observable(params.last_name ? params.last_name : '').extend({
            required: {
                message: 'Last name is required.'
            }
        });
        self.name = function () {
            return self.firstName() + " " + self.lastName();
        };
        self.id = ko.observable(params.id ? params.id : '');
        self.bio = ko.observable(params.bio ? params.bio : '');
        self.website = ko.observable(params.website ? params.website : '');
        self.canProfileEdit = ko.observable(false);
        self.focusedFirstName = ko.observable(false);
        self.focusedLastName = ko.observable(false);
        self.focusedBio = ko.observable(false);
        self.focusedWebsite = ko.observable(false);
        self.enabled = ko.observable(true);
        self.canSave = function () {
            return UserFormViewModel.errors().length === 0;
        };
        self.focusFirstName = function () {
            self.focusedFirstName(true);
        };
        self.focusLastName = function () {
            self.focusedLastName(true);
        };
        self.focusBio = function () {
            self.focusedBio(true);
        };
        self.focusWebsite = function () {
            self.focusedWebsite(true);
        };
        self.blurFirstName = function () {
            if (self.firstName().length === 0) {
                self.focusedFirstName(false);
            }
            self.toggleErrors();
            self.showAllMessages();
        };
        self.blurLastName = function () {
            if (self.lastName().length === 0) {
                self.focusedLastName(false);
            }
            self.toggleErrors();
            self.showAllMessages();
        };
        self.blurBio = function () {
            if (self.bio().length === 0) {
                self.focusedBio(false);
            }
        };
        self.blurWebsite = function () {
            if (self.website().length === 0) {
                self.focusedWebsite(false);
            }
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
        self.showAllMessages = function () {
            UserFormViewModel.errors.showAllMessages();
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
        self.submit = function () {
            UserFormViewModel.errors.showAllMessages();

            if (self.canSave()) {
                self.enabled(true);

                var data = JSON.stringify(
                    {
                        first_name: self.firstName(),
                        last_name: self.lastName(),
                        bio: self.bio(),
                        website: self.website(),
                        _method: "PATCH"
                    });

                $.ajax({
                    url: "/profile/" + self.id(),
                    data: data,
                    type: 'PATCH',
                    contentType: 'application/json',
                    success: function () {
                        self.closeEditForm();
                        self.enabled(false);
                    }
                });
            }
        }
    };

    UserFormViewModel.errors = ko.validation.group(UserFormViewModel);
    //
    // if (UserFormViewModel.firstName().length > 0) {
    //     UserFormViewModel.focusFirstName();
    //     UserFormViewModel.blurFirstName();
    // }
    //
    // if (UserFormViewModel.lastName().length > 0) {
    //     UserFormViewModel.focusLastName();
    //     UserFormViewModel.blurLastName();
    // }
    //
    // if (UserFormViewModel.bio().length > 0) {
    //     UserFormViewModel.focusBio();
    // }
    //
    // if (UserFormViewModel.website().length > 0) {
    //     UserFormViewModel.focusWebsite();
    // }

    ko.components.register('user-form', {
        viewModel: UserFormViewModel,
        template: {element: 'user-form-template'}
    });
});