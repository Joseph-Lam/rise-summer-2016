<?php
/**
 * The header for our theme.
 *
 * @package Rise_Legal_theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_enqueue_script("jquery"); ?>
	<?php gravity_form_enqueue_scripts(1, true); ?>
	<?php wp_head(); ?>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

	<script type="text/javascript"
   src="<?php bloginfo("template_url"); ?>/build/js/hamburger-menu.min.js"></script>
	

</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

		<header id="masthead" class="site-header" role="banner">
			<div class="site-branding">
				<a href="<?php echo home_url()?>"><img src="<?php echo get_template_directory_uri() . '/assets/logos/rise-logo-white.svg' ?>" alt="home-page-icon"></a>

				<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<p class="site-description"><?php bloginfo( 'description' ); ?></p>
			</div><!-- .site-branding -->
			
			<div class="menu-wrap">
				<button class="hamburger">&#9776;menu</button>
			</div>
			<nav id="site-navigation" class="main-navigation" role="navigation">
				
				<!-- <input type="checkbox" id="slide-nav" class="slide-nav" role="button">
				<label for="slide-nav" class="slide-nav-toggle" onclick>
					<span class="hamburger">
						<span></span>
						<span></span>
						<span></span>
					</span>
				</label> -->

				<div class="slide">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</div>
			
				

			</nav><!-- #site-navigation -->
			<button>
					Legal Contact Form
				</button>


		</header><!-- #masthead -->
		<div class="hdr-pusher"></div>
		<div id="content" class="site-content">
