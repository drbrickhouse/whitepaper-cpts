<?php
/*
Plugin Name: WhitePaper CPT: Sermons
Description: A sermon archive for church websites
*/

// Our custom post type function
function create_whitepaper_cpt_sermons() {

// CPT Options
$labels = array(
    'name'               => _x( 'Sermons', 'post type general name' ),
    'singular_name'      => _x( 'Sermon', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'sermon' ),
    'add_new_item'       => __( 'Add New Sermon' ),
    'edit_item'          => __( 'Edit Sermon' ),
    'new_item'           => __( 'New Sermon' ),
    'all_items'          => __( 'All Sermons' ),
    'view_item'          => __( 'View Sermon' ),
    'search_items'       => __( 'Search Sermons' ),
    'not_found'          => __( 'No sermons found' ),
    'not_found_in_trash' => __( 'No sermons found in the Trash' ),
    'parent_item_colon'  => '',
    'menu_name'          => 'Sermons'
  );
$rewrites = array(
  'slug'  => 'sermons',
  'with_front'  => false
);
  $args = array(
    'labels'        => $labels,
    'description'   => 'Displays sermons',
    'public'        => true,
    'menu_position' => 5,
    'menu_icon'     => 'dashicons-megaphone',
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    'has_archive'   => true,
    'show_in_rest'  => true,
    'rewrite'       => $rewrites
);
register_post_type( 'sermons', $args	);
}

// Hooking up our function to theme setup
add_action( 'init', 'create_whitepaper_cpt_sermons' );
?>
