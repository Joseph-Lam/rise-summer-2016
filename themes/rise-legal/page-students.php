<?php
/**
 * The template for displaying the students page.
 * Template Name: Student Page
 *
 * @package Rise_Legal_theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" class="flex-center student-container" <?php post_class(); ?>>

				<section class="about-content container">	
					<header class="entry-header">

						<?php the_title( '<h1 class="student-title">', '</h1>' ); ?>
					</header><!-- .entry-header -->
					<div>
						<?php the_content(); ?>
					</div>

				</section>

				<section class="students-content">

					<div class="title-banner externship-banner">
						<img src="<?php echo get_template_directory_uri() ."/assets/icons/icon-externship-white.svg"?>">
						<h2> the externship </h2>
					</div>

					<div class="container student-externship">
						<?php echo CFS()->get( 'externship' ); ?>
					</div>


					<ul class="container">
						<li class="student-features">
							<img src="<?php echo get_template_directory_uri() ."/assets/icons/icon-students-orientation.svg"?>">
							
							<div class="student-feature-meta">
								<?php echo CFS()->get( 'student_orientation' ); ?>
							</div>
						</li>

						<li class="student-features">
							<img src="<?php echo get_template_directory_uri() ."/assets/icons/icon-students-clinic.svg"?>">

							<div class="student-feature-meta">
								<?php echo CFS()->get( 'legal_clinic' ); ?>
							</div>
						</li>

						<li class="student-features">
							<img src="<?php echo get_template_directory_uri() ."/assets/icons/icon-students-course.svg"?>">
							
							<div class="student-course-info student-feature-meta">
								<?php echo CFS()->get( 'community_lawyering_course' ); ?>
							</div>
						</li>
						
						<li class="student-features">					<img src="<?php echo get_template_directory_uri() ."/assets/icons/icon-students-reflection.svg"?>">
						
							<div class="student-reflection-info student-feature-meta">
								<?php echo CFS()->get( 'reflection_and_rounds' ); ?>
							</div>
						</li>
					</ul>

				</section>
			</article><!-- #post-## -->


		<?php endwhile; // End of the loop. ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
