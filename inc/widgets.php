<?php

function bloody_mary_widgets_init(){
	register_sidebar( array(
		'name'          => __( 'Widget Area', 'bloody-mary' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'bloody-mary' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}

add_action( 'widgets_init', 'bloody_mary_widgets_init' );
