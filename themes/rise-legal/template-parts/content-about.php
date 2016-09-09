<section class="about-content">
	<?php the_title( '<h1 class="front-title">', '</h1>' ); ?>
	<?php the_content(); ?>
</section>
<section class="our-people">
	<div class="title-banner donate-banner flex-center">
		<img src="<?php echo get_template_directory_uri() ."/assets/logos/rise-logo-white.svg"?>">	
	</div>
	
	<div>
		<!-- Need to get our staff taxonomy -->
		<!-- need to get taxonomy description if there is one -->
		<ul class="our-staff">
			<!-- need to loop through people posts tagged with the staff taxonomy -->
			<?php 
			$args = array(
				'post_type' => 'our_people',
				'posts_per_page' => -1,
				'order' => 'DSC',
				// 'tax_query' => array(
				// 		array(
				// 			'taxonomy' => 'people_group'
				// 			'field' => 'slug',
				// 			'terms' = 'our_staff'	
				// 		)
				// 	)
				);
			$about_page_people_posts = get_posts($args,
					'tax_query' => array(
						array(
							'taxonomy' => 'people_group'
							'field' => 'slug',
							'terms' = 'our_staff'	
						)
					)
				);
			?>
			
			<?php foreach($about_page_people_posts as $post) : setup_postdata( $post); ?>
				<li>
					<p><?php the_title();?></p>
						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail( 'original' ); ?>
						<?php endif; ?>
				</li>
			<?php endforeach; wp_reset_postdata(); ?>

			</ul>

			<!-- Need to get our board taxonomy -->
			<!-- need to get taxonomy description if there is one -->
			<!-- <ul class="our-board"> -->
			<!-- Need to loop through people posts tagged with the our board taxonomy and show -->
		<!-- 	<li></li>
	</ul> -->

	<!-- Need to get our partners taxonomy -->
	<!-- need to get taxonomy description if there is one -->
	<!-- <ul class="our-partners"> -->
	<!-- Need to loop through people posts tagged with the our partners taxonomy and show including styles for images-->
		<!-- 	<li></li>
	</ul> -->

	<!-- Need to get our students taxonomy -->

	<!-- <ul class="our-students"> -->
	<!-- Need to loop through people posts tagged with the our students taxonomy and show -->
		<!-- 	<li></li>
	</ul> -->
</div>

</section>