<?php
/**
 * The template for displaying the front page.
 * Template Name: Home Page
 *
 * @package Rise_Legal_theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="front-banner">
						
						<div class="banner-content container">
							<?php the_title( '<h1 class="front-title">', '</h1>' ); ?>
							<?php the_content(); ?>
							<a class="btn" href="<?php echo get_page_link( get_page_by_title( 'About Us' )->ID ); ?>">learn more</a>
						</div>
					</header><!-- .entry-header -->

					<div class="entry-content">

						<section class="contact-process container">
							<h2 class="flex-center"> Contact Process</h2>
						<!-- This function gets the contact process icons -->
							<?php get_template_part( 'template-parts/content', 'contact-process' ); ?>
							<div class="contact-process-content">
								<p class="booking"> 
									We are now taking appointments for the month of <span class="month"> 
									<?php 
									$now_booking_month = CFS()->get('now_booking_month');
									if (!empty($now_booking_month)) {
										echo $now_booking_month;
									} ?> 
									</span>
								</p>
								<div class="contact-process-btn">
									<a class="red-btn btn " href="<?php echo get_page_link( get_page_by_title( 'Legal Contact Form' )->ID ); ?>">legal contact form</a>
									<a class="btn" href="<?php echo get_page_link( get_page_by_title( 'Services' )->ID ); ?>">who can we help</a>
								</div>
							</div>
						</section>

						<section class="donate">

							<?php get_template_part( 'template-parts/content', 'howtodonate' ); ?>

							<div class="donate-content-btn flex-center">
								<a class="btn red-btn" href="https://www.canadahelps.org/en/charities/west-coast-leaf/">Donate</a> 

								<a class="btn" href="<?php echo get_page_link( get_page_by_title( 'Why Donate?' )->ID ); ?>">why donate?</a>
							</div>

						</section>
						
						<?php
							wp_link_pages( array(
								'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
								'after'  => '</div>',
							) );
						?>
					</div><!-- .entry-content -->

				</article><!-- #post-## -->

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
