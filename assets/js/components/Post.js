/**
 * Created by batanayi on 2017/11/12
 */


$(function () {

    var PostViewModel = function (params) {
        var self = this;

        self.post = ko.observable(params.post);
        self.isShowing = ko.observable(false);
        self.showItem = params.show_item;

        self.show = function () {
            self.isShowing(true);
            self.showItem(true);
        };

        self.hide = function () {
            self.isShowing(false);
            self.showItem(false);
        };
    };

    ko.components.register('post', {
        viewModel: PostViewModel,
        template: { element: 'post-template' }
    });
});