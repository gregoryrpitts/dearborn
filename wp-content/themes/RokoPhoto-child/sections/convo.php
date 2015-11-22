<?php

$rokophoto_child_convo_title = get_theme_mod('rokophoto_child_convo_title');
$rokophoto_child_convo_paragraph_one = get_theme_mod('rokophoto_child_convo_text1');
$rokophoto_child_convo_paragraph_two = get_theme_mod('rokophoto_child_convo_text2');
$rokophoto_child_convo_image = get_theme_mod('rokophoto_child_convo_image', get_template_directory_uri().'/../../uploads/2015/11/Untitled-5-750x650.jpg');

?>
<!-- Tom Dearborn / Convo Section
================================================== -->
<section id="convo" class="clearfix">
  <div class="col-sm-6 convo-container">
    <?php if(!empty($rokophoto_child_convo_title)) : ?>
      <h4 class="convo-title"><?php echo $rokophoto_child_convo_title; ?></h4>
    <?php endif; ?>
    <?php if(!empty($rokophoto_child_convo_paragraph_one)) : ?>
      <p class=""><?php echo $rokophoto_child_convo_paragraph_one; ?></p>
    <?php endif; ?>

    <?php if(!empty($rokophoto_child_convo_paragraph_two)) : ?>
      <p class=""><?php echo $rokophoto_child_convo_paragraph_two; ?></p>
    <?php endif; ?>
  </div>
  <div class="col-sm-6 image-container">
    <?php if(!empty($rokophoto_child_convo_image)) : ?>
      <img src="<?php echo $rokophoto_child_convo_image; ?>" >
    <?php endif; ?>
  </div>
</section>
