(function($){

	"use strict";

	function stickyHeader() {
		if ($('header').length) {
			var strickyScrollPos = $('header').next().offset().top;
			if($(window).scrollTop() > strickyScrollPos) {
				$('header').addClass('sticky');
				$('body').addClass('sticky');
			}
			else if($(window).scrollTop() <= strickyScrollPos) {
			  	$('header').removeClass('sticky');
			  	$('body').removeClass('sticky');
			}
		};
	}

	$(window).load(function() {

		// Preloader
		$('#status').fadeOut(); // will first fade out the loading animation
			$('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
			$('body').delay(350).css({
			'overflow': 'visible'
		});

		// Animation in animate.css
		new WOW().init();

		// Mix It Up
		$("#mix-container").mixItUp();

		// Carousel - Atorney
		$('.team-member-carousel').owlCarousel({
	    	loop: true,
		    autoplay: true,
		    margin: 30,
		    dots: false,
		    animateIn: true,
		    responsiveClass: true,
		    navText: [
		    '<i class="fa fa-angle-left"></i>',
		    '<i class="fa fa-angle-right"></i>'
		    ],
	    	responsive:{
		        0:{
		            items:1,
		            nav:true
		        },
		        600:{
		            items:3,
		            nav:true
		        },
		        1000:{
		            items:4,
		            nav:true,
		            loop:true
		        }
		    }
	  	});

	  	// Carousel - News
		$('.news-carousel').owlCarousel({
	    	loop: true,
		    autoplay: true,
		    margin: 30,
		    dots: false,
		    animateIn: true,
		    responsiveClass: true,
		    navText: [
		    '<i class="fa fa-angle-left"></i>',
		    '<i class="fa fa-angle-right"></i>'
		    ],
	    	responsive:{
		        0:{
		            items:1,
		            nav:true
		        },
		        600:{
		            items:3,
		            nav:true
		        },
		        1000:{
		            items:3,
		            nav:true,
		            loop:true
		        }
		    }
	  	});

	  	// Carousel - Testimonial (Version 1)
		$('.testimonial-carousel').owlCarousel({
	    	loop: true,
		    autoplay: true,
		    margin: 15,
		    dots: false,
		    animateIn: true,
		    responsiveClass: true,
		    navText: [
		    '<i class="fa fa-angle-left"></i>',
		    '<i class="fa fa-angle-right"></i>'
		    ],
	    	responsive:{
		        0:{
		            items:1,
		            nav:true
		        },
		        600:{
		            items:1,
		            nav:true
		        },
		        1000:{
		            items:1,
		            nav:true,
		            loop:true
		        }
		    }
	  	});

	  	// Carousel - Testimonial (Version 2)
		$('.testimonial-carousel-2').owlCarousel({
	    	loop: true,
		    autoplay: true,
		    margin: 15,
		    dots: true,
		    animateIn: true,
		    responsiveClass: true,
		    navText: [
		    '<i class="fa fa-angle-left"></i>',
		    '<i class="fa fa-angle-right"></i>'
		    ],
	    	responsive:{
		        0:{
		            items:1,
		            nav:false
		        },
		        600:{
		            items:2,
		            nav:false
		        },
		        1000:{
		            items:2,
		            nav:false,
		            loop:true
		        }
		    }
	  	});

	  	// Carousel - Partner
		$('.partner-carousel').owlCarousel({
	    	loop: true,
		    autoplay: true,
		    margin: 25,
		    dots: false,
		    animateIn: true,
		    responsiveClass: true,
		    navText: [
		    '<i class="fa fa-angle-left"></i>',
		    '<i class="fa fa-angle-right"></i>'
		    ],
	    	responsive:{
		        0:{
		            items:1,
		            nav:false
		        },
		        600:{
		            items:3,
		            nav:false
		        },
		        1000:{
		            items:5,
		            nav:false,
		            loop:true
		        }
		    }
	  	});

	  	// Carousel - Gallery
		$('.gallery-carousel').owlCarousel({
	    	loop: true,
		    autoplay: true,
		    margin: 15,
		    dots: false,
		    animateIn: true,
		    responsiveClass: true,
		    navText: [
		    '<i class="fa fa-angle-left"></i>',
		    '<i class="fa fa-angle-right"></i>'
		    ],
	    	responsive:{
		        0:{
		            items:1,
		            nav:true
		        },
		        600:{
		            items:1,
		            nav:true
		        },
		        1000:{
		            items:1,
		            nav:true,
		            loop:true
		        }
		    }
	  	});

		// Responsive Menu
		$(".sf-menu").slicknav({
			delay:       1000,                            // one second delay on mouseout
			animation:   {opacity:'show',height:'show'},  // fade-in and slide-down animation
			speed:       'fast',                          // faster animation speed
			autoArrows:  false
		});

		// Superfish Menu
		$("#sf-example").superfish({
			pathLevels: 1,
			delay: 800,
			animation: {opacity: 'show'},
			animationOut: {opacity: 'hide'},
			speed: 'fast',
			speedOut: 'fast',
			cssArrows: true,
			disableHI: false,
		});

		// Magnific Popup
		$('.gallery-photo').magnificPopup({
			type: 'image'
			// other options
		});

		// Slider - bxslider
		$(".bxslider").bxSlider({
			auto: true,
			pager: false,
			speed: 500,
			pause: 6000,
			easing: 'ease-in-out'
		});

		// Scroll to Top
		//Check to see if the window is top if not then display button
	    $(window).scroll(function(){
	    	stickyHeader();
	        if ($(this).scrollTop() > 100) {
	            $('.scrollup').fadeIn();
	        } else {
	            $('.scrollup').fadeOut();
	        }
	    });
	    
	    //Click event to scroll to top
	    $('.scrollup').on("click",function(){
	        $('html, body').animate({scrollTop : 0},800);
	        return false;
	    });

	    $('.counter').counterUp({
            delay: 10,
            time: 1000
        });

	});


})(jQuery);