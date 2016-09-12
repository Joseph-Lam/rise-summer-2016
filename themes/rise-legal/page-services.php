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
				
				<section class="who-we-help">
					<div class="title-banner services-banner flex-center">
						<img src="<?php echo get_template_directory_uri() ."/assets/icons/icon-familyhelp.svg"?>" class="rise-about-logo">	
						<h2>Who We Help</h2>
					</div>


					
				</section>

				<?php get_template_part( 'template-parts/content', 'howtodonate' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>