$(document).ready(function () {
  $('.mobile__menu').click(function () {
    $('.nav__list').css('display', 'inline-block')
  }),
    $('.mobile__menu').click(function () {
      $('.close').css('display', 'inline-block')
    }),
    $('.close').click(function () {
      $('.nav__list').css('display', 'none')
      $('.close').css('display', 'none')
    })
})

