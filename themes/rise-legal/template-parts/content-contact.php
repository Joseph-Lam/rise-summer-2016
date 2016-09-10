<?php
/**
 * Template part for displaying page content in page-contact.php.
 * 
 * @package Rise_Legal_theme
 */

?>

<article id="post-<?php the_ID(); ?>" class="flex-center contact-container" <?php post_class(); ?>>
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
			<div class="responsive-map">
			<iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2603.7115811928634!2d-123.11630378412012!3d49.26291238009192!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548673dd81bd8ebf%3A0x2c3f66039d0db41c!2sRise+Women's+Legal+Centre!5e0!3m2!1sen!2sca!4v1473549430486" width="400" height="300" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
			</div>

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
