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
			<?php 
			$alphas = array(
				'a-b' => array('a', 'b'),
				'c-d' => array('c', 'd'),
				'e-j' => array('e', 'f', 'g', 'h', 'i', 'j'),
				'k-m' => array('k', 'l', 'm'),
				'n-p' => array('n', 'o', 'p'),
				'q-t' => array('q', 'r', 's', 't'),
				'u-z' => array('u', 'v', 'w', 'x', 'y', 'y')
				);
			?>
			<div class="title-banner resource-banner flex-center">
				<ul>
					<?php foreach ($alphas as $name => $value) { ?>
						<li class="<?php echo 'menu-'.$name ?>"><?php echo $name ?></li>
					<?php } ?>
				</ul>
			</div>

			<?php foreach($alphas as $name => $alpha) {
				?>
				<section class="resources resources-<?php echo $name; ?>">
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
								'terms' => $alpha
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
			<?php }?>

	


<?php endwhile; // End of the loop. ?>

</main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>