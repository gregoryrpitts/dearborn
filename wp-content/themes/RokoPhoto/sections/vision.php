<?php
$rokophoto_vision_image = get_theme_mod('rokophoto_vision_image', get_template_directory_uri().'/img/01_services.jpg');
$rokophoto_vision_one_text_display = get_theme_mod('rokophoto_vision_one_text_display');
$rokophoto_vision_two_text_display = get_theme_mod('rokophoto_vision_two_text_display');
$rokophoto_vision_three_text_display = get_theme_mod('rokophoto_vision_three_text_display');
$rokophoto_vision_one_text_one = get_theme_mod('rokophoto_vision_one_text_one',__( 'Design To Showcase', 'rokophoto' ));
$rokophoto_vision_one_text_two = get_theme_mod('rokophoto_vision_one_text_two',__( 'Photography', 'rokophoto' ));
$rokophoto_vision_one_text_three = get_theme_mod('rokophoto_vision_one_text_three',__( 'The need to capture the moment and freeze it for life.', 'rokophoto' ));
$rokophoto_vision_two_text_one = get_theme_mod('rokophoto_vision_two_text_one',__( 'Capture The Moment', 'rokophoto' ));
$rokophoto_vision_two_text_two = get_theme_mod('rokophoto_vision_two_text_two',__( 'Photography', 'rokophoto' ));
$rokophoto_vision_two_text_three = get_theme_mod('rokophoto_vision_two_text_three',__( 'Quality photography that preserves treasured memories.', 'rokophoto' ));
$rokophoto_vision_three_text_one = get_theme_mod('rokophoto_vision_three_text_one',__( 'Still-life Images', 'rokophoto' ));
$rokophoto_vision_three_text_two = get_theme_mod('rokophoto_vision_three_text_two',__( 'Photography', 'rokophoto' ));
$rokophoto_vision_three_text_three = get_theme_mod('rokophoto_vision_three_text_three',__( 'Take alot of photos not war.', 'rokophoto' ));
$rokophoto_portfolio_display_settings = get_theme_mod('rokophoto_portfolio_display_settings');
?>
    <!-- Vision/Mission 
    ================================================== -->
<?php if( isset($rokophoto_vision_one_text_display) && $rokophoto_vision_one_text_display != 1 ): ?>
    <section id="vision" style="background-image: url('<?php if(!empty($rokophoto_vision_image)) { echo $rokophoto_vision_image; } ?>');">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		<?php if( isset($rokophoto_vision_two_text_display) && $rokophoto_vision_two_text_display != 1 ): ?>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
		<?php if( isset($rokophoto_vision_three_text_display) && $rokophoto_vision_three_text_display != 1 ): ?>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
		<?php endif; ?>
		<?php endif; ?>

          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner dark-overlay-wrap">
            <div class="item active">
              <div class="dark-overlay vision">
                <div class="vision-border centered wow bounceIn">
				<?php if(!empty($rokophoto_vision_one_text_one)) : ?>
                  <h4><?php echo $rokophoto_vision_one_text_one; ?></h4>
				<?php endif; ?>
				<?php if(!empty($rokophoto_vision_one_text_two)) : ?>
                  <h2><?php echo $rokophoto_vision_one_text_two; ?></h2>
				<?php endif; ?>
				<?php if(!empty($rokophoto_vision_one_text_three)) : ?>
                  <h6><?php echo $rokophoto_vision_one_text_three; ?></h6>
				<?php endif; ?>
                </div>
              </div>
            </div>
		<?php if( isset($rokophoto_vision_two_text_display) && $rokophoto_vision_two_text_display != 1 ): ?>
            <div class="item">
              <div class="dark-overlay vision">
                <div class="vision-border centered wow bounceIn">
				<?php if(!empty($rokophoto_vision_two_text_one)) : ?>
                  <h4><?php echo $rokophoto_vision_two_text_one; ?></h4>
				<?php endif; ?>
				<?php if(!empty($rokophoto_vision_two_text_two)) : ?>
                  <h2><?php echo $rokophoto_vision_two_text_two; ?></h2>
				<?php endif; ?>
				<?php if(!empty($rokophoto_vision_two_text_three)) : ?>
                  <h6><?php echo $rokophoto_vision_two_text_three; ?></h6>
				<?php endif; ?>
                </div>
              </div>
            </div>
		<?php if( isset($rokophoto_vision_three_text_display) && $rokophoto_vision_three_text_display != 1 ): ?>
            <div class="item">
              <div class="dark-overlay vision">
                <div class="vision-border centered wow bounceIn">
				<?php if(!empty($rokophoto_vision_three_text_one)) : ?>
                  <h4><?php echo $rokophoto_vision_three_text_one; ?></h4>
				<?php endif; ?>
				<?php if(!empty($rokophoto_vision_three_text_two)) : ?>
                  <h2><?php echo $rokophoto_vision_three_text_two; ?></h2>
				<?php endif; ?>
				<?php if(!empty($rokophoto_vision_three_text_three)) : ?>
                  <h6><?php echo $rokophoto_vision_three_text_three; ?></h6>
				<?php endif; ?>
                </div>
              </div>
            </div>
		<?php endif; ?>
		<?php endif; ?>
        </div>

        </div>
	<?php if( isset($rokophoto_portfolio_display_settings) && $rokophoto_portfolio_display_settings != 0 ): ?>
		</section>
	<?php endif; ?>
<?php endif; ?>