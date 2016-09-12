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
					</div>
					<!-- Staff Listing -->
					<ul class="services flex-center">
						<?php
							$args = array(
								'post_type' => 'services',
								'numberposts' => -1,
								'order' => 'ASC',
								);
							$services_page_services_posts = get_posts($args);
							?>

							<?php foreach($services_page_services_posts as $post) : setup_postdata( $post); ?>
							<li class="indvid-services">
								<a href="#<?php the_title();?>" class="services-modal-btn">
									<img src="<?php echo get_template_directory_uri() ."/assets/icons/icon-".$post->post_name.".svg"?>">
										
								</a>
								<?php the_title();?>
								<div id="<?php the_title();?>" class="modalDialog">
									<div>
										<a href="#close" title="Close" class="close">
										</a>
										<img src="<?php echo get_template_directory_uri() ."/assets/icons/icon-".$post->post_name.".svg"?>">
										<h2><?php the_title();?></h2>
										<?php if ( has_post_thumbnail() ) : ?>
											<div>
												<?php the_post_thumbnail( 'original' ); ?>
											</div>
										<?php endif; ?>
						
										<p><?php the_content(); ?></p>
				
									</div>
								</div>
							</li>
						<?php endforeach; wp_reset_postdata(); ?>

					</ul>
				</div>

					
				</section>

				<?php get_template_part( 'template-parts/content', 'howtodonate' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>