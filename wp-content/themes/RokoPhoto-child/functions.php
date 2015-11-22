<?php
function rokophoto_child_customize_register($wp_customize) {


	/*******************************************/
	/*********    Letter Section **************/
	/*******************************************/
 
    $wp_customize->add_setting('rokophoto_about_name2', array(
        'default' => __('This is a test', 'rokophoto'),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('rokophoto_about_name2', array(
        'label' => __('Name', 'rokophoto'),
        'section' => 'rokophoto_about_content',
        'priority' => 5,
        'settings' => 'rokophoto_about_name2'
    ));
    
    
    
    
	/******************************************************/
	/**************       Frontpage vision      ***********/
	/******************************************************/
	
 	/******************************************************/
	/**************       Frontpage vision      ***********/
	/******************************************************/
    $wp_customize->add_panel('rokophoto_child_letter_section', array(
        'priority'       => 66,
        'capability'     => 'edit_theme_options',
        'title'          => __('Frontpage: Letter', 'rokophoto'),
        'description'    => __('This section allows you to customize the letter section that appears on the front page of your site.', 'rokophoto'),
    ));
	/* Settings 
	$wp_customize->add_section('rokophoto_vision_settings', array(
        'priority' => 5,
        'title' => __('Vision Settings', 'rokophoto'),
        'panel'  => 'rokophoto_vision_section',
    ));
		$wp_customize->add_setting( 'rokophoto_vision_display_settings');
	$wp_customize->add_control('rokophoto_vision_display_settings',array(
		'type' => 'checkbox',
		'label' => __('Disable Vision','rokophoto'),
		'section' => 'rokophoto_vision_settings',
		'priority' => 5,
	));
    $wp_customize->add_setting('rokophoto_vision_image', array(
        'default' => get_template_directory_uri() . '/img/01_services.jpg',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'rokophoto_vision_image', array(
        'label' => __('Vision Background Image', 'rokophoto'),
        'section' => 'rokophoto_vision_settings',
        'priority' => 10,
        'settings' => 'rokophoto_vision_image'
    )));
    
    */
	/* Colors 
	$wp_customize->add_section('rokophoto_vision_colors', array(
        'priority' => 6,
        'title' => __('Vision Colors', 'rokophoto'),
        'panel'  => 'rokophoto_vision_section',
    ));
	$wp_customize->add_setting( 'rokophoto_vision_colors_opacity', array( 'default' => 'rgba(0, 0, 0, 0.8)' ) );
	$wp_customize->add_control(
			new RokoPhoto_Customize_Alpha_Color_Control(
				$wp_customize,
				'rokophoto_vision_colors_opacity',
				array(
					'label'      => __( 'Background', 'rokophoto' ),
					'section'    => 'rokophoto_vision_colors',
					'settings'   => 'rokophoto_vision_colors_opacity',
					'priority'   => 1
				)
			)
	);
	$wp_customize->add_setting( 'rokophoto_vision_colors_text', array( 'default' => '#fff' ) );
	$wp_customize->add_control(
			new RokoPhoto_Customize_Alpha_Color_Control(
				$wp_customize,
				'rokophoto_vision_colors_text',
				array(
					'label'      => __( 'Text color', 'rokophoto' ),
					'section'    => 'rokophoto_vision_colors',
					'settings'   => 'rokophoto_vision_colors_text',
					'priority'   => 2
				)
			)
	);
    */
	/* Vision one 
    $wp_customize->add_section('rokophoto_vision_one', array(
        'priority' => 10,
        'title' => __('Vision One', 'rokophoto'),
        'panel'  => 'rokophoto_vision_section',
    ));
	$wp_customize->add_setting( 'rokophoto_vision_one_text_display');
	$wp_customize->add_control('rokophoto_vision_one_text_display',array(
		'type' => 'checkbox',
		'label' => __('Disable First Slide','rokophoto'),
		'section' => 'rokophoto_vision_one',
		'priority' => 5,
	));
    $wp_customize->add_setting('rokophoto_vision_one_text_one', array(
        'default' => __('Design To Showcase', 'rokophoto'),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('rokophoto_vision_one_text_one', array(
        'label' => __('First Line', 'rokophoto'),
        'section' => 'rokophoto_vision_one',
        'priority' => 10,
        'settings' => 'rokophoto_vision_one_text_one'
    ));
    $wp_customize->add_setting('rokophoto_vision_one_text_two', array(
        'default' => __('Photography', 'rokophoto'),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('rokophoto_vision_one_text_two', array(
        'label' => __('Second Line', 'rokophoto'),
        'section' => 'rokophoto_vision_one',
        'priority' => 15,
        'settings' => 'rokophoto_vision_one_text_two'
    ));
    $wp_customize->add_setting('rokophoto_vision_one_text_three', array(
        'default' => __('The need to capture the moment and freeze it for life.', 'rokophoto'),
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('rokophoto_vision_one_text_three', array(
        'label' => __('Third Line', 'rokophoto'),
        'section' => 'rokophoto_vision_one',
        'priority' => 20,
        'settings' => 'rokophoto_vision_one_text_three'
    ));
    */

}
add_action('customize_register', 'rokophoto_child_customize_register');