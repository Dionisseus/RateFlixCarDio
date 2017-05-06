var $ = jQuery;
$(function() {

    $(".movie").each(function() {
        $(this).css("background-image","url("+$.trim($(this).attr("src"))+")");
    });

    $(".controls").click(function() {
        var $parent = $(this).parent();
        var container = $parent.find(".sub_car");
        var controls = $parent.find(".controls");
        var scrollLeft = container.scrollLeft();
        controls.addClass("disabled");
        var add = $(this).hasClass("left")?-700:700;
        container.stop().animate({scrollLeft:scrollLeft+add}, '200', 'swing', function() {
            controls.removeClass("disabled");
        });
    });


});
