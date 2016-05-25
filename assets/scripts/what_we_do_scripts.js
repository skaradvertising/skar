jQuery(document).ready(function($){

// auto scroll snapping function controller
	/*if($(window).width() > 992) {
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
	});*/

	
// scroll down arrow click controller
	$('.scroll-down').click(function(){
		$('html, body').animate({scrollTop : $('.two').offset().top}, 800);
		return false;
	});

	var scene = document.getElementById('scene');
	var parallax = new Parallax(scene);

});
