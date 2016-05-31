jQuery(document).ready(function($){
	
	var headerHeight = $('.banner > .header-content').height();
	$(window).on('scroll',
	{
        previousTop: 0
    }, 
    function () {
	    var currentTop = $(window).scrollTop();
	    //check if user is scrolling up
	    if (currentTop < this.previousTop ) {
	    	//if scrolling up...
	    	if (currentTop > 0 && $('.banner > .header-content').hasClass('is-fixed')) {
	    		$('.banner > .header-content').addClass('is-visible');
	    		$('.banner > .header-content').removeClass('is-visible-after-click');
	    	} else {
	    		$('.banner > .header-content').removeClass('is-visible is-fixed is-visible-after-click');
	    	}
	    } else {
	    	//if scrolling down...
	    	$('.banner > .header-content').removeClass('is-visible');
	    	if( currentTop > headerHeight && !$('.banner > .header-content').hasClass('is-fixed')) { $('.banner > .header-content').addClass('is-fixed');}
	    }

	    this.previousTop = currentTop;
	});

	//open/close primary navigation
	$('.nav-primary-trigger').on('click', function(){
		$('.menu-icon').toggleClass('is-clicked'); 
		$('.banner > .header-content').toggleClass('menu-is-open');
		$('.nav-overlay').toggleClass('menu-opened');

		if( $('.banner > .header-content').hasClass('is-visible') ) {
			$('.banner > .header-content').removeClass('is-visible');
		} else {
			$('.banner > .header-content').addClass('is-visible-after-click');
		}

		if( $('.banner > .header-content').hasClass('is-fixed') ) {
			$('.banner > .header-content').removeClass('is-fixed');
		} else {
			$('.banner > .header-content').addClass('is-fixed');
		}

	});
});