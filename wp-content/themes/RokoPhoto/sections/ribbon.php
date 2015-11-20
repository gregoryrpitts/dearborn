<?php
$rokophoto_ribbon_text = get_theme_mod('rokophoto_ribbon_text',__( 'Want to talk? You can contact by me clicking on...', 'rokophoto' ));
$rokophoto_ribbon_button = get_theme_mod('rokophoto_ribbon_button',__( 'CONTACT', 'rokophoto' ));
$rokophoto_ribbon_button_link = get_theme_mod('rokophoto_ribbon_button_link', '#footer' );
?>

    <!-- Call-To-Action Section
    ================================================== -->
    <section id="subscribe"> 
      <div class="container">
        <div class="row">
          <div class="col-md-8 wow fadeIn" data-wow-delay="0.2s">
		  <?php if(!empty($rokophoto_ribbon_text)) : ?>
            <p><span><?php echo $rokophoto_ribbon_text; ?></span></p>
		  <?php endif; ?>
          </div>
          <div class="col-md-4 wow fadeIn" data-wow-delay="0.4s">
		  <?php if(!empty($rokophoto_ribbon_button)) : ?>
            <a class="page-scroll" <?php if(!empty($rokophoto_ribbon_button_link)) { echo 'href="'.$rokophoto_ribbon_button_link.'"'; } ?>>
				<span class="btn right"><?php echo $rokophoto_ribbon_button; ?></span>
			</a>
          <?php endif; ?>
          </div>
        </div>
      </div>
    </section>