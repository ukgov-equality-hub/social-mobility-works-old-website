<?php 

/**
 * Template Name: Toolkit page template - Apprenticeships DATA
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
			<div class="cell small-12 large-8 ">
				<h2 class="col-title" style="text-align: left; margin-bottom: 15px"><?php echo get_field('toolkit_title'); ?></h2>
				<div class="page-copy"><h1>Data</h1></div>
				

				<ul id="tab-nav">
					<li><a href="part-one" class="part-one active">1. Part one</a></li><!--
					--><li><a href="part-two" class="part-two">2. Part two</a></li><!--
					--><li><a href="part-three" class="part-three">3. Part three</a></li>
				</ul>



				<div id="measurement-content-wrapper" class="page-copy">
					
					<!-- TAB 1 --- Part one -->
					<div class="measurement-content-block part-one active blocklist">
						<h2 style="margin-bottom: 40px;"><strong>Part one:</strong>&nbsp;<?php the_field('part_one_title');?></h2>
						<?php the_field('part_one_content');?>
						<h3 class="large_title-orange" style="margin: 40px 0 0 0;">Key question</h3>
						
						<h4 class="medium-copy" style="margin: 10px 0 40px 0;"><strong><?php the_field('part_one_key_question');?></strong></h4>
						<div ><?php the_field('part_one_question_info');?></div>

						<hr style="margin: 40px 0">
						<div class="page-copy page-copy-blue-para-slim page-copy-blue-para">
							<?php the_field('part_one_tip_panel');?>
						</div>

					</div>



					<!-- TAB 2 --- Part two -->
					<div class="measurement-content-block part-two blocklist">
						<h2><strong>Part two:</strong>&nbsp;<?php the_field('part_two_title');?></h2> 
						<?php the_field('part_two_content');?>

					</div>


					<!-- TAB 3 --- Part three -->
					<div class="measurement-content-block part-three blocklist">
						<h2><strong>Part three:</strong>&nbsp;<?php the_field('part_three_title');?></h2>
						<?php the_field('part_three_content');?>
						
						<div style="margin-top: 40px">
							<?php if( have_rows('part_three_table') ): ?>
								<?php while( have_rows('part_three_table') ): the_row(); ?>
									<div class="page-copy page-copy-blue-para-slim page-copy-blue-para">
										<p><?php the_sub_field('title');?></p>
										<p><strong><?php the_sub_field('description');?></strong></p>
									</div>
									<div class="page-copy" style="margin-bottom: 40px;">
										<?php the_sub_field('why');?>
										<span class="lightblue"><?php the_sub_field('target');?></span>
									</div>

								<?php endwhile; ?>
							<?php endif; ?>
						</div>
						<?php the_field('part_three_notes');?>


					</div>


				</div>






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

				






				<!-- Bottom of page - More panel -->
				
				<?php $more_pane = get_field('more_panel'); ?>
				<?php if( $more_pane['panel_title'] ): ?>
						
						<div class="example-pane" style="background-size: 44px 44px;padding-right: 30px" >
						<h1><?php echo $more_pane['panel_title']; ?></h1>
						<?php echo $more_pane['panel_content']; ?>
						</div>
					

				<?php endif; ?>

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



				<div class="illustation" id="tk-illustation" style="margin-bottom: 40px;">
					<h2 class="icon" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/toolkit/parental-occupation-icon.png')">Parental occupation at age 14</h2>
					
					<div class="grid-x align-center small-up-2 medium-up-3 large-up-2">
						<?php get_template_part('partials/charts/parental-occupation'); ?>
					</div>

					
				</div>



				<!-- Examples/more pane -->
				<?php $example = get_field('example_pane'); ?>

				<?php if ($example['example_title']): ?>
					<div class="example-pane">
						<h1><?php echo $example['example_title']; ?></h1>
						<p class="intro"><?php echo $example['intro_text']; ?></p>
						<?php echo $example['pane_main_text']; ?>
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

