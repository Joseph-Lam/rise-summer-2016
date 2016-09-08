<?php
/**
 * Template part for displaying front page content in front-page.php.
 *
 * @package Rise_Legal_theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="front-banner">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php the_content(); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
