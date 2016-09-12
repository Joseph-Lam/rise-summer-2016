<?php
/**
 * Template part for displaying page content in page-students.php.
 * 
 * @package Rise_Legal_theme
 */

?>

<article id="post-<?php the_ID(); ?>" class="flex-center student-container" <?php post_class(); ?>>
	<header class="entry-header">
		
		<?php the_title( '<h1 class="student-title">', '</h1>' ); ?>
		
	</header><!-- .entry-header -->

	<div class="students-content">
		<?php the_content(); ?>
		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
			'after'  => '</div>',
			) );
			?>

			<div class="externship-title">
				<img src="<?php echo get_template_directory_uri() ."/assets/icons/icon-externship-white.svg"?>">
				<h2> the externship </h2>
			</div>

			<div class="student-externship">
				<?php echo CFS()->get( 'externship' ); ?>
			</div>
	
			
			<div class="student-features-container">
				<div class="student-orientation student-features">
					<div class="student-orientation-icon student-features-icon">
						<img src="<?php echo get_template_directory_uri() ."/assets/icons/icon-students-orientation.svg"?>">
					</div>
					
					<div class="student-orientation-info student-feature-meta">
						<?php echo CFS()->get( 'student_orientation' ); ?>
					</div>
				</div>

				<div class="student-legal-clinic student-features">
					<div class="student-clinic-icon student-features-icon">
						<img src="<?php echo get_template_directory_uri() ."/assets/icons/icon-students-clinic.svg"?>">
					</div>
					
					<div class="student-clinic-info student-feature-meta">
						<?php echo CFS()->get( 'legal_clinic' ); ?>
					</div>
				</div>

				<div class="student-lawyering-course student-features">
					<div class="student-course-icon student-features-icon">
						<img src="<?php echo get_template_directory_uri() ."/assets/icons/icon-students-course.svg"?>">
					</div>
					
					<div class="student-course-info student-feature-meta">
						<?php echo CFS()->get( 'community_lawyering_course' ); ?>
					</div>
				</div>

				<div class="student-reflection student-features">
					<div class="student-reflection-icon student-features-icon">
						<img src="<?php echo get_template_directory_uri() ."/assets/icons/icon-students-reflection.svg"?>">
					</div>
					
					<div class="student-reflection-info student-feature-meta">
						<?php echo CFS()->get( 'reflection_and_rounds' ); ?>
					</div>
				</div>

			</div>


		</div><!-- .entry-content -->
	</article><!-- #post-## -->
