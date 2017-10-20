/**
 * Created by batanayi on 2017/08/19.
 */


$(function () {

    var PostsViewModel = function (params) {
        var self = this;

        self.current = ko.observable(0);
        self.posts = ko.observableArray([]);
        self.fanbase = ko.observable(params.fanbase);
        self.page = ko.observable(params.page);

        self.show = function (index, data){

            params.showItem(true);

            self.current(index);

            console.log("self.current");
            console.log(self.current());
        };

        self.fetchPosts = function () {
            var params = {
                fanbase_id: self.fanbase(),
                page: self.page()
            };

            self.page(self.page() + 2);

            $.ajax("/posts", {
                data: params,
                type: "get",
                contentType: "application/json",
                success: function (response) {
                    console.log("New posts:");

                    var posts = ko.utils.parseJson(response);
                    ko.utils.arrayForEach(posts, function (post) {
                        self.posts.push(post);
                    });

                    // investigate why this is happening and be open minded
                    // $("._34-mC").on('click', toogleShare);
                }
            });
        };

        self.fetchPosts();
    };

    ko.components.register('posts', {
        viewModel: PostsViewModel,
        template: {element: 'posts-template'}
    });
});