var $ = jQuery;
$(function() {
    var score = Math.floor(parseInt($(".score").text())/10)*10;
    $(".score").addClass("score_"+score);

    $(".suggest").each(function() {
        $(this).css("background-image","url("+$(this).attr("data_src")+")");
    });

    $("form#reviewForm .vote").click(function() {
        $("form#reviewForm .vote.selected").removeClass("selected");
        $(this).addClass("selected");
        $("form#reviewForm input[type='hidden']").val($("form#reviewForm .vote.selected").attr("value"));
    });

});