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
	imageMap();



	$('.slider-for').slick({
	    slidesToShow: 1,
	    slidesToScroll: 1,
	    arrows: false,
	    fade: true,
	    asNavFor: '.slider-nav ul',
	    autoplay:true,
	    autoplaySpeed:4500
	});
	$('.slider-nav ul').slick({
	    slidesToShow: 5,
	    slidesToScroll: 1,
	    vertical:true,
	    asNavFor: '.slider-for',
	    dots: false,
	    focusOnSelect: true,
	    verticalSwiping:true,
	});

	$('.slider-nav li').on('afterChange', function(event, slick, currentSlide, nextSlide){
	    //alret(currentSlide);
	});


	$('.timeline-slider .wrap div').click(function(e) {
	    e.preventDefault();
	    
	    const $items = $('.timeline-slider .wrap div');
	    const $navItems = $('.timeline-slider-nav ul li');
	    const index = $(this).index(); // Get 0-based position
	    const total = $items.length - 1;
	    
	    // 1. Toggle active state on the clicked dots
	    $items.removeClass('active');
	    $(this).addClass('active');

	    // 2. Calculate and set the line width
	    const percentage = (index / total) * 100;
	    $('.timeline-slider-nav .line').css('width', `${percentage}%`);

	    // 3. Update nav dots after the transition
	    setTimeout(() => {
	        $navItems.each(function(i) {
	            // Add 'active' if this dot's index is less than or equal to clicked index
	            $(this).toggleClass('active', i <= index);
	        });
	    }, 300);
	});
	
	$('.section-location .block ul li').mouseenter(function(e) {
	    e.preventDefault();
	    
	    var i = $(this).attr('data-item'); // Assuming i is 1, 2, 3, 4, or 5
	    
	    // Update active state for list items
	    $('.section-location .block ul li').removeClass('active');
	    $(this).addClass('active');

	    // Calculate top position: (1-1)*20=0%, (2-1)*20=20%, etc.
	    var newTop = ((i - 1) * 20) + '%';
	    $('.line').css('top', newTop);

	    // Update active state for images
	    $('.section-location .imageset .image').each(function() {
	        var j = $(this).attr('data-item');
	        $(this).toggleClass('active', i == j);
	    });
	});

	/*
	
	
	$('.section-location .block ul li').click(function(e){
		e.preventDefault();
		var i = $(this).attr('data-item');
		$('.section-location .block ul li').removeClass('active');
		$(this).addClass('active');

		if(i == '1'){
			$('.line').css('top', '0%');
		} else if(i == '2'){
			$('.line').css('top', '20%');
		} else if(i == '3'){
			$('.line').css('top', '40%');
		} else if(i == '4'){
			$('.line').css('top', '60%');
		} else if(i == '5'){
			$('.line').css('top', '80%');
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
	
	
	$('.section-location .block ul li').mouseenter(function(e) {
	    e.preventDefault();
	    
	    var i = $(this).attr('data-item');
	    
	    // Update active class on list items
	    $('.section-location .block ul li').removeClass('active');
	    $(this).addClass('active');

	    // Dynamically set height (i * 20%)
	    var newHeight = (i * 20) + '%';
	    $('.line').css('height', newHeight);

	    // Update active class on images
	    $('.section-location .imageset .image').each(function() {
	        var j = $(this).attr('data-item');
	        $(this).toggleClass('active', i == j);
	    });
	});
	*/



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
		$('.section-home2').each(function() {
		    // 'this' refers to the specific instance of the block currently being looped
		    var $thisSection = $(this);

		    var scene = new ScrollMagic.Scene({
		        triggerElement: this,      // Trigger specifically on this instance
		        triggerHook: 0.5,
		    })
		    // Toggle the class only on the heading INSIDE this specific section
		    .setClassToggle($thisSection.find('.heading')[0], 'active') 
		    .addTo(controller1);
		});
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

	if($('.section-warehouse').length){
		var scene = new ScrollMagic.Scene({
			triggerElement: '.section-warehouse',
			triggerHook: 0.5,
		})
		.setClassToggle('.section-warehouse .heading', 'active')
		.addTo(controller1);
	}

	if($('.section-floorplan').length){
		var scene = new ScrollMagic.Scene({
			triggerElement: '.section-floorplan',
			triggerHook: 0.5,
		})
		.setClassToggle('.section-floorplan .heading', 'active')
		.addTo(controller1);
	}

	function imageMap(){
		$('#warehouse').imageMapPro({"id":5952,"editor":{"selected_shape":"poly-3483","tool":"poly","shapeCounter":{"polys":2}},"general":{"name":"revesbywarehouse","shortcode":"revesbywarehouse","width":2924,"height":508,"naturalWidth":2924,"naturalHeight":508},"image":{"url":""},"tooltips":{"enable_tooltips":0},"spots":[{"id":"poly-2401","title":"warehouse2","type":"poly","x":56.746,"y":19.996,"width":25.397,"height":32.495,"x_image_background":56.74603174603175,"y_image_background":19.99637289656975,"width_image_background":25.396825396825395,"height_image_background":32.49501440160889,"default_style":{"background_color":"#000","background_opacity":0.21367521367521367},"mouseover_style":{"background_color":"#2BB573"},"tooltip_content":{"squares_settings":{"containers":[{"id":"sq-container-403761","settings":{"elements":[{"settings":{"name":"Heading","iconClass":"fa fa-header"},"options":{"heading":{"text":"Poly 0"}}}]}}]}},"points":[{"x":0,"y":10.858917463025621},{"x":0.2840909090909091,"y":100},{"x":100,"y":99.04564726330489},{"x":99.85795454545455,"y":10.863070990168922},{"x":48.57954545454545,"y":0}]},{"id":"poly-3483","title":"warehouse1","type":"poly","x":13.636,"y":18.438,"width":26.659,"height":36.13,"x_image_background":13.636363636363635,"y_image_background":18.438208576200704,"width_image_background":26.659451659451662,"height_image_background":35.92249832407314,"default_style":{"background_color":"#000","background_opacity":0.21367521367521367},"mouseover_style":{"background_color":"#2BB573"},"tooltip_content":{"squares_settings":{"containers":[{"id":"sq-container-403761","settings":{"elements":[{"settings":{"name":"Heading","iconClass":"fa fa-header"},"options":{"heading":{"text":"Poly 1"}}}]}}]}},"points":[{"x":0.135317997293642,"y":12.643553755205472},{"x":0,"y":98.84960208615183},{"x":99.59376454668474,"y":100},{"x":100,"y":10.919432788586539},{"x":47.63193504736131,"y":0}]}]});
	

		$.imageMapProEventHighlightedShape = function(imageMapName, shapeName) {
			if (imageMapName == 'revesbywarehouse') {
				$('.warehouse .image').each(function(){
					var att = $(this).attr('data-id');
					if (att == shapeName){
						$(this).addClass('active');
					} else{
						$(this).removeClass('active');
					}
				});
				$('.section-warehouse .heading span').each(function(){
					var att = $(this).attr('data-id');
					if (att == shapeName){
						$(this).addClass('active');
					} else{
						$(this).removeClass('active');
					}
				});
				
			}

			if (imageMapName == 'revesbyfloorplan' ) {
				$('.floorplan .image').each(function(){
					var att = $(this).attr('data-id');
					if (att == shapeName){
						$(this).addClass('active');
					} else{
						$(this).removeClass('active');
					}
				});

				$('.section-floorplan .heading .content').each(function(){
					var att = $(this).attr('data-id');
					if (att == shapeName){
						$(this).addClass('active');
					} else{
						$(this).removeClass('active');
					}
				});
			}
		}

		$('#floorplan').imageMapPro({"id":9232,"editor":{"selected_shape":"poly-5776","tool":"zoom-out","shapeCounter":{"polys":7}},"general":{"name":"revesbyfloorplan","shortcode":"revesbyfloorplan","width":1821,"height":1138,"naturalWidth":1821,"naturalHeight":1138},"image":{"url":""},"tooltips":{"enable_tooltips":0},"spots":[{"id":"poly-6702","title":"2c","type":"poly","x":39.051,"y":7.138,"width":17.352,"height":28.928,"x_image_background":39.050846341858644,"y_image_background":7.137978142076502,"width_image_background":17.35208991636734,"height_image_background":28.927595628415297,"tooltip_content":{"squares_settings":{"containers":[{"id":"sq-container-403761","settings":{"elements":[{"settings":{"name":"Heading","iconClass":"fa fa-header"},"options":{"heading":{"text":"Poly 0"}}}]}}]}},"points":[{"x":0,"y":22.3132373081464},{"x":0.49200492004921514,"y":99.64580873671784},{"x":100,"y":100},{"x":99.75399753997542,"y":0.47225501770956463},{"x":40.59040590405904,"y":0},{"x":39.9755717914297,"y":4.839556080283355},{"x":0.6150061500614882,"y":5.430932703659979},{"x":0.8610086100861163,"y":13.931523022432115},{"x":8.487084870848726,"y":14.049586776859504},{"x":8.610086100860999,"y":22.19598583234947}]},{"id":"poly-4825","title":"2d","type":"poly","x":56.339,"y":7.103,"width":17.075,"height":28.877,"x_image_background":56.33890640613607,"y_image_background":7.240437158469945,"width_image_background":17.074627223977696,"height_image_background":28.688524590163933,"tooltip_content":{"squares_settings":{"containers":[{"id":"sq-container-403761","settings":{"elements":[{"settings":{"name":"Heading","iconClass":"fa fa-header"},"options":{"heading":{"text":"Poly 1"}}}]}}]}},"points":[{"x":0,"y":0},{"x":59.626835659050926,"y":0.12120572159130955},{"x":59.627010492091394,"y":4.496760656452463},{"x":61.06057692442889,"y":4.437359444887255},{"x":61.12500000000004,"y":5.323608868663334},{"x":100,"y":5.205336306610927},{"x":100,"y":13.839233336436802},{"x":91.74999999999997,"y":13.95750589848921},{"x":91.87500000000003,"y":23.064493176524724},{"x":99.50000000000003,"y":22.82794805241991},{"x":99.49798950790867,"y":99.99947013892198},{"x":0.1270104920913705,"y":100}]},{"id":"poly-4208","title":"1c","type":"poly","x":19.927,"y":53.278,"width":19.209,"height":28.826,"x_image_background":19.927,"y_image_background":53.278,"width_image_background":19.208955626974912,"height_image_background":28.688524590163933,"tooltip_content":{"squares_settings":{"containers":[{"id":"sq-container-403761","settings":{"elements":[{"settings":{"name":"Heading","iconClass":"fa fa-header"},"options":{"heading":{"text":"Poly 2"}}}]}}]}},"points":[{"x":99.55392385862137,"y":0},{"x":0,"y":0.4752732238106385},{"x":0.2222222222222289,"y":97.63036364818598},{"x":63.99999999999999,"y":97.86732728336735},{"x":64.22416473345048,"y":100},{"x":76.44444444444444,"y":100},{"x":76.22222222222223,"y":94.90446668869478},{"x":93.11111111111111,"y":94.78680002600915},{"x":93.11111111111111,"y":86.49307279466004},{"x":100,"y":86.0191455242972}]},{"id":"poly-7862","title":"1e","type":"poly","x":66.285,"y":53.279,"width":25.356,"height":28.893,"x_image_background":66.28489810738711,"y_image_background":53.278688524590166,"width_image_background":25.355821427606884,"height_image_background":28.893442622950822,"tooltip_content":{"squares_settings":{"containers":[{"id":"sq-container-403761","settings":{"elements":[{"settings":{"name":"Heading","iconClass":"fa fa-header"},"options":{"heading":{"text":"Poly 3"}}}]}}]}},"points":[{"x":0.1683501683501874,"y":100},{"x":8.501683501683484,"y":100},{"x":8.585858585858604,"y":95.03546099290777},{"x":24.580360713165618,"y":94.91725768321513},{"x":24.747474747474747,"y":84.75177304964538},{"x":31.649831649831643,"y":85.34278959810872},{"x":31.73277059996571,"y":97.39846808510637},{"x":100,"y":96.92671394799048},{"x":99.66329966329968,"y":0},{"x":5.723905723905699,"y":0.236406619385351},{"x":5.723905723905699,"y":9.456264775413697},{"x":0,"y":9.456264775413697}]},{"id":"poly-5404","title":"2b","type":"poly","x":16.214,"y":7.104,"width":22.965,"height":29.03,"x_image_background":16.214,"y_image_background":7.172,"width_image_background":22.965373616250005,"height_image_background":28.96174863387978,"tooltip_content":{"squares_settings":{"containers":[{"id":"sq-container-403761","settings":{"elements":[{"settings":{"name":"Heading","iconClass":"fa fa-header"},"options":{"heading":{"text":"Poly 4"}}}]}}]}},"points":[{"x":10.223048327137544,"y":0.2342424691912034},{"x":0,"y":59.52898515259645},{"x":0.18587360594796098,"y":100},{"x":100,"y":99.76498575796752},{"x":99.6282527881041,"y":22.587419274443175},{"x":93.68029739776951,"y":22.352122676493156},{"x":93.86617100371745,"y":13.881445150292409},{"x":99.99837522295032,"y":13.881445150292409},{"x":99.81412639405205,"y":5.17547102614164},{"x":69.98154262679589,"y":5.292592260737244},{"x":69.98128265201457,"y":0}]},{"id":"poly-4974","title":"2e","type":"poly","x":73.35,"y":7.138,"width":18.27,"height":28.86,"x_image_background":73.35,"y_image_background":7.138,"width_image_background":18.27,"height_image_background":28.86,"tooltip_content":{"squares_settings":{"containers":[{"id":"sq-container-403761","settings":{"elements":[{"settings":{"name":"Heading","iconClass":"fa fa-header"},"options":{"heading":{"text":"Poly 5"}}}]}}]}},"points":[{"x":99.53271028037386,"y":93.7278949717315},{"x":87.96728971962617,"y":93.84623657603846},{"x":88.20093457943928,"y":100},{"x":0,"y":100},{"x":0,"y":22.486249178945954},{"x":7.593457943925201,"y":22.604590783252902},{"x":7.593457943925201,"y":13.610628855924492},{"x":0,"y":13.49228725161754},{"x":0.11682242990651644,"y":5.090033345823894},{"x":38.20093457943927,"y":5.091093686598488},{"x":38.08411214953268,"y":0.2380275692388319},{"x":100,"y":0}]},{"id":"poly-5776","title":"1d","type":"poly","x":39.072,"y":53.279,"width":22.539,"height":28.893,"x_image_background":39.072,"y_image_background":53.279,"width_image_background":22.53850793565056,"height_image_background":28.893442622950822,"tooltip_content":{"squares_settings":{"containers":[{"id":"sq-container-403761","settings":{"elements":[{"settings":{"name":"Heading","iconClass":"fa fa-header"},"options":{"heading":{"text":"Poly 6"}}}]}}]}},"points":[{"x":0,"y":0},{"x":0.18939393939392937,"y":86.28841607565013},{"x":6.344564520423917,"y":86.05306855791964},{"x":6.5325678090216845,"y":94.7993380614657},{"x":20.454545454545443,"y":94.91884633569741},{"x":20.643939393939405,"y":100},{"x":30.681818181818194,"y":100},{"x":31.060606060606055,"y":97.39952718676119},{"x":100,"y":97.39981087470447},{"x":99.62121212121214,"y":0.23640661938535112}]}]});
	}

});

$(window).scroll(function() {    
	AOS.init();
});

