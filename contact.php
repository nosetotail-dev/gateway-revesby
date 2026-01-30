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
				<div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/1140656527?h=1b0269c967&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479&portrait=0&byline=0&title=0&rel=0" frameborder="0" allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share" referrerpolicy="strict-origin-when-cross-origin" style="position:absolute;top:0;left:0;width:100%;height:100%;" title="61 Milperra Road, Revesby | Gateway Capital"></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
			</div>
		</div>
	</div>
</div>
<div class="anchor" id="enquire"></div>

<?php include('agents.php'); ?>
<?php get_footer();?>