/**
 * Created by batanayi on 2017/08/19.
 */


$(function () {

    var CommentsViewModel = function (params) {
        var self = this;
        self.fileData = ko.observable({
            dataURL: ko.observable()
        });

        self.currentUser = ko.observable(params.user);
        self.type_id = ko.observable(params.type_id);
        self.isList = ko.observable(params.is_list);
        self.level = ko.observable(params.level);
        self.comments = ko.isObservable(params.comments) ? params.comments : ko.observableArray(params.comments);
        self.image = ko.observable('');
        self.currentCommentId = ko.observable(0);
        self.root = ko.observable(params.root);
        self.newCommentText = ko.observable('');
        self.commentsCount = ko.computed(function () {
            return self.comments().length;
        });

        console.log(self.comments(), 'params.comments');

        self.canSubmitComment = ko.computed(function () {
            return self.newCommentText().length > 0;
        });

        self.update = function (reply) {
            var comments = ko.utils.arrayMap(self.comments(), function (comment) {
                if (comment.id === reply.type_id) {
                    comment.comments.unshift(reply);
                }

                return comment;
            });

            self.comments([]);
            self.comments(comments);

            var allComments = $('._55ghi');
            allComments.removeClass('_4c7v3');
        };

        self.fileData().dataURL.subscribe(function (dataURL) {
            self.image(dataURL);
        });

        self.reply = function (comment) {
            console.log('#comment-' + comment.id + ' ._55ghi');

            var allComments = $('._55ghi');
            var activeComment = $('#comment-' + comment.id + ' ._55ghi');

            if (activeComment.hasClass('_4c7v3')) {
                allComments.removeClass('_4c7v3');
            }
            else {
                allComments.removeClass('_4c7v3');
                activeComment.addClass('_4c7v3');
            }
        };

        self.saveComment = function () {
            var comment = {
                type_id: self.type_id(),
                content: self.newCommentText(),
                image: self.image(),
                comments: []
            };

            self.newCommentText('');

            $.ajax("/tackle", {
                data: ko.toJSON(comment),
                type: "post",
                contentType: "application/json",
                success: function (comment) {
                    self.comments.unshift(ko.utils.parseJson(comment));
                }
            });
        };
    };

    ko.components.register('comments', {
        viewModel: CommentsViewModel,
        template: {element: 'comments-template'}
    });
});