<?php

/* Custom Post Type Start */
function my_custom_post_directory() {
  $labels = array(
    'name'               => _x( 'Directory', 'post type general name' ),
    'singular_name'      => _x( 'Directory', 'post type singular name' ),
    'add_new'            => _x( 'Add New Entry', 'book' ),
    'add_new_item'       => __( 'Add New' ),
    'edit_item'          => __( 'Edit Entry' ),
    'new_item'           => __( 'New Entry' ),
    'all_items'          => __( 'All Entries' ),
    'view_item'          => __( 'View Directory Entry' ),
    'search_items'       => __( 'Search Directory' ),
    'not_found'          => __( 'No Directory Entries found' ),
    'not_found_in_trash' => __( 'No Directory Entries found in the Trash' ), 
    'menu_name'          => 'Directory'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds Directory entries',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail','excerpt','revisions','custom-fields'),
    'has_archive'   => true,
  );
  register_post_type( 'directory', $args ); 
}
add_action( 'init', 'my_custom_post_directory' );



function my_custom_post_case_studies() {
  $labels = array(
    'name'               => _x( 'Case Studies', 'post type general name' ),
    'singular_name'      => _x( 'Case Study', 'post type singular name' ),
    'add_new'            => _x( 'Add New Case Study', 'book' ),
    'add_new_item'       => __( 'Add New' ),
    'edit_item'          => __( 'Edit Case Study' ),
    'new_item'           => __( 'New Case Study' ),
    'all_items'          => __( 'All Case Studies' ),
    'view_item'          => __( 'View Case Study' ),
    'search_items'       => __( 'Search Case Studies' ),
    'not_found'          => __( 'No Case Study entries found' ),
    'not_found_in_trash' => __( 'No Case Study entries found in the Trash' ), 
    'menu_name'          => 'Case Studies'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds Case Studies',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail','excerpt','revisions','custom-fields'),
    'rewrite' => array( 'slug' => 'success-stories', 'with_front' => false ),  
    'has_archive'   => true,
  );
  register_post_type( 'CaseStudies', $args ); 
}
add_action( 'init', 'my_custom_post_case_studies' );


function my_custom_post_toolkit() {
  $labels = array(
    'name'               => _x( 'Toolkit pages', 'post type general name' ),
    'singular_name'      => _x( 'Toolkit page', 'post type singular name' ),
    'add_new'            => _x( 'Add New Toolkit page', 'book' ),
    'add_new_item'       => __( 'Add New' ),
    'edit_item'          => __( 'Edit Toolkit page' ),
    'new_item'           => __( 'New Toolkit page' ),
    'all_items'          => __( 'All Toolkit pages' ),
    'view_item'          => __( 'View Toolkit page' ),
    'search_items'       => __( 'Search Toolkit pages' ),
    'not_found'          => __( 'No Toolkit pages found' ),
    'not_found_in_trash' => __( 'No Toolkit pages found in the Trash' ), 
    'menu_name'          => 'Toolkit pages'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds Toolkit pages',
    'public'        => true,
    'menu_position' => 6,
    'supports'      => array( 'title', 'editor', 'thumbnail','excerpt','revisions','custom-fields','page-attributes'),
    'has_archive'   => false,
  );
  register_post_type( 'toolkit', $args ); 
}
add_action( 'init', 'my_custom_post_toolkit' );


function my_custom_academy_pages() {
  $labels = array(
    'name'               => _x( 'Academy pages', 'post type general name' ),
    'singular_name'      => _x( 'Academy page', 'post type singular name' ),
    'add_new'            => _x( 'Add New Academy page', 'book' ),
    'add_new_item'       => __( 'Add New Academy page' ),
    'edit_item'          => __( 'Edit Academy page' ),
    'new_item'           => __( 'New Academy page' ),
    'all_items'          => __( 'All Academy pages' ),
    'view_item'          => __( 'View Academy page' ),
    'search_items'       => __( 'Search Academy pages' ),
    'not_found'          => __( 'No Academy pages found' ),
    'not_found_in_trash' => __( 'No Academy pages found in the Trash' ), 
    'menu_name'          => 'Academy pages'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds Academy pages',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail','excerpt','revisions','custom-fields','page-attributes'),
    'has_archive'   => false,
  );
  register_post_type( 'academy', $args ); 
}
//add_action( 'init', 'my_custom_academy_pages' );


function my_custom_resource_pages() {
  $labels = array(
    'name'               => _x( 'Resource pages', 'post type general name' ),
    'singular_name'      => _x( 'Resource page', 'post type singular name' ),
    'add_new'            => _x( 'Add New Resource page', 'book' ),
    'add_new_item'       => __( 'Add New Resource page' ),
    'edit_item'          => __( 'Edit Resource page' ),
    'new_item'           => __( 'New Resource page' ),
    'all_items'          => __( 'All Resource pages' ),
    'view_item'          => __( 'View Resource page' ),
    'search_items'       => __( 'Search Resource pages' ),
    'not_found'          => __( 'No Resource pages found' ),
    'not_found_in_trash' => __( 'No Resource pages found in the Trash' ), 
    'menu_name'          => 'Resource pages'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds Resource pages',
    'public'        => true,
    'menu_position' => 6,
    'supports'      => array( 'title', 'editor', 'thumbnail','excerpt','revisions','custom-fields','page-attributes'),
    'has_archive'   => false,
  );
  register_post_type( 'resource', $args ); 
}
add_action( 'init', 'my_custom_resource_pages' );


function my_custom_event_pages() {
  $labels = array(
    'name'               => _x( 'Event pages', 'post type general name' ),
    'singular_name'      => _x( 'Event page', 'post type singular name' ),
    'add_new'            => _x( 'Add New Event page', 'book' ),
    'add_new_item'       => __( 'Add New Event page' ),
    'edit_item'          => __( 'Edit Event page' ),
    'new_item'           => __( 'New Event page' ),
    'all_items'          => __( 'All Event pages' ),
    'view_item'          => __( 'View Event page' ),
    'search_items'       => __( 'Search Event pages' ),
    'not_found'          => __( 'No Event pages found' ),
    'not_found_in_trash' => __( 'No Event pages found in the Trash' ), 
    'menu_name'          => 'Event pages'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds Event pages',
    'public'        => true,
    'menu_position' => 6,
    'menu_icon' => 'dashicons-calendar-alt',
    'supports'      => array( 'title', 'editor', 'thumbnail','excerpt','revisions','custom-fields','page-attributes'),
    'has_archive'   => false,
  );
  register_post_type( 'event', $args ); 
}
add_action( 'init', 'my_custom_event_pages' );
