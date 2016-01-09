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
		    subheaderPos = $('.conference-header').offset().top+$('.conference-header').height()-30;
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
		$(":not(.accordion-navigation) a[href^='#']").on('click', function(e) {
			e.preventDefault();
			var hash = this.hash;
			var offs = 0;

			subheaderPos = $('.conference-header').offset().top+$('.conference-header').height() - 30;
		    if ($(window).scrollTop() > subheaderPos) {
				offs = $('.conference-header').height();
			}
			if($(hash).offset()) {
				$('html, body').animate({scrollTop: $(hash).offset().top - offs},
				 300, function() {
					window.location.hash = hash;
					$('html, body').animate({scrollTop: $(hash).offset().top - offs},
					 300, function(){
					   window.location.hash = hash;
					});
				});
			}
		});

		$(function() {
		    $("#committee .pic img")
		        .mouseover(function() { 
		            $(this).attr("src", $(this).attr("src").substring(0, $(this).attr("src").length-5) 
		            	+ "2.jpg");
		        })
		        .mouseout(function() {
		            $(this).attr("src", $(this).attr("src").substring(0, $(this).attr("src").length-5)
		             + "1.jpg");
		        });
		});

		$('.table-collapse').click(function(){
    		$(this).nextUntil('tr.table-collapse-stop').slideToggle();
		});
	}
});