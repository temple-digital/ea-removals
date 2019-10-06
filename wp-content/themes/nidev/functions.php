<?php

function custom_styles() {
	wp_enqueue_style( 'global-css', get_template_directory_uri() . '/css/global.css' );
}
function custom_scripts() {
	wp_enqueue_script( 'global-js', get_theme_file_uri( '/js/global.js' ), array( 'jquery' ), '1.0', true );
}

//jQuery register from theme files
function enqueue_jquery() {
    wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-3.1.0.min.js');
    wp_enqueue_script('jquery');
}

add_action( 'wp_enqueue_scripts', 'custom_styles' );
add_action( 'wp_enqueue_scripts', 'enqueue_jquery' );
add_action( 'wp_footer', 'custom_scripts' );

 // Stop wordpress and plugin updates
 function remove_core_updates() {
	global $wp_version;

	return (object) array(
		'last_checked'    => time(),
		'version_checked' => $wp_version,
		'updates'         => array()
	);
}

// Block updates
if ( $remove_updates ) {
	remove_action( 'load-update-core.php', 'wp_update_plugins' );
	add_filter( 'pre_site_transient_update_core', 'remove_core_updates' );
	add_filter( 'pre_site_transient_update_plugins', 'remove_core_updates' );
}

locate_template('functions/custom-post-types.php', TRUE);

locate_template('functions/custom-front-end.php', TRUE);

locate_template('functions/custom-shortcodes.php', TRUE);