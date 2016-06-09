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

  $classes[] = 'frontend';

  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
 * Clean up the_excerpt()
 */
function excerpt_more() {
  return ' &hellip;';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');

function instagram_sidebar() {
  register_sidebar(
    array(
      'id' => 'instagram-sidebar',
      'name' => __( 'Instagram' ),
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget' => '</div>',
    )
  );
}
add_action( 'widgets_init', __NAMESPACE__ . '\\instagram_sidebar' );

function custom_per_page($query) {
  if( is_category() ) {
    if ($query->is_category()) {
        $query->set('posts_per_page', 10);
    }
  }
  return $query;
}

add_action('pre_get_posts',  __NAMESPACE__ . '\\custom_per_page');




