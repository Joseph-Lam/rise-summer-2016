<?php
/**
 * Template part for displaying page content in page-contact.php.
 * 
 * @package Rise_Legal_theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
	<!-- 	<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
		 -->
		<?php echo CFS()->get( 'transit_information' ); ?>
		<?php echo CFS()->get( 'parking_information' ); ?>	
		<?php echo CFS()->get( 'wait_list_information' ); ?>



	</div><!-- .entry-content -->
</article><!-- #post-## -->
