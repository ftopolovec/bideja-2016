<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Setup;

/**
 * Add <body> classes
 */
function body_class($classes) {
  // Add page slug if it doesn't exist
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }

  // Add class if sidebar is active
  if (Setup\display_sidebar()) {
    $classes[] = 'sidebar-primary';
  }

  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
 * Clean up the_excerpt()
 */
function excerpt_more() {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'sage') . '</a>';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');

/**
 * Custom Post Type


function portfolio_custom_post_type (){

  $labels = array(
      'name' => 'Radovi',
      'singular_name' => 'Rad',
      'add_new' => 'Dodaj rad',
      'all_items' => 'Svi radovi',
      'add_new_item' => 'Dodaj rad',
      'edit_item' => 'Uredi rad',
      'new_item' => 'Novi rad'
      'view_item' => 'Pogledaj rad',
      'search_item' => 'Pretraži radove',
      'not_found' => 'Nemate objavljenih radova',
      'not_found_in_trash' => 'Smeće je prazno',
      'parent_item_colon' => 'Parent item'
    );

  $args = array(
      'labels' => $labels,
      'public' => true,
      'has_archive' => true,
      'publicly_queryable' => true,
      'query_var' => true,
      'rewrite' => true,
      'capability_type' => 'post',
      'hierarchical' => false,
      'support' => array(
          'title',
          'editor',
          'excerpt',
          'thumbnail',
          'revisions', 
      ),
      'taxonomies' => array('category', 'post_tag'),
      'menu_position' => 5,
      'exclude_from_search' => false
  );
  register_post_type('portfolio',$args);
}
add_action('init','portfolio_custom_post_type');*/




