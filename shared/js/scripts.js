

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
		$('.filter-menu').removeClass('active');
		
	});
	$('.main-menu .close').click(function(e){
		e.preventDefault();
		$('.main-menu').removeClass('active');
		$('.filter-menu').removeClass('active');
	});

	$('.section-portfolio .filter a').click(function(e){
		e.preventDefault();
		$('.filter-menu').addClass('active');
		$('.main-menu').removeClass('active');
	});

	$('.filter-menu .close').click(function(e){
		e.preventDefault();
		$('.filter-menu').removeClass('active');
		$('.main-menu').removeClass('active');
	});
	/*
	$('.filter-menu input[type=radio]').change(function() {
		$('.filter-menu').removeClass('active');
		$('.main-menu').removeClass('active');
	});*/

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
	});

	$('.home-slider').each(function(){
        var $slider = $(this);
        if ($slider.length) {
            var currentSlide;
            var slidesCount;
            var sliderCounter = document.createElement('div');
            sliderCounter.classList.add('slider__counter');
            var updateSliderCounter = function(slick, currentIndex) {
                currentSlide = slick.slickCurrentSlide() + 1;
                slidesCount = slick.slideCount;
                $(sliderCounter).text('0' + currentSlide + '/0' + slidesCount)
            };
            $slider.on('init', function(event, slick) {
                $slider.append(sliderCounter);
                updateSliderCounter(slick);
            });
            $slider.on('afterChange', function(event, slick, currentSlide) {
                updateSliderCounter(slick, currentSlide);
            });
            $slider.slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                dots: true,
                autoplay:true,
                autoplaySpeed: 4000,
                fade:true,
                pauseOnHover: false,
                infinite:true,
                pauseOnHover:false,
                speed: 1000
            });
        }
    });

	$('.project-slider .slider').slick({
		dots: false,
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 4000,
	});	
	/*
	if(window.outerWidth > 991) {
		$( ".section-team .column" )
			.on( "mouseenter", function() {
		  		$(this).find('.text').slideDown();
		})
			.on( "mouseleave", function() {
		  		$(this).find('.text').slideUp(200);
		});
	}*/
	$('.section-team .column').click(function(e){
		e.preventDefault();
		$(this).toggleClass('active');
		$(this).find('.text').slideToggle();
	});

	$('.filter .sf-input-radio').on('input',function(e){
		$('.filter .sf-field-search input').val('');
		//alert('Changed!')
	});


	var options = {
		useEasing: true, 
		useGrouping: true, 
		separator: ',', 
		decimal: '.', 
		duration: 1,
	};

	function counter(){
		var counterParent = document.getElementById('counter');
		var children = counterParent.children;

		function countStart(){
			$('#counter').addClass('active');
			for (var i = 0; i < children.length; i++) {
			 	var item = document.getElementById(children[i].id).querySelector('.counter');
			 	var countValue = item.getAttribute('data-value');

				var c = new countUp.CountUp(item, countValue, options);
				if (!c.error) {
					c.start();
				}
			}
		}

		countStart();
	}



	//scrollmagic

	var controller0 = new ScrollMagic.Controller({
		globalSceneOptions: {
			duration: $('body').height(),
			triggerHook: 0,
			reverse: true
		}
	});

	var controller1 = new ScrollMagic.Controller({
		globalSceneOptions: {
			reverse: false
		}
	});

	if($('.hero-home').length){
		new ScrollMagic.Scene({
			triggerElement: ".hero-home",
		})
		.setTween(".hero-home .bg video", 0.5, {y: 300})
		.addTo(controller0);
	}

	if($('.hero-default').length){
		new ScrollMagic.Scene({
			triggerElement: ".hero-default",
		})
		.setTween(".hero-default .bg", 0.5, {y: 300})
		.addTo(controller0);
	}


	if($('.hero-project').length){
		new ScrollMagic.Scene({
			triggerElement: ".hero-project",
		})
		.setTween(".hero-project .bg", 0.5, {y: 300})
		.addTo(controller0);
	}


	if($('.section-home-featured').length){
		new ScrollMagic.Scene({
			triggerElement: ".section-home-featured",
			offset: -300
		})
		.on("enter", function (event) {
			$('.section-home-featured').addClass('active');
		})
		.addTo(controller1);
	}

	if($('.hero-default').length){
		new ScrollMagic.Scene({
			triggerElement: ".hero-default",
		})
		.on("enter", function (event) {
			setTimeout(function() {
				$('.hero-default').addClass('active');
			}, 600);
			
		})
		.addTo(controller1);
	}


	if($('.section-team').length){
		new ScrollMagic.Scene({
			triggerElement: ".section-team",
			offset: -600
		})
		.on("enter", function (event) {
			setTimeout(function() {
				$('.section-team').addClass('active');
			}, 600);
			
		})
		.addTo(controller1);
	}

	if($('.section-projectinfo').length){
		new ScrollMagic.Scene({
			triggerElement: ".section-projectinfo",
			offset: -300
		})
		.on("enter", function (event) {
			$('.section-projectinfo .heading').addClass('active');
			
		})
		.addTo(controller1);

		new ScrollMagic.Scene({
			triggerElement: ".section-projectinfo .block .text",
			offset: -100
		})
		.on("enter", function (event) {
			$('.section-projectinfo .block .size').addClass('active');
			
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

});

$(window).scroll(function() {    
	AOS.init();

});

