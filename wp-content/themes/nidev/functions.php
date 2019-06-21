<?php

function custom_scripts() {
	wp_enqueue_style( 'global-css', get_template_directory_uri() . '/css/global.css' );
	wp_enqueue_script( 'global-js', get_theme_file_uri( '/js/global.js' ), array( 'jquery' ), '1.0', true );
}

//jQuery register from theme files
function enqueue_jquery() {
    wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-3.1.0.min.js');
    wp_enqueue_script('jquery');
}

add_action( 'wp_enqueue_scripts', 'custom_scripts' );
add_action( 'wp_enqueue_scripts', 'enqueue_jquery' );

locate_template('functions/custom-post-types.php', TRUE);

locate_template('functions/custom-front-end.php', TRUE);

locate_template('functions/custom-shortcodes.php', TRUE);