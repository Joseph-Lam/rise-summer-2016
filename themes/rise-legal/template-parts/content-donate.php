<?php
/**
 * Template part for displaying page content in page-donate.php.
 * 
 * @package Rise_Legal_theme
 */

?>

<article id="post-<?php the_ID(); ?>" class="flex-center donate-container"<?php post_class(); ?>>
	<header class="entry-header">
		<img src="<?php echo get_template_directory_uri() ."/assets/icons/icon-whydonate.svg"?>">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="donate-content">
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
				<h2> who do we help </h2>
			</div>

			<div class="donate-who-content">
				<?php echo CFS()->get( 'who_do_we_help' ); ?>
			</div>

			<div class="donate-how-title">
				<img src="<?php echo get_template_directory_uri() ."/assets/icons/icon-helphand-white.svg"?>">
				<h2> how we help </h2>
			</div>

			<div class="donate-how-content">
				<?php echo CFS()->get( 'how_we_help_main_content' ); ?>
			</div>

			<div class="donate-justice-container">
				<div class="donate-justice">
					<div class="justice-number-container">
						<img src="<?php echo get_template_directory_uri() ."/assets/icons/icon-1.svg"?>">
					</div>
					
					<div class="donate-justice-meta">
						<?php echo CFS()->get( 'how_we_help_justice_1' ); ?>
					</div>
				</div>

				<div class="donate-justice">
					<div class="justice-number-container">
						<img src="<?php echo get_template_directory_uri() ."/assets/icons/icon-2.svg"?>">
					</div>
					<div class="donate-justice-meta">
						<?php echo CFS()->get( 'how_we_help_justice_2' ); ?>
					</div>
				</div>

				<div class="donate-justice">
					<div class="justice-number-container">
						<img src="<?php echo get_template_directory_uri() ."/assets/icons/icon-3.svg"?>">
					</div>
					<div class="donate-justice-meta">
						<?php echo CFS()->get( 'how_we_help_justice_3' ); ?>
					</div>
				</div>
			</div>
			
			<section class="donate">
				<?php get_template_part( 'template-parts/content', 'howtodonate' ); ?>
				<div class="donate-content flex-center">
					<button>
						Why Donate?
					</button>
					</div>
			</section>


		</div><!-- .donate-content -->
	</article><!-- #post-## -->
