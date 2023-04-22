$(".seacrh__link").click(function (e) {
  e.preventDefault();
  $(".seacrh__link").removeClass('active');
  $(this).addClass('active');
})

