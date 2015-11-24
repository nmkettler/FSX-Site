$(document).scroll(function() {
  var dHeight = $(this).height()-$(window).height();
  if (dHeight >= $(this).scrollTop()) {
    $('.navbar-default').css('background', 'rgba(96,96,96,' + $(this).scrollTop() / dHeight + ')');
  }
});

// Add slideDown animation to dropdown
$('.dropdown').on('show.bs.dropdown', function(e){
  $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
});

// Add slideUp animation to dropdown
$('.dropdown').on('hide.bs.dropdown', function(e){
  $(this).find('.dropdown-menu').first().stop(true, true).slideUp();
});

