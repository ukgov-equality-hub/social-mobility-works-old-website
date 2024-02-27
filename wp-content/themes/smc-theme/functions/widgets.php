<?php 
	
// add widget locations

function widgetInit(){
  register_sidebar( array(
    'name' => 'News Side 1',
    'id' => 'news-side1',
    'before_widget' => '<span class="side">',
      'after_widget' => '</span>',
      'before_title' => '<p class="sideTitle">',
      'after_title' => '</p>',
  ));
}
  
add_action('widgets_init', 'widgetInit');
