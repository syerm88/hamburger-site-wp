$(function () {
  $('.c-button').on('click', function () { 
    $(this).toggleClass('is-open');
    $('.l-sidebar').toggleClass('is-open');
    $('.l-sidebar-bg-cover').toggleClass('is-open');
    $('body').toggleClass('is-open');
    $('.c-title__menu__burger').toggleClass('is-open');
  });
});

$(window).on('resize', function() {
  let $windowWidth = window.innerWidth;

  if($windowWidth > 1200){
    $('.c-button').removeClass('is-open');
    $('.l-sidebar').removeClass('is-open');
    $('.l-sidebar-bg-cover').removeClass('is-open');
    $('body').removeClass('is-open');
    $('.c-title__menu__burger').removeClass('is-open');    
  };
});

