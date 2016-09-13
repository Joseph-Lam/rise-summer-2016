<?php
/**
 * The template for displaying all pages.
 * Template Name: Resources Page
 *
 * @package Rise_Legal_theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>


<!-- Create the nav for glossary buttons here -->
				<ul>
					<?php wp_list_categories( array(
						'taxonomy' => 'alpha',
						'title_li' => ''
					) ); ?>
				</ul>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>