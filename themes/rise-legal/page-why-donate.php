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


			<article id="post-<?php the_ID(); ?>" class=""<?php post_class(); ?>>

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
						<?php 
							$legal_stat = CFS()->get( 'legal_stat' );
							if(!empty($legal_stat)) {
								echo $legal_stat; }; 
							?>
					</div>

					<div class="donate-criteria container">
						<?php 
							$criteria = CFS()->get( 'criteria' );
							if(!empty($criteria)) {
								echo $criteria; }; 
							?>
					</div>
				</section>

				<section>
					<div class="title-banner donate-who-title">
						<img src="<?php echo get_template_directory_uri() ."/assets/icons/icon-familyhelp.svg"?>">
						<h2> who do we help </h2>
					</div>

					<div class="donate-who-content container">
						<?php 
							$who_do_we_help = CFS()->get( 'who_do_we_help' );
							if(!empty($who_do_we_help)) {
								echo $who_do_we_help; }; 
							?>
					</div>
				</section>

				<section>
					<div class="title-banner donate-how-title">
						<img src="<?php echo get_template_directory_uri() ."/assets/icons/icon-helphand-white.svg"?>">
						<h2> how we help </h2>
					</div>

					<div class="donate-how-content container">
						<?php 
							$how_we_help_main_content = CFS()->get( 'how_we_help_main_content' );
							if(!empty($how_we_help_main_content)) {
								echo $how_we_help_main_content; }; 
							?>
					</div>

				<ul class="donate-justice-container container">
					<li class="donate-justice">
						<img src="<?php echo get_template_directory_uri() ."/assets/icons/icon-1.svg"?>">

						<div class="donate-justice-meta">
							<?php 
								$how_we_help_justice_1 = CFS()->get( 'how_we_help_justice_1' );
								if(!empty($how_we_help_justice_1)) {
									echo $how_we_help_justice_1; }; 
							?>
						</div>							
					</li>

					<li class="donate-justice">
						<img src="<?php echo get_template_directory_uri() ."/assets/icons/icon-2.svg"?>">

						<div class="donate-justice-meta">
							<?php 
								$how_we_help_justice_2 = CFS()->get( 'how_we_help_justice_2' );
								if(!empty($how_we_help_justice_2)) {
									echo $how_we_help_justice_2; }; 
							?>
						</div>
					</li>

					<li class="donate-justice">
						<img src="<?php echo get_template_directory_uri() ."/assets/icons/icon-3.svg"?>">
						<div class="donate-justice-meta">
							<?php 
								$how_we_help_justice_3 = CFS()->get( 'how_we_help_justice_3' );
								if(!empty($how_we_help_justice_3)) {
									echo $how_we_help_justice_3; }; 
							?>		
						</div>
					</li>
				</ul>
				</section>
				
				<section class="donate">
					<?php get_template_part( 'template-parts/content', 'howtodonate' ); 
					?>
					<div class="donate-content-btn donate-page-btn">
						<a class="btn red-btn" href="https://www.canadahelps.org/en/charities/west-coast-leaf/">Donate</a> 
					</div>
				</section>


			</section><!-- .donate-content -->
		</article><!-- #post-## -->


	<?php endwhile; // End of the loop. ?>

</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
