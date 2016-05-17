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
 * create a 'posts 2 posts' connection between Clients(work) and Campaigns
 */
function work_to_campaign_conntection() {
    p2p_register_connection_type( array(
        'name' => 'work_to_campaign',
        'from' => 'work',
        'to' => 'campaigns'
    ) );
}
add_action( 'p2p_init', __NAMESPACE__ . '\\work_to_campaign_conntection' );


function save_post_title_as_campaign( $post_id ) {

    $update = array();
    $update['ID'] = $post_id;
   
    if( get_post_type() == 'campaigns' ) {
      $update['post_title'] = get_the_title(get_field('client_name')[0]) . ' ' . get_field('campaign_title');
      wp_update_post($update);
    }  
}

// run after ACF saves the $_POST['acf'] data
add_action('acf/save_post', __NAMESPACE__ . '\\save_post_title_as_campaign', 20);





