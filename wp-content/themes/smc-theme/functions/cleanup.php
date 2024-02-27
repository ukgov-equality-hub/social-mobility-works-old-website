<?php

// Remove version number
function wpb_remove_version() {
  return '';
}
add_filter('the_generator', 'wpb_remove_version');


// Disallow file edit
define( 'DISALLOW_FILE_EDIT', true );


// Remove Excerpt
add_action( 'init', function() {
   // remove_post_type_support('post', 'excerpt');
    remove_post_type_support( 'toolkit', 'excerpt' );
    remove_post_type_support( 'newsandevents', 'excerpt' );
}, 99);


/**
  * Adds a css class to the body element
  *
  * @param  array $classes the current body classes
  * @return array $classes modified classes
*/
 
function sk_body_class_for_pages( $classes ) {
  if ( is_singular( 'page' ) ) {
    global $post;
    $classes[] = 'page-' . $post->post_name;
  }
  return $classes;
}

add_filter( 'body_class', 'sk_body_class_for_pages' );

//Page Slug Body Class
add_filter('body_class','add_category_to_single');
  function add_category_to_single($classes) {
    if (is_single() ) {
      global $post;
      foreach((get_the_category($post->ID)) as $category) {
        // add category slug to the $classes array
        $classes[] = $category->category_nicename;
      }
    }
    // return the $classes array
    return $classes;
 }  

// Remove loading of emoji JS
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');


add_theme_support( 'post-thumbnails' );

// Redirect if home page is visited by any custom post type (search performed with no params selected)
function my_page_template_redirect() {
    if ( is_home()  && 'directory' == get_post_type() ) {
        wp_redirect( home_url( '/organisation-directory/') );
        die;
    }
    if ( is_home()  && 'casestudies' == get_post_type() ) {
        wp_redirect( home_url( '/success-stories/') );
        die;
    }
    if ( is_home()  && 'resource' == get_post_type() ) {
        wp_redirect( home_url( '/resources/') );
        die;
    }
    if ( is_home()  && 'event' == get_post_type() ) {
        wp_redirect( home_url( '/events/') );
        die;
    }


}
add_action( 'template_redirect', 'my_page_template_redirect' );


// Pre get posts functions
function wpsites_query( $query ) {
  // set the search academy page to have no max posts
  if (is_archive() && !is_admin() && 'resource' === $query->query['post_types']) {
      $query->set( 'posts_per_page', -1);
  }

  // alphabetically order archive pages for directory
  if (is_archive() && !is_admin() && 'directory' === $query->query['post_types']) {
    $query->set('orderby', 'title'); // order posts by title
    $query->set('order', 'ASC'); // and in ascending order  
  }

  // order Event archive pages by ACF date 
  if (is_archive() && !is_admin() && 'event' === $query->query['post_types']) {
    $query->set('orderby', 'meta_value'); 
    $query->set('meta_key', 'event_date');   
    $query->set('order', 'ASC');
  }


}
add_action( 'pre_get_posts', 'wpsites_query' );




 