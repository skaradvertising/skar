jQuery(document).ready(function($){

// init parallax shifty images
	var scene = document.getElementById('shifty');
	var parallax = new Parallax(scene);

// init and controls the people slider
	$(".people-slider").slick({

	  // normal options...
	  lazyLoad: 'progressive',
	  arrows: true,
	  slidesToShow: 6,
	  slidesToScroll: 6,
	  dots: false,
	  infinite: true,
	  prevArrow: '<span class="people-slider-arrows left” aria-hidden="true"></span>',
	  nextArrow: '<span class="people-slider-arrows right" aria-hidden="true"></span>',

	  // the magic
	  responsive: [{

	      breakpoint: 1600,
	      settings: {
	        slidesToShow: 5,
	        slidesToScroll: 5,
	        //dots: true
	      }

	    }, {

	      breakpoint: 1280,
	      settings: {
	        slidesToShow: 4,
	        slidesToScroll: 4,
	        //dots: true
	      }

	    }, {

	      breakpoint: 960,
	      settings: {
	        slidesToShow: 3,
	        slidesToScroll: 3,
	        //dots: true
	      }

	    }, {

	      breakpoint: 640,
	      settings: {
	        slidesToShow: 2,
	        slidesToScroll: 2,
	        //dots: true
	      }

	    }, {

	      breakpoint: 320,
	      settings: "unslick" // destroys slick

	    }]
	});

	// scroll down arrow click controller
	$('.scroll-down').click(function(){
		$('html, body').animate({scrollTop : $('.two').offset().top}, 800);
		return false;
	});

});
