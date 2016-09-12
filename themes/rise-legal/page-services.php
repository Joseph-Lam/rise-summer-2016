<?php
/**
 * The template for displaying the services page.
 * Template Name: Services Page
 *
 * @package Rise_Legal_theme
 */

get_header(); ?>
	
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<!-- this gets the main about us blurb -->
			<?php while ( have_posts() ) : the_post(); ?>

				<section class="about-content">
					<?php the_title( '<h1 class="front-title">', '</h1>' ); ?>
					<?php the_content(); ?>
				</section>
				
				<div class="title-banner about-banner flex-center">
				<!-- display logo on mobile -->
					<img src="<?php echo get_template_directory_uri() ."/assets/logos/rise-logo-white.svg"?>" class="rise-about-logo">	

				</div>
				<?php get_template_part( 'template-parts/content', 'howtodonate' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>