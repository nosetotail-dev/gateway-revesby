<?php 
/*
Template Name: Floorplans
*/
get_header(); ?>

<div class="hero-home sm">
	<div class="container">
		<div data-aos="fade-left">
			<h1>Warehouse Spaces</h1>
			<h2>Warehouse<br> Spaces</h2>
		</div>
		<div class="link">
			<a href="#explore" class="btn btn-primary">Explore Spaces</a>
		</div>
	</div>
	<div class="bg">
		<p class="caption">Artist Impression</p>
		<img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/bg_floorplans.jpg" alt="">
	</div>
</div>
<div class="anchor" id="explore"></div>
<div class="section section-warehouse">
	<div class="container">
		<div class="heading">
			<h2>Level 1 –<br> 
				<span data-id="warehouse1" class="active">Warehouse 1</span>
				<span data-id="warehouse2">Warehouse 2</span>
			</h2>
			<p>Available for lease</p>
		</div>
	</div>
	<div class="warehouse" data-aos="fade">
		<div class="image active" data-id="warehouse1"><img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/warehouse1.png" alt=""></div>
		<div class="image" data-id="warehouse2"><img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/warehouse2.png" alt=""></div>
		<div id="warehouse"></div>
		<img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/warehouse.png" class="base" alt="">
	</div>
	<div class="container">
		<div class="link"><a href="<?php the_field('racking_layouts'); ?>" download class="btn btn-primary">Download Indicative Racking Layouts</a></div>
	</div>
</div>
<div class="project-slider">
	<div class="slider">
		<div>
			<div class="image">
				<p class="caption">Artist Impression</p>
				<img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/slider1.jpg" alt="">
			</div>
		</div>
		<div>
			<div class="image">
				<p class="caption">Artist Impression</p>
				<img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/slider2.jpg" alt="">
			</div>
		</div>
	</div>
</div>

<div class="section section-floorplan">
	<div class="container">
		<div class="heading">
			<div class="content active" data-id="2b">
				<h2>Level 1<br> Warehouse 2B</h2>
				<p>Flexible Sizing available</p>
				<p>GLA: 4,089 sqm*</p>
			</div>
			<div class="content" data-id="2c">
				<h2>Level 1<br> Warehouse 2C</h2>
				<p>Flexible Sizing available</p>
				<p>GLA: 3,219 sqm*</p>
			</div>
			<div class="content" data-id="2d">
				<h2>Level 1<br> Warehouse 2D</h2>
				<p>Flexible Sizing available</p>
				<p>GLA: 3,233 sqm*</p>
			</div>
			<div class="content" data-id="2e">
				<h2>Level 1<br> Warehouse 2E</h2>
				<p>Flexible Sizing available</p>
				<p>GLA: 3,414 sqm*</p>
			</div>
			<div class="content" data-id="1c">
				<h2>Level 1<br> Warehouse 1C</h2>
				<p>Flexible Sizing available</p>
				<p>GLA: 3,880 sqm*</p>
			</div>
			<div class="content" data-id="1d">
				<h2>Level 1<br> Warehouse 1D</h2>
				<p>Flexible Sizing available</p>
				<p>GLA: 4,569 sqm*</p>
			</div>
			<div class="content" data-id="1e">
				<h2>Level 1<br> Warehouse 1E</h2>
				<p>Flexible Sizing available</p>
				<p>GLA: 4,603 sqm*</p>
			</div>
		</div>
		
		<div class="floorplan" data-aos="fade">
			<div class="image active" data-id="2b"><img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/floorplan_2b.png" alt=""></div>
			<div class="image" data-id="2c"><img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/floorplan_2c.png" alt=""></div>
			<div class="image" data-id="2d"><img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/floorplan_2d.png" alt=""></div>
			<div class="image" data-id="2e"><img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/floorplan_2e.png" alt=""></div>
			<div class="image" data-id="1c"><img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/floorplan_1c.png" alt=""></div>
			<div class="image" data-id="1d"><img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/floorplan_1d.png" alt=""></div>
			<div class="image" data-id="1e"><img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/floorplan_1e.png" alt=""></div>
			<div id="floorplan"></div>
			<img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/floorplan.png" class="base" alt="">
		</div>

		<div class="link"><a href="<?php the_field('floorplan_pack'); ?>" class="btn btn-primary" download>Download FULL Floorplan Pack</a></div>
	</div>
</div>
<div class="section section-cta">
	<div class="container" data-aos="fade-up">
		<h2>Ready to move forward</h2>
		<p>Speak with our team about leasing opportunities at Gateway Revesby.</p>
		<div class="link">
			<a href="<?php echo get_home_url(); ?>/contact" class="btn btn-primary">Enquire</a>
			<a href="<?php echo get_home_url(); ?>/location" class="btn btn-tertiary">View Location</a>
		</div>
	</div>
</div>

<?php get_footer();?>