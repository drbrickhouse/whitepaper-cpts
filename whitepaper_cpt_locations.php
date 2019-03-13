<?php
/*
Plugin Name: WhitePaper CPT: Locations
Description: Pages for individual locations.
*/
// Our custom post type function
function create_whitepaper_cpt_locations() {

// CPT Options
$labels = array(
    'name'               => _x( 'Locations', 'post type general name' ),
    'singular_name'      => _x( 'Location', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'book' ),
    'add_new_item'       => __( 'Add New Location' ),
    'edit_item'          => __( 'Edit Location' ),
    'new_item'           => __( 'New Location' ),
    'all_items'          => __( 'All Locations' ),
    'view_item'          => __( 'View Locations' ),
    'search_items'       => __( 'Search Locations' ),
    'not_found'          => __( 'No locations found' ),
    'not_found_in_trash' => __( 'No locations found in the Trash' ),
    'parent_item_colon'  => '',
    'menu_name'          => 'Locations'
  );
$rewrites = array(
  'slug'  => 'locations',
  'with_front'  => false
);
  $args = array(
    'labels'        => $labels,
    'description'   => 'Displays locations',
    'public'        => true,
    'menu_position' => 5,
    'menu_icon'     => 'dashicons-location',
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    'has_archive'   => true,
    'show_in_rest'  => true,
    'rewrite'       => $rewrites
);
register_post_type( 'locations', $args	);
}

// Hooking up our function to theme setup
add_action( 'init', 'create_whitepaper_cpt_locations' );
?>
