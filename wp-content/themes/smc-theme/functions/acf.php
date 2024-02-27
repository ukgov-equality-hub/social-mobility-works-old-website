<?php

// for adding AFC custom options

if( function_exists('acf_add_options_page') ) {
  acf_add_options_page(array(
    'page_title'  => 'Footer details',
    'menu_title'  => 'Footer',
    'menu_slug'   => 'footer-details',
    'icon_url'    => 'dashicons-location',
    'capability'  => 'edit_posts',
    'redirect'    => false
  ));

  acf_add_options_page(array(
    'page_title'  => 'Case study side text',
    'menu_title'  => 'Case studies<br>side text',
    'menu_slug'   => 'cs-side-text',
    'icon_url'    => 'dashicons-edit',
    'capability'  => 'edit_posts',
    'position' => '7',
    'redirect'    => false
  ));

  acf_add_options_page(array(
    'page_title'  => 'Directory sub copy',
    'menu_title'  => 'Directory sub',
    'menu_slug'   => 'directory-submit',
    'icon_url'    => 'dashicons-location',
    'capability'  => 'edit_posts',
    'redirect'    => false
  ));

  acf_add_options_page(array(
    'page_title'  => 'Toolkit Download Links',
    'menu_title'  => 'Toolkit Downloads',
    'menu_slug'   => 'toolkit-downloads',
    'icon_url'    => 'dashicons-text-page',
    'capability'  => 'edit_posts',
    'position' => '9',
    'redirect'    => false
  ));

  acf_add_options_page(array(
    'page_title'  => 'LinkedIn Manual Post',
    'menu_title'  => 'LinkedIn Post',
    'menu_slug'   => 'linkedIn-post',
    'icon_url'    => 'dashicons-forms',
    'capability'  => 'edit_posts',
    'redirect'    => false
  ));

  acf_add_options_page(array(
    'page_title'  => 'Toolkit logos',
    'menu_title'  => 'Toolkit contributors logos',
    'menu_slug'   => 'toolkit-logos',
    'icon_url'    => 'dashicons-forms',
    'capability'  => 'edit_posts',
    'position' => '9',
    'redirect'    => false
  ));

}