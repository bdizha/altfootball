/**
 * Created by batanayi on 2017/08/19.
 */


$(function () {

    var DribbleViewModel = function (params) {
        var self = this;

        self.dribblesCount = ko.observable(params.count);
        self.hasDribble = ko.observable(Boolean(params.has_dribble));
        self.type = ko.observable(params.type);
        self.typeId = ko.observable(params.type_id);

        self.classId = ko.computed(function(){
            return self.type() + "-" + self.typeId();
        });

        self.save = function () {

            if(new RootViewModel().checkAuth()){

            }

            if(self.hasDribble()){
                self.dribblesCount(self.dribblesCount() - 1);
                $("." + self.classId()).removeClass("_35GH");
            }
            else{
                $("." + self.classId()).addClass("_35GH");
                self.dribblesCount(self.dribblesCount() + 1);
            }

            $("." + self.classId() + " ._34IO").html(self.dribblesCount());


            self.hasDribble(!self.hasDribble());

            var dribble = {
                type_id: self.typeId(),
                type: self.type()
            };

            $.ajax("/dribble", {
                data: ko.toJSON(dribble),
                type: "post",
                contentType: "application/json",
                success: function (dribble) {
                }
            });
        };
    };

    ko.components.register('dribbles', {
        viewModel: DribbleViewModel,
        template: {element: 'dribbles-template'}
    });
});
/**
 * Created by batanayi on 2017/08/19.
 */


$(function () {

    var FanbaseFormViewModel = function (params) {
        var self = this;
        self.id = ko.observable(params.id ? params.id : '');
        self.image = ko.observable(params.image ? params.image : '');
        self.cover = ko.observable(params.cover ? params.cover : '');
        self.name = ko.observable(params.name ? params.name : '').extend({
            required: {
                message: 'Name is required.'
            }
        });
        self.stamp = ko.observable(params.stamp ? params.stamp : '').extend({
            required: {
                message: 'Stamp is required.'
            }
        });
        self.description = ko.observable(params.description ? params.description : '');
        self.access = ko.observable(params.access ? params.access : 'public');

        self.nameLimit = ko.computed(function () {
            var diff = 24 - self.name().length;
            if(diff > 0){
                return diff;
            }
            return 0;
        });
        self.stampLimit = ko.computed(function () {
            var diff = 3 - self.stamp().length;
            if(diff > 0){
                return diff;
            }
            return 0;
        });
        self.descriptionLimit = ko.computed(function () {
            var diff = 80 - self.description().length;
            if(diff > 0){
                return diff;
            }
            return 0;
        });

        self.imageFileData = ko.observable({
            dataURL: ko.observable(params.image ? params.thumb_x : '')
        });

        self.coverFileData = ko.observable({
            dataURL: ko.observable(params.cover ? params.cover_x : '')
        });

        self.imageFileData().dataURL.subscribe(function (dataURL) {
            self.image(dataURL);
        });

        self.coverFileData().dataURL.subscribe(function (dataURL) {
            self.cover(dataURL);
        });
        self.focusedName = ko.observable(!!params.name);
        self.focusedStamp = ko.observable(!!params.stamp);
        self.focusedDescription = ko.observable(!!params.description);

        self.focusName = function () {
            self.focusedName(true);
        };
        self.focusStamp = function () {
            self.focusedStamp(true);
        };
        self.focusDescription = function () {
            self.focusedDescription(true);
        };
        self.blurName = function () {
            if (self.name().length === 0) {
                self.focusedName(false);
            }
            self.toggleErrors();
            self.showAllMessages();
        };
        self.blurStamp = function () {
            if (self.stamp().length === 0) {
                self.focusedStamp(false);
            }
            self.toggleErrors();
            self.showAllMessages();
        };
        self.blurDescription = function () {
            if (self.description().length === 0) {
                self.focusedDescription(false);
            }
            self.toggleErrors();
            self.showAllMessages();
        };
        self.keyupName = function () {
            return self.nameLimit() > 0;
        };
        self.keyupStamp = function () {
            return self.stampLimit() > 0;
        };
        self.keyupDescription = function () {
            return self.descriptionLimit() > 0;
        };
        self.showAllMessages = function () {
            FanbaseFormViewModel.errors.showAllMessages();
        };
        self.toggleErrors = function () {
            $("._2Kdch").each(function () {
                var $this = $(this);

                if ($this.find('span._1u7op').is(':visible')) {
                    $this.addClass('p5bDW');
                }
                else {
                    $this.removeClass('p5bDW');
                }
            });
        };

        self.canSubmit = ko.computed(function () {
            return FanbaseFormViewModel.errors().length === 0;
        });

        self.saveFanbase = function () {

            var fanbase = {
                image: self.image(),
                cover: self.cover(),
                name: self.name(),
                stamp: self.stamp(),
                description: self.description(),
                access: self.access(),
                id: self.id()
            };

            $.ajax("/fanbase", {
                data: ko.toJSON(fanbase),
                type: "post",
                contentType: "application/json",
                success: function (f) {
                    var fanbase = ko.utils.parseJson(f);
                    window.location = '/f/' + fanbase.slug;
                }
            });

        };
    };

    FanbaseFormViewModel.errors = ko.validation.group(FanbaseFormViewModel);

    ko.components.register('fanbase-form', {
        viewModel: FanbaseFormViewModel,
        template: {element: 'fanbase-form-template'}
    });
});
/**
 * Created by batanayi on 2017/08/19.
 */


$(function () {

    var FollowViewModel = function (params) {
        var self = this;

        self.follower = ko.observable(params.follower);
        self.classes = ko.observable({
            items: 'zrN-a _2P1mw _1MC-v',
            fanbase: 'FYAkp _2qvTq _1MC-v _2yZ_n _8eFus',
            user: 'b9xa- _8GOLs'
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
/**
 * Created by batanayi on 2017/08/19.
 */


$(function () {

    var JoinFormViewModel = function (params) {

        self = this;

        self.email = ko.observable('').extend({
            required: {
                message: 'Email is required.'
            },
            email: {
                message: 'Email is invalid.'
            }
        });

        self.token = ko.observable(params._token);

        self.focusedEmail = ko.observable(false);

        self.isSubmitted = ko.observable(false);

        self.canGo = ko.observable(true);

        self.errors = ko.validation.group(self);

        self.showAllMessages = function () {
            self.errors.showAllMessages(true);

            var $this = $("._34JK span._1u7op");
            self.canGo(!$this.is(':visible'));
        };

        self.focusEmail = function () {
            self.focusedEmail(true);
        };

        self.blurEmail = function () {
            if (self.email.length === 0) {
                self.focusedEmail(false);
            }

            self.showAllMessages(true);
        };

        self.proceed = function () {

            if (self.email().length === 0) {
                self.canGo(false);
                return false;
            }

            console.log("testing...");

            self.isSubmitted(true);

            self.showAllMessages();

            if (self.canGo()) {

                self.canGo(false);

                $.ajax("/register", {
                    data: ko.toJSON({
                        email: self.email(),
                        _token: self.token()
                    }),
                    type: "post",
                    contentType: "application/json",
                    success: function (response) {
                        self.canGo(true);
                        console.log(response);
                    }
                });
            }
        }
    };

    ko.components.register('join-form', {
        viewModel: JoinFormViewModel,
        template: {element: 'join-form-template'}
    });
});
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

        self.fetchPosts = function () {
            var params = {
                fanbase_id: self.fanbase(),
                page: self.page()
            };

            self.page(self.page() + 1);

            $.ajax("/posts", {
                data: params,
                type: "get",
                contentType: "application/json",
                success: function (response) {

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
        self.currentUser = ko.observable(params.user);
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
/**
 * Created by batanayi on 2017/08/19.
 */


$(function () {

    var TermsViewModel = function(){
        self = this;

        self.selected = ko.observable('');
        self.select = function(section){
            if(self.selected() === section){
                self.clear();
            }
            else{
                self.selected(section);
            }
        };

        self.clear = function(){
            self.selected('');
        };
    };

    ko.components.register('terms', {
        viewModel: TermsViewModel,
        template: {element: 'terms-template'}
    });
});
/**
 * Created by batanayi on 2018/03/04
 */


$(function () {

    var UserViewModel = function (params) {
        var self = this;

        self.user = params.user;
        self.published_at = params.published_at;
        self.isShowing = ko.observable(false);

        self.show = function () {
            self.isShowing(true);
        };

        self.hide = function () {
            self.isShowing(false);
        };
    };

    ko.components.register('user', {
        viewModel: UserViewModel,
        template: {element: 'user-template'}
    });
});
/**
 * Created by batanayi on 2017/08/19.
 */


$(function () {

    var UserFormViewModel = function (params) {
        self.firstName = ko.observable(params.first_name ? params.first_name : '').extend({
            required: {
                message: 'First name is required.'
            }
        });
        self.lastName = ko.observable(params.last_name ? params.last_name : '').extend({
            required: {
                message: 'Last name is required.'
            }
        });
        self.name = function () {
            return self.firstName() + " " + self.lastName();
        };
        self.id = ko.observable(params.id ? params.id : '');
        self.image = ko.observable(params.image ? params.image : '');
        self.bio = ko.observable(params.bio ? params.bio : '');
        self.website = ko.observable(params.website ? params.website : '');
        self.canProfileEdit = ko.observable(false);
        self.focusedFirstName = ko.observable(false);
        self.focusedLastName = ko.observable(false);
        self.focusedBio = ko.observable(false);
        self.focusedWebsite = ko.observable(false);
        self.enabled = ko.observable(true);

        self.imageFileData = ko.observable({
            dataURL: ko.observable(params.image ? params.thumb_x : '')
        });

        self.imageFileData().dataURL.subscribe(function (dataURL) {
            self.image(dataURL);
        });

        self.canSave = function () {
            return UserFormViewModel.errors().length === 0;
        };
        self.focusFirstName = function () {
            self.focusedFirstName(true);
        };
        self.focusLastName = function () {
            self.focusedLastName(true);
        };
        self.focusBio = function () {
            self.focusedBio(true);
        };
        self.focusWebsite = function () {
            self.focusedWebsite(true);
        };
        self.blurFirstName = function () {
            if (self.firstName().length === 0) {
                self.focusedFirstName(false);
            }
            self.toggleErrors();
            self.showAllMessages();
        };
        self.blurLastName = function () {
            if (self.lastName().length === 0) {
                self.focusedLastName(false);
            }
            self.toggleErrors();
            self.showAllMessages();
        };
        self.blurBio = function () {
            if (self.bio().length === 0) {
                self.focusedBio(false);
            }
        };
        self.blurWebsite = function () {
            if (self.website().length === 0) {
                self.focusedWebsite(false);
            }
        };
        self.openSettingsForm = function () {
            self.showSettingsForm(!self.showSettingsForm());
        };
        self.closeSettingsForm = function () {
            self.showSettingsForm(false);
        };
        self.openUserForm = function () {
            self.showSettingsForm(false);
            self.showUserForm(!self.showUserForm());
        };
        self.closeEditForm = function () {
            self.showUserForm(false);
        };
        self.showAllMessages = function () {
            UserFormViewModel.errors.showAllMessages();
        };
        self.toggleErrors = function () {
            $("._2Kdch").each(function () {
                var $this = $(this);

                if ($this.find('span._1u7op').is(':visible')) {
                    $this.addClass('p5bDW');
                }
                else {
                    $this.removeClass('p5bDW');
                }
            });
        };
        self.submit = function () {
            UserFormViewModel.errors.showAllMessages();

            if (self.canSave()) {
                self.enabled(false);

                var data = JSON.stringify(
                    {
                        first_name: self.firstName(),
                        last_name: self.lastName(),
                        image: self.image(),
                        bio: self.bio(),
                        website: self.website(),
                        _method: "PATCH"
                    });

                $.ajax({
                    url: "/profile/" + self.id(),
                    data: data,
                    type: 'PATCH',
                    contentType: 'application/json',
                    success: function (u) {
                        self.closeEditForm();
                        self.enabled(true);
                        var user = ko.utils.parseJson(u);
                        window.location = '/u/' + user.slug;
                    }
                });
            }
        };

        if (self.firstName().length > 0) {
            self.focusFirstName();
            self.blurFirstName();
        }

        if (self.lastName().length > 0) {
            self.focusLastName();
            self.blurLastName();
        }

        if (self.bio().length > 0) {
            self.focusBio();
        }

        if (self.website().length > 0) {
            self.focusWebsite();
        }
    };

    UserFormViewModel.errors = ko.validation.group(UserFormViewModel);

    ko.components.register('user-form', {
        viewModel: UserFormViewModel,
        template: {element: 'user-form-template'}
    });
});
//# sourceMappingURL=ko-components.js.map
