jQuery(document).ready(function($){

	var scene = document.getElementById('shifty');
	var parallax = new Parallax(scene);

	// On swipe event
	$('.people-slider').on('swipe', function(event, slick, direction){
	  console.log(direction);
	  // left
	});

	// On edge hit
	$('.people-slider').on('edge', function(event, slick, direction){
	  console.log('edge was hit')
	});

	// On before slide change
	$('.people-slider').on('beforeChange', function(event, slick, currentSlide, nextSlide){
	  console.log(nextSlide);
	});

// inits and controls the people slider
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

// auto scroll snapping function controller
	if($(window).width() > 992) {
		$(".who-we-are-container").sectionsnap({
			delay : 100,
			selector : '.who-we-are-section',
			reference : 0.9, 
			animationTime : 600,
		});
	}

	$(window).resize(function(){
		$(".who-we-are-container").unbind();
		if($(window).width() > 992) {
			$(".who-we-are-container").sectionsnap({
				delay : 100,
				selector : '.who-we-are-section',
				reference : 0.9, 
				animationTime : 600,
			});
		} else {
			location.reload();
		}
	});

});
