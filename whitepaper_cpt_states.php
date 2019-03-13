<?php
/*
Plugin Name: WhitePaper CPT: States
Description: Pages for individual states.
*/
// Our custom post type function
function create_whitepaper_cpt_states() {

// CPT Options
$labels = array(
    'name'               => _x( 'States', 'post type general name' ),
    'singular_name'      => _x( 'State', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'book' ),
    'add_new_item'       => __( 'Add New State' ),
    'edit_item'          => __( 'Edit State' ),
    'new_item'           => __( 'New State' ),
    'all_items'          => __( 'All States' ),
    'view_item'          => __( 'View State' ),
    'search_items'       => __( 'Search States' ),
    'not_found'          => __( 'No states found' ),
    'not_found_in_trash' => __( 'No states found in the Trash' ),
    'parent_item_colon'  => '',
    'menu_name'          => 'States'
  );
$rewrites = array(
  'slug'  => 'states',
  'with_front'  => false
);
  $args = array(
    'labels'        => $labels,
    'description'   => 'Displays states',
    'public'        => true,
    'menu_position' => 5,
    'menu_icon'     => 'dashicons-location',
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    'has_archive'   => true,
    'show_in_rest'  => true,
    'rewrite'       => $rewrites
);
register_post_type( 'states', $args	);
}

// Hooking up our function to theme setup
add_action( 'init', 'create_whitepaper_cpt_states' );
?>
