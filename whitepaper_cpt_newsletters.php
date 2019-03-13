<?php
/*
Plugin Name: WhitePaper CPT: Newsletters
Description: An archive of newsletters
*/

// Our custom post type function
function create_whitepaper_cpt_newsletters() {

// CPT Options
$labels = array(
    'name'               => _x( 'Newsletters', 'post type general name' ),
    'singular_name'      => _x( 'Newsletter', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'newsletter' ),
    'add_new_item'       => __( 'Add New Newsletter' ),
    'edit_item'          => __( 'Edit Newsletter' ),
    'new_item'           => __( 'New Newsletter' ),
    'all_items'          => __( 'All Newsletters' ),
    'view_item'          => __( 'View Newsletter' ),
    'search_items'       => __( 'Search Newsletters' ),
    'not_found'          => __( 'No newsletters found' ),
    'not_found_in_trash' => __( 'No newsletters found in the Trash' ),
    'parent_item_colon'  => '',
    'menu_name'          => 'Newsletters'
  );
$rewrites = array(
  'slug'  => 'newsletters',
  'with_front'  => false
);
  $args = array(
    'labels'        => $labels,
    'description'   => 'Displays newsletters',
    'public'        => true,
    'menu_position' => 5,
    'menu_icon'     => 'dashicons-welcome-write-blog',
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    'has_archive'   => true,
    'show_in_rest'  => true,
    'rewrite'       => $rewrites
);
register_post_type( 'newsletters', $args	);
}

// Hooking up our function to theme setup
add_action( 'init', 'create_whitepaper_cpt_newsletters' );
?>
