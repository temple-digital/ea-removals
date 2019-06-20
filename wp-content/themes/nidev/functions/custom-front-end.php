<?php

add_image_size( 'thumbnail', 200, 200, true );
add_image_size('full-bleed', 1800, 750, true);
add_image_size('square640', 640, 640, true);
add_image_size('rectangle640', 640, 320, true);


// This theme uses post thumbnails
add_theme_support( 'post-thumbnails' );


// Add Menus
function register_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu' ),
      'sub-menu' => __( 'Sub Menu' ),
      'sooter-menu' => __( 'Footer Menu' ),
    )
  );
}
add_action( 'init', 'register_menus' );

// Button
function button_shortcode($atts) {
  extract(shortcode_atts(array(
      'link' => '#',
      'text' => 'Find out more',
      'class' => 'primary',
      'target' => '_self'
  ), $atts));

  $return = '<a class="btn btn--'.$class.'" href="'.$link.'" target="'.$target.'">'.$text.'</a>';

  return $return;
}
add_shortcode('button', 'button_shortcode');

// ACF Options
if (function_exists('acf_add_options_sub_page')) {
  acf_add_options_sub_page('Contact Details');
}
if (function_exists('acf_set_options_page_title')) {
  acf_set_options_page_title(('Global Options'));
}
