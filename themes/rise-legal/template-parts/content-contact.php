<?php
/**
 * Template part for displaying page content in page-contact.php.
 * 
 * @package Rise_Legal_theme
 */

?>

<article id="post-<?php the_ID(); ?>" class="" <?php post_class(); ?>>
	<header class="entry-header">
		<img src="<?php echo get_template_directory_uri() ."/assets/icons/icon-contactus.svg"?>">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
			'after'  => '</div>',
			) );
			?>

			<button>Get Directions</button>

			<div class="transit-information">
				<img src="<?php echo get_template_directory_uri() ."/assets/icons/icon-transit.svg"?>">
				<?php echo CFS()->get( 'transit_information' ); ?>
			</div>
			<div class="parking-information">
				<img src="<?php echo get_template_directory_uri() ."/assets/icons/icon-noparking.svg"?>">
				<?php echo CFS()->get( 'parking_information' ); ?>
			</div>
			<div class="wait-list-information">
			<img src="<?php echo get_template_directory_uri() ."/assets/icons/icon-hourglass.svg"?>">
				<?php echo CFS()->get( 'wait_list_information' ); ?>
			</div>


		</div><!-- .entry-content -->
	</article><!-- #post-## -->
