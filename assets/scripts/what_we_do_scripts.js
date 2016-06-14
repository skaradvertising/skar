jQuery(document).ready(function($){
	
// scroll down arrow click controller
	$('.scroll-down').click(function(){
		$('html, body').animate({scrollTop : $('.two').offset().top}, 800);
		return false;
	});

// init parallax shifty images
	var scene = document.getElementById('scene');
	var parallax = new Parallax(scene);

});
