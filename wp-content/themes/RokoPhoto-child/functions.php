<?php
function rokophoto_child_customize_register($wp_customize) {


	/*******************************************/
	/*********    Letter Section **************/
	/*******************************************/
    $wp_customize->add_panel('rokophoto_child_letter_section', array(
        'priority'       => 66,
        'capability'     => 'edit_theme_options',
        'title'          => 'Frontpage: Letter',
        'description'    => 'This section allows you to customize the letter section that appears on the front page of your site.',
    ));
	/* Settings */
	$wp_customize->add_section('rokophoto_child_letter_settings', array(
        'priority' => 5,
        'title' => 'Letter Settings',
        'panel'  => 'rokophoto_child_letter_section',
    ));
	
    $wp_customize->add_setting( 'rokophoto_child_letter_display_settings');
	$wp_customize->add_control('rokophoto_child_letter_display_settings',array(
		'type' => 'checkbox',
		'label' => 'Disable Letter',
		'section' => 'rokophoto_child_letter_settings',
		'priority' => 5,
	));
    
    /* Paragraph One */
    $wp_customize->add_setting('rokophoto_child_letter_text1', array(
        'default' => 'Paragraph One',
        'sanitize_callback' => 'sanitize_text_field'
    ));
	$wp_customize->add_control('rokophoto_child_letter_text1', array(
        'label' => 'Paragraph One Text',
        'section' => 'rokophoto_child_letter_settings',
        'type' => 'textarea',
        'priority' => 9,
        'settings' => 'rokophoto_child_letter_text1'
    ));

    /* Paragraph Two */
    $wp_customize->add_setting('rokophoto_child_letter_text2', array(
        'default' => 'Paragraph Two',
        'sanitize_callback' => 'sanitize_text_field'
    ));
	$wp_customize->add_control('rokophoto_child_letter_text2', array(
        'label' => 'Paragraph Two Text',
        'section' => 'rokophoto_child_letter_settings',
        'type' => 'textarea',
        'priority' => 10,
        'settings' => 'rokophoto_child_letter_text2'
    ));
    
    /* Paragraph Three */
    $wp_customize->add_setting('rokophoto_child_letter_text3', array(
        'default' => 'Paragraph Three',
        'sanitize_callback' => 'sanitize_text_field'
    ));
	$wp_customize->add_control('rokophoto_child_letter_text3', array(
        'label' => 'Paragraph Three Text',
        'section' => 'rokophoto_child_letter_settings',
        'type' => 'textarea',
        'priority' => 11,
        'settings' => 'rokophoto_child_letter_text3'
    ));
    
    
    /*******************************************/
	/*********    Converstaions Section **************/
	/*******************************************/
    $wp_customize->add_panel('rokophoto_child_convo_section', array(
        'priority'       => 66,
        'capability'     => 'edit_theme_options',
        'title'          => 'Frontpage: Conversations',
        'description'    => 'This section allows you to customize the Colloborative Conversations section that appears on the front page of your site.',
    ));
	/* Settings */
	$wp_customize->add_section('rokophoto_child_convo_settings', array(
        'priority' => 5,
        'title' => 'Convo Settings',
        'panel'  => 'rokophoto_child_convo_section',
    ));
    
    $wp_customize->add_setting( 'rokophoto_child_convo_display_settings');
	$wp_customize->add_control('rokophoto_child_convo_display_settings',array(
		'type' => 'checkbox',
		'label' => 'Disable Conversations',
		'section' => 'rokophoto_child_convo_settings',
		'priority' => 5,
	));
    
    /* Title */
    $wp_customize->add_setting('rokophoto_child_convo_text1', array(
        'default' => 'Title',
        'sanitize_callback' => 'sanitize_text_field'
    ));
	$wp_customize->add_control('rokophoto_child_convo_text1', array(
        'label' => 'Paragraph One Text',
        'section' => 'rokophoto_child_convo_settings',
        'priority' => 8,
        'settings' => 'rokophoto_child_convo_text1'
    ));
    
    /* Paragraph One */
    $wp_customize->add_setting('rokophoto_child_convo_text2', array(
        'default' => 'Paragraph One',
        'sanitize_callback' => 'sanitize_text_field'
    ));
	$wp_customize->add_control('rokophoto_child_convo_text2', array(
        'label' => 'Paragraph One Text',
        'section' => 'rokophoto_child_convo_settings',
        'type' => 'textarea',
        'priority' => 9,
        'settings' => 'rokophoto_child_convo_text2'
    ));

    /* Paragraph Two */
    $wp_customize->add_setting('rokophoto_child_convo_text3', array(
        'default' => 'Paragraph Two',
        'sanitize_callback' => 'sanitize_text_field'
    ));
	$wp_customize->add_control('rokophoto_child_convo_text3', array(
        'label' => 'Paragraph Two Text',
        'section' => 'rokophoto_child_convo_settings',
        'type' => 'textarea',
        'priority' => 10,
        'settings' => 'rokophoto_child_convo_text3'
    ));
    
    /* Image */
    $wp_customize->add_setting('rokophoto_child_convo_image', array(
        'default' => get_template_directory_uri().'/../../uploads/2015/11/Untitled-5-450x400.jpg',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'rokophoto_child_convo_image', array(
        'label' => __('Conversation Image', 'rokophoto'),
        'section' => 'rokophoto_child_convo_settings',
        'priority' => 12,
        'settings' => 'rokophoto_child_convo_image'
    )));

}
add_action('customize_register', 'rokophoto_child_customize_register');