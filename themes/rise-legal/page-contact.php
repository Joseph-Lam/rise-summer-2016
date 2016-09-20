<?php
/**
 * The template for displaying contact page.
 * Template Name: Contact Page
 * @package Rise_Legal_theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
			
			<article id="post-<?php the_ID(); ?>" class="flex-center contact-container" <?php post_class(); ?>>
				<header class="entry-header">
					<img src="<?php echo get_template_directory_uri() ."/assets/icons/icon-contactus.svg"?>">

					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header><!-- .entry-header -->

				<section class="contact-content">
					<div>
						<?php the_content(); ?>
					</div>

					<a class="btn" href="https://goo.gl/maps/f1KZEjw458C2">get directions</a>

					<ul>
						<li class="transit-information contact-notes">
							<img src="<?php echo get_template_directory_uri() ."/assets/icons/icon-transit.svg"?>">
							<?php 
								$transit_information = CFS()->get('transit_information');
								if( !empty($transit_information) ){
									echo $transit_information; };
							?>
						</li>
						<li class="parking-information contact-notes">
							<img src="<?php echo get_template_directory_uri() ."/assets/icons/icon-noparking.svg"?>">
							<?php 
								$parking_information = CFS()->get('parking_information');
								if( !empty($parking_information) ){
									echo $parking_information; };
							?>
						</li>
						<li class="wait-list-information contact-notes">
							<img src="<?php echo get_template_directory_uri() ."/assets/icons/icon-hourglass.svg"?>">
							<?php 
								$wait_list_information = CFS()->get('wait_list_information');
								if( !empty($wait_list_information) ){
									echo $wait_list_information; };
							?>
						</li>
					</ul>
					
				</section><!-- .entry-content -->
			</article><!-- #post-## -->


		<?php endwhile; // End of the loop. ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
