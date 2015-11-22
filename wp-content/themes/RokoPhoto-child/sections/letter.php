<?php

$rokophoto_child_letter_paragraph_one = get_theme_mod('rokophoto_child_letter_text1');
$rokophoto_child_letter_paragraph_two = get_theme_mod('rokophoto_child_letter_text2');
$rokophoto_child_letter_paragraph_three = get_theme_mod('rokophoto_child_letter_text3');
$rokophoto_child_letter_signature = get_theme_mod('rokophoto_child_letter_signature');

?>
<!-- Tom Dearborn Letter
================================================== -->
<section id="letter">
  <div class="container">
    <div class="col-sm-12">
	     <?php if(!empty($rokophoto_child_letter_paragraph_one)) : ?>
         <p class="statement"><?php echo $rokophoto_child_letter_paragraph_one; ?></p>
	      <?php endif; ?>
    </div>
    <div class="col-sm-12">
	     <?php if(!empty($rokophoto_child_letter_paragraph_two)) : ?>
	        <p class="statement"><?php echo $rokophoto_child_letter_paragraph_two; ?></p>
	       <?php endif; ?>
    </div>
    <div class="col-sm-12">
	     <?php if(!empty($rokophoto_child_letter_paragraph_three)) : ?>
	        <p class="statement"><?php echo $rokophoto_child_letter_paragraph_three; ?></p>
	       <?php endif; ?>
    </div>
    <div class="col-sm-12">
	     <?php if(!empty($rokophoto_child_letter_signature)) : ?>
	        <p class="statement"><?php echo $rokophoto_child_letter_signature; ?></p>
	       <?php endif; ?>
    </div>
  </div>
</section>
