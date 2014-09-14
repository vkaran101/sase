// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
$(document).foundation();

// change the height of the #promo element to cover the viewport
function setPromoHeight() {
  var viewportHeight = $(window).height();
  var headerHeight = $('#header').outerHeight();

  var imgHeight = 220;
  var maxHeight = 900;
  var msgHeight = $('#promo-msg').outerHeight();
  var minHeight = msgHeight + imgHeight;

  var promoHeight = viewportHeight - headerHeight;
  if (promoHeight < minHeight) {
    promoHeight = minHeight;
  } else if (promoHeight > maxHeight) {
    promoHeight = maxHeight;
  }
  $('#promo').css('height', promoHeight);

  // set top margin of promo message
  var marginTop = (promoHeight - msgHeight) / 2;
  $('#promo-msg').css('margin-top', marginTop);
}

// overlay the google map iframe
function overlayGoogleMaps() {
  var w = $('#gmap').width();
  var h = $('#gmap').height();
  $('.map-overlay').width(w);
  $('.map-overlay').height(h);
}

//$(document).ready(setPromoHeight());
$(window).resize(function() {
//  setPromoHeight();
  overlayGoogleMaps();
});
overlayGoogleMaps();
