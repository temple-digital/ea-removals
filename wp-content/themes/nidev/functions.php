<?php

/*	 Enqueue scripts and styles.	*/

 function custom_scripts() {

	 // Theme stylesheet.
	 wp_enqueue_style( 'global-css', get_template_directory_uri() . '/css/global.css' );

	 // Theme Scripts.
	 wp_enqueue_script( 'global-js', get_theme_file_uri( '/assets/js/global.js' ), array( 'jquery' ), '1.0', true );

 }

add_action( 'wp_enqueue_scripts', 'custom_scripts' );

locate_template('functions/custom-post-types.php', TRUE);

locate_template('functions/custom-front-end.php', TRUE);
