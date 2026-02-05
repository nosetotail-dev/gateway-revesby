<?php 
/*
Template Name: Floorplans
*/
get_header(); ?>

<div class="hero-home sm">
	<div class="container">
		<div data-aos="fade-left">
			<h1>Revesby Rise</h1>
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
			<div class="content active" data-id="warehouse1">
				<h2>Level 1 –<br> 
					Warehouse 1
				</h2>
				<p>Available for lease</p>
			</div>
			<div class="content" data-id="warehouse2">
				<h2>Level 1 –<br> 
					Warehouse 2
				</h2>
				<p>Available for lease</p>
			</div>
			<div class="content" data-id="breezeway">
				<h2>Level 1 –<br> 
					Breezeway
				</h2>
				<p>&nbsp;</p>
			</div>
		</div>
		<div class="link"><a href="<?php the_field('racking_layouts'); ?>" download class="btn btn-primary">Download Indicative Racking Layouts</a></div>
	</div>
	<div class="warehouse" data-aos="fade">
		<div class="image active" data-id="warehouse1"><img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/warehouse1.png" alt=""></div>
		<div class="image" data-id="warehouse2"><img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/warehouse2.png" alt=""></div>
		<div class="image" data-id="breezeway"><img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/breezeway.png" alt=""></div>
		<div id="warehouse"></div>
		<img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/warehouse.png?ver=1.1" class="base" alt="">
	</div>
</div>
<?php 
$images = get_field('slider');
if( $images ): ?>
<div class="project-slider">
	<div class="slider">
        <?php foreach( $images as $image ): ?>
		<div>
			<div class="image">
				<p class="caption"><?php echo esc_html($image['caption']); ?></p>
				<img src="<?php echo esc_url($image['url']); ?>" alt="">
			</div>
		</div>
        <?php endforeach; ?>
	</div>
</div>
<?php endif; ?>
<div class="section section-floorplan">
	<div class="container">
		<div class="heading">
			<div class="content active" data-id="2b">
				<h2>Level 1<br> Warehouse 2B</h2>
				<p>Flexible Sizing available</p>
				<p>WAREHOUSE: 3,733 sqm<br>
				OFFICE: 356 sqm<br>
				GLA: 4,089 sqm</p>
			</div>
			<div class="content" data-id="2c">
				<h2>Level 1<br> Warehouse 2C</h2>
				<p>Flexible Sizing available</p>
				<p>WAREHOUSE: 2,863 sqm<br>
				OFFICE: 356 sqm<br>
				GLA: 3,219 sqm</p>
			</div>
			<div class="content" data-id="2d">
				<h2>Level 1<br> Warehouse 2D</h2>
				<p>Flexible Sizing available</p>
				<p>WAREHOUSE: 2,878 sqm<br>
				OFFICE: 355 sqm<br>
				GLA: 3,233 sqm</p>
			</div>
			<div class="content" data-id="2e">
				<h2>Level 1<br> Warehouse 2E</h2>
				<p>Flexible Sizing available</p>
				<p>WAREHOUSE: 3,059 sqm<br>
				OFFICE: 355 sqm<br>
				GLA: 3,414 sqm</p>
			</div>
			<div class="content" data-id="1c">
				<h2>Level 1<br> Warehouse 1C</h2>
				<p>Flexible Sizing available</p>
				<p>WAREHOUSE: 3,521 sqm<br>
				OFFICE: 359 sqm<br>
				GLA: 3,880 sqm</p>
			</div>
			<div class="content" data-id="1d">
				<h2>Level 1<br> Warehouse 1D</h2>
				<p>Flexible Sizing available</p>
				<p>WAREHOUSE: 4,210 sqm<br>
				OFFICE: 359 sqm<br>
				GLA: 4,569 sqm</p>
			</div>
			<div class="content" data-id="1e">
				<h2>Level 1<br> Warehouse 1E</h2>
				<p>Flexible Sizing available</p>
				<p>WAREHOUSE 1C 4,280 m²<br>
				OFFICE 1C 323 m²<br>
				GLA: 4,603 sqm</p>
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
			<img src="<?php echo the_field('floorplan_image'); ?>" class="base" alt="">
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