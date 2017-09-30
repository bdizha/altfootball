$(function () {

    var popupSize = {
        width: 780,
        height: 550
    };

    $('a._2Q0fU, a._29zpU').on('click', function (e) {
        var
            verticalPos = Math.floor(($(window).width() - popupSize.width) / 2),
            horisontalPos = Math.floor(($(window).height() - popupSize.height) / 2);

        var popup = window.open($(this).prop('href'), 'social',
            'width=' + popupSize.width + ',height=' + popupSize.height +
            ',left=' + verticalPos + ',top=' + horisontalPos +
            ',location=0,menubar=0,toolbar=0,status=0,scrollbars=1,resizable=1');


        if($(this).parent().hasClass('_3rM3S')){
            $(this).parent().parent().addClass('_23ERU');
        }

        if (popup) {
            popup.focus();
            e.preventDefault();
        }
    });

    var toogleShare = function(){
        console.log("clicking");

        var sibling = $(this).siblings('._34TRY');
        var siblings = $('._34TRY');
        if(sibling.hasClass("_23ERU")){
            siblings.addClass("_23ERU");
            sibling.removeClass("_23ERU");
        }
        else{
            siblings.addClass("_23ERU");
        }
    };

    $("._34-mC").on('click', toogleShare);

    $(window).scroll(function() {
        var fixable = $("._1YCPS");
        var fan = $("._2kQCw");

        if(fixable.length > 0){

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
        autoWidth: true,
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
