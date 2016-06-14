jQuery(document).ready(function($){
	
// scroll down click controller
	$('.scroll-down').click(function(){
		$('html, body').animate({scrollTop : $('.two').offset().top}, 800);
		return false;
	});

// check if user's browser supports mix-blend-mode 
if ('CSS' in window && 'supports' in window.CSS) {
	var supportsMixBlendMode = window.CSS.supports('mix-blend-mode', 'color-burn');
} else {
	// if not supported, apply opacity to substitute
	$('body.home .intro-content .skar-home-bg').css('opacity' , '0.2');
}

});
