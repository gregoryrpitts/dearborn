<?php
 
if ( get_option( 'show_on_front' ) == 'page' ) {
	
	get_header();
	
	?>
	<div class="blog">
        <div class="container">
            <div class="row">

            <?php if ( have_posts() ) : ?>

                <?php while ( have_posts() ) : the_post(); ?>
                        <?php get_template_part( 'content', 'page'); ?>
                <?php endwhile; ?>

            <?php else : ?>
                <?php get_template_part( 'content', 'none' ); ?>
            <?php endif; ?>

            </div>
        </div>
    </div>
    
	<?php
	
	get_footer();
	
}
else {

	get_header('frontpage');

	$rokophoto_slider_display_settings = get_theme_mod('rokophoto_slider_display_settings');
	
	//gpitts
	$rokophoto_heading_display_settings = get_theme_mod('rokophoto_child_heading_display_settings');
	$rokophoto_letter_display_settings = get_theme_mod('rokophoto_child_letter_display_settings');
	$rokophoto_convo_display_settings = get_theme_mod('rokophoto_child_convo_display_settings');
	//end gpitts
	
	$rokophoto_vision_display_settings = get_theme_mod('rokophoto_vision_display_settings');
	$rokophoto_portfolio_display_settings = get_theme_mod('rokophoto_portfolio_display_settings');
	$rokophoto_ribbon_display_settings = get_theme_mod('rokophoto_ribbon_display_settings');
	$rokophoto_about_display_settings = get_theme_mod('rokophoto_about_display_settings');
	$rokophoto_contact_display_settings = get_theme_mod('rokophoto_contact_display_settings');

	if( isset($rokophoto_slider_display_settings) && $rokophoto_slider_display_settings != 1 ):
		include get_template_directory() . "/sections/slider.php";
	endif;

	// gpitts
	if( isset($rokophoto_heading_display_settings) && $rokophoto_heading_display_settings != 1 ):
		include get_template_directory() . "/../RokoPhoto-child/sections/heading.php";
	endif;
	if( isset($rokophoto_letter_display_settings) && $rokophoto_letter_display_settings != 1 ):
		include get_template_directory() . "/../RokoPhoto-child/sections/letter.php";
	endif;
	if( isset($rokophoto_convo_display_settings) && $rokophoto_convo_display_settings != 1 ):
		include get_template_directory() . "/../RokoPhoto-child/sections/convo.php";
	endif;
	// end gpitts

	if( isset($rokophoto_vision_display_settings) && $rokophoto_vision_display_settings != 1 ):
		include get_template_directory() . "/sections/vision.php";
	endif;

	if( isset($rokophoto_portfolio_display_settings) && $rokophoto_portfolio_display_settings != 1 ):
		include get_template_directory() . "/sections/portfolio.php";
	endif;

	if( isset($rokophoto_ribbon_display_settings) && $rokophoto_ribbon_display_settings != 1 ):
		include get_template_directory() . "/sections/ribbon.php";
	endif;

	if( isset($rokophoto_about_display_settings) && $rokophoto_about_display_settings != 1 ):
		include get_template_directory() . "/sections/about.php";
	endif;
	if( isset($rokophoto_contact_display_settings) && $rokophoto_contact_display_settings != 1 ):
		include get_template_directory() . "/sections/contact.php";
	endif;
	
	get_footer('frontpage');
}	
?>