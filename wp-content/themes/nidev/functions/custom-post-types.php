
<?php

function portfolio_custom_post_type() {
  $labels = array(
    'name' => _x('Portfolio', 'post type general name'),
    'singular_name' => _x('Portfolio Item', 'post type singular name'),
    'add_new' => _x('Add New', 'Portfolio Item'),
    'add_new_item' => __('Add New Portfolio Item'),
    'edit_item' => __('Edit Portfolio Item'),
    'new_item' => __('New Portfolio Item'),
    'all_items' => __('All Portfolio Items'),
    'view_item' => __('View Portfolio Item'),
    'search_items' => __('Search Portfolio'),
    'not_found' =>  __('No Portfolio items found'),
    'not_found_in_trash' => __('No Portfolio items found in Trash'),
    'parent_item_colon' => '',
    'menu_name' => __('Portfolio')

  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'portfolio' ),
    'capability_type' => 'post',
    'has_archive' => true,
    'menu_icon'   => 'dashicons-admin-page',
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array( 'title', 'editor', 'thumbnail' )
  );
  register_post_type('portfolio',$args);
}
add_action( 'init', 'portfolio_custom_post_type' );
