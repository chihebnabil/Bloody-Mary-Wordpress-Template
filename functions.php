<?php

add_theme_support( "title-tag" );
add_theme_support( 'automatic-feed-links' );

if ( ! isset( $content_width ) ) $content_width = 900;


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



// create custom plugin settings menu
add_action('admin_menu', 'bloody_mary_plugin_create_menu');

function bloody_mary_plugin_create_menu() {

	//create new top-level menu
	add_theme_page('Bloody Mary Plugin Settings', 'Settings', 'administrator', __FILE__, 'bloody_mary_settings_page' , plugins_url('/images/icon.png', __FILE__) );

	//call register settings function
	add_action( 'admin_init', 'register_bloody_mary_plugin_settings' );
}


function register_bloody_mary_plugin_settings() {
	//register our settings
	register_setting( 'bloody-mary-plugin-settings-group', 'facebook' );
	register_setting( 'bloody-mary-plugin-settings-group', 'twitter' );
	register_setting( 'bloody-mary-plugin-settings-group', 'github' );
	register_setting( 'bloody-mary-plugin-settings-group', 'about_text' );
	register_setting( 'bloody-mary-plugin-settings-group', 'contact_text' );
}

function bloody_mary_settings_page() {
?>
<div class="wrap">
<h1>Your Plugin Name</h1>

<form method="post" action="options.php">
    <?php settings_fields( 'bloody-mary-plugin-settings-group' ); ?>
    <?php do_settings_sections( 'bloody-mary-plugin-settings-group' ); ?>
    <table class="form-table">
	<tr valign="top">
        <th scope="row">About Text</th>
        <td><input type="text" name="about_text" value="<?php echo esc_attr( get_option('about_text') ); ?>"/></td>
        </tr>
		<tr valign="top">
        <th scope="row">Contact Text</th>
        <td><input type="text" name="contact_text" value="<?php echo esc_attr( get_option('contact_text') ); ?>" /></td>
        </tr>
        <tr valign="top">
        <th scope="row">Facebook</th>
        <td><input type="url" name="facebook" value="<?php echo esc_attr( get_option('facebook') ); ?>" /></td>
        </tr>
         
        <tr valign="top">
        <th scope="row">Twitter</th>
        <td><input type="url" name="twitter" value="<?php echo esc_attr( get_option('twitter') ); ?>" /></td>
        </tr>
        
        <tr valign="top">
        <th scope="row">Github </th>
        <td><input type="url" name="github" value="<?php echo esc_attr( get_option('github') ); ?>" /></td>
        </tr>
    </table>
    
    <?php submit_button(); ?>

</form>
</div>
<?php }