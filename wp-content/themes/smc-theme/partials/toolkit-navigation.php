<?php 
	$pagecat = get_current_toolkit();
?>

<nav role="navigation" aria-labelledby="Toolkit navigation" id="toolkit-navigation" class="toolkit-navigation<?php echo '-'.$pagecat; ?>">
	<div class="grid-container">
		<div class="grid-x">
			<div class="cell small-12 medium-4 large-3 toolkit-nav-title-wrap">
				<div class="toolkit-nav-title">
					<h3><img src="<?php echo get_template_directory_uri(); ?>/images/toolkit-nav-icon.png" alt="Toolkit Navigation" border="0">Toolkit navigation</h3>
				</div>
			</div>
			<div class="cell small-12 medium-8 large-9">

				<?php
					if ($pagecat == 'cross-industry'){
						wp_nav_menu( array( 
						    'theme_location' => 'toolkit'
					    ));	
					} elseif ($pagecat == 'financial-and-professional'){
						wp_nav_menu( array( 
						    'theme_location' => 'toolkit-financial-professional'
					    ));
					} elseif ($pagecat == 'creative-industries'){
						wp_nav_menu( array( 
						    'theme_location' => 'toolkit-creative-industries'
					    ));
					} elseif ($pagecat == 'apprenticeships'){
						wp_nav_menu( array( 
						    'theme_location' => 'toolkit-apprenticeships'
					    ));
					}
				?>
			</div>
		</div>
	</div>
</nav>