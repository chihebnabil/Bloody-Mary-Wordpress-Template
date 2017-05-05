<?php

add_theme_support( "title-tag" );
add_theme_support( 'automatic-feed-links' );
add_theme_support( "post-thumbnails" );

if ( ! isset( $content_width ) ) $content_width = 900;

require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/widgets.php';

function bloody_mary_nav()
{
	wp_nav_menu(
	array(
		'theme_location'  => 'header-menu',
		'menu'            => '',
		'container'       => '',
		'container_class' => 'menu-{menu slug}-container',
		'container_id'    => '',
		'menu_class'      => 'menu',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul class="nav navbar-nav navbar-right">%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
		)
	);
}

// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function bloody_mary_pagination()
{
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    ));
}