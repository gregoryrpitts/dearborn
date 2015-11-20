<?php
$slider_one_image = get_theme_mod('rokophoto_slider_one_image', get_template_directory_uri().'/img/setup/01_bg.jpg');
$slider_two_image = get_theme_mod('rokophoto_slider_two_image', get_template_directory_uri().'/img/setup/02_bg.jpg');
$slider_three_image = get_theme_mod('rokophoto_slider_three_image', get_template_directory_uri().'/img/setup/03_bg.jpg');
$slider_four_image = get_theme_mod('rokophoto_slider_four_image', get_template_directory_uri().'/img/setup/04_bg.jpg');
$slider_five_image = get_theme_mod('rokophoto_slider_five_image', get_template_directory_uri().'/img/setup/05_bg.jpg');
$slider_one_text = get_theme_mod('rokophoto_slider_one_text',__( 'Slide One', 'rokophoto' ));
$slider_two_text = get_theme_mod('rokophoto_slider_two_text',__( 'Slide Two', 'rokophoto' ));
$slider_three_text = get_theme_mod('rokophoto_slider_three_text',__( 'Slide Three', 'rokophoto' ));
$slider_four_text = get_theme_mod('rokophoto_slider_four_text',__( 'Slide Four', 'rokophoto' ));
$slider_five_text = get_theme_mod('rokophoto_slider_five_text',__( 'Slide Five', 'rokophoto' ));
?>

   <!-- Header/Homepage
    ================================================== -->
<?php if(!empty($slider_one_image)) : ?>

    <header id="banner" class="carousel slide zoom carousel-fade" data-ride="carousel">

      <div class="carousel-inner"><!-- Inner wrapper for slides -->
        <div class="item active"> <!-- First item slider -->
          <a class="slider-item-wrap" style="background-image: url(<?php echo $slider_one_image; ?>);"></a>
          <img src="<?php echo $slider_one_image; ?>" class="corousel-image-hidden">
          <div class="carousel-caption overlay">
		  <?php if(!empty($slider_one_text)) : ?>
            <div class="content">
              <div class="carousel-content-wrap">
                <div class="text wow bounceIn" data-wow-delay="0.2s">
                  <h1><?php echo $slider_one_text; ?></h1>
                </div>
              </div>
            </div>
		  <?php endif; ?>
          </div> <!-- End first item background image slider -->
        </div> <!-- End first item slider -->

	  <?php if(!empty($slider_two_image)) : ?>
        <div class="item"> <!-- Second item slider -->
          <a class="slider-item-wrap" style="background-image: url(<?php echo $slider_two_image; ?>);"></a>
          <img src="<?php echo $slider_two_image; ?>" class="corousel-image-hidden">
          <div class="carousel-caption">
		  <?php if(!empty($slider_two_text)) : ?>
            <div class="content">
              <div class="carousel-content-wrap">
                <div class="text wow bounceIn">
                  <h1><?php echo $slider_two_text; ?></h1>
                </div>
              </div>
            </div>
			<?php endif; ?>
          </div> <!-- End second item background image slider -->
        </div> <!-- End second item slider -->
		<?php endif; ?>

	  <?php if(!empty($slider_three_image)) : ?>
        <div class="item"> <!-- Third item slider -->
          <a class="slider-item-wrap" style="background-image: url(<?php echo $slider_three_image; ?>);"></a>
          <img src="<?php echo $slider_three_image; ?>" class="corousel-image-hidden">
          <div class="carousel-caption">
		  <?php if(!empty($slider_three_text)) : ?>
            <div class="content">
              <div class="carousel-content-wrap">
                <div class="text wow bounceIn">
                  <h1><?php echo $slider_three_text; ?></h1>
                </div>
              </div>
            </div>
			<?php endif; ?>
          </div> <!-- End third item background image slider -->
        </div> <!-- End third item slider -->
		<?php endif; ?>

	  <?php if(!empty($slider_four_image)) : ?>
        <div class="item"> <!-- Fourth item slider -->
          <a class="slider-item-wrap" style="background-image: url(<?php echo $slider_four_image; ?>);"></a>
          <img src="<?php echo $slider_four_image; ?>" class="corousel-image-hidden">
          <div class="carousel-caption">
		  <?php if(!empty($slider_four_text)) : ?>
            <div class="content">
              <div class="carousel-content-wrap">
                <div class="text wow bounceIn">
                  <h1><?php echo $slider_four_text; ?></h1>
                </div>
              </div>
            </div>
          <?php endif; ?>
          </div> <!-- End fourth item background image slider -->
        </div> <!-- End fourth item slider -->
	  <?php endif; ?>

	  <?php if(!empty($slider_five_image)) : ?>
        <div class="item"> <!-- Fifth item slider -->
          <a class="slider-item-wrap" style="background-image: url(<?php echo $slider_five_image; ?>);"></a>
          <img src="<?php echo $slider_five_image; ?>" class="corousel-image-hidden">
          <div class="carousel-caption">
		  <?php if(!empty($slider_five_text)) : ?>
            <div class="content">
              <div class="carousel-content-wrap">
                <div class="text wow bounceIn">
                  <h1><?php echo $slider_five_text; ?></h1>
                </div>
              </div>
            </div>
          <?php endif; ?>
          </div> <!-- End fifth item background image slider -->
        </div> <!-- End fifth item slider -->
	  <?php endif; ?>
      </div> <!-- End inner wrapper for slides -->

      <!-- Controls -->
      <a class="left carousel-control" href="#banner" role="button" data-slide="prev">
        <img src="<?php echo get_template_directory_uri().'/img/04_left.png'; ?>" alt="prev-img"> <!-- Left controls -->
      </a>
      <a class="right carousel-control" href="#banner" role="button" data-slide="next">
        <img src="<?php echo get_template_directory_uri().'/img/03_right.png'; ?>" alt="next-img"> <!-- Right controls -->
      </a>
    </header>
<?php endif; ?>