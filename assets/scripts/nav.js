jQuery(document).ready(function($){
	
	var headerHeight = $('.banner').height();
	$(window).on('scroll',
	{
        previousTop: 0
    }, 
    function () {
	    var currentTop = $(window).scrollTop();
	    //check if user is scrolling up
	    if (currentTop < this.previousTop ) {
	    	//if scrolling up...
	    	if (currentTop > 0 && $('.banner').hasClass('is-fixed')) {
	    		$('.banner').addClass('is-visible');
	    	} else {
	    		$('.banner').removeClass('is-visible is-fixed');
	    	}
	    } else {
	    	//if scrolling down...
	    	$('.banner').removeClass('is-visible');
	    	if( currentTop > headerHeight && !$('.banner').hasClass('is-fixed')) $('.banner').addClass('is-fixed');
	    }
	    this.previousTop = currentTop;
	});

	//open/close primary navigation
	$('.nav-primary-trigger').on('click', function(){
		$('.menu-icon').toggleClass('is-clicked'); 
		$('.banner').toggleClass('menu-is-open');
		$('.nav-overlay').toggleClass('menu-opened');
	});
});