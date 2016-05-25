jQuery(document).ready(function($){

// auto scroll snapping function controller
	/*if($(window).width() > 992) {
		$(".scrolling-home-container").sectionsnap({
			delay : 100,
			selector : '.section',
			reference : 0.9, 
			animationTime : 600,
		});
	}

	$(window).resize(function(){
		if($(window).width() > 992) {
			$(".scrolling-home-container").sectionsnap({
				delay : 100,
				selector : '.section',
				reference : 0.9, 
				animationTime : 600,
			});
		}
	});*/

	
// scroll down click controller
	$('.scroll-down').click(function(){
		$('html, body').animate({scrollTop : $('.two').offset().top}, 800);
		return false;
	});

});
