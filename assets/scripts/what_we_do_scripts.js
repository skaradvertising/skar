jQuery(document).ready(function($){

	if($(window).width() > 992) {
		$(".what-we-do-container").sectionsnap({
			delay : 100,
			selector : '.what-we-do-section',
			reference : 0.75, 
			animationTime : 600,
		});
	}

	$(window).resize(function(){
		location.reload();
		if($(window).width() > 992) {
			$(".what-we-do-container").sectionsnap({
				delay : 100,
				selector : '.what-we-do-section',
				reference : 0.75, 
				animationTime : 600,
			});
		}
	});

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

	$('.scroll-down').click(function(){
		$('html, body').animate({scrollTop : $('.two').offset().top}, 800);
		return false;
	});

});
