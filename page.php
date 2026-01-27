<?php get_header(); ?>
<div class="section section-default">
	<div class="container container-sm" data-aos="fade">
		<h1><?php the_title(); ?></h1>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; // end of the loop. ?>
	</div>
</div>

<?php get_footer();?>