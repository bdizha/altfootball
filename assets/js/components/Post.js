/**
 * Created by batanayi on 2017/11/12
 */


$(function () {

    var PostViewModel = function (params) {
        var self = this;

        self.post = params.post;
        self.isShowing = ko.observable(false);
        self.showItem = params.show_item;
        self.type = ko.observable('post');

        self.show = function () {
            self.isShowing(true);
        };

        self.hide = function () {
            self.isShowing(false);
        };
    };

    ko.components.register('post', {
        viewModel: PostViewModel,
        template: {element: 'post-template'}
    });
});