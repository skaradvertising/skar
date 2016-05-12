jQuery(document).ready(function($){

	$('.return-to-top').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});

	$('.scroll-down').click(function(){
		$('html, body').animate({scrollTop : $('.two').offset().top}, 800);
		return false;
	});

});
