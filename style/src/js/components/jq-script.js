import $ from "jquery";
window.$ = window.jQuery = require('jquery');
let fancybox = require('@fancyapps/fancybox');

$(".burger").click(function () {
  $(".burger").toggleClass("burger--active");
  $(".nav").slideToggle(500);
});


$(".nav__link--drop").click(() => {
  event.preventDefault();
})

if ($(window).width() < 960) {
  $(".nav__link--drop").click((e) => {
    $(e.target).next().slideToggle(300)
  })
}

$(".modal-btn").on('click', () => {
  $.fancybox.open({
    src  : '#modal',
    type : 'inline',
    opts : {
      smallBtn: true
    }
  });
});

