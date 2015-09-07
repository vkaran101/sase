// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
$(document).foundation();

$(document).ready(function() {
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
