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