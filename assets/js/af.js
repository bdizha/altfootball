$(function() {
    console.log("testing...");
    setHeightFor("._3VSm9, ._1Q_Pu");
});

function setHeightFor(selector) {
    $(selector).attr("style", "");
    var $columns = $(selector);
    var maxHeight = Math.max.apply(Math, $columns.map(function () {
        return $(this).height();
    }).get());

    if($(window).width() > 1125){
        $(selector).attr("style", "height: " + (maxHeight + 40) + "px");
    }
}

// Reinitialize the gallery on browser resize.
var resizeTimer = null;
$(window).bind('resize', function() {
    setHeightFor("._3VSm9, ._1Q_Pu");
});
