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
				
				<button>
					Hours of Operation
				</button>


				<h3>External Help</h3>
				<?php echo CFS()->get('external_help')?>

<!-- Create the nav for glossary buttons here -->
				<ul>
					<?php wp_list_categories( array(
						'taxonomy' => 'alpha',
						'title_li' => ''
					) ); ?>
				</ul>

		<!-- Do the GET POSTS stuff for the resources here -->

		<!-- I will need to create a php variable which is an array holding all of my letter ranges -->

		<!-- Then I will need to create a foreach loop of those letter ranges, to then grab the posts associated with them -->
				<ul>
				<?php 
					$args = array(
						'post_type' => 'resources',
						'numberposts' => -1,
						'order' => 'ASC',
						'tax_query' => array(
							array(
								'taxonomy' => 'alpha',
								'field' => 'slug',
						//I assume I will replace the below term array with a variable that will hold the letter range.
								'terms' => array('a','b'),
								)
							)
						);
					$resources_page_ab_posts = get_posts($args);
				?>
				<?php foreach($resources_page_ab_posts as $post) : setup_postdata( $post ); ?>
					
					<li>
						<?php the_content();?>
					</li>	
					
				<?php endforeach; wp_reset_postdata(); ?>
				</ul>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>