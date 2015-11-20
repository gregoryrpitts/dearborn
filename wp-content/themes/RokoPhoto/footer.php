    <!-- About Section
    ================================================== -->
    <section id="bsocials">
      <div class="container wow bounceIn" data-wow-delay="0.8s">
        <?php
          $socialtext = get_theme_mod('rokophoto_social_text', __( 'Follow Me', 'rokophoto' ));
          $sociallabel = get_theme_mod('rokophoto_social_label', __( 'To get the latest update of me and my works', 'rokophoto' ));
	  if(!empty($sociallabel)) {
              echo '<p> '.$sociallabel.' </p>';
	  }
	  if(!empty($socialtext)) {
              echo '<p>  &gt;&gt; <span class="follow"> '.$socialtext.' </span>  &lt;&lt; </p>';
	  }
        ?>
        <ol class="social">
        <?php
          $facebookurl = get_theme_mod('rokophoto_facebook_link', '#');
          $twitterurl = get_theme_mod('rokophoto_twitter_link', '#');
          $behanceurl = get_theme_mod('rokophoto_behance_link', '#');
          $dribbbleurl = get_theme_mod('rokophoto_dribbble_link', '#');
          $flickrurl = get_theme_mod('rokophoto_flickr_link', '#');
          $googleplusurl = get_theme_mod('rokophoto_googleplus_link', '#');
          $instagramurl = get_theme_mod('rokophoto_instagram_link', '#');
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
      <span><?php $copyright = get_theme_mod('rokophoto_footer_copyrights', __( 'Awesome Photography. All Rights Reserved', 'rokophoto' )); if(!empty($copyright)) { echo $copyright; } ?> <br/> <?php $powered = get_theme_mod('rokophoto_footer_powerdby',__('<a href="https://themeisle.com/themes/rokophoto/" target="_blank" rel="nofollow">RokoPhoto</a> powered by <a href="https://wordpress.org/" target="_blank" rel="nofollow">WordPress</a>','rokophoto')); if(!empty($powered)) echo $powered; ?></span>
    </div>

<?php wp_footer(); ?>

  </body>
</html>
