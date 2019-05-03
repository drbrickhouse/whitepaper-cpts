<?php
/*
Plugin Name: WhitePaper CPT: Carousel
Description: Content to be displayed in a carousel
*/
// Our custom post type function
function create_whitepaper_cpt_carousel() {
  // CPT Options

$labels = array(
    'name'               => _x( 'Carousel', 'post type general name' ),
    'singular_name'      => _x( 'Carousel Item', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'book' ),
    'add_new_item'       => __( 'Add New Carousel Item' ),
    'edit_item'          => __( 'Edit Carousel Item' ),
    'new_item'           => __( 'New Carousel Item' ),
    'all_items'          => __( 'All Carousel Items' ),
    'view_item'          => __( 'View Carousel Item' ),
    'search_items'       => __( 'Search Carousel Items' ),
    'not_found'          => __( 'No Carousel Items found' ),
    'not_found_in_trash' => __( 'No Carousel Items found in the Trash' ),
    'parent_item_colon'  => '',
    'menu_name'          => 'Carousel'
  );
$rewrites = array(
  'slug'  => 'carousel',
  'with_front'  => false
);
  $args = array(
    'labels'        => $labels,
    'description'   => 'Displays Carousel Items',
    'public'        => true,
    'menu_position' => 6,
    'menu_icon'     => 'dashicons-slides',
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    'has_archive'   => false,
    'show_in_rest'  => true,
    'rewrite'       => $rewrites
);
register_post_type( 'carousel', $args	);
}

  // Hooking up our function to theme setup
add_action( 'init', 'create_whitepaper_cpt_carousel' );
?>
