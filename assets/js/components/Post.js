/**
 * Created by batanayi on 2017/08/19.
 */


$(function () {

    var PostViewModel = function (params) {
        var self = this;

        self.post = ko.observable(params.post);
        self.isShowing = ko.observable(false);
        self.showItem = ko.observable(params.show_item);

        console.log(">>>>showCallback<<<<");
        console.log(self.showItem);

        self.showPost = function () {
            console.log(">>>>post<<<<");
            // console.log(self.post());

            self.isShowing(true);
            self.showItem(true);
        };
    };

    ko.components.register('post', {
        viewModel: PostViewModel,
        template: { element: 'post-template' }
    });
});