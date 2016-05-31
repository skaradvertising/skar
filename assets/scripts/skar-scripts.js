jQuery(document).ready(function($){
	
	//init bootstrap tooltip
	$(function () {
		$('[data-toggle="tooltip"]').tooltip();
	});

	// click animation for green arrow button that turn into x's on click
	$('.arrow-icon').click(function(){
		$(this).toggleClass('is-clicked');
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

	//adjustHeights('.skar-content .recent-article .inner-content div:nth-of-type(1) .inner-content-title a')
	//adjustHeights('body.page-template-template-what-we-do .what-we-do-container .what-we-do-section.two .work-container .work-three-lg .inner-content .content-container p:nth-of-type(1)');

	if ($('body').hasClass('frontend')) {
		$(".campaign-row-content").fitVids();
	}

	// scroll down arrow click controller
	$('.scroll-down').click(function(){
		$('html, body').animate({scrollTop : $('.two').offset().top}, 800);
		return false;
	});
});