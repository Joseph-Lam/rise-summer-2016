<?php
/**
 * The template for displaying donate page.
 * Template Name: Donate Page
 * @package Rise_Legal_theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>


			<article id="post-<?php the_ID(); ?>" class="flex-center donate-container"<?php post_class(); ?>>

				<section class="about-content container">
					<header class="entry-header donate-header">
						<img src="<?php echo get_template_directory_uri() ."/assets/icons/icon-whydonate.svg"?>">

						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					</header><!-- .entry-header -->
					<div>
						<?php the_content(); ?>
					</div>
				</section>
				
				<section>
					<div class="title-banner donate-legal-stat">
						<?php echo CFS()->get( 'legal_stat' ); ?>
					</div>

					<div class="donate-criteria container">
						<?php echo CFS()->get( 'criteria' ); ?>
					</div>
				</section>

				<section>
					<div class="title-banner donate-who-title">
						<img src="<?php echo get_template_directory_uri() ."/assets/icons/icon-familyhelp.svg"?>">
						<h2> who do we help </h2>
					</div>

					<div class="donate-who-content container">
						<?php echo CFS()->get( 'who_do_we_help' ); ?>
					</div>
				</section>

				<section>
					<div class="title-banner donate-how-title">
						<img src="<?php echo get_template_directory_uri() ."/assets/icons/icon-helphand-white.svg"?>">
						<h2> how we help </h2>
					</div>

					<div class="donate-how-content container">
						<?php echo CFS()->get( 'how_we_help_main_content' ); ?>
					</div>
				</section>

				<ul class="donate-justice-container">
					<li class="donate-justice">
						<div class="justice-number-container">
							<img src="<?php echo get_template_directory_uri() ."/assets/icons/icon-1.svg"?>">
						</div>

						<div class="donate-justice-meta">
							<?php echo CFS()->get( 'how_we_help_justice_1' ); ?>
						</div>							
					</li>

					<li class="donate-justice">
						<div class="justice-number-container">
							<img src="<?php echo get_template_directory_uri() ."/assets/icons/icon-2.svg"?>">
						</div>
						<div class="donate-justice-meta">
							<?php echo CFS()->get( 'how_we_help_justice_2' ); ?>
						</div>
					</li>

					<li class="donate-justice">
						<div class="justice-number-container">
							<img src="<?php echo get_template_directory_uri() ."/assets/icons/icon-3.svg"?>">
						</div>
						<div class="donate-justice-meta">
							<?php echo CFS()->get( 'how_we_help_justice_3' ); ?>
						</div>
					</li>
				</ul>

				<section class="donate">
					<?php get_template_part( 'template-parts/content', 'howtodonate' ); ?>
				</section>


			</section><!-- .donate-content -->
		</article><!-- #post-## -->


	<?php endwhile; // End of the loop. ?>

</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
