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
			<section class="resources-content flex-center">
				<?php get_template_part( 'template-parts/content', 'page' ); ?>
				
				<button>
					Hours of Operation
				</button>


				<h3>External Help</h3>
				<?php echo CFS()->get('external_help')?>

			</section>
			
			<!-- Create the nav for glossary buttons here -->
				<div class="title-banner resource-banner flex-center">
					<ul>
						<?php wp_list_categories( array(
							'taxonomy' => 'alpha',
							'title_li' => ''
						) ); ?>
					</ul>
				</div>


		<!-- Do the GET POSTS stuff for the resources here -->

		<!-- I will need to create a php variable which is an array holding all of my letter ranges -->

		<!-- Then I will need to create a foreach loop of those letter ranges, to then grab the posts associated with them -->
			<section class="resources">	

			<!-- I will need to make sure the class of the ul is the same as the slug name so I can taget it with the link -->
				<ul class="resource-list">
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
					
					<li class="resource-post">
						<?php the_content();?>
					</li>	
					
				<?php endforeach; wp_reset_postdata(); ?>
				</ul>
			</section>


			<?php endwhile; // End of the loop. ?>
		
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>