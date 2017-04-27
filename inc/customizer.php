<?php
/**
 * Bloody Mary Customizer functionality
 */

function bloody_mary_customize_register( $wp_customize ) {
   //All our sections, settings, and controls will be added here
$wp_customize->add_setting( 'myplugin_options[color]', array(
  'type' => 'option',
  'capability' => 'manage_options',
  'default' => '#ff2525',
  'sanitize_callback' => 'sanitize_hex_color',
) );
$wp_customize->add_control( 'myplugin_options[color]', array(
  'type' => 'text',
  'priority' => 10, // Within the section.
  'section' => 'colors', // Required, core or custom.
  'label' => __( 'Twitter URL' ),
  'description' => __( 'This is a date control with a red border.' ),
  'input_attrs' => array(
    'class' => 'my-custom-class-for-js',
    'style' => 'border: 1px solid #900',
    'placeholder' => __( 'http://' ),
  ),
  'active_callback' => 'is_front_page',
) );


 // Add the featured content section in case it's not already there.
	$wp_customize->add_section( 'featured_content', array(
		'title'           => __( 'Featured Content', 'bloody_mary' ),
		'description'     =>  __( 'Featured Content', 'bloody_mary' ),
		'priority'        => 130,
		'active_callback' => 'is_front_page',
	) );

     // Add the Social network urls section.
	$wp_customize->add_section( 'social_network', array(
		'title'           => __( 'Social', 'bloody_mary' ),
		'description'     =>  __( 'Social Network Links', 'bloody_mary' ),
		'priority'        => 130,
		'active_callback' => 'is_front_page',
	) );



     // Add the footer content section.
	$wp_customize->add_section( 'footer_content', array(
		'title'           => __( 'Footer', 'bloody_mary' ),
		'description'     =>  __( 'Footer', 'bloody_mary' ),
		'priority'        => 130,
		'active_callback' => 'is_front_page',
	) );
	
    // Add the featured content layout setting and control.
    $wp_customize->add_setting( 'featured_box_1', array(
		'default'           => 'lorem ipsum 1',
	
	) );
    $wp_customize->add_setting( 'featured_box_2', array(
		'default'           => 'lorem ipsum 3',
	
	) );
    $wp_customize->add_setting( 'featured_box_3', array(
		'default'           => 'lorem ipsum 3',
		
	) );


     // Add the footer content setting and control.
    $wp_customize->add_setting( 'footer_box_1', array(
		'default'           => 'lorem ipsum 1',
	
	) );
    $wp_customize->add_setting( 'footer_box_2', array(
		'default'           => 'lorem ipsum 2',
	
	) );
    $wp_customize->add_setting( 'footer_box_3', array(
		'default'           => 'lorem ipsum 3',
		
	) );


    $wp_customize->add_setting( 'facebook_url', array(
		'default'           => 'http://',
	
	) );
    $wp_customize->add_setting( 'twitter_url', array(
		'default'           => 'http://',
	
	) );
    $wp_customize->add_setting( 'github_url', array(
		'default'           => 'http://',
	) );


    $wp_customize->add_control( 'github_url', array(
		'label'   => __( 'Github', 'bloody_mary' ),
		'section' => 'social_network',
		'type'    => 'text',

	) );
    $wp_customize->add_control( 'facebook_url', array(
		'label'   => __( 'Facebook Page', 'bloody_mary' ),
		'section' => 'social_network',
		'type'    => 'text',

	) );
    $wp_customize->add_control( 'twitter_url', array(
		'label'   => __( 'Twitter', 'bloody_mary' ),
		'section' => 'social_network',
		'type'    => 'text',

	) );	
    
    $wp_customize->add_control( 'featured_box_1', array(
		'label'   => __( 'Layout', 'twentyfourteen' ),
		'section' => 'featured_content',
		'type'    => 'text',

	) );
    $wp_customize->add_control( 'featured_box_2', array(
		'label'   => __( 'Layout', 'twentyfourteen' ),
		'section' => 'featured_content',
		'type'    => 'text',

	) );
    $wp_customize->add_control( 'featured_box_3', array(
		'label'   => __( 'Layout', 'twentyfourteen' ),
		'section' => 'featured_content',
		'type'    => 'text',

	) );


       $wp_customize->add_control( 'footer_box_1', array(
		'label'   => __( 'Layout', 'twentyfourteen' ),
		'section' => 'footer_content',
		'type'    => 'text',

	) );
    $wp_customize->add_control( 'footer_box_2', array(
		'label'   => __( 'Layout', 'twentyfourteen' ),
		'section' => 'footer_content',
		'type'    => 'text',

	) );
    $wp_customize->add_control( 'footer_box_3', array(
		'label'   => __( 'Layout', 'twentyfourteen' ),
		'section' => 'footer_content',
		'type'    => 'text',

	) );



}

add_action( 'customize_register', 'bloody_mary_customize_register' );