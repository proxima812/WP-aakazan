$(document).ready(function () {
  $(window).scroll(function () {
    if ($(this).scrollTop() > 0) {
      $('.scrollUp').fadeIn();
    } else {
      $('.scrollUp').fadeOut();
    }
  });
  // $('.scrollUp').click(function () {
  //   $('body,html').animate({
  //     scrollTop: 0
  //   }, 400);
  //   return false;
  // });
});