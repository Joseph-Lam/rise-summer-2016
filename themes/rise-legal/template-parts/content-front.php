<?php
/**
 * Template part for displaying front page content in front-page.php.
 *
 * @package Rise_Legal_theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="front-banner">
		
		<div class="banner-content container">
			<?php the_title( '<h1 class="front-title">', '</h1>' ); ?>
			<?php the_content(); ?>
			<a class="btn" href="<?php echo get_page_link( get_page_by_title( 'About Us' )->ID ); ?>">learn more</a>
		</div>
	</header><!-- .entry-header -->

	<div class="entry-content">

		<section class="contact-process">
			<h2 class="flex-center"> Contact Process</h2>
		<!-- This function gets the contact process icons -->
			<?php get_template_part( 'template-parts/content', 'contact-process' ); ?>
			<div class="contact-process flex-center">
				<p> 
					We are now taking appointments for the month of <?php echo CFS()->get('now_booking_month') ?> 
				</p>
				<a class="red-btn btn " href="<?php echo get_page_link( get_page_by_title( 'Legal Contact Form' )->ID ); ?>">legal contact form</a>
				<a class="btn" href="<?php echo get_page_link( get_page_by_title( 'Services' )->ID ); ?>">who can we help</a>
			</div>
		</section>

		<section class="donate">
			<?php get_template_part( 'template-parts/content', 'howtodonate' ); ?>
			<div class="donate-content flex-center">
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
