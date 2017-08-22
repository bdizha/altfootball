/**
 * Created by batanayi on 2017/08/19.
 */


$(function () {

    var FollowViewModel = function (params) {
        var self = this;

        self.follower = ko.observable(params.follower);
        self.classes = ko.observable({
            items: 'zrN-a _2P1mw _1MC-v _1h78h',
            fanbase: '_2qvTq _1MC-v _1h78h _2yZ_n _1odcZ',
            user: 'b9xa- _8GOLs _1h78h'
        });
        self.isActive = ko.observable(Boolean(params.follower.is_active));
        self.isInactive = ko.observable(!Boolean(params.follower.is_active));
        self.activeText = ko.observable(params.active_text);
        self.inactiveText = ko.observable(params.inactive_text);
        self.cssClass = ko.computed(function(){
            return self.classes()[params.class];
        });
        self.isList = ko.computed(function(){
            return params.class === 'items';
        });

        self.isUser = ko.computed(function(){
            return params.class === 'user' && self.isInactive();
        });

        self.save = function () {
            self.isActive(!self.isActive());
            self.isInactive(!self.isInactive());

            var follower = {
                user_id: self.follower().user_id,
                followable_id: self.follower().followable_id,
                followable_type: self.follower().followable_type
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