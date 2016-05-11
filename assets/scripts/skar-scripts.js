jQuery(document).ready(function($){
	
	//init bootstrap tooltip
	$(function () {
		$('[data-toggle="tooltip"]').tooltip();
	});

	// click animation for green arrow button
	$('.arrow-icon').click(function(){
		$(this).toggleClass('is-clicked');
	});

	// Function for adjusting font size in fixed height sections with no overflow-y scrolling
	function adjustHeights(elem) {
		var fontstep = 2;
		if ($(elem).height()>$(elem).parent().height() || $(elem).width()>$(elem).parent().width()) {
	    	$(elem).css('font-size',(($(elem).css('font-size').substr(0,2)-fontstep)) + 'px');
	    	adjustHeights(elem);
		}
	}

	//adjustHeights('body.page-template-template-what-we-do .what-we-do-container .what-we-do-section.two .work-container .work-three-lg .inner-content .content-container p:nth-of-type(1)');
});