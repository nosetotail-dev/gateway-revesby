<?php 
/*
Template Name: Home
*/
get_header(); ?>

<div class="hero-home">
	<div class="container">
		<div data-aos="fade-left">
			<h1>61 Milperra Road, Revesby</h1>
			<h2>Your <b>Gateway</b> to Revesby and beyond.</h2>
		</div>
		<div class="link">
			<a href="<?php echo get_home_url(); ?>/asset-overview" class="btn btn-primary">Explore Asset</a>
			<a href="<?php echo get_home_url(); ?>/contact" class="btn btn-tertiary">Get in Touch</a>
		</div>
	</div>
	<div class="bg bottom">
		<p class="caption">Artist Impression</p>
		<video autoplay="1" muted data-keepplaying playsinline preload loop poster="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/video.jpg">
			<source src="<?php bloginfo ('stylesheet_directory'); ?>/shared/video/video.mp4" type="video/mp4">
		</video>
	</div>
</div>
<div class="section section-home1">
	<div class="container">
		<div class="block" data-aos="fade">
			<div class="column">
				<div class="heading">
					<h2>A Purpose-Built<br> Industrial Space</h2>
				</div>
				<div class="text">
					<p>61 Milperra Road is a high-quality industrial asset positioned in Revesby, just 17km west of the Sydney CBD and Port Botany. The facility offers flexible warehouse space within one of Sydney’s most established logistics hubs, with immediate access to major transport corridors and strategic distribution networks.</p>

					<div class="textlink">
						<a href="<?php echo get_home_url(); ?>/asset-overview">Explore More</a>
					</div>
				</div>
			</div>
			<div class="column">
				<div class="feature">
					<ul>
						<li>3,000 sqm*- 28,700 sqm* GLA</li>
						<li>Q4 2027 Lease Commencement</li>
						<li>24/7 B-DOUBLE ACCESS</li>
					</ul>
				</div>
			</div>
		</div>
		
	</div>
</div>
<div class="section section-home2">
	<div class="container">
		<div class="heading">
			<h2>A strategic logistics and distribution location</h2>
		</div>
		<div class="block" data-aos="fade-up">
			<div class="column">
				<div class="icon"><img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/icon1.svg" alt=""></div>
				<div class="text">
					<h3>24/7 B-Double access</h3>
					<p>Unrestricted vehicle access enabling efficient freight movement</p>
				</div>
			</div>
			<div class="column">
				<div class="icon"><img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/icon2.svg" alt=""></div>
				<div class="text">
					<h3>Flexible configurations</h3>
					<p>Choose from 3,000 to 28,700 sqm* of functional warehouse space</p>
				</div>
			</div>
			<div class="column">
				<div class="icon"><img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/icon3.svg" alt=""></div>
				<div class="text">
					<h3>All weather loading</h3>
					<p>Protected loading facilities regardless of weather conditions</p>
				</div>
			</div>
			<div class="column">
				<div class="icon"><img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/icon4.svg" alt=""></div>
				<div class="text">
					<h3>Leasing in Q4 2027</h3>
					<p>Available to commit now</p>
				</div>
			</div>
			<div class="column">
				<div class="icon"><img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/icon5.svg" alt=""></div>
				<div class="text">
					<h3>4-star</h3>
					<p>Targeting a 4-Star Green Star sustainability rating</p>
				</div>
			</div>
			<div class="column">
				<div class="icon"><img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/icon6.svg" alt=""></div>
				<div class="text">
					<h3>1,060 sqm*</h3>
					<p>of dedicated container-rated hardstand space</p>
				</div>
			</div>
		</div>
	</div>
	<p class="note">*Approximately</p>
</div>
<div class="image-full" data-aos="fade">
	<p class="caption">Artist Impression</p>
	<img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/img1.jpg" alt="">
</div>
<?php get_footer();?>