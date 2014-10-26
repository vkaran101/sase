// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
$(document).foundation();

// overlay the google map iframe
function overlayGoogleMaps() {
  var w = $('#gmap').width();
  var h = $('#gmap').height();

  $('.map-overlay').width(w);
  $('.map-overlay').height(h);
}

$(document).ready(function() {
  overlayGoogleMaps();
  $(window).resize(function() {
    overlayGoogleMaps();
  });

  // show or hide the scroller
  $(window).scroll(function() {
    var scrollBreakpoint = 1000;
    var fadeDelay = 300;

    if ($(this).scrollTop() > scrollBreakpoint) {
      $('#scroller').fadeIn(fadeDelay);
    } else {
      $('#scroller').fadeOut(fadeDelay);
    }
  });

  // scroll to top on click
  $('#scroller').click(function(event) {
    var scrollDelay = 500;

    event.preventDefault();
    $('html, body').animate({scrollTop: 0}, scrollDelay);
  });
});
