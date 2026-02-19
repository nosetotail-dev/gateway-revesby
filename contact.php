<?php 
/*
Template Name: Contact
*/
get_header(); ?>
<div class="hero-home sm">
	<div class="container">
		<div data-aos="fade-left">
			<h1>Contact</h1>
			<h2>Brought to you by<br> Gateway Capital</h2>
		</div>
		<div class="link">
			<a href="#enquire" class="btn btn-primary">Enquire</a>
		</div>
	</div>
	<div class="bg">
		<p class="caption">Artist Impression</p>
		<img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/bg_contact.jpg" alt="">
	</div>
</div>
<div class="section section-contact">
	<div class="container">
		<div class="block" data-aos="fade">
			<div class="column">
				<div class="heading">
					<h2>Built on proven<br> industrial expertise</h2>
				</div>
				<div class="text">
					<p>Gateway Capital is an Australian based investment management business focused on creating core assets in the industrial and logistics sectors through development and active management.</p>

					<div class="link">
						<a href="https://gatewaycapital.com.au/" target="_blank" class="btn btn-primary">Website</a>
						<div class="textlink"><a href="https://www.linkedin.com/company/gatewaycapital-aus/?originalSubdomain=au" target="_blank">Linkedin</a></div>
					</div>
				</div>
			</div>
			<div class="column">
				<div class="image"><img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/team.jpg" alt=""></div>
			</div>
		</div>
	</div>
</div>
<div class="anchor" id="enquire"></div>

<?php include('agents.php'); ?>
<?php get_footer();?>