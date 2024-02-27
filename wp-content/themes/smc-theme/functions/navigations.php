<?php 

function smc_custom_new_menu() {
  register_nav_menus(
    array(
      'toolkit' => __( 'Toolkit' ),
      'toolkit-financial-professional' => __( 'Toolkit - financial and professional' ),
      'toolkit-creative-industries' => __( 'Toolkit - creative industries' ),
      'toolkit-apprenticeships' => __( 'Toolkit - apprenticeships' )
    )
  );
}
add_action( 'init', 'smc_custom_new_menu' );


/**
 * Generate breadcrumbs
*/

function smc_breadcrumb($level1,$level2){

	$breadcrumb = '<section class="breadcrumb-wrap"><div class="grid-container"><div class="grid-x"><div class="cell"><ul class="breadcrumb">';
	$breadcrumb .= '<li>You are here: </li>';
	$breadcrumb .= '<li><a href="'. home_url() .'">Home</a></li>';
	// Toolkit
	if ($level1 == 'Toolkit' || $level1 == 'Toolkit-cross-industry'){

		$breadcrumb .= '<li><a href="'. home_url() .'/toolkit/measurement/">Toolkit</a></li>';


	} elseif ($level1 == 'Toolkit-financial-and-professional'){
		$breadcrumb .= '<li><a href="'. home_url() .'/toolkit/financial-and-professional-measurement/">Toolkit</a></li>';
	} elseif ($level1 == 'Toolkit-creative-industries'){
		$breadcrumb .= '<li><a href="'. home_url() .'/toolkit/creative-industries-measurement/">Toolkit</a></li>';
	}	elseif ($level1 == 'Toolkit-apprenticeships'){
		$breadcrumb .= '<li><a href="'. home_url() .'/toolkit/apprenticeships-toolkit-data/">Toolkit</a></li>';
	} elseif ($level1 == 'Directory'){
		$breadcrumb .= '<li><a href="'. home_url() .'/organisation-directory/">Organisation directory</a></li>';
	} elseif ($level1 == 'Case studies' && $level2 == 'Search results'){
		$breadcrumb .= '<li><a href="'. home_url() .'/social-mobility-success-stories/">Success stories</a></li><li class="active">Search results</li>';
	} elseif ($level1 == 'Case studies'){
		$breadcrumb .= '<li><a href="'. home_url() .'/social-mobility-success-stories/">Success stories</a></li>';
	} elseif ($level1 == 'Strategic Approach'){
		$breadcrumb .= '<li><a href="'. home_url() .'/strategic-approach/">Strategic approach</a></li>';
	} elseif ($level1 == 'Resources' && $level2 == 'sr'){
		$breadcrumb .= '<li><a href="'. home_url() .'/resources/">Resources</a></li><li class="active">Resources search results</li>';
	} elseif ($level1 == 'Resources'){
		$breadcrumb .= '<li><a href="'. home_url() .'/resources/">Resources</a></li>';
	} elseif ($level1 == 'News & Events' && $level2 != 'ne') {
		$breadcrumb .= '<li><a href="'. home_url() .'/news/">News & blog</a></li>';
	} elseif ($level1 == 'null'){
		$breadcrumb .= '<li class="active">'. get_the_title() .'</li>';
	} elseif ($level1 == 'ne' && $level2 == 'ne'){
		$breadcrumb .= '<li class="active">News & blogs</li>';
	} elseif ($level1 == 'sr' && $level2 == 'sr'){
		$breadcrumb .= '<li class="active">Directory search results</li>';
	} elseif ($level1 == 'sr' && $level2 == 'nf'){
		$breadcrumb .= '<li class="active">Page not found</li>';
	} elseif ($level1 == 'Maturity assessment' && $level2 == 'ma'){
		$breadcrumb .= '<li class="active">Maturity assessment</li>';
	} elseif ($level1 == 'Events' && $level2 == 'sr'){
		$breadcrumb .= '<li><a href="'. home_url() .'/events/">Social Mobility Events</a></li><li class="active">Search results</li>';
	} elseif ($level1 == 'Events'){
		$breadcrumb .= '<li><a href="'. home_url() .'/events/">Social Mobility Events</a></li>';
	}

	if ($level2 == 'null' && $level1 != 'null'){
		$breadcrumb .= '<li class="active">'. get_the_title() .'</li>';
	} 


	$breadcrumb .= '</ul></div></div></div></section>';



	echo $breadcrumb;
};

function get_current_toolkit(){
	$terms = get_the_terms( $post->ID, 'toolkit-versions' );
	$term = $terms[0];
	$pagecat = $term->slug;
	return $pagecat;
}