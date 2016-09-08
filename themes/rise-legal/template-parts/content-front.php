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
			<button>
				Learn More
			</button>
		</div>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<section>

		<!-- This function gets the contact process icons -->
			<?php get_template_part( 'template-parts/content', 'contact-process' ); ?>
			<p> 
				We are now taking appointments for the month of <?php echo CFS()->get('now_booking_month') ?> 
			</p>
		</section>
		

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
