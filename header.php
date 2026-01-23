<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo YoastSEO()->meta->for_current_page()->title; ?></title>
<link rel="stylesheet" href="<?php bloginfo ('stylesheet_directory'); ?>/shared/css/libs.min.css?ver=<?php echo time(); ?>" media="all">
<link rel="stylesheet" href="<?php bloginfo ('stylesheet_directory'); ?>/shared/css/style.css?ver=<?php echo time(); ?>" media="all">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<?php wp_head(); ?>
<noscript>
	<style>
		[data-aos] {
			opacity: 1 !important;
			transform: translate(0) scale(1) !important;
		}
	</style>
</noscript>
</head>
<body>

<header id="header">
	<div class="container">
		<a class="logo" href="https://gatewaycapital.com.au/" target="_blank">
			<div class="over"><img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/icon_.gif" alt=""></div>
			<img src="<?php bloginfo ('stylesheet_directory'); ?>/shared/images/logo_alt.png" alt="">
		</a>
		<div class="toggle d-lg-none">
			<a href="#"><svg viewBox="0 0 24 18" fill="none" xmlns="http://www.w3.org/2000/svg" class="nav-icon"><path stroke="#ffffff" d="M0 1.147h24M0 9.147h24M0 17.148h24"></path></svg></a>
		</div>
		<div class="desktop-menu">
			<?php 
				wp_nav_menu( array(
					'theme_location' => 'header-menu',
					'fallback_cb'	=> false,
					'menu_class' => 'header-menu'
				) );
			?>
			<div class="link"><a href="<?php echo get_home_url(); ?>/contact" class="btn btn-primary">Enquire Now</a></div>
		</div>
	</div>
</header>

<div class="main-menu">
	<div class="main-wrapper">
		<div class="wrap">
			<div class="close">
				<svg xmlns="http://www.w3.org/2000/svg" width="21.63" height="19.982" viewBox="0 0 21.63 19.982">
				  <g id="Group_9" data-name="Group 9" transform="translate(-1356.832 -46.756)">
				    <line id="Line_1" data-name="Line 1" x2="20.294" y2="18.232" transform="translate(1357.5 47.763)" fill="none" stroke="#1a2c56" stroke-width="2"/>
				    <line id="Line_3" data-name="Line 3" y1="18.232" x2="20.294" transform="translate(1357.5 47.5)" fill="none" stroke="#1a2c56" stroke-width="2"/>
				  </g>
				</svg>
			</div>
			<div class="column first">
				<div class="menu-wrap">
					<?php 
						wp_nav_menu( array(
							'theme_location' => 'header-menu',
							'fallback_cb'	=> false,
							'menu_class' => 'header-menu'
						) );
					?>
					<div class="link"><a href="<?php echo get_home_url(); ?>/contact" class="btn btn-primary">Enquire Now</a></div>
				</div>
			</div>
		</div>
	</div>
</div>

