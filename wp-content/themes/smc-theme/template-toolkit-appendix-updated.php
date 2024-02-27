<?php 

/**
 * Template Name: Toolkit Appendix page Updated template
 * Template Post Type: toolkit
**/

?>

<?php 
	if (!defined('ABSPATH')) exit;
	get_header();
	$pagecat = get_current_toolkit();
?>

<?php get_template_part('partials/toolkit-navigation'); ?>

<?php 
	$pagecatbg = 'Toolkit-'.$pagecat;
	smc_breadcrumb($pagecatbg, 'null'); 
?>


<main class="toolkit-page content-pane content-pane-top-mar">
	<div class="grid-container" style="border: 0px solid blue">
		<div class="grid-x">
			<div class="cell small-12 large-8">
				
					<h2 class="col-title" style="text-align: left"><?php echo get_field('toolkit_title'); ?></h2>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	        
				        	<?php the_content();?>
				        	
				    	<?php endwhile; else : ?>
						<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
					<?php endif; ?>
				

				


				<!-- Toolkit Appendix info --><!--content-pane-bot-pad-xx-->
				<section class="toolkit-appendix content-pane">
					<!-- <?php if( get_field('appendix_sub_title') ): ?>
						<div class="grid-container terms">
							<div class="grid-x">
								<div class="cell">
									<h2 class="large-copy blue"><strong><?php the_field('appendix_sub_title'); ?></strong></h2><br>
								</div>
							</div>
						</div>
					<?php endif; ?> -->
					<?php if( have_rows('appendix_c') ): ?>
						<div class="grid-container terms">
							<div class="grid-x">
								<div class="cell">
									<?php while( have_rows('appendix_c') ): the_row(); 
										// vars						
										$term_title = get_sub_field('term_title'); 
										$term_description = get_sub_field('term_description'); 		
									?>				
								
									<div class="term">
										<h2 class="large-copy lightblue"><?php echo $term_title; ?></h2>
										<?php echo $term_description; ?>
									</div>
							
								<?php endwhile; ?>
							</div>
						</div>
					</div>
						
					<?php endif; ?>
				</section>


				<?php get_template_part( 'partials/toolkit-dive-deeper-background'); ?>

	

				<!-- Toolkit bottom links.. next page and download Toolkit -->
				<?php get_template_part( 'partials/toolkit-footer-next+download', null, array('toolkit' => $pagecat)); ?>




			</div>

			<!-- Sidebar panes -->
			<aside class="cell small-12 large-offset-1 large-3">
				<?php 
					$post_object = get_field('case_study');
				?>
				<?php if( $post_object ): ?>
				<h2 class="col-title" style="text-align: left">See how other leading organisations are making changes</h2>
				<div class="toolkit-case-study-side">
					<!-- Multiple case studies - random 1 -->
					<?php
						$post = $post_object;
						setup_postdata( $post ); 
					?>

					<?php get_template_part( 'partials/case-study-individual-pane'); ?>
					
					<?php wp_reset_postdata();?>
				</div>
				<?php endif; ?>


				<!-- interventions pane -->
				<?php $interventions = get_field('interventions_pane'); ?>

				<?php if ($interventions['interventions_pane_title']): ?>
					<div class="interventions-pane">
						<h1><?php echo $interventions['interventions_pane_title']; ?></h1>
						<p class="intro"><?php echo $interventions['interventions_pane_intro']; ?></p>
						<?php echo $interventions['interventions_pane_copy']; ?>
					</div>
				<?php endif; ?>

				<div id="contributors-logo-pane" class="contributors-logo-pane-small">
					<h2 class="col-title" style="text-align: left">Created and endorsed by the Social Mobility Commission and these partners</h2>
					
					<div class="homeLogos">
						<?php 
							get_template_part('partials/toolkit_sidebar/toolkit_contributors', null, array('toolkit' => $pagecat)); 
						?>
					</div>
				</div>


			</aside>
		</div>
	</div>



	



	


	
	<?php if( get_field('featured_directory') ): 
		get_template_part( 'partials/toolkit-footer-directory-pane');
	endif; ?>















</main>

<!-- Main content pane -->












			

<?php get_footer(); ?>

