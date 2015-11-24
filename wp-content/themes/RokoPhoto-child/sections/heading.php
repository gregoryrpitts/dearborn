<?php
$rokophoto_heading_text = get_theme_mod('rokophoto_child_heading');
?>

<!-- Tom Dearborn Letter
================================================== -->
<section id="heading">
  <div class="container">
    <div class="col-sm-12">
        <?php if(!empty($rokophoto_heading_text)) : ?>
        <p class="heading"><?php echo $rokophoto_heading_text; ?></p>
        <?php endif; ?>
    </div>
  </div>
</section>