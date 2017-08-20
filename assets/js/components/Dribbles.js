/**
 * Created by batanayi on 2017/08/19.
 */


$(function () {

    var DribbleViewModel = function (params) {
        var self = this;

        self.dribblesCount = ko.observable(params.count);
        self.initialOpacity = ko.observable(Boolean(params.has_dribble) ? 0 : 1);
        self.selectedOpacity = ko.observable(Boolean(params.has_dribble) ? 1 : 0);
        self.type = ko.observable(params.type);
        self.typeId = ko.observable(params.type_id);

        self.save = function () {

            if (self.initialOpacity() === 1) {
                self.dribblesCount(self.dribblesCount() + 1);
                self.initialOpacity(0);
                self.selectedOpacity(1);
            }
            else {
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
                success: function (dribble) {
                }
            });
        };
    };

    ko.components.register('dribbles', {
        viewModel: DribbleViewModel,
        template: {element: 'post-dribbles-template'}
    });
});