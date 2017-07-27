$(function () {

    setHeightFor("._3VSm9, ._1Q_Pu");

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

// Reinitialize the gallery on browser resize.
var resizeTimer = null;
$(window).bind('resize', function () {
    setHeightFor("._3VSm9, ._1Q_Pu");
});

$(function() {

    ko.validation.rules.pattern.message = 'Invalid.';

    ko.validation.init({
        registerExtenders: true,
        messagesOnModified: true,
        insertMessages: true,
        parseInputAttributes: true,
        messageTemplate: null,
        errorMessageClass: "_1u7op"
    }, true);

    var viewJoinModel = {
        shouldShowJoinPopup: ko.observable(false),
        nickname: ko.observable('').extend({ required: true }),
        email: ko.observable('').extend({ email: true }),
        canRegisterContinue: ko.observable(false),
        showJoinPopup : function() {
            this.shouldShowJoinPopup(true);
        },
        hideJoinPopup : function() {
            this.shouldShowJoinPopup(false);
        },
        enableRegisterContinue: function(){
            this.canRegisterContinue(viewJoinModel.errors().length === 0);
        }
    };

    viewJoinModel.errors = ko.validation.group(viewJoinModel);

    ko.applyBindings(viewJoinModel);
});

//# sourceMappingURL=af.js.map
