<?php 
/*
Template Name: Location
*/
get_header(); ?>

<div class="hero-home">
	<div class="container">
		<div data-aos="fade-left">
			<h1>Revesby Rise</h1>
			<h2>Prime positioned<br> industrial asset</h2>
		</div>
		<div class="link">
			<a href="#explore" class="btn btn-primary">Explore More</a>
			<a href="<?php echo get_home_url(); ?>/contact" class="btn btn-tertiary">Enquire</a>
		</div>
	</div>
	<div class="bg">
		<p class="caption">Artist Impression</p>
		<img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/bg_location.jpg" alt="">
	</div>
</div>
<div class="anchor" id="explore"></div>
<div class="section section-home1">
	<div class="container">
		<div class="block" data-aos="fade">
			<div class="column">
				<div class="heading">
					<h2>At the Centre of<br> Distribution</h2>
				</div>
				<div class="text">
					<p>Revesby Rise is situated at the intersection of Sydney’s most critical logistics corridors. Immediate access to Milperra Road, the M5, and Cumberland Highway connects tenants to national distribution networks.</p>

					<div class="textlink">
						<a href="#location">View Location</a>
					</div>
				</div>
			</div>
			<div class="column"></div>
		</div>
	</div>
</div>
<div class="anchor" id="location"></div>
<div class="section section-home2">
	<div class="container">
		<div class="heading">
			<h2>Location<br> Overview</h2>
		</div>
		<div class="block" data-aos="fade-up">
			<div class="column">
				<div class="icon"><img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/icon7.svg" alt=""></div>
				<div class="text">
					<h3 class="alt">Located in a premier industrial location</h3>
				</div>
			</div>
			<div class="column">
				<div class="icon"><img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/icon8.svg" alt=""></div>
				<div class="text">
					<h3 class="alt">17km* West of Sydney Airport & Port Botany</h3>
				</div>
			</div>
			<div class="column">
				<div class="icon"><img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/icon9.svg" alt=""></div>
				<div class="text">
					<h3 class="alt">22km* from Sydney CBD</h3>
				</div>
			</div>
			<div class="column">
				<div class="icon"><img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/icon10.svg" alt=""></div>
				<div class="text">
					<h3 class="alt">Immediate access to Milperra Road, South-Western Motorway and Cumberland Highway</h3>
				</div>
			</div>
			<div class="column">
				<div class="icon"><img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/icon11.svg" alt=""></div>
				<div class="text">
					<h3 class="alt">Serviced by multiple surrounding cafes</h3>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="section section-location">
	<div class="container">
		<div class="heading">
			<h2>Connected to<br> everything</h2>
		</div>
		<div class="text">
			<p>Enjoy immediate access to the M5 / South Western Motorway, providing fast, direct connections to the Cumberland Highway and Sydney’s major transport network. The site is positioned just 17km* west of Sydney Airport and Port Botany, and 22km* from the Sydney CBD — a key advantage for logistics-driven occupiers.</p>
		</div>

		<div class="map" data-aos="fade">
			<div id="image-map-pro-container"></div>
		</div>
	</div>
</div>
<div class="image-full" data-aos="fade">
	<img src="<?php echo the_field('map_image'); ?>" alt="">
</div>
<div class="section section-location-sc">
	<div class="container">
		<div class="block">
			<div class="column">
				<div class="heading">
					<h2>Location<br> Scorecard</h2>
				</div>

				<div class="text">
					<p>Revesby Rise is perfectly located in close 
					proximity to national distribution centres 
					and store networks.</p>
				</div>

				<div class="stat">
					<div class="coln">
						<h3>626k</h3>
						<p>Households in 30 minute direct drive time</p>
					</div>
					<div class="coln">
						<h3>1.5m</h3>
						<p>Households in 60 minute direct drive time</p>
					</div>
					<div class="coln">
						<h3>766k</h3>
						<p>Higher income households in 60 minute direct drive time</p>
					</div>
					<div class="coln">
						<h3>277k</h3>
						<p>Higher income households in 30 minute direct drive time</p>
					</div>
				</div>
			</div>
			<div class="column" data-aos="fade">
				<div class="image"><img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/scorecard.png" alt=""></div>
			</div>

		</div>
	</div>
</div>
<div class="section section-cta">
	<div class="container" data-aos="fade-up">
		<h2>Ready to move forward</h2>
		<p>Speak with our team about leasing opportunities at Gateway Revesby.</p>
		<div class="link">
			<a href="<?php echo get_home_url(); ?>/contact" class="btn btn-primary">Enquire</a>
			<a href="<?php echo get_home_url(); ?>/floorplans" class="btn btn-tertiary">View Floorplans</a>
		</div>
	</div>
</div>
<?php get_footer();?>