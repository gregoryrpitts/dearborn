<?php
$rokophoto_about_image = get_theme_mod('rokophoto_about_image', get_template_directory_uri().'/img/02_about.jpg' );
$rokophoto_about_name = get_theme_mod('rokophoto_about_name',__( 'Hello Kitty', 'rokophoto' ));
$rokophoto_about_address = get_theme_mod('rokophoto_about_address',__( 'Planet Earth, Milky-way', 'rokophoto' ));
$rokophoto_about_website = get_theme_mod('rokophoto_about_website',__( 'www.themeisle.com', 'rokophoto' ));
$rokophoto_about_heading = get_theme_mod('rokophoto_about_heading',__( 'I love WordPress', 'rokophoto' ));
$rokophoto_about_bio = get_theme_mod('rokophoto_about_bio',__( 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.', 'rokophoto' ));
?>
    <!-- About Section
    ================================================== -->
    <section id="about" <?php if(!empty($rokophoto_about_image)) { echo 'style="background-image: url('.$rokophoto_about_image.') ;"'; } ?>> <!-- Start about -->
      <div class="about-content wow fadeIn" data-wow-delay="2s">
        <div class="container"> <!-- Container -->
		  <?php if(!empty($rokophoto_about_name)) : ?>
			<h2><?php echo $rokophoto_about_name; ?></h2> <!-- Your name or agency name here -->
		  <?php endif; ?>
		  <?php if(!empty($rokophoto_about_address)) : ?>
			<p class="large"><?php echo $rokophoto_about_address; ?></p> <!-- Your address -->
		  <?php endif; ?>
		  <?php if(!empty($rokophoto_about_website)) : ?>
			<p class="small"><?php echo $rokophoto_about_website; ?></p> <!-- Your website -->
		  <?php endif; ?>
          <br>
		  <?php if(!empty($rokophoto_about_address)) : ?>
			<p class="large"><?php echo $rokophoto_about_heading; ?></p> <!-- Tell more about you -->
		  <?php endif; ?>
		  <?php if(!empty($rokophoto_about_bio)) : ?>
			<p class="atext"><?php echo $rokophoto_about_bio; ?></p>
 		  <?php endif; ?>
       </div>
      </div> <!-- End container -->
    </section> <!-- End about -->