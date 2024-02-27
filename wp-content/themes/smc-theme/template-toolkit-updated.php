<?php 

/**
 * Template Name: Toolkit page template - Updated
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
				<span class="page-copy page-copy-blue-para">
					<h2 class="col-title" style="text-align: left"><?php echo get_field('toolkit_title'); ?></h2>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	        
				        	<?php the_content();?>
				        	<hr>
				    	<?php endwhile; else : ?>
						<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
					<?php endif; ?>
				</span>

				<!-- intro copy and video -->
				<section class="grid-x grid-margin-x">
					<?php $video_pane = get_field('video_pane'); ?>
					
					<div class="cell small-12 <?php if($video_pane['video_link']): ?>medium-6<?php endif; ?> page-copy">
						<?php echo get_field('intro_paragraphs'); ?> 
					</div>
					
					<?php if($video_pane['video_link']): ?>
						<section class="cell small-12 medium-6">
							<div class="videoWrapper">
								<iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo esc_html( $video_pane['video_link'] ); ?>?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
							</div>
						</section>
					<?php endif; ?>
					
				
				</section>


				<!-- Toolkit page info -->
				<section class="toolkit-info">
					<?php if( have_rows('toolkit_rows') ): ?>
					<?php $i = 0; ?>
						<?php while( have_rows('toolkit_rows') ): the_row(); 
							// vars
							$row = get_sub_field('row_name'); 
							$row_icon = get_sub_field('row_icon'); 
							$row_subtext = get_sub_field('row_subtext');
							
							$column_1_header = get_sub_field('column_1_header'); 
							$column_1_sub_header = get_sub_field('column_1_sub_header'); 
							$column_1_content = get_sub_field('column_1_content');
							
							$column_2_header = get_sub_field('column_2_header');
							$column_2_sub_header = get_sub_field('column_2_sub_header');
							$column_2_content = get_sub_field('column_2_content');
						?>

						<button class="accordion" style="background-image: url('<?php echo $row_icon['url']; ?>');">
							<div>
								<h2><?php echo $row; ?></h2>
								<p><?php echo $row_subtext; ?></p>
							</div>
						</button>
						

						<div class="panel">
							<div class="grid-x grid-margin-x">
								<div class="cell small-12 large-6" style="border: none;">
									<p class="col-title"><?php echo $column_1_header; ?></p>
									<?php if( $column_1_sub_header ): ?>
										<div class="col-sub-title"><?php echo $column_1_sub_header; ?></div>
									<?php endif; ?>
									<?php echo $column_1_content; ?>
								</div>

								<div class="cell small-12 large-6 row3">
									<p class="col-title"><?php echo $column_2_header; ?></p>
									<?php if( $column_2_sub_header ): ?>
										<div class="col-sub-title"><?php echo $column_2_sub_header; ?></div>
									<?php endif; ?>
									<?php echo $column_2_content; ?>
								</div>
							</div>
						</div>
						<?php endwhile; ?>
							
					<?php endif; ?>
				</section>

				<!-- Toolkit disclaimer text(if needed) -->
				<?php if(get_field('disclaimer_text')): ?>
					<section class="grid-x grid-margin-x toolkit-disclaimer content-pane content-pane-bot-mar">
						<div class="cell small-12 page-copy">
							<?php the_field('disclaimer_text'); ?>
						</div>
					</section>
				<?php endif; ?>
				

				<!-- Toolkit page quotes (if needed) -->
				<?php if(get_field('page_quotes')): ?>
					<section class="grid-x grid-margin-x toolkit-quote">
						<div class="cell small-12 page-copy">
							<?php the_field('page_quotes'); ?>
						</div>
					</section>
				<?php endif; ?>
				



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

