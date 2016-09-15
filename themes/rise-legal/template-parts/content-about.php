
<section class="about-content" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
</section><!-- #post-## -->


<section class="our-people">

	<div class="title-banner about-banner flex-center">
	<!-- display logo on mobile -->
		<img src="<?php echo get_template_directory_uri() ."/assets/logos/rise-logo-white.svg"?>" class="rise-about-logo">	
	<!-- display this nav on desktop -->
		<nav class="about-people">
			<div class="about-people-nav">
				<?php 
				$categories = array(
					'taxonomy' => 'people_group', 
					'hide_empty' => true,
					);

				$terms = get_terms( $categories );
				?>
				
				<?php foreach ( $terms as $term ) :  ?>
				
					<div class="about-nav-link" data-about-nav="<?php echo $term->slug;?> "> 
						<img src="<?php echo get_template_directory_uri() ."/assets/icons/icon-".$term->slug.".svg"?>">
						<h3><?php echo $term->name ?></h3>
					</div>
			
				<?php endforeach; ?>
			</div>
		</nav>

	</div>
	
	<div class="our-people-content">
	<div class="staff">
		<!-- STAFF HEADING -->
		<?php 
			$categories = array(
				'taxonomy' => 'people_group',
				'slug' => 'our-staff', 
				'hide_empty' => true,
				);

			$terms = get_terms( $categories );
			?>
		<div class="group-title flex-center" >	
			<img src="<?php echo get_template_directory_uri() ."/assets/icons/icon-staff.svg"?>">
			<?php foreach ( $terms as $term ) :  ?>
				<h3><?php echo $term->name ?></h3>
				<?php echo $term->description?>
			<?php endforeach; ?>
		</div>
		<!-- Staff Listing -->
		<ul class="people-list our-staff flex-center">
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
				<li class="indvid-staff-member">
					<a href="#<?php the_title();?>" class="modal-btn btn">
						<?php the_title();?>	
					</a>
					
					<div id="<?php the_title();?>" class="modalDialog">
						<div>
							<a href="#close" title="Close" class="close">
							</a>
							
							<h2><?php the_title();?></h2>
							<?php if ( has_post_thumbnail() ) : ?>
								<div>
									<?php the_post_thumbnail( 'original' ); ?>
								</div>
							<?php endif; ?>
			
							<p class="position"><?php echo CFS()->get('position_title')?></p>
	
							<p class="employed"><?php echo CFS()->get('employed_at')?></p>
				
							<p class="biography"><?php echo CFS()->get('biography')?></p>
	
						</div>
					</div>
					<div class="staff-info">
						<p><?php echo CFS()->get('position_title')?></p>
		
						<p><?php echo CFS()->get('employed_at')?></p>
					</div>
				</li>
			<?php endforeach; wp_reset_postdata(); ?>

		</ul>
	</div>
<!-- BOARD HEADING -->
	<div class="board">
		<?php 
			$categories = array(
				'taxonomy' => 'people_group',
				'slug' => 'our-board', 
				'hide_empty' => true,
				);

			$terms = get_terms( $categories );
			?>
			
		<div class="group-title flex-center" >	
			<img src="<?php echo get_template_directory_uri() ."/assets/icons/icon-boardmembers.svg"?>">
			
			<?php foreach ( $terms as $term ) :  ?>
				<h3><?php echo $term->name ?></h3>
				<?php echo $term->description?>
			<?php endforeach; ?>
		</div>
	<!-- Board Listing -->
		<ul class="people-list our-board flex-center">
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
				<li class="indvid-board-member">

					<p class="position"><?php echo CFS()->get('position_title')?></p>

					<a href="#<?php the_title();?>" class="modal-btn btn">
						<?php the_title();?>	
					</a>
					
					<div id="<?php the_title();?>" class="modalDialog">
						<div>
							<a href="#close" title="Close" class="close">
							</a>
							
							<h2><?php the_title();?></h2>

							<?php if ( has_post_thumbnail() ) : ?>
								<div>
									<?php the_post_thumbnail( 'original' ); ?>
								</div>
							<?php endif; ?>
			
							<p class="position"><?php echo CFS()->get('position_title')?></p>
				
							<p><?php echo CFS()->get('biography')?></p>

						</div>
					</div>

				</li>
			<?php endforeach; wp_reset_postdata(); ?>
		</ul>
	</div>
	<!-- PARTNERS HEADING -->
	<div class="partners">
		<?php 
			$categories = array(
				'taxonomy' => 'people_group',
				'slug' => 'our-partners', 
				'hide_empty' => true,
				);

			$terms = get_terms( $categories );
			?>
			
		<div class="group-title flex-center">	
			<img src="<?php echo get_template_directory_uri() ."/assets/icons/icon-partners.svg"?>">
			<?php foreach ( $terms as $term ) :  ?>
				<h3><?php echo $term->name ?></h3>
				<?php echo $term->description?>
			<?php endforeach; ?>
		</div>
	<!-- Partners listing -->
		<ul class="people-list our-partners">
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

					<?php echo CFS()->get('biography')?>

				</li>
			<?php endforeach; wp_reset_postdata(); ?>
		</ul>
	</div>
	<!-- STUDENTS HEADING -->
	<div class="students">
		<?php 
			$categories = array(
				'taxonomy' => 'people_group',
				'slug' => 'our-student', 
				'hide_empty' => true,
				);

			$terms = get_terms( $categories );
			?>
			
		<div class="group-title flex-center" >	
			<img src="<?php echo get_template_directory_uri() ."/assets/icons/icon-studentbuilding.svg"?>">
			<?php foreach ( $terms as $term ) :  ?>
				<h3><?php echo $term->name ?></h3>
				<?php echo $term->description?>
			<?php endforeach; ?>
		</div>
		<!-- Students listing -->
		<ul class="people-list our-student flex-center">
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
					<li class="student-copy">
						<?php echo CFS()->get('biography')?>
					</li>
				<?php endforeach; wp_reset_postdata(); ?>
				<a class="btn" href="<?php echo get_page_link( get_page_by_title( 'The Law Students' )->ID ); ?>">learn more</a>
		</ul>
	</div>
	</div>
</section>