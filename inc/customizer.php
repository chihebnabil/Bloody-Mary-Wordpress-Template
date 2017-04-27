<?php
/**
 * Bloody Mary Customizer functionality
 */

function bloody_mary_customize_register( $wp_customize ) {
   //All our sections, settings, and controls will be added here


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

	   // Add the header section.
	$wp_customize->add_section( 'header', array(
		'title'           => __( 'Header', 'bloody_mary' ),
		'description'     =>  __( 'Header', 'bloody_mary' ),
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
		'sanitize_callback' => array( $this, 'sanitize_textbox' )
		));
    $wp_customize->add_setting( 'featured_box_2', array(
		'default'           => 'lorem ipsum 3',
		'sanitize_callback' => array( $this, 'sanitize_textbox' )
	
	) );
    $wp_customize->add_setting( 'featured_box_3', array(
		'default'           => 'lorem ipsum 3',
		'sanitize_callback' => array( $this, 'sanitize_textbox' )
		
	) );


     // Add the footer content setting and control.
    $wp_customize->add_setting( 'footer_box_1', array(
		'default'           => 'lorem ipsum 1',
		'sanitize_callback' => array( $this, 'sanitize_textbox' )
	
	) );
    $wp_customize->add_setting( 'footer_box_2', array(
		'default'           => 'lorem ipsum 2',
		'sanitize_callback' => array( $this, 'sanitize_textbox' )
	
	) );
    $wp_customize->add_setting( 'footer_box_3', array(
		'default'           => 'lorem ipsum 3',
		'sanitize_callback' => array( $this, 'sanitize_textbox' )
		
	) );


    $wp_customize->add_setting( 'facebook_url', array(
		'default'           => 'http://',
		'sanitize_callback' => array( $this, 'sanitize_textbox' )
	
	) );
     $wp_customize->add_setting( 'linkedin_url', array(
		'default'           => 'http://',
		'sanitize_callback' => array( $this, 'sanitize_textbox' )
	
	) );
    $wp_customize->add_setting( 'twitter_url', array(
		'default'           => 'http://',
		'sanitize_callback' => array( $this, 'sanitize_textbox' )
	
	) );
    $wp_customize->add_setting( 'github_url', array(
		'default'           => 'http://',
		'sanitize_callback' => array( $this, 'sanitize_textbox' )
	) );

    $wp_customize->add_setting( 'header_title', array(
		'default'           => 'lorem ipsum 1',
		'sanitize_callback' => array( $this, 'sanitize_textbox' )
		));
		$wp_customize->add_setting( 'header_subtitle', array(
		'default'           => 'lorem ipsum 1',
		'sanitize_callback' => array( $this, 'sanitize_textbox' )
		));
    $wp_customize->add_control( 'github_url', array(
		'label'   => __( 'Github', 'bloody_mary' ),
		'section' => 'social_network',
		'type'    => 'text',

	) );
    $wp_customize->add_control( 'facebook_url', array(
		'label'   => __( 'Facebook Page', 'bloody_mary' ),
		'section' => 'social_network',
		'type'    => 'url',

	) );
    $wp_customize->add_control( 'linkedin_url', array(
		'label'   => __( 'Linkedin', 'bloody_mary' ),
		'section' => 'social_network',
		'type'    => 'url',

	) );

    $wp_customize->add_control( 'twitter_url', array(
		'label'   => __( 'Twitter', 'bloody_mary' ),
		'section' => 'social_network',
		'type'    => 'url',

	) );	
    
    $wp_customize->add_control( 'featured_box_1', array(
		'label'   => __( 'Featured Box 1', 'bloody_mary' ),
		'section' => 'featured_content',
		'type'    => 'text',

	) );
    $wp_customize->add_control( 'featured_box_2', array(
		'label'   => __( 'Featured Box 2', 'bloody_mary' ),
		'section' => 'featured_content',
		'type'    => 'text',

	) );
    $wp_customize->add_control( 'featured_box_3', array(
		'label'   => __( 'Featured Box 3', 'bloody_mary' ),
		'section' => 'featured_content',
		'type'    => 'text',

	) );


       $wp_customize->add_control( 'footer_box_1', array(
		'label'   => __( 'Footer Box 1', 'bloody_mary' ),
		'section' => 'footer_content',
		'type'    => 'text',

	) );
    $wp_customize->add_control( 'footer_box_2', array(
		'label'   => __( 'Footer Box 2', 'bloody_mary' ),
		'section' => 'footer_content',
		'type'    => 'text',

	) );
    $wp_customize->add_control( 'footer_box_3', array(
		'label'   => __( 'Footer Box 3', 'bloody_mary' ),
		'section' => 'footer_content',
		'type'    => 'text',

	) );

	  $wp_customize->add_control( 'header_title', array(
		'label'   => __( 'Title', 'bloody_mary' ),
		'section' => 'header',
		'type'    => 'text',

	) );
	  $wp_customize->add_control( 'header_subtitle', array(
		'label'   => __( 'Subtitle', 'bloody_mary' ),
		'section' => 'header',
		'type'    => 'text',

	) );



}

add_action( 'customize_register', 'bloody_mary_customize_register' );