<section class="about-content">
	<?php the_title( '<h1 class="front-title">', '</h1>' ); ?>
	<?php the_content(); ?>
</section>

<section class="our-people">

	<div class="title-banner about-banner flex-center">
	<!-- display logo on mobile -->
		<img src="<?php echo get_template_directory_uri() ."/assets/logos/rise-logo-white.svg"?>" class="rise-about-logo">	
	<!-- display this nav on desktop -->
		<nav class="about-people">
			<ul class="about-people-nav">
				<?php 
				$categories = array(
					'taxonomy' => 'people_group', 
					'hide_empty' => true,
					);

				$terms = get_terms( $categories );
				?>
				
				<?php foreach ( $terms as $term ) :  ?>
					<li class="indvid-people-group"> 
						<a href="#<?php echo $term->slug; ?>"> 
							<img src="<?php echo get_template_directory_uri() ."/assets/icons/icon-".$term->slug.".svg"?>">
							<p><?php echo $term->name ?></p>
						</a>
					</li>

				<?php endforeach; ?>
			</ul>
		</nav>

	</div>
	
	<div>
		<!-- STAFF HEADING -->
		<?php 
			$categories = array(
				'taxonomy' => 'people_group',
				'slug' => 'our-staff', 
				'hide_empty' => true,
				);

			$terms = get_terms( $categories );
			?>
		<div class="group-title" >	
			<img src="<?php echo get_template_directory_uri() ."/assets/icons/icon-staff.svg"?>">
			<?php foreach ( $terms as $term ) :  ?>
				<h3><?php echo $term->name ?></h3>
				<p><?php echo $term->description?><p>
			<?php endforeach; ?>
		</div>

		<ul class="our-staff" id="our-staff">
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
					<a href="#<?php the_title();?>" class="modal-btn">
						<?php the_title();?>	
					</a>
					
					<div id="<?php the_title();?>" class="modalDialog">
						<div>
							<a href="#close" title="Close" class="close">
							</a>
							
							<h3><?php the_title();?></h3>
							<?php if ( has_post_thumbnail() ) : ?>
								<div>
									<?php the_post_thumbnail( 'original' ); ?>
								</div>
							<?php endif; ?>
			
							<p><?php echo CFS()->get('position_title')?></p>
	
							<p><?php echo CFS()->get('employed_at')?></p>
				
							<p><?php echo CFS()->get('biography')?></p>
	
						</div>
					</div>
			
					<p><?php echo CFS()->get('position_title')?></p>
	
					<p><?php echo CFS()->get('employed_at')?></p>

				</li>
			<?php endforeach; wp_reset_postdata(); ?>

		</ul>
	</div>
<!-- BOARD HEADING -->
	<?php 
		$categories = array(
			'taxonomy' => 'people_group',
			'slug' => 'our-board', 
			'hide_empty' => true,
			);

		$terms = get_terms( $categories );
		?>
		
	<div class="group-title" >	
		<img src="<?php echo get_template_directory_uri() ."/assets/icons/icon-boardmembers.svg"?>">
		<?php foreach ( $terms as $term ) :  ?>
			<h3><?php echo $term->name ?></h3>
			<p><?php echo $term->description?><p>
		<?php endforeach; ?>
	</div>

	<ul class="our-board" id="our-board">
		<?php
			$args = array(
				'post_type' => 'our_people',
				'numberposts' => -1,
				'order' => 'ASC',
				'tax_query' => array(
					array(
						'taxonomy' => 'people_group',
						'field' => 'slug',
						'terms' => 'our-board',	
						),
					),
				);
			$about_page_board_posts = get_posts($args);
			?>

			<?php foreach($about_page_board_posts as $post) : setup_postdata( $post); ?>
			<li>
				<a href="#<?php the_title();?>" class="modal-btn">
					<?php the_title();?>	
				</a>
				
				<div id="<?php the_title();?>" class="modalDialog">
					<div>
						<a href="#close" title="Close" class="close">
						</a>
						
						<h3><?php the_title();?></h3>
						<?php if ( has_post_thumbnail() ) : ?>
							<div>
								<?php the_post_thumbnail( 'original' ); ?>
							</div>
						<?php endif; ?>
		
						<p><?php echo CFS()->get('position_title')?></p>
			
						<p><?php echo CFS()->get('biography')?></p>

					</div>
				</div>
		
				<p><?php echo CFS()->get('position_title')?></p>

			</li>
		<?php endforeach; wp_reset_postdata(); ?>
	</ul>
	<!-- PARTNERS HEADING -->
	<?php 
		$categories = array(
			'taxonomy' => 'people_group',
			'slug' => 'our-partners', 
			'hide_empty' => true,
			);

		$terms = get_terms( $categories );
		?>
		
	<div class="group-title">	
		<img src="<?php echo get_template_directory_uri() ."/assets/icons/icon-partners.svg"?>">
		<?php foreach ( $terms as $term ) :  ?>
			<h3><?php echo $term->name ?></h3>
			<p><?php echo $term->description?><p>
		<?php endforeach; ?>
	</div>


	<ul class="our-partners" id="our-partners">
		<?php
			$args = array(
				'post_type' => 'our_people',
				'numberposts' => -1,
				'order' => 'ASC',
				'tax_query' => array(
					array(
						'taxonomy' => 'people_group',
						'field' => 'slug',
						'terms' => 'our-partners',	
						),
					),
				);
			$about_page_partner_posts = get_posts($args);
			?>

			<?php foreach($about_page_partner_posts as $post) : setup_postdata( $post); ?>
			<li class="indvid-partner">

				<?php if ( has_post_thumbnail() ) : ?>
					<div class="partner-logo">
						<?php the_post_thumbnail( 'original' ); ?>
					</div>
				<?php endif; ?>

				<p class="partner-copy"><?php echo CFS()->get('biography')?></p>

			</li>
		<?php endforeach; wp_reset_postdata(); ?>
	</ul>

	<!-- STUDENTS HEADING -->
	<?php 
		$categories = array(
			'taxonomy' => 'people_group',
			'slug' => 'our-student', 
			'hide_empty' => true,
			);

		$terms = get_terms( $categories );
		?>
		
	<div class="group-title" >	
		<img src="<?php echo get_template_directory_uri() ."/assets/icons/icon-studentbuilding.svg"?>">
		<?php foreach ( $terms as $term ) :  ?>
			<h3><?php echo $term->name ?></h3>
			<p><?php echo $term->description?><p>
		<?php endforeach; ?>
	</div>


	<ul class="our-students" id="our-student">
		<?php
			$args = array(
				'post_type' => 'our_people',
				'numberposts' => -1,
				'order' => 'ASC',
				'tax_query' => array(
					array(
						'taxonomy' => 'people_group',
						'field' => 'slug',
						'terms' => 'our-student',	
						),
					),
				);
			$about_page_student_posts = get_posts($args);
			?>
			
			<?php foreach($about_page_student_posts as $post) : setup_postdata( $post); ?>
			<li>
				<p class="studen-copy"><?php echo CFS()->get('biography')?></p>
			</li>
			<?php endforeach; wp_reset_postdata(); ?>
			<button>
				Learn More
			</button>
	</ul>

</section>