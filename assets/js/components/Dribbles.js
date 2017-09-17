/**
 * Created by batanayi on 2017/08/19.
 */


$(function () {

    var DribbleViewModel = function (params) {
        var self = this;

        console.log("DribbleViewModel::params");
        console.log(params.has_dribble == true);

        self.dribblesCount = ko.observable(params.count);
        self.hasDribble = ko.observable(params.has_dribble == true);
        self.type = ko.observable(params.type);
        self.typeId = ko.observable(params.type_id);

        self.save = function () {

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
        template: {element: 'post-dribbles-template'}
    });
});