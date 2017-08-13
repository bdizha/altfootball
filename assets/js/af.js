$(function () {

    var popupSize = {
        width: 780,
        height: 550
    };

    $('a._2Q0fU').on('click', function (e) {
        var
            verticalPos = Math.floor(($(window).width() - popupSize.width) / 2),
            horisontalPos = Math.floor(($(window).height() - popupSize.height) / 2);

        var popup = window.open($(this).prop('href'), 'social',
            'width=' + popupSize.width + ',height=' + popupSize.height +
            ',left=' + verticalPos + ',top=' + horisontalPos +
            ',location=0,menubar=0,toolbar=0,status=0,scrollbars=1,resizable=1');

        if (popup) {
            popup.focus();
            e.preventDefault();
        }
    });
});

function setHeightFor(selector) {
    $(selector).attr("style", "");
    var $columns = $(selector);
    var maxHeight = Math.max.apply(Math, $columns.map(function () {
        return $(this).height();
    }).get());

    if ($(window).width() > 1125) {
        $(selector).attr("style", "height: " + (maxHeight + 40) + "px");
    }
}

function adjustHeight(target, reference) {
    if ($(this).width() > 1125 && $(target).height() < $(reference).height()) {
        $(reference).attr("style", "height: " + ($(target).height()) + "px");
    }
}

$(window).bind('resize', function () {
    applyHeights();
});

function applyHeights(){
    adjustHeight('._1Q_Pu', '._3VSm9');
}

$(function() {

    ko.validation.rules.pattern.message = 'Invalid.';

    ko.validation.init({
        insertMessages: true,
        decorateElement: true,
        errorMessageClass: "_1u7op",
        errorClass: '',
        errorsAsTitle: true,
        parseInputAttributes: false,
        messagesOnModified: true,
        decorateElementOnModified: true,
        decorateInputElement: true
    }, true);

    var CommentsViewModel = function(params) {
        var self = this;
        self.fileData = ko.observable({
            dataURL: ko.observable()
        });
        self.type_id = ko.observable(params.type_id);
        self.isList = ko.observable(params.is_list);
        self.level = ko.observable(params.level);
        self.comments = ko.observableArray(params.comments);
        self.image = ko.observable('');
        self.currentCommentId = ko.observable(0);
        self.root = ko.observable(params.root);
        self.newCommentText = ko.observable('');
        self.commentsCount = ko.computed(function() {
            applyHeights();
            return self.comments().length;
        });

        self.canSubmitComment = ko.computed(function() {
            return self.newCommentText().length > 0;
        });

        // callback
        self.update = function(reply) {
            var comments = ko.utils.arrayMap(self.comments(), function(comment) {
                if(comment.id === reply.type_id){
                    comment.comments.unshift(reply);
                }

                return comment;
            });

            self.comments([]);
            self.comments(comments);

            var allComments = $('._55ghi');
            allComments.removeClass('_4c7v3');

            applyHeights();
        };

        self.fileData().dataURL.subscribe(function(dataURL){
            self.image(dataURL);
        });

        self.reply = function(comment){
            console.log('#comment-' + comment.id + ' ._55ghi');

            var allComments = $('._55ghi');
            var activeComment = $('#comment-' + comment.id + ' ._55ghi');

            if(activeComment.hasClass('_4c7v3')){
                allComments.removeClass('_4c7v3');
            }
            else{
                allComments.removeClass('_4c7v3');
                activeComment.addClass('_4c7v3');
            }
        };

        self.saveComment = function(){
            var comment = {
                type_id: self.type_id(),
                content: self.newCommentText(),
                image: self.image(),
                comments: []
            };

            self.newCommentText('');

            applyHeights();

            $.ajax("/comment", {
                data: ko.toJSON(comment),
                type: "post",
                contentType: "application/json",
                success: function(comment) {
                    self.comments.unshift(ko.utils.parseJson(comment));
                }
            });
        };
    };

    ko.components.register('comments', {
        viewModel: CommentsViewModel,
        template: { element: 'comments-template' }
    });

    var ReplyFormViewModel = function(params) {
        var self = this;

        self.fileData = ko.observable({
            dataURL: ko.observable()
        });

        self.image = ko.observable();
        self.currentUser = ko.observable(params.comment);
        self.comment = ko.observable(params.comment);
        self.replyText = ko.observable('');
        self.callback = params.callback;
        self.canSubmitReply = ko.computed(function() {
            return self.replyText().length > 0;
        });

        self.cancel = function(){
            var allComments = $('._55ghi');
            allComments.removeClass('_4c7v3');
        };

        self.fileData().dataURL.subscribe(function(dataURL){
            self.image(dataURL);
        });

        self.saveReply = function(){
            var reply = {
                content: self.replyText(),
                image: self.image(),
                type: 'comment',
                type_id: self.comment().id
            };

            self.replyText('');

            $.ajax("/comment", {
                data: ko.toJSON(reply),
                type: "post",
                contentType: "application/json",
                success: function(reply) {
                    self.callback(ko.utils.parseJson(reply));
                }
            });

        };
    };

    ko.components.register('reply-form', {
        viewModel: ReplyFormViewModel,
        template: { element: 'reply-form-template' }
    });

    var FanFollowViewModel = function(params) {
        var self = this;

        self.fan = ko.observable(params.fan);

        self.isActive = ko.observable(Boolean(params.fan.is_active));
        self.isInactive = ko.observable(!Boolean(params.fan.is_active));

        self.save = function() {
            self.isActive(!self.isActive());
            self.isInactive(!self.isInactive());

            var fan = {
                requester_id: self.fan().requester_id,
                requested_id: self.fan().requested_id
            };

            $.ajax("/fan", {
                data: ko.toJSON(fan),
                type: "post",
                contentType: "application/json",
                success: function(fan) {
                }
            });
        };
    };

    var PostDribbleViewModel = function(params) {
        var self = this;

        self.dribblesCount = ko.observable(params.count);
        self.initialOpacity = ko.observable(Boolean(params.has_dribble) ? 0 : 1);
        self.selectedOpacity = ko.observable(Boolean(params.has_dribble) ? 1 : 0);
        self.type = ko.observable(params.type);
        self.typeId = ko.observable(params.type_id);

        self.save = function() {

            if(self.initialOpacity() === 1){
                self.dribblesCount(self.dribblesCount() + 1);
                self.initialOpacity(0);
                self.selectedOpacity(1);
            }
            else{
                self.dribblesCount(self.dribblesCount() - 1);
                self.initialOpacity(1);
                self.selectedOpacity(0);
            }

            var dribble = {
                type_id: self.typeId(),
                type: self.type()
            };

            $.ajax("/dribble", {
                data: ko.toJSON(dribble),
                type: "post",
                contentType: "application/json",
                success: function(dribble) {
                }
            });
        };
    };

    ko.components.register('follow', {
        viewModel: FanFollowViewModel,
        template: { element: 'follow-template' }
    });

    ko.components.register('dribbles', {
        viewModel: PostDribbleViewModel,
        template: { element: 'post-dribbles-template' }
    });
});
