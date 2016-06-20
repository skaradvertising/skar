jQuery(document).ready(function($){
	
	// click animation for green arrow button that turn into x's on click
	$('.arrow-icon-selector').click(function(){
		$(this).closest('.service').find('.arrow-icon').toggleClass('is-clicked');
	});

// scroll to top arrow controller
	$(window).scroll(function(){
		if ($(this).scrollTop() > $(window).height()) {
			$('.return-to-top').fadeIn();
		} else {
			$('.return-to-top').fadeOut();
		}
	});

	$('.return-to-top').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});

	// Function for adjusting font size in fixed height sections with no overflow-y scrolling
	function adjustHeights(elem) {
		var fontstep = 2;
		if ($(elem).height()>$(elem).parent().height() || $(elem).width()>$(elem).parent().width()) {
	    	$(elem).css('font-size',(($(elem).css('font-size').substr(0,2)-fontstep)) + 'px');
	    	adjustHeights(elem);
		}
	}

	adjustHeights('.single-campaign-container .single-campaign-wrapper .campaign-label .campaign-title h1 a');

// fullscreen video player that scales height and width correctly at all screen widths
	if ($('body').hasClass('frontend')) {
		$(".campaign-row-content").fitVids();

		var assign_name = $('.fluid-width-video-wrapper iframe').closest('.campaign-row-content').closest('.campaign-row').closest( 'section' ).attr( 'id' );
		$('.fluid-width-video-wrapper iframe').attr('name', assign_name);
	}

	// scroll down arrow click controller
	$('.scroll-down').click(function(){
		$('html, body').animate({scrollTop : $('.two').offset().top}, 800);
		return false;
	});

// detect if user screen is a touch device
	function is_touch_device() {
    	try {  
        	document.createEvent("TouchEvent");  
        	return true;  
      	} catch (e) {  
        	return false;  
      	}  
    }

// no tooltips on touch devices b/c tooltips don't work right on touch device
    if(!is_touch_device()) {
    	//init bootstrap tooltip
		$(function () {
			$('[data-toggle="tooltip"]').tooltip();
		});
    }
});