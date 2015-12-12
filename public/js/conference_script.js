$(document).ready(function() {
	if($('.conference-content').length > 0) {
		// Fade Effects
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

		// Sticky navbar
		$(window).scroll(function () {
		    subheaderPos = $('.conference-header').offset().top+$('.conference-header').height();
		    if ($(window).scrollTop() > subheaderPos) {
		        $('.conference-subheader').css('position', 'fixed');
		        $('.conference-subheader').css('width', '100%');
		        $('.conference-subheader').css('top', '0');
		        $('.conference-subheader').css('z-index', '1000');
		    } else {
		        $('.conference-subheader').css('position', 'relative');
		    }
		});

		// AutoScroll
		$(".conference-subheader a[href^='#']").on('click', function(e) {
			e.preventDefault();
			var hash = this.hash;
			$('html, body').animate({scrollTop: $(hash).offset().top},
			 300, function(){
			   window.location.hash = hash;
			});
		});
	}
});