<?php 
/*
Template Name: Asset Overview
*/
get_header(); ?>

<div class="hero-project">
	<div class="container">
		<div class="content" data-aos="fade-left">
			<p class="cat"><span>Asset Overview</span></p>
			<h1>61 Milperra Road</h1>
			<p>Revesby, NSW</p>
		</div>
	</div>
	<div class="bg">
		<p class="caption">Artist Impression</p>
		<video autoplay="1" muted data-keepplaying playsinline preload loop poster="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/video.jpg">
			<source src="<?php bloginfo ('stylesheet_directory'); ?>/shared/video/video.mp4" type="video/mp4">
		</video>
	</div>
</div>
<div class="section section-projectinfo">
	<div class="container">
		<div class="anchor" id="overview"></div>
		<div class="heading">
			<h2>Built for modern<br> logistics operations</h2>
		</div>
		<div class="block">
			<div class="column">
				<div class="text">
					<p>61 Milperra Road provides an opportunity to occupy a state-of-the-art warehouse, in one of Sydney’s most established logistics hubs.</p>
				</div>
				<div class="size">
					<ul>
						<li><span>3,000* – 28,700* sqm</span> GLA</li>
					</ul>
				</div>
			</div>
			<div class="column">
				<div class="feature">
					<ul>
						<li>Flexible warehouse areas</li>
						<li>24/7 B-Double Access</li>
						<li>221 shared car parking spaces</li>
					</ul>
				</div>
			</div>
		</div>
		
	</div>
</div>
<?php if( have_rows('video_slider') ): ?>
<div class="project-slider">
	<div class="slider">
    <?php while( have_rows('video_slider') ): the_row(); 
        $video = get_sub_field('video');
        ?>
	    <div>
			<div class="image">
				<p class="caption">Artist Impression</p>
				<video muted playsinline preload poster="">
					<source src="<?php echo $video; ?>" type="video/mp4">
				</video>
			</div>
		</div>
    <?php endwhile; ?>
	</div>
</div>
<?php endif; ?>
<div class="section section-home2 light">
	<div class="container">
		<div class="heading">
			<h2>Key<br> highlights</h2>
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
<div class="section section-program">
	<div class="container">
		<div class="heading">
			<h2>Development<br> Program</h2>
		</div>
		<div class="text">
			<p>From approval to completion.</p>

			<div class="image" data-aos="fade-up">
				<img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/program.svg" alt="">
			</div>
		</div>
	</div>
</div>


<?php get_footer();?>