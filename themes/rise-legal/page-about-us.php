<?php
/**
 * The template for displaying the about page.
 *
 *
 * @package Rise_Legal_theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<!-- this gets the main about us blurb -->
		<?php while ( have_posts() ) : the_post(); ?>

			<section class="about-content container" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
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
							<img src="<?php echo get_template_directory_uri() ."/assets/icons/icon-".$group->slug."-dark.svg"?>" class="people-icon">
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
									<a href="#<?php the_title();?>" class="btn modal-btn">
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

											<?php 
											$position_title = CFS()->get('position_title');

											if (!empty($position_title)) : ?>
											<div class="position"><?php echo $position_title?></div>
										<?php endif; ?>

										<?php 
										$employed_at = CFS()->get('employed_at'); 
										if (!empty( $employed_at )) : ?>
										<div class="employed"><?php echo CFS()->get('employed_at')?></div>
									<?php endif; ?>

									<?php 
									$biography = CFS()->get('biography');
									if (!empty($biography)) : ?>
									<div class="biography"><?php echo $biography?></div>
								<?php endif; ?>

							</div>
						</div>

						<div class="">
							<?php if ( has_post_thumbnail() ) : ?>
								<div class="partner-logo">
									<?php the_post_thumbnail( 'original' ); ?>
								</div>
							<?php endif; ?>

							<?php 
							$position_title = CFS()->get('position_title');

							if (!empty($position_title)) : ?>
							<div class="position"><?php echo $position_title?></div>
						<?php endif; ?>

						<?php 
						$employed_at = CFS()->get('employed_at'); 
						if (!empty( $employed_at )) : ?>
						<div class="employed"><?php echo CFS()->get('employed_at')?></div>
					<?php endif; ?>

					<?php 
					$biography = CFS()->get('biography');
					if (!empty($biography)) : ?>
					<div class="biography"><?php echo $biography?></div>
				<?php endif; ?>
			</div>

		</li>
	<?php endforeach; wp_reset_postdata(); ?>

</ul>

<?php endforeach; ?> 
</div>

</section>

<?php endwhile; // End of the loop. ?>

</main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>
