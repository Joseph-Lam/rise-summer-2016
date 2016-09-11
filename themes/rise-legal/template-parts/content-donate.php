<?php
/**
 * Template part for displaying page content in page-donate.php.
 * 
 * @package Rise_Legal_theme
 */

?>

<article id="post-<?php the_ID(); ?>" class=""<?php post_class(); ?>>
	<header class="entry-header">
		<img src="<?php echo get_template_directory_uri() ."/assets/icons/icon-whydonate.svg"?>">

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
	<div class="donate-legal-stat">
		<?php echo CFS()->get( 'legal_stat' ); ?>
	</div>

	<div class="donate-criteria">
		<?php echo CFS()->get( 'criteria' ); ?>
	</div>

	<div class="donate-who-title">
		<img src="<?php echo get_template_directory_uri() ."/assets/icons/icon-familyhelp.svg"?>">
	</div>

	<div class="donate-who-content">
		<?php echo CFS()->get( 'who_do_we_help' ); ?>
	</div>

	</div><!-- .entry-content -->
</article><!-- #post-## -->
