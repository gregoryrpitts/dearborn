    <!-- About Section
    ================================================== -->
    <section id="bsocials">
      <div class="container wow bounceIn" data-wow-delay="0.8s">
        <?php
          $socialtext = get_theme_mod('rokophotolite_social_text', __( 'Follow Me', 'rokophotolite' ));
          $sociallabel = get_theme_mod('rokophotolite_social_label', __( 'To get the latest update of me and my works', 'rokophotolite' ));
	  if(!empty($sociallabel)) {
              echo '<p> '.$sociallabel.' </p>';
	  }
	  if(!empty($socialtext)) {
              echo '<p>  &gt;&gt; <span class="follow"> '.$socialtext.' </span>  &lt;&lt; </p>';
	  }
        ?>
        <ol class="social">
        <?php
          $facebookurl = get_theme_mod('rokophotolite_facebook_link', '#');
          $twitterurl = get_theme_mod('rokophotolite_twitter_link', '#');
          $behanceurl = get_theme_mod('rokophotolite_behance_link', '#');
          $dribbbleurl = get_theme_mod('rokophotolite_dribbble_link', '#');
          $flickrurl = get_theme_mod('rokophotolite_flickr_link', '#');
          $googleplusurl = get_theme_mod('rokophotolite_googleplus_link', '#');
          $instagramurl = get_theme_mod('rokophotolite_instagram_link', '#');
          if(!empty($facebookurl)) {
              echo '<li><a href="'.$facebookurl.'"><i class="fa fa-facebook fa-2x"></i></a></li>';
          }

          if(!empty($twitterurl)) {
              echo '<li><a href="'.$twitterurl.'"><i class="fa fa-twitter fa-2x"></i></a></li>';
          }

          if(!empty($behanceurl)) {
              echo '<li><a href="'.$behanceurl.'"><i class="fa fa-behance fa-2x"></i></a></li>';
          }

          if(!empty($dribbbleurl)) {
              echo '<li><a href="'.$dribbbleurl.'"><i class="fa fa-dribbble fa-2x"></i></a></li>';
          }

          if(!empty($flickrurl)) {
              echo '<li><a href="'.$flickrurl.'"><i class="fa fa-flickr fa-2x"></i></a></li>';
          }
          
          if(!empty($googleplusurl)) {
              echo '<li><a href="'.$googleplusurl.'"><i class="fa fa-google-plus fa-2x"></i></a></li>';
          }
          
          if(!empty($instagramurl)) {
              echo '<li><a href="'.$instagramurl.'"><i class="fa fa-instagram fa-2x"></i></a></li>';
          }
         ?>
        </ol>
      </div>
    </section>

    <div id="footer-nav">  <!-- Copyright notice on the bottom -->
      <span><?php $copyright = get_theme_mod('rokophotolite_footer_copyrights', __( 'RokoPhoto Lite. All Rights Reserved', 'rokophotolite' )); if(!empty($copyright)) { echo $copyright; } ?> <br/> <a href="https://themeisle.com/themes/rokophoto-lite/" target="_blank" rel="nofollow"><?php _e( 'RokoPhoto Lite', 'rokophotolite' ); ?></a> <?php _e(' powered by','rokophotolite'); ?> <a href="https://wordpress.org/" target="_blank" rel="nofollow"> WordPress</a></span>
    </div>

<?php wp_footer(); ?>

  </body>
</html>