<?php


// WP Head and other cleanup functions inc hardening
require_once(get_template_directory().'/functions/cleanup.php'); 

// Advanced Custom Fields functions
require_once(get_template_directory().'/functions/acf.php'); 

// Remove Emoji Support
require_once(get_template_directory().'/functions/disable-emoji.php'); 

// Use this as a template for custom post types
require_once(get_template_directory().'/functions/custom-post-type.php');

// For creating custom taxonomies
require_once(get_template_directory().'/functions/custom-taxonomies.php');

// Navigation
require_once(get_template_directory().'/functions/navigations.php'); 

// Widgets
require_once(get_template_directory().'/functions/widgets.php'); 

// Register scripts and stylesheets
require_once(get_template_directory().'/functions/enqueue-scripts.php'); 