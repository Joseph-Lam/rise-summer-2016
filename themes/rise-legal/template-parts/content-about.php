	<?php 
	$categories = array(
		'taxonomy' => 'people_group',
		'hide_empty' => true,
		);

	$groups = get_terms( $categories );
	?>
	<div class="about-content flex-center" >	
		<?php foreach ( $groups as $group ) :  ?>

			<!-- GROUP HEADING -->
			<div class="group-title">
				<img src="<?php echo get_template_directory_uri() ."/assets/icons/icon-".$group->slug.".svg"?>" class="people-icon">
				<h3><?php echo $group->name ?></h3>
				<?php echo $group->description?>
			</div>

			<ul class="flex-center people-list our-staff container ">
				<?php
				$args = array(
					'post_type' => 'our_people',
					'numberposts' => -1,
					'order' => 'ASC',
					'tax_query' => array(
						array(
							'taxonomy' => 'people_group',
							'field' => 'slug',
							'terms' => $group->slug,	
							),
						),
					);
				$about_page_people_posts = get_posts($args);
				?>

				<?php foreach($about_page_people_posts as $post) : setup_postdata( $post); ?>
					<li class="">
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
							<?php if ( has_post_thumbnail() ) : ?>
								<div class="partner-logo">
									<?php the_post_thumbnail( 'original' ); ?>
								</div>
							<?php endif; ?>

							
							<p><?php echo CFS()->get('position_title')?></p>
						
							<p><?php echo CFS()->get('employed_at')?></p>
							<!-- <?php echo CFS()->get('biography')?> -->
						</div>
					</li>
				<?php endforeach; wp_reset_postdata(); ?>

			</ul>

		<?php endforeach; ?>
	</div>
	<!-- Staff Listing -->
	
</div>