$(function() {

  var body = $(".row");

  $("[data-slide]").click(function() {
    var dataSlide = $(this).attr("data-slide");
    var next = body.scrollLeft()+(800*(dataSlide=="next"?1:-1));
    body.animate({scrollLeft:next},"750", 'swing', function() {});
  });


});
