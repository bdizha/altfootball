/**
 * Created by batanayi on 2018/03/04
 */


$(function () {

    var UserViewModel = function (params) {
        var self = this;

        self.user = params.user;
        self.published_at = params.published_at;
        self.isShowing = ko.observable(false);

        self.show = function () {
            self.isShowing(true);
        };

        self.hide = function () {
            self.isShowing(false);
        };
    };

    ko.components.register('user', {
        viewModel: UserViewModel,
        template: {element: 'user-template'}
    });
});