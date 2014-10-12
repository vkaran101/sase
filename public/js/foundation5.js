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

$(window).resize(function() {
  overlayGoogleMaps();
});
overlayGoogleMaps();
