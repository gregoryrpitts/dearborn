<?php
$logourl = get_theme_mod('rokophoto_logo_image', get_template_directory_uri().'/img/logo.png');
$rokophoto_about_website = get_theme_mod('rokophoto_about_website',__( 'www.themeisle.com', 'rokophoto' ));
$rokophoto_contact_heading = get_theme_mod('rokophoto_contact_heading',__( 'WORK w/ ME', 'rokophoto' ));
$rokophoto_contact_email = get_theme_mod('rokophoto_contact_email', get_bloginfo('admin_email'));
?>
    <!-- Footer Section
    ================================================== -->
    <section id="footer"> <!-- Start footer -->
      <div class="container"> <!-- Container -->
	  <?php if(!empty($logourl)) : ?>
        <img src="<?php echo $logourl; ?>" alt="footer-logo">
	  <?php endif; ?>
        <br>
        <br>
        <!-- Buttons --> 
		<?php if(!empty($rokophoto_contact_heading)) : ?>
			<a id="show" class="btn wow bounceIn" data-wow-delay="0.6s"><h2><?php echo $rokophoto_contact_heading; ?></h2></a> <!-- Button to click toggle contact form -->
		<?php endif; ?>
        <br>
		<?php if(!empty($rokophoto_contact_email)) : ?>
			<p><?php echo $rokophoto_contact_email; ?></p> <!-- Your email add here -->
		<?php endif; ?>
		<?php if(!empty($rokophoto_about_website)) : ?>
			<p><?php echo $rokophoto_about_website; ?></p> <!-- Any other information here -->
		<?php endif; ?>
      </div> <!-- End container -->
    </section> <!-- End footer -->

    <!-- Toggle Contact Section
    ================================================== -->
    <section id="contact" style="display: none;">  <!-- Start contact -->
      <div class="container"> <!-- Container -->
            <form name="sentMessage" id="contactForm" novalidate>  <!-- Contact form -->
              <div class="row">
                <div class="col-md-6"> <!-- 6 column grid left form -->
                  <div class="form-group"> <!-- Your name input -->
                    <input type="text" autocomplete="off" class="form-control" placeholder="<?php _e('Your Name *','rokophoto'); ?>" id="name" required data-validation-required-message="<?php _e('Please enter your name.'); ?>">
                    <p class="help-block text-danger"></p>
                  </div> 
                  <div class="form-group"> <!-- Your email input -->
                    <input type="email" autocomplete="off" class="form-control" placeholder="<?php _e('Your Email *','rokophoto'); ?>" id="email" required data-validation-required-message="<?php _e('Please enter your email address.','rokophoto'); ?>">                            
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group"> <!-- Your phone no. input -->
                    <input type="tel" autocomplete="off" class="form-control" placeholder="<?php _e('Your Phone *','rokophoto'); ?>" id="phone" required data-validation-required-message="<?php _e('Please enter your phone number.','rokophoto'); ?>">
                    <p class="help-block text-danger"></p>
                  </div>
                </div> <!-- End 6 column grid left form -->
                <div class="col-md-6"> <!-- 6 column grid right form-->
                  <div class="form-group"> <!-- Your message input -->
                    <textarea class="form-control" placeholder="<?php _e('Your Message *','rokophoto'); ?>" id="message" required data-validation-required-message="<?php _e('Please enter a message.','rokophoto'); ?>"></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div> <!-- End 6 column grid right form-->
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button type="submit" class="btn btn-send"><?php _e('Send Message','rokophoto'); ?></button> <!-- Send button -->
                </div>
              </div>
            </form> <!-- End contact form -->
      </div> <!-- End container -->
    </section> <!-- Start contact -->
