$(document).ready(function(){

	$('a[href*=#]:not([href=#])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if (target.length) {
				$('html,body').animate({
				  scrollTop: target.offset().top + 1
				}, 800);
			return false;
			}
		}
	});
	
	$('.toggle a').click(function(e){
		e.preventDefault();
		$('.main-menu').addClass('active');
		
	});
	$('.main-menu .close').click(function(e){
		e.preventDefault();
		$('.main-menu').removeClass('active');
	});


	function initAOS(){
		AOS.init({
			duration: 1000,
			once: true,
			offset: 100,
			delay: 0,
			disable: 'mobile',
			easing: 'ease-in-out-cubic'
		});
	}

	initAOS();
	videoSlider();

	/*
	$('.accordion .item .heading').click(function(){
		var i = $(this).parent().attr('data-item');
		$(this).parent().toggleClass('active');

		$(this).parent().find('.content').slideToggle();
	});

	$('.tabby li a').click(function(e){
		e.preventDefault();
		var i = $(this).attr('data-id');
		$('.tabby li a').removeClass('active');
		$(this).addClass('active');

		$('.section-portfolio .view .content').each(function (e) {
			var j = $(this).attr('data-id');
			if(i == j){
				$(this).addClass('active');
			} else{
				$(this).removeClass('active');
			}
		});
	});*/

	$('.section-location .block ul li').click(function(e){
		e.preventDefault();
		var i = $(this).attr('data-item');
		$('.section-location .block ul li').removeClass('active');
		$(this).addClass('active');

		if(i == '1'){
			$('.line').css('height', '20%');
		} else if(i == '2'){
			$('.line').css('height', '40%');
		} else if(i == '3'){
			$('.line').css('height', '60%');
		} else if(i == '4'){
			$('.line').css('height', '80%');
		} else if(i == '5'){
			$('.line').css('height', '100%');
		}

		$('.section-location .imageset .image').each(function (e) {
			var j = $(this).attr('data-item');
			if(i == j){
				$(this).addClass('active');
			} else{
				$(this).removeClass('active');
			}
		});
	});


	function videoSlider(){
		var $mainSlider = $('.project-slider .slider');

		$mainSlider.slick({
		    dots: false,
		    infinite: true,
		    slidesToShow: 1,
		    slidesToScroll: 1,
		    autoplay: true,
		    autoplaySpeed: 4500,
		    fade: true,
		    pauseOnFocus: false,
		    pauseOnHover: false
		});

		$mainSlider.on('afterChange', function(event, slick, currentSlide) {
		    // 1. Properly find and reset all videos in this slider
		    $(slick.$slider).find('video').each(function() {
		        this.pause();
		        this.currentTime = 0;
		    });

		    // 2. Target the specific active slide using the currentSlide index
		    var $activeSlide = $(slick.$slides.get(currentSlide));
		    var video = $activeSlide.find('video').get(0);

		    if (video) {
		        // Pause the slick autoplay so it doesn't "jump" the video
		        $mainSlider.slick('slickPause');
		        
		        video.play();

		        // When video finishes, go to next slide and resume slick
		        video.onended = function() {
		            $mainSlider.slick('slickNext');
		            $mainSlider.slick('slickPlay');
		        };
		    }
		});

		var firstVideo = $('.project-slider .slider .slick-active video').get(0);
	    if (firstVideo) {
	        firstVideo.play();
	    }
	}


	//scrollmagic

	var controller0 = new ScrollMagic.Controller({
		globalSceneOptions: {
			duration: $('body').height(),
			triggerHook: 0,
			reverse: true
		}
	});

	if($('.hero-home').length){
		new ScrollMagic.Scene({
			triggerElement: ".hero-home",
		})
		.setTween(".hero-home .bg video", 0.5, {y: 300})
		.addTo(controller0);

		new ScrollMagic.Scene({
			triggerElement: ".hero-home",
		})
		.setTween(".hero-home .bg img", 0.5, {y: 300})
		.addTo(controller0);
	}


	if($('.hero-project').length){
		new ScrollMagic.Scene({
			triggerElement: ".hero-project",
		})
		.setTween(".hero-project .bg video", 0.5, {y: 300})
		.addTo(controller0);
	}


	var controller1 = new ScrollMagic.Controller({
		globalSceneOptions: {
			reverse: false
		}
	});

	if($('.section-projectinfo').length){
		new ScrollMagic.Scene({
			triggerElement: ".section-projectinfo",
			triggerHook: 0.5,
		})
		.on("enter", function (event) {
			$('.section-projectinfo .heading').addClass('active');
			setTimeout(() => {
				$('.section-projectinfo .block .size').addClass('active');
			}, 500);
			
		})
		.addTo(controller1);
	}

	if($('.section-contact').length){
		new ScrollMagic.Scene({
			triggerElement: ".section-contact",
			triggerHook: 0.5,
		})
		.on("enter", function (event) {
			$('.section-contact .heading').addClass('active');
			
		})
		.addTo(controller1);
	}

	if($('.section-portal').length){
		new ScrollMagic.Scene({
			triggerElement: ".section-portal",
			triggerHook: 0.5,
		})
		.on("enter", function (event) {
			$('.section-portal .text').addClass('active');
			
		})
		.addTo(controller1);
	}

	if($('.section-portal .enquiry').length){
		new ScrollMagic.Scene({
			triggerElement: ".section-portal .enquiry",
			triggerHook: 0.5,
		})
		.on("enter", function (event) {
			$('.section-portal .enquiry .heading').addClass('active');
			
		})
		.addTo(controller1);
	}


	if($('.section-home1').length){
		var scene = new ScrollMagic.Scene({
			triggerElement: '.section-home1',
			triggerHook: 0.5,
		})
		.setClassToggle('.section-home1 .heading', 'active')
		.addTo(controller1);
	}

	if($('.section-home2').length){
		var scene = new ScrollMagic.Scene({
			triggerElement: '.section-home2',
			triggerHook: 0.5,
		})
		.setClassToggle('.section-home2 .heading', 'active')
		.addTo(controller1);
	}


	if($('.section-program').length){
		var scene = new ScrollMagic.Scene({
			triggerElement: '.section-program',
			triggerHook: 0.5,
		})
		.setClassToggle('.section-program .heading', 'active')
		.addTo(controller1);
	}

	if($('.section-location').length){
		var scene = new ScrollMagic.Scene({
			triggerElement: '.section-location',
			triggerHook: 0.5,
		})
		.setClassToggle('.section-location .heading', 'active')
		.addTo(controller1);
	}

	if($('.section-location-sc').length){
		var scene = new ScrollMagic.Scene({
			triggerElement: '.section-location-sc',
			triggerHook: 0.5,
		})
		.setClassToggle('.section-location-sc .heading', 'active')
		.addTo(controller1);


		setTimeout(() => {
			var scene = new ScrollMagic.Scene({
				triggerElement: '.section-location-sc',
				triggerHook: 0.5,
			})
			.setClassToggle('.section-location-sc .stat', 'active')
			.addTo(controller1);
		}, 500);
		
	}

});

$(window).scroll(function() {    
	AOS.init();
});

