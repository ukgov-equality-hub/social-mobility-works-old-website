<?php 


// Load any CSS resources

function load_css_resources() {
	// Add hamburger menu stylesheet, used in the navigation
	wp_enqueue_style('hamburger', get_template_directory_uri() . '/css/hamburgers.css', array(), '1.0' );
	// Load main stylesheet.
	wp_enqueue_style('style', get_stylesheet_uri().'?'.date('YmdHis'));

}

add_action('wp_enqueue_scripts', 'load_css_resources');


// add external JS files

function theme_scripts() {
  wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'theme_scripts');


function my_theme_scripts_function() {
	wp_enqueue_script( 'navscript', get_template_directory_uri() . '/js/nav-min.js', array( 'jquery' ));
	
	
	
	// scripts only needed on front page
	if (is_front_page()){ 
		wp_enqueue_script( 'gsap-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.1.1/gsap.min.js', array(), false, true );
		// wp_enqueue_script( 'testimonial', get_template_directory_uri() . '/js/testimonial.js', array( 'jquery', 'gsap-js' ));
  		// wp_enqueue_script( 'heroslider', get_template_directory_uri() . '/js/heroslider.js', array( 'jquery', 'gsap-js' ));	
  		wp_enqueue_script( 'contributors-logo-ani', get_template_directory_uri() . '/js/contributors-logo-ani-min.js', array( 'jquery', 'gsap-js' ));	


	}

	if (is_page_template( 'template-toolkit-updated.php' ) || is_page_template('template-toolkit-updated-apprenticeships.php')) {	
		wp_enqueue_script('toolkit-accordion', get_template_directory_uri() .'/js/toolkit-accordion-min.js',  array( 'jquery'));
	}


	if (is_page('strategic-approach') || is_page_template( 'template-toolkit-measurement.php' ) || is_page_template( 'template-toolkit-updated.php' ) || is_page_template('template-toolkit-appendix-updated.php') || is_page('maturity-assessment') || is_page_template('template-toolkit-updated-apprenticeships.php') || is_page_template('template-toolkit-apprenticeships-data.php')) {

		wp_enqueue_script( 'gsap-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.1.1/gsap.min.js', array(), false, true );
	
		// Scroll Magic options
		wp_enqueue_script( 'scrollmagic_script', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js', array('jquery'),'1.1', true);
		wp_enqueue_script( 'animation_script', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js', array('jquery'),'1.1', true);
		wp_enqueue_script( 'scrollmagic_debug_script', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js', array('jquery'),'1.1', true);
		


		if (is_page('strategic-approach')) {	
			wp_enqueue_script('strategic-approach-ani', get_template_directory_uri() .'/js/sa-animations.js',  array( 'jquery'));	
		}

		if (is_page_template( 'template-toolkit-measurement.php' ) || is_page_template('template-toolkit-apprenticeships-data.php')) {	
			wp_enqueue_script('toolkit-measuement-ani', get_template_directory_uri() .'/js/tkm-animations.js',  array( 'jquery'));
			wp_enqueue_script('toolkit-measuement-tabswitch', get_template_directory_uri() .'/js/tkm-tabswitch-min.js',  array( 'jquery'));	
			wp_enqueue_script('contributors-logo-ani', get_template_directory_uri() . '/js/contributors-logo-ani-min.js', array( 'jquery', 'gsap-js' ));
		}

		if (is_page_template( 'template-toolkit-updated.php' ) || is_page_template('template-toolkit-appendix-updated.php') || is_page_template('template-toolkit-updated-apprenticeships.php')) {	
			wp_enqueue_script('contributors-logo-ani', get_template_directory_uri() . '/js/contributors-logo-ani-min.js', array( 'jquery', 'gsap-js' ));
		}

		if (is_page('maturity-assessment')){
			wp_enqueue_script('maturity-assessment-js', get_template_directory_uri() . '/js/maturity-assessment-min.js', array( 'jquery', 'gsap-js' ));	
		}

	}

	
}

add_action('wp_enqueue_scripts','my_theme_scripts_function');