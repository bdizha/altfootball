/**
 * Created by batanayi on 2017/11/12
 */


$(function () {

    var PagePostViewModel = function (params) {
        var self = this;

        self.post = params.post;
        self.isShowing = ko.observable(false);

        console.log("post post", params.post());

        self.show = function () {
            self.isShowing(true);
            self.showItem(true);
        };

        self.hide = function () {
            self.isShowing(false);
            self.showItem(false);
        };

        self.init = function () {
            console.log(params.post().slug, "posting");
            var url = "/p/" + params.post().slug;
            window.history.pushState({}, "", url);
        }();
    };

    ko.components.register('page-post', {
        viewModel: PagePostViewModel,
        template: {element: 'page-post-template'}
    });
});