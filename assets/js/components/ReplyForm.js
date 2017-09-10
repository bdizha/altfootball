/**
 * Created by batanayi on 2017/08/19.
 */


$(function () {

    var ReplyFormViewModel = function (params) {
        var self = this;

        self.fileData = ko.observable({
            dataURL: ko.observable()
        });

        self.image = ko.observable();
        self.currentUser = ko.observable(window.currentUser);
        self.comment = ko.observable(params.comment);
        self.replyText = ko.observable('');
        self.callback = params.callback;
        self.canSubmitReply = ko.computed(function () {
            return self.replyText().length > 0;
        });

        self.cancel = function () {
            var allComments = $('._55ghi');
            allComments.removeClass('_4c7v3');
        };

        self.fileData().dataURL.subscribe(function (dataURL) {
            self.image(dataURL);
        });

        self.saveReply = function () {
            var reply = {
                content: self.replyText(),
                image: self.image(),
                type: 'comment',
                type_id: self.comment().id
            };

            self.replyText('');

            $.ajax("/tackle", {
                data: ko.toJSON(reply),
                type: "post",
                contentType: "application/json",
                success: function (reply) {
                    self.callback(ko.utils.parseJson(reply));
                }
            });

        };
    };

    ko.components.register('reply-form', {
        viewModel: ReplyFormViewModel,
        template: {element: 'reply-form-template'}
    });
});