$(document).ready(function () {
  $(".seacrh__link").click(function () {
    var value = $(this).attr("data-filter");
    var elem = $(".elem");
    if (value == "") {
      $(elem).show("500");
    }
    else {
      $(elem).not("." + value).hide("500");
      $(elem).filter("." + value).show("500");
    }
  });
})