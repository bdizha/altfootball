/**
 * Created by batanayi on 2017/08/19.
 */


$(function () {

    var FollowViewModel = function (params) {
        var self = this;

        console.log(params.is_list + ">>>>")

        self.follower = ko.observable(params.follower);
        self.isItem = ko.observable(Boolean(params.is_item));
        self.isList = ko.observable(Boolean(params.is_list));
        self.isActive = ko.observable(Boolean(params.follower.is_active));
        self.isInactive = ko.observable(!Boolean(params.follower.is_active));
        self.activeText = ko.observable(params.active_text);
        self.inactiveText = ko.observable(params.inactive_text);

        self.save = function () {
            self.isActive(!self.isActive());
            self.isInactive(!self.isInactive());

            var follower = {
                user_id: self.follower().user_id,
                type_id: self.follower().type_id,
                type: self.follower().type
            };

            $.ajax("/follower", {
                data: ko.toJSON(follower),
                type: "post",
                contentType: "application/json",
                success: function (follower) {
                }
            });
        };
    };

    ko.components.register('follow', {
        viewModel: FollowViewModel,
        template: {element: 'follow-template'}
    });
});