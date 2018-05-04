$(function () {

    var popupSize = {
        width: 780,
        height: 550
    };

    $('a._2Q0fU, a._29zpU').on('click', function (e) {

        if ($(this).hasAttribute("onclick")) {
            return false;
        }
        var
            verticalPos = Math.floor(($(window).width() - popupSize.width) / 2),
            horisontalPos = Math.floor(($(window).height() - popupSize.height) / 2);

        var popup = window.open($(this).prop('href'), 'social',
            'width=' + popupSize.width + ',height=' + popupSize.height +
            ',left=' + verticalPos + ',top=' + horisontalPos +
            ',location=0,menubar=0,toolbar=0,status=0,scrollbars=1,resizable=1');


        if ($(this).parent().hasClass('_3rM3S')) {
            $(this).parent().parent().addClass('_23ERU');
        }

        if (popup) {
            popup.focus();
            e.preventDefault();
        }
    });

    var toogleShare = function () {
        console.log("clicking");

        var sibling = $(this).siblings('._34TRY');
        var siblings = $('._34TRY');
        if (sibling.hasClass("_23ERU")) {
            siblings.addClass("_23ERU");
            sibling.removeClass("_23ERU");
        }
        else {
            siblings.addClass("_23ERU");
        }
    };

    $("._34-mC").on('click', toogleShare);

    $(window).scroll(function () {
        var fixable = $("._1YCPS");
        var fan = $("._2kQCw");

        if (fixable.length > 0) {

            if (fixable.offset().top > 100) {
                fixable.addClass("_210LR");
                fan.addClass("_45TY");
                fixable.removeClass("_2kPxQ");
            } else {
                fixable.addClass("_2kPxQ");
                fan.removeClass("_45TY");
                fixable.removeClass("_210LR");
            }

        }
    });

    var owlSettings = {
        autoWidth: true,
        loop: false,
        rewind: false,
        navRewind: false,
        dots: false,
        nav: true,
        navText: ['prev', 'next'],
        navClass: ['_1JesO', '_1JesO LmPde']
    };

    $('.owl-carousel').owlCarousel(owlSettings);
});

$(window).bind('resize', function () {
    // applyHeights();
});
