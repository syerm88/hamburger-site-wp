jQuery(function () {
  jQuery('.c-button').on('click', function () { 
    jQuery(this).toggleClass('is-open');
    jQuery('.l-sidebar').toggleClass('is-open');
    jQuery('.l-sidebar-bg-cover').toggleClass('is-open');
    jQuery('body').toggleClass('is-open');
    jQuery('.c-title__menu__burger').toggleClass('is-open');
  });
});

jQuery(window).on('resize', function() {
  let $windowWidth = window.innerWidth;

  if($windowWidth > 1200){
    jQuery('.c-button').removeClass('is-open');
    jQuery('.l-sidebar').removeClass('is-open');
    jQuery('.l-sidebar-bg-cover').removeClass('is-open');
    jQuery('body').removeClass('is-open');
    jQuery('.c-title__menu__burger').removeClass('is-open');    
  };
});

