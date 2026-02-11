
<footer>
	<div class="container">
		<div class="logo"><img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/gateway-logo-white.png" alt=""></div>
		<div class="block">
			<div class="column">
				<h3>Address</h3>
				<p>61 Milperra Road, Revesby NSW 2871</p>
				<h3>General Enquiries</h3>
				<p><a href="mailto:enquiries@gatewaycapital.com.au">enquiries@gatewaycapital.com.au</a></p>
				<ul class="social">
					<li><a href="https://www.linkedin.com/company/gatewaycapital-aus/?originalSubdomain=au" target="_blank"><img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/linkedIn.svg" alt=""></a></li>
				</ul>
			</div>
			<div class="column">
				<h3>Gateway Capital Contact Details</h3>

				<div class="agents">
					<div class="coln">
						<p><b>Dean Todorovski</b><br>
						+61 433 393 121<br> dean.todorovski@gatewaycapital.com.au</p>
					</div>
					<div class="coln">
						<p><b>Riley Sampson</b><br>
						+61 487 319 800<br> riley.sampson@gatewaycapital.com.au</p>
					</div>
					<div class="coln">
						<div class="logo"><img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/cbre.svg" alt=""></div>
						<p><b>Tom Rourke</b><br>
						+61 400 456 363<br>
						tom.rourke@cbre.com.au</p>
					</div>
					<div class="coln">
						<div class="logo"><img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/colliers.svg" alt=""></div>
						<p><b>Trent Gallagher</b><br>
						+61 432 242 063<br>
						trent.gallagher@colliers.com</p>
					</div>
				</div>

				
			</div>
			<div class="column navi">
				<?php 
					wp_nav_menu( array(
						'theme_location' => 'footer-menu',
						'fallback_cb'	=> false,
						'menu_class' => 'footer-menu'
					) );
				?>
			</div>
		</div>
		<div class="copy">
			<p>Copyright 2024 — Gateway Capital Holdings Pty Ltd</p>
			<ul>
				<li><a href="https://gatewaycapital.com.au/privacy-policy/" target="_blank">Privacy Policy</a></li>
				<li><a href="https://gatewaycapital.com.au/disclaimer/" target="_blank">Disclaimer</a></li>
			</ul>
		</div>
	</div>
</footer>

<script src="<?php bloginfo ('stylesheet_directory'); ?>/shared/js/jquery.min.js"></script>
<script src="<?php bloginfo ('stylesheet_directory'); ?>/shared/js/bootstrap.min.js"></script>
<script src="<?php bloginfo ('stylesheet_directory'); ?>/shared/js/image-map-pro.min.js"></script>
<script src="<?php bloginfo ('stylesheet_directory'); ?>/shared/js/libs.min.js"></script>
<!--
<script 
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAVeWNOMfMl22nJoTZnKZMDWw47CB2oy5k&callback=initMap&loading=async" 
  async 
  defer>
</script>

<script src="<?php bloginfo ('stylesheet_directory'); ?>/shared/js/ajax.js?ver=<?php echo time(); ?>"></script>-->
<script src="<?php bloginfo ('stylesheet_directory'); ?>/shared/js/scripts.js?ver=<?php echo time(); ?>"></script>
<?php wp_footer(); ?>
</body>
</html>