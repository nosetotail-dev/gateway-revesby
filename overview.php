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
			<h2>Key<br> Highlights</h2>
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

<div class="section section-home2 light">
	<div class="container">
		<div class="heading">
			<h2>Sustainability<br> Features</h2>
		</div>
		<div class="block" data-aos="fade-up">
			<div class="column">
				<div class="icon"><img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/icon12.svg" alt=""></div>
				<div class="text alt">
					<h3>Waste<br>Diversion</h3>
					<p>90% of construction and demolition waste diverted from landfill by reusing the existing building structure and prioritising recycling throughout construction.</p>
				</div>
			</div>
			<div class="column">
				<div class="icon"><img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/icon13.svg" alt=""></div>
				<div class="text alt">
					<h3>Responsible <br>Materials</h3>
					<p>All envelope and interior finishes are responsibly sourced and selected for independently verified environmental certifications, ensuring supply chain transparency and traceability.</p>
				</div>
			</div>
			<div class="column">
				<div class="icon"><img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/icon14.svg" alt=""></div>
				<div class="text alt">
					<h3>Healthy Indoor <br>Environment</h3>
					<p>The building prioritises occupant health through low-emission finishes and on-site testing for VOCs and formaldehyde, improving indoor air quality and reducing exposure to toxins.</p>
				</div>
			</div>
			<div class="column">
				<div class="icon"><img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/icon15.svg" alt=""></div>
				<div class="text alt">
					<h3>Low-Carbon & <br>Renewable Energy</h3>
					<p>The base building operates on 100% renewable energy and includes a 320kW on-site solar PV system, significantly reducing operational carbon emissions.</p>
				</div>
			</div>
			<div class="column">
				<div class="icon"><img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/icon16.svg" alt=""></div>
				<div class="text alt">
					<h3>Reduced <br>Embodied Carbon</h3>
					<p>A Life Cycle Assessment (LCA) guides material selection to lower embodied carbon and reduce environmental impacts across the building’s full lifespan compared to a typical development.</p>
				</div>
			</div>
			<div class="column">
				<div class="icon"><img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/icon17.svg" alt=""></div>
				<div class="text alt">
					<h3>Water & System<br>Efficiency</h3>
					<p>Rainwater is reused for toilet flushing and landscape irrigation, while high-efficiency mechanical, electrical, and lighting systems minimize energy and water consumption. A smart sub-metering platform tracks energy use for continuous performance optimization.</p>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer();?>