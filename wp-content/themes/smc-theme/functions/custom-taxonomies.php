<?php

// hook into the init action and call create_instrument_taxonomies when it fires

add_action( 'init', 'create_custom_taxonomies', 0 );

function create_custom_taxonomies() {

  // Add new taxonomy

  $labels = array(
    'name' => _x( 'Locations', 'taxonomy general name'),
    'singular_name' => _x( 'Location', 'taxonomy singular name'),
    'search_items' => __( 'Search Locations'),
    'all_items' => __( 'All Locations'),
    'parent_item' => __( 'Parent Location'),
    'parent_item_colon' => __( 'Parent Location:'),
    'edit_item' => __( 'Edit Location'),
    'update_item' => __( 'Update Location'),
    'add_new_item' => __( 'Add New Location'),
    'new_item_name' => __( 'New Location Name'),
    'menu_name' => __( 'Locations'),
  );
  $args = array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'location' ),
  );

  register_taxonomy( 'location', array( 'directory' ), $args );


  $labels = array(
    'name' => _x( 'Sectors', 'taxonomy general name'),
    'singular_name' => _x( 'Sector', 'taxonomy singular name'),
    'search_items' => __( 'Search Sectors'),
    'all_items' => __( 'All Sectors'),
    'edit_item' => __( 'Edit Sector'),
    'update_item' => __( 'Update Sector'),
    'add_new_item' => __( 'Add New Sector'),
    'new_item_name' => __( 'New Sector Name'),
    'menu_name' => __( 'Sectors'),
  );
  $args = array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'sectors' ),
  );

  register_taxonomy( 'sectors', array( 'directory','casestudies','resource'), $args );


    $labels = array(
      'name' => _x( 'Resource type', 'taxonomy general name'),
      'singular_name' => _x( 'Resource type', 'taxonomy singular name'),
      'search_items' => __( 'Search Resource types'),
      'all_items' => __( 'All Resource types'),
      'edit_item' => __( 'Edit Resource type'),
      'update_item' => __( 'Update Resource type'),
      'add_new_item' => __( 'Add New Resource type'),
      'new_item_name' => __( 'New Resource type'),
      'menu_name' => __( 'Resource type'),
    );
    $args = array(
      'hierarchical' => true,
      'labels' => $labels,
      'show_ui' => true,
      'show_admin_column' => true,
      'query_var' => true,
      'rewrite' => array( 'slug' => 'content-type' ),
      'capabilities' => array(
        'manage_terms' => '',
        'edit_terms' => '',
        'delete_terms' => '',
        'assign_terms' => 'edit_posts'
      ),
      // hiding in editing as ACF is being used to choose the Taxonomy (exclusivly)
      'show_in_quick_edit' => false,
      'meta_box_cb' => false
    );

    register_taxonomy( 'content-type', array('academy', 'resource'), $args );




  $labels = array(
    'name' => _x( 'Industries', 'taxonomy general name'),
    'singular_name' => _x( 'Industry', 'taxonomy singular name'),
    'search_items' => __( 'Search Industries'),
    'all_items' => __( 'All Industries'),
    'edit_item' => __( 'Edit Industry'),
    'update_item' => __( 'Update Industry'),
    'add_new_item' => __( 'Add New Industry'),
    'new_item_name' => __( 'New Industry Name'),
    'menu_name' => __( 'Industries'),
  );
  $args = array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'industries' ),
  );

  register_taxonomy( 'industries', array( 'casestudies' ), $args );



  $labels = array(
    'name' => _x( 'Toolkit version', 'taxonomy general name'),
    'singular_name' => _x( 'Toolkit version', 'taxonomy singular name'),
    'search_items' => __( 'Search Toolkit versions'),
    'all_items' => __( 'All Toolkit versions'),
    'edit_item' => __( 'Edit Toolkit version'),
    'update_item' => __( 'Update Toolkit version'),
    'add_new_item' => __( 'Add New Toolkit version'),
    'new_item_name' => __( 'New Toolkit version'),
    'menu_name' => __( 'Toolkit versions'),
  );
  $args = array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'toolkit-versions' ),
  );

  register_taxonomy( 'toolkit-versions', array( 'toolkit' ), $args );




  $labels = array(
    'name' => _x( 'Event types', 'taxonomy general name'),
    'singular_name' => _x( 'Event types', 'taxonomy singular name'),
    'search_items' => __( 'Search Event types'),
    'all_items' => __( 'All Event types'),
    'edit_item' => __( 'Edit Event type'),
    'update_item' => __( 'Update Event type'),
    'add_new_item' => __( 'Add New Event type'),
    'new_item_name' => __( 'New Event type'),
    'menu_name' => __( 'Event types'),
  );
  $args = array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'event-types' ),
  );

  register_taxonomy( 'event-types', array( 'event' ), $args );


}




function smc_toolkit_names_dd() {
  // Loop through list of Toolkit names (if more than 1)
  // Get Toolkit names for post
  $toolkits = get_terms( 'toolkit-versions' );
  $count = count($toolkits);
  
  $alltoolkits = '<select name="toolkits" id="ma_toolkit" class="postform">';
  
  foreach( $toolkits as $toolkit ) {
      $alltoolkits .= '<option class="level-0" value="'.$toolkit->slug.'">'.$toolkit->name.'</option>' ;
      
      // Get rid of the other data stored in the object, since it's not needed
    unset($toolkit);
  } 

  $alltoolkits .= '</select>';
  return $alltoolkits;
}


function event_categories($spid) {
  $postID = $spid;

  // Loop through list of Categories (if more than 1)
  // Get Genres for post
  //$categories = get_the_terms( $post->ID , 'event-types' );
  $categories = get_the_terms( $postID , 'event-types' );
  $count = count($categories);
  
  $allcats = '';
  
  foreach( $categories as $cat ) {
    if (--$count <= 0) {
          $allcats .= $cat->name;
      } else {
        $allcats .= $cat->name.' <span>|</span> ' ;
      }
      // Get rid of the other data stored in the object, since it's not needed
    unset($cat);
  } 

  return $allcats;
}

