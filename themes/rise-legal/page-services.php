<?php
/**
 * The template for displaying the services page.
 * Template Name: Services Page
 *
 * @package Rise_Legal_theme
 */

get_header(); ?>
	
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
			<?php while ( have_posts() ) : the_post(); ?>

				<section class="about-content" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php the_content(); ?>
					</div><!-- .entry-content -->
				</section><!-- #post-## -->
				
				<section class="who-we-help">
					<div class="title-banner services-banner flex-center">
						<img src="<?php echo get_template_directory_uri() ."/assets/icons/icon-familyhelp.svg"?>" class="rise-about-logo">	
						<h2>Who We Help</h2>
					</div>
					<!-- Services Modal Buttons -->
					<div>
						<p><?php echo CFS()->get('who_we_help')?></p>
						<ul class="services">
							<?php
								$args = array(
									'post_type' => 'services',
									'numberposts' => -1,
									'order' => 'ASC',
									);
								$services_page_services_posts = get_posts($args);
								?>

								<?php foreach($services_page_services_posts as $post) : setup_postdata( $post); ?>
								<li class="indvid-services">
									<div class="indvid-services-btn">
										<a href="#<?php the_title();?>" class="services-modal-btn btn">
											<img src="<?php echo get_template_directory_uri() ."/assets/icons/icon-".$post->post_name.".svg"?>">		
										</a>
										<p><?php the_title();?></p>
									</div>
									<div id="<?php the_title();?>" class="modalDialog">
										<div>
											<a href="#close" title="Close" class="close">
											</a>
											<img src="<?php echo get_template_directory_uri() ."/assets/icons/icon-".$post->post_name.".svg"?>">
											<h2><?php the_title();?></h2>
											<?php if ( has_post_thumbnail() ) : ?>
												<div>
													<?php the_post_thumbnail( 'original' ); ?>
												</div>
											<?php endif; ?>
							
											<p><?php the_content(); ?></p>
					
										</div>
									</div>
								</li>
							<?php endforeach; wp_reset_postdata(); ?>
						</ul>
					</div>
				</section>

				<section class="what-we-do flex-center">
					<h2>What We Do</h2>
					<p><?php echo CFS()->get('what_we_do')?></p>
					<div class="services-step-container">
						<div class="services-step">
							<img src="<?php echo get_template_directory_uri() ."/assets/icons/icon-lightbulb.svg"?>">
							<p><?php echo CFS()->get('service_1')?></p>
						</div>
						<div class="services-step">
							<img src="<?php echo get_template_directory_uri() ."/assets/icons/icon-stack.svg"?>">
							<p><?php echo CFS()->get('service_2')?></p>
						</div>
						<div class="services-step">
							<img src="<?php echo get_template_directory_uri() ."/assets/icons/icon-legalrep.svg"?>">
							<p><?php echo CFS()->get('service_3')?></p>
						</div>
					</div>
					<p><?php echo CFS()->get('legal_services')?></p>
				</section>
				<section>
					<div class="title-banner school-banner flex-center">
					
					</div>
				</section>


				<section>
					<div class="faq flex-center">
						<h2>FAQ's</h2>
						<ul class="accordian">
							<?php
								$args = array(
									'post_type' => 'faq',
									'numberposts' => -1,
									'order' => 'ASC',
									'post_name' => 'slug',
									);
								$faq_page_faq_posts = get_posts($args);
								?>

								<?php foreach($faq_page_faq_posts as $post) : setup_postdata( $post); ?>
								<li class="accordian-item">
									<input class="accordian-item-input" type="checkbox" name="accordian" id="<?php echo "item-".$post->post_name; ?>">
									<label for="<?php echo "item-".$post->post_name; ?>" class="accordian-item-header">
									<?php $post->post_name; ?>
										<?php the_title();?>
										<span class="accordian-item-cta">
											<span></span>
											<span></span>
										</span>
										
									</label>
									<div class="accordian-item-content"><?php the_content(); ?></div>

								</li>
							<?php endforeach; wp_reset_postdata(); ?>
						</ul>
					</div>
				</section>


				<section class="contact-process">
					<h2 class="flex-center"> Contact Process</h2>
				<!-- This function gets the contact process icons -->
					<?php get_template_part( 'template-parts/content', 'contact-process' ); ?>
					<div class="contact-process flex-center">
						<p> 
							We are now taking appointments for the month of <?php echo CFS()->get('now_booking_month', 46) ?> 
						</p>
						<a class="red-btn btn " href="<?php echo get_page_link( get_page_by_title( 'Legal Contact Form' )->ID ); ?>">legal contact form</a>
					</div>
				</section>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>