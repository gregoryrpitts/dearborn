<?php
$rokophoto_vision_display_settings = get_theme_mod('rokophoto_vision_display_settings');
$rokophoto_portfolio_heading = get_theme_mod('rokophoto_portfolio_heading',__( 'Portfolio', 'rokophoto' ));
$rokophoto_portfolio_subheading = get_theme_mod('rokophoto_portfolio_subheading',__( 'Recent pictures I have taken. Check them out!', 'rokophoto' ));
$rokophoto_portfolio_count = get_theme_mod('rokophoto_portfolio_count', 9);
?>

	<?php if( isset($rokophoto_vision_display_settings) && $rokophoto_vision_display_settings != 0 ): ?>
		<section id="vision" style="background-image: url('<?php if(!empty($rokophoto_vision_image)) { echo $rokophoto_vision_image; } ?>');">
	<?php endif; ?>
    <!-- Portfolio Title -->
      <div class="light-overlay ptitle">
	<?php if(!empty($rokophoto_portfolio_heading)) : ?>
        <h2><?php echo $rokophoto_portfolio_heading; ?></h2>
	<?php endif; ?>
	<?php if(!empty($rokophoto_portfolio_subheading)) : ?>
        <h5><?php echo $rokophoto_portfolio_subheading; ?></h5>
	<?php endif; ?>
      </div>
    </section>

    <section id="portfolio" class="grid">

	<?php $loop = new WP_Query( array( 'post_type' => 'portfolio', 'posts_per_page' => $rokophoto_portfolio_count ) ); ?>

	<?php if ( $loop->have_posts() ): ?>
	
		<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

			<figure class="effect-portfolio wow fadeIn" data-wow-duration="1s"> <!-- Portfolio -->
				<?php 
					$image_id = get_post_thumbnail_id();
					$image_url_mobile = wp_get_attachment_image_src($image_id,'thumbnail_portfolio_mobile', true);
				?>
				<picture>
					<source srcset="<?php echo $image_url_mobile[0]; ?>" media="(max-width: 460px)">
					<?php the_post_thumbnail( 'thumbnail_portfolio', array( 'class' => "img-responsive")); ?>
				</picture>
				<figcaption> <!-- Caption -->
					<h2><?php the_title(); ?></h2>
					<?php the_excerpt(); ?>
					<a href="#portfolioModa<?php the_ID(); ?>" class="portfolio-link" data-toggle="modal"><?php _e( 'View More', 'rokophoto' ); ?></a>
				</figcaption> <!-- End caption -->   
			</figure> <!-- End portfolio -->
	
		<?php endwhile; ?>

	<?php else: ?>
	
		<figure class="effect-portfolio wow fadeIn" data-wow-duration="1s"> <!-- Portfolio -->
			<img src="<?php echo get_template_directory_uri().'/img/400x400.gif'; ?>" class="img-responsive" />
			<figcaption> <!-- Caption -->
				<h2><?php _e( 'Item 1', 'rokophoto' ); ?></h2>
				<p><?php _e( 'Hi, my name is description.', 'rokophoto' ); ?></p>
				<a href="#portfolioModal000" class="portfolio-link" data-toggle="modal"><?php _e( 'View More', 'rokophoto' ); ?></a>
			</figcaption> <!-- End caption -->   
		</figure> <!-- End portfolio -->

		<figure class="effect-portfolio wow fadeIn" data-wow-duration="1s"> <!-- Portfolio -->
			<img src="<?php echo get_template_directory_uri().'/img/400x400.gif'; ?>" class="img-responsive" />
			<figcaption> <!-- Caption -->
				<h2><?php _e( 'Item 2', 'rokophoto' ); ?></h2>
				<p><?php _e( 'Hi, my name is description.', 'rokophoto' ); ?></p>
				<a href="#portfolioModal000" class="portfolio-link" data-toggle="modal"><?php _e( 'View More', 'rokophoto' ); ?></a>
			</figcaption> <!-- End caption -->   
		</figure> <!-- End portfolio -->

		<figure class="effect-portfolio wow fadeIn" data-wow-duration="1s"> <!-- Portfolio -->
			<img src="<?php echo get_template_directory_uri().'/img/400x400.gif'; ?>" class="img-responsive" />
			<figcaption> <!-- Caption -->
				<h2><?php _e( 'Item 3', 'rokophoto' ); ?></h2>
				<p><?php _e( 'Hi, my name is description.', 'rokophoto' ); ?></p>
				<a href="#portfolioModal000" class="portfolio-link" data-toggle="modal"><?php _e( 'View More', 'rokophoto' ); ?></a>
			</figcaption> <!-- End caption -->   
		</figure> <!-- End portfolio -->
	
		<figure class="effect-portfolio wow fadeIn" data-wow-duration="1s"> <!-- Portfolio -->
			<img src="<?php echo get_template_directory_uri().'/img/400x400.gif'; ?>" class="img-responsive" />
			<figcaption> <!-- Caption -->
				<h2><?php _e( 'Item 4', 'rokophoto' ); ?></h2>
				<p><?php _e( 'Hi, my name is description.', 'rokophoto' ); ?></p>
				<a href="#portfolioModal000" class="portfolio-link" data-toggle="modal"><?php _e( 'View More', 'rokophoto' ); ?></a>
			</figcaption> <!-- End caption -->   
		</figure> <!-- End portfolio -->

		<figure class="effect-portfolio wow fadeIn" data-wow-duration="1s"> <!-- Portfolio -->
			<img src="<?php echo get_template_directory_uri().'/img/400x400.gif'; ?>" class="img-responsive" />
			<figcaption> <!-- Caption -->
				<h2><?php _e( 'Item 5', 'rokophoto' ); ?></h2>
				<p><?php _e( 'Hi, my name is description.', 'rokophoto' ); ?></p>
				<a href="#portfolioModal000" class="portfolio-link" data-toggle="modal"><?php _e( 'View More', 'rokophoto' ); ?></a>
			</figcaption> <!-- End caption -->   
		</figure> <!-- End portfolio -->

		<figure class="effect-portfolio wow fadeIn" data-wow-duration="1s"> <!-- Portfolio -->
			<img src="<?php echo get_template_directory_uri().'/img/400x400.gif'; ?>" class="img-responsive" />
			<figcaption> <!-- Caption -->
				<h2><?php _e( 'Item 6', 'rokophoto' ); ?></h2>
				<p><?php _e( 'Hi, my name is description.', 'rokophoto' ); ?></p>
				<a href="#portfolioModal000" class="portfolio-link" data-toggle="modal"><?php _e( 'View More', 'rokophoto' ); ?></a>
			</figcaption> <!-- End caption -->   
		</figure> <!-- End portfolio -->
		
		<div class="portfolio-modal modal fade" id="portfolioModal000" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-content">
				<div class="close-modal" data-dismiss="modal">
					<div class="lr">
						<div class="rl">
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-lg-offset-2">
							<div class="modal-body">
								<h2><?php _e( 'Portfolio Title', 'rokophoto' ); ?></h2>
								<img class="img-responsive" src="<?php echo get_template_directory_uri().'/img/550x400.gif'; ?>" />
								<?php _e( '<p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
								<p><strong>Want these theme for your portfolio?</strong> RokoPhoto is a bootstrap based awesome photography portfolio template. Creatively designed to present your artwork beautifully and clean. Catch more visitors and potential clients by using Solstice Photography/Portfolio Template to showcase your photography and crafts. This is mobile responsive template, very easy to use and well-documented codes.</p>', 'rokophoto' ); ?>
								<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i><?php _e( ' Close', 'rokophoto' ); ?></button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	
	<?php endif; wp_reset_postdata(); ?>
	
	<?php $secondloop = new WP_Query( array( 'post_type' => 'portfolio', 'posts_per_page' => $rokophoto_portfolio_count ) ); ?>

	<?php if ( $secondloop->have_posts() ): ?>
	
		<?php while ( $secondloop->have_posts() ) : $secondloop->the_post(); ?>
			<div class="portfolio-modal modal fade" id="portfolioModa<?php the_ID(); ?>" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-content">
					<div class="close-modal" data-dismiss="modal">
						<div class="lr">
							<div class="rl">
							</div>
						</div>
					</div>
					<div class="container">
						<div class="row">
							<div class="col-lg-8 col-lg-offset-2">
								<div class="modal-body">
									<h2><?php the_title(); ?></h2>
									<?php 
										$image_id = get_post_thumbnail_id();
										$modal_mobile = wp_get_attachment_image_src($image_id,'thumbnail_portfolio_mobile', true);
									?>
									<picture>
										<source srcset="<?php echo $modal_mobile[0]; ?>" media="(max-width: 460px)">
										<?php the_post_thumbnail( 'thumbnail_portfolio_modal', array( 'class' => "img-responsive")); ?>
									</picture>
									<?php the_content(); ?>
									<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i><?php _e( ' Close', 'rokophoto' ); ?></button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endwhile; ?>

	<?php endif; wp_reset_postdata(); ?>

    </section> <!-- End Portfolio Section -->