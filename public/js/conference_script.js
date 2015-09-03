$(document).ready(function() {
	// $('.conference-subheader').css('display', 'none');
	$('.fade').css('visibility','visible').css('display','none').fadeIn(900);
	$('.conference-header a').click(function() {
		if($('.fade').length > 0) {
			event.preventDefault();
			newLocation = this.href;
			$(".fade").animate({opacity: 0}, newpage)
		}
	});

	function newpage() {
		window.location = newLocation;
	}

	$(window).scroll(function () {
	    winHeight = $(window).height();
	    if ($(window).scrollTop() > winHeight/3) {
	        $('.conference-subheader').css('position', 'fixed');
	        $('.conference-subheader').css('width', '100%');
	        $('.conference-subheader').css('top', '0');
	        $('.conference-subheader').css('z-index', '1000');
	    } else {
	        $('.conference-subheader').css('position', 'relative');
	    }
	});
});