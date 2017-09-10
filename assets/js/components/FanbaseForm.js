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