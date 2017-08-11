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

    var FanFollowViewModel = function(params) {
        var self = this;

        self.fan = ko.observable(params.fan);

        self.isActive = ko.observable(Boolean(params.fan.is_active));
        self.isInactive = ko.observable(!Boolean(params.fan.is_active));

        self.save = function() {

            console.log(self.isActive() + ">>>>");
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

    ko.components.register('follow', {
        viewModel: FanFollowViewModel,
        template: { element: 'follow-template' }
    });
});

//# sourceMappingURL=af.js.map
