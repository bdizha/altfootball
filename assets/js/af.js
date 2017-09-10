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

    $(window).scroll(function() {
        var fixable = $("._1YCPS");

        if(fixable.length > 0){

            if (fixable.offset().top > 100) {
                fixable.addClass("_210LR");
                fixable.removeClass("_2kPxQ");
            } else {
                fixable.addClass("_2kPxQ");
                fixable.removeClass("_210LR");
            }

        }
    });

    $('.owl-four').owlCarousel({
        loop: false,
        nav: true,
        responsive:{
            0:{
                items: 1
            },
            300:{
                items: 2
            },
            600:{
                items: 3
            },
            1000:{
                items: 4
            }
        },
        navContainerClass: '_2KkkC',
        navClass: ['_1JesO', '_1JesO LmPde']
    });


    $('.owl-three').owlCarousel({
        loop: false,
        nav: true,
        responsive:{
            0:{
                items: 1
            },
            300:{
                items: 2
            },
            600:{
                items: 3
            },
            1000:{
                items: 3
            }
        },
        navContainerClass: '_2KkkC',
        navClass: ['_1JesO', '_1JesO LmPde']
    });


    $('.owl-five').owlCarousel({
        loop: false,
        nav: true,
        responsive:{
            0:{
                items: 1
            },
            300:{
                items: 2
            },
            600:{
                items: 3
            },
            1000:{
                items: 5
            }
        },
        navContainerClass: '_2KkkC',
        navClass: ['_1JesO', '_1JesO LmPde']
    });
});

$(window).bind('resize', function () {
    // applyHeights();
});
