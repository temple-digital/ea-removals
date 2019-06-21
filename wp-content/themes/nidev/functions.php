<?php

/*	 Enqueue scripts and styles.	*/

 function custom_scripts() {

	 // Theme stylesheet.
	 wp_enqueue_style( 'global-css', get_template_directory_uri() . '/css/global.css' );

	 // Theme Scripts.
	 wp_enqueue_script( 'global-js', get_theme_file_uri( '/assets/js/global.js' ), array( 'jquery' ), '1.0', true );

 }

 // Add jQuery
function urframework_enqueue_jquery() {
    wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-3.1.0.min.js');
    wp_enqueue_script('jquery');
}

function urframework_enqueue_global() {
    wp_enqueue_script('globaljs', get_template_directory_uri() . '/js/global.js', array('jquery'), '1.0', TRUE);
}


if (!is_admin()) {
    add_action('wp_enqueue_scripts', 'urframework_enqueue_jquery');
    add_action('wp_footer', 'urframework_enqueue_global', 19);
}

add_action( 'wp_enqueue_scripts', 'custom_scripts' );

locate_template('functions/custom-post-types.php', TRUE);

locate_template('functions/custom-front-end.php', TRUE);

locate_template('functions/custom-shortcodes.php', TRUE);