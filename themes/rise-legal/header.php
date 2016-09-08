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
	<?php wp_head(); ?>

	<script type="text/javascript"
   src="<?php bloginfo("template_url"); ?>/build/js/hamburger-menu.min.js"></script>

</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

		<header id="masthead" class="site-header" role="banner">
			<div class="site-branding">
				<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<p class="site-description"><?php bloginfo( 'description' ); ?></p>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>

				<div class="menu-wrap">
					<button class="hamburger">&#9776;</button>
  					<button class="cross">&#735;</button>

					<div class="menu">
						<ul>
							<li><a href="#">Services</a></li>
							<li><a href="#">Resources</a></li>
							<li><a href="#">Students</a></li>
							<li><a href="#">Donate</a></li>
							<li><a href="#">Contact</a></li>
						</ul>			
					</div>
				</div>

			</nav><!-- #site-navigation -->
		</header><!-- #masthead -->

		<div id="content" class="site-content">
