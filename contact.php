<?php 
/*
Template Name: Contact
*/
get_header(); ?>
<div class="hero-default light sm">
	<div class="container">
		<div class="content" data-aos="fade">
			<h1>Contact Us</h1>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
		</div>
	</div>
</div>
<div class="section section-contact">
	<div class="container sm">
		<h2>General Enquiry</h2>
		<?php echo do_shortcode('[contact-form-7 id="ad08198" title="Contact form"]'); ?>
	</div>
</div>
<?php get_footer();?>