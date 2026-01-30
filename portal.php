<?php 
/*
Template Name: Portal
*/
get_header(); ?>
<div class="hero-home sm">
	<div class="container">
		<div data-aos="fade-left">
			<h1>61 MILPERRA ROAD</h1>
			<h2>Project<br> Portal</h2>
		</div>
		<div class="link">
			<a href="#" class="btn btn-primary">Enquire</a>
		</div>
	</div>
	<div class="bg">
		<p class="caption">Artist Impression</p>
		<img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/bg_portal.jpg" alt="">
	</div>
</div>
<div class="section section-portal">
	<div class="container">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; // end of the loop. ?>
		<div class="enquiry">
			<div class="heading">
				<h2>Complaints and<br> Enquiries</h2>
			</div>
			<div class="info">
				<p>A register of project enquiries and complaints will be maintained for the development. In accordance with project requirements, a summary register will be made available on a quarterly basis.</p>
			</div>
			<!--
			<div class="agents" data-aos="fade">
				<div class="image"><img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/agent3.png" alt=""></div>
				<h4>Riley Sampson</h4>
				<p>Development Manager<br>
				+61 487 319 800<br>
				riley.sampson@gatewaycapital.com.au</p>
			</div>-->
		</div>

	</div>
</div>

<?php include('agents.php'); ?>
<?php get_footer();?>