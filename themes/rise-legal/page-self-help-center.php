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
			<section class="container resources-content flex-center">
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php the_content(); ?>
					</div><!-- .entry-content -->
				</div><!-- #post-## -->

				<a class="btn " href="<?php echo get_page_link( get_page_by_title( 'Contact Us' )->ID ); ?>">hours of operation</a>

				<img src="<?php echo get_template_directory_uri() ."/assets/icons/icon-helphand.svg"?>">	
				
				<h3>External Help</h3>
				<?php 
				$external_help = CFS()->get('external_help');
				if (!empty($external_help)) : ?>
					<?php echo $external_help?>
				<?php endif; ?>

			</section>

				<!-- Create the nav for glossary buttons here -->
				<?php 
				$alphas = array(
					'a-b' => array('a', 'b'),
					'c-d' => array('c', 'd'),
					'e-j' => array('e', 'f', 'g', 'h', 'i', 'j'),
					'k-p' => array('k', 'l', 'm', 'n', 'o', 'p'),
					'q-t' => array('q', 'r', 's', 't'),
					'u-z' => array('u', 'v', 'w', 'x', 'y', 'y')
					);
					?>
					<div class="title-banner resource-banner flex-center">
						<?php foreach ($alphas as $name => $value) { ?>
						<button class="resource-button btn blue-btn <?php if($name === 'a-b') echo 'active' ?>" data-alpha="<?php echo $name ?>"> <?php echo $name ?>
							<?php } ?>
					</div>

							<section class="resources container">
								<?php foreach($alphas as $name => $alpha) {
									?>
									<ul class="resource-list <?php echo $name; ?>">
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
								<?php }?>
							</section>

						<?php endwhile; // End of the loop. ?>

	</main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>