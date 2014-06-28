// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
$(document).foundation();

// change the height of the #promo element to cover the viewport
function setPromoHeight() {
  var viewportHeight = $(window).height();
  var headerHeight = $('#header').outerHeight();

  var imgHeight = 220;
  var msgHeight = $('#promo-msg').outerHeight();
  var minHeight = msgHeight + imgHeight;

  var promoHeight = viewportHeight - headerHeight;
  if (promoHeight < minHeight) {
    promoHeight = minHeight;
  }
  $('#promo').css('height', promoHeight);

  // set top margin of promo message
  var marginTop = (promoHeight - msgHeight) / 2;
  $('#promo-msg').css('margin-top', marginTop);
}

$(document).ready(setPromoHeight());
$(window).resize(function() {
  setPromoHeight();
});
