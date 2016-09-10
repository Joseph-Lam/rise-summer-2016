<section class="about-content">
	<?php the_title( '<h1 class="front-title">', '</h1>' ); ?>
	<?php echo get_the_content(); ?>
</section>

<section class="our-people">

	<div class="title-banner donate-banner flex-center">
		<img src="<?php echo get_template_directory_uri() ."/assets/logos/rise-logo-white.svg"?>">	
	</div>
	
	<div>
		<ul class="our-staff">
			<?php
				$args = array(
					'post_type' => 'our_people',
					'numberposts' => -1,
					'order' => 'ASC',
					'tax_query' => array(
						array(
							'taxonomy' => 'people_group',
							'field' => 'slug',
							'terms' => 'our-staff',	
							),
						),
					);
				$about_page_staff_posts = get_posts($args);
				?>

				<?php foreach($about_page_staff_posts as $post) : setup_postdata( $post); ?>
				<li>
					<p><?php the_title();?></p>

					<?php if ( has_post_thumbnail() ) : ?>
						<div>
							<?php the_post_thumbnail( 'original' ); ?>
						</div>
					<?php endif; ?>
			
					<p><?php echo CFS()->get('position_title')?></p>
	
					<p><?php echo CFS()->get('employed_at')?></p>
				
					<p><?php echo CFS()->get('biography')?></p>
				</li>
			<?php endforeach; wp_reset_postdata(); ?>

		</ul>
	</div>

	<!-- <ul class="our-board"> -->
		<!-- 	<li></li>
	</ul> -->

	<!-- <ul class="our-partners"> -->
		<!-- 	<li></li>
	</ul> -->

	<!-- <ul class="our-students"> -->
		<!-- 	<li></li>
	</ul> -->


</section>