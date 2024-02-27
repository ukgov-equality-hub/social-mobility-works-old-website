<?php 

/**
 * Template Name: Toolkit Measurement page template
 * Template Post Type: toolkit
 
 **/

?>

<?php 
	if (!defined('ABSPATH')) exit;
	get_header();
	$pagecat = get_current_toolkit();

	// get main measurement page ID
	$original_measurement_pageID = 133;
?>

<?php get_template_part('partials/toolkit-navigation'); ?>

<?php 
	$pagecatbg = 'Toolkit-'.$pagecat;
	smc_breadcrumb($pagecatbg, 'null'); 
?>


<main class="toolkit-page content-pane content-pane-top-mar">
	<div class="grid-container">
		
		<div class="grid-x">
			<section class="cell small-12 large-8">
				<div class="page-copy"><h1>Measurement</h1></div>
				
				<ul id="tab-nav">
					<li><a href="data" class="data active">1. Data</a></li><!--
					--><li><a href="buy-in" class="buy-in">2. Buy-in</a></li><!--
					--><li><a href="progression" class="progression">3. Progression</a></li><!--
					--><li><a href="apprenticeships" class="apprenticeships">4. Apprenticeships</a></li>
				</ul>
			

				<div id="measurement-content-wrapper" class="page-copy">
					
					<!-- TAB 1 --- DATA -->
					<div class="measurement-content-block data active">
						<h2><strong>Part one:</strong> Measuring socio-economic diversity</h2>
						<div class="page-copy page-copy-blue-para page-copy-grey2-para">
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				        		<?php the_content();?>

						    	<?php endwhile; else : ?>
								<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
							<?php endif; ?>
						</div>

						<div id="what-to-ask-wrapper" class="verylightgrey-bg">
							<div class="page-copy">
								<p class="large-copy blue" style="margin-bottom: 20px;">What to ask</p>
								<!-- no longer pulling from main measurement page -->
								<div class="grey" style="padding-right: 30px"><?php the_field('data_what_to_ask_intro_copy');?></div>



								<!-- QUESTION 1 --- KEY QUESTION -->
								<section class="questions-wrapper">
									<button class="accordion orange">Key question</button>
									<div class="panel">
										<div class="panel-inner">
									 		<h3>What to ask?</h3>
									 		<h2><?php the_field('data_q1_question', $original_measurement_pageID);?></h2>
									 		<?php the_field('data_q1_details', $original_measurement_pageID);?>
									 		<hr>
									 		<?php the_field('data_q1_sub_details', $original_measurement_pageID);?>
									 		
									 		<div class="illustation">
										 		<h2 class="icon" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/toolkit/parental-occupation-icon.png')">Parental occupation at age 14</h2>
										 		<div class="grid-x align-center small-up-2 medium-up-3">
										 			<style>.svg .cover {display: none;}</style>
													<?php get_template_part('partials/charts/parental-occupation'); ?>
												</div>
											</div>

									 		<?php if( get_field('data_q1_notes', $original_measurement_pageID) ): ?>
									 			<?php the_field('data_q1_notes', $original_measurement_pageID);?>
									 		<?php endif; ?>
									 	</div>

									 	<div class="best-practice-pane">
									 		<strong>How to lead best practice?</strong><br>
									 		<?php the_field('data_best_practice', $original_measurement_pageID);?>
									 	</div>

									 	
									</div>
								</section>




								<div class="grey" style="padding-right: 30px;"><?php the_field('data_what_to_ask_mid_copy', $original_measurement_pageID);?></div>





								<!-- QUESTION 2 -->
								<section class="questions-wrapper">
									<button class="accordion blue">Question 2</button>
									<div class="panel">
										<div class="panel-inner">
									 		<h3>What to ask?</h3>
									 		<h2><?php the_field('data_q2_question', $original_measurement_pageID);?></h2>
									 		<?php the_field('data_q2_details', $original_measurement_pageID);?>
									 		<hr>
									 		<?php the_field('data_q2_sub_details', $original_measurement_pageID);?>
									 		
									 		<div class="illustation">
									 			<?php get_template_part('partials/charts/type-of-school'); ?>
									 		</div>

									 		<?php if( get_field('data_q2_notes') ): ?>
									 			<?php the_field('data_q2_notes');?>
									 		<?php endif; ?>
									 	</div>
									</div>
								</section>


								<!-- QUESTION 3 -->
								<section class="questions-wrapper">
									<button class="accordion blue">Question 3</button>
									<div class="panel">
										<div class="panel-inner">
									 		<h3>What to ask?</h3>
									 		<h2><?php the_field('data_q3_question', $original_measurement_pageID);?></h2>
									 		<?php the_field('data_q3_details', $original_measurement_pageID);?>
									 		<hr>
									 		<?php the_field('data_q3_sub_details', $original_measurement_pageID);?>
									 		
									 		<div class="illustation">
										 		<?php get_template_part('partials/charts/free-school-meals'); ?>
										 	</div>

									 		<?php if( get_field('data_q3_notes', $original_measurement_pageID) ): ?>
									 			<?php the_field('data_q3_notes', $original_measurement_pageID);?>
									 		<?php endif; ?>
									 	</div>
									</div>
								</section>



								<!-- QUESTION 4 -->
								<section class="questions-wrapper">
									<button class="accordion blue">Question 4 - optional</button>
									<div class="panel">
										<div class="panel-inner">
											<?php if( get_field('data_q4_pre_question', $original_measurement_pageID) ): ?>
												<br><?php the_field('data_q4_pre_question', $original_measurement_pageID);?>
											<?php endif; ?>

									 		<h3>What to ask?</h3>
									 		<h2><?php the_field('data_q4_question', $original_measurement_pageID);?></h2>
									 		<?php the_field('data_q4_details', $original_measurement_pageID);?>
									 		<hr>
									 		<?php the_field('data_q4_sub_details', $original_measurement_pageID);?>
									 		
									 		<div class="illustation">
										 		<?php get_template_part('partials/charts/first-in-family-to-attend-uni'); ?>
											</div>

									 		<?php if( get_field('data_q4_notes', $original_measurement_pageID) ): ?>
									 			<?php the_field('data_q4_notes', $original_measurement_pageID);?>
									 		<?php endif; ?>
									 	</div>
									</div>
								</section>







							</div>

						</div>
					</div>






					<!-- TAB 2 --- BUY-IN -->
					<div class="measurement-content-block buy-in">
						<h2><strong>Part two:</strong> Build trust to drive up response rates</h2>
						<div class="page-copy page-copy-grey-para">
							<p><?php the_field('buy_in_intro', $original_measurement_pageID);?></p>	
						</div>
						<br>
						<div class="page-copy page-copy-blue-para page-copy-blue-para-slim">
							<p>Reassurance on data protection</p>
							<?php the_field('buy_in_reassurance', $original_measurement_pageID);?>
						</div>
						<br><br>
						<div class="page-copy page-copy-blue-para page-copy-blue-para-slim">
							<p>Getting buy-in</p>
							<?php the_field('buy_in_getting-buy-in', $original_measurement_pageID);?>

							<?php if ($pagecat == 'creative-industries') : ?>
								<p>View the toolkit for more suggestions.</p>
							<?php else: ?>
								<p>View the toolkit for more suggestions, and check out how HMRC drove up response rates in this case study.</p>
							<?php endif; ?>


							
						</div>
					</div>






					<!-- TAB 3 --- Progression -->
					<div class="measurement-content-block progression">
						<h2><strong>Part three:</strong> Progression</h2>	

						<div class="page-copy page-copy-blue-para page-copy-grey2-para">
							<p>Why progression matters</p>
							<?php the_field('progression_why_matters', $original_measurement_pageID);?>
						</div>

						<br>


						<div class="page-copy page-copy-blue-para page-copy-blue-para-slim">
							<p>How to look at it</p>
							<?php the_field('progression_how_to_look', $original_measurement_pageID);?>
						</div>
						<br>
						<!-- now pulling from individual pages -->
						<?php if( have_rows('how_to_look_at_it_rows') ): ?>	
							<ul class="icon-list">
							<?php while( have_rows('how_to_look_at_it_rows') ): the_row(); ?>
								<li style="background-image: url('<?php echo get_sub_field('list_icon') ;?>');"><em><?php echo get_row_index(); ?>.</em><?php echo get_sub_field('row_text') ;?></li>
								
							<?php endwhile; ?>
							</ul>
						<?php endif; ?>

						<br>
						<div class="page-copy page-copy-blue-para page-copy-blue-para-slim">
							<p>How this helps</p>
							<?php the_field('progression_how_this_helps', $original_measurement_pageID);?>
						</div>

						<?php if ($pagecat == 'financial-and-professional') : ?>
							<?php get_template_part('partials/charts/fps-progression-charts'); ?>
						<?php endif; ?>


						<?php if ($pagecat == 'creative-industries') : ?>
							<?php get_template_part('partials/charts/creative-progression-charts'); ?>
						<?php endif; ?>



					</div>






					<!-- TAB 4 --- Apprenticeships -->

					<div class="measurement-content-block apprenticeships">
						<h2><strong>Part four:</strong> Metrics to measure the success of apprenticeships and training</h2>	
						
						<div class="page-copy page-copy-grey-para">
							<?php the_field('apprenticeships_copy', $original_measurement_pageID);?>	
						</div>
						<br>

						<?php if( have_rows('apprenticeships_rows', $original_measurement_pageID) ): ?>	
							<ul class="icon-list">
							<?php while( have_rows('apprenticeships_rows', $original_measurement_pageID) ): the_row(); ?>
								<li style="background-image: url('<?php echo get_sub_field('list_icon') ;?>');"><em><?php echo get_row_index(); ?>.</em><?php echo get_sub_field('row_text') ;?></li>
								

								<?php if( have_rows('sub-rows-repeater', $original_measurement_pageID) ): ?>	
									<li style="background-image:none"><ul>
										<?php while( have_rows('sub-rows-repeater', $original_measurement_pageID) ): the_row(); ?>
											<?php 
												$alphabet = range('a', 'z');
												
												//echo $alphabet[get_row_index()];

												$liLetter = $alphabet[get_row_index()-1]; 
											?>
											<li><em><?php echo $liLetter; ?>.</em><?php echo get_sub_field('sub-row-text') ;?></li>
										<?php endwhile; ?>
									</ul></li>
								<?php endif; ?>

							<?php endwhile; ?>
							</ul>
						<?php endif; ?>

						<br>

						<div class="page-copy page-copy-grey-para">
							<i><?php the_field('apprenticeships_note', $original_measurement_pageID);?></i>
						</div>

					</div>











				</div>


				<div style="margin-top: 80px">
					<?php get_template_part( 'partials/toolkit-footer-next+download', null, array('toolkit' => $pagecat)); ?>
				</div>

				<a href="<?php the_field('dive_deeper_link', $original_measurement_pageID);?>" target="_blank"><div class="dive-deeper-pane">
					<p><strong>Want to dive deeper?</strong><br>
					<?php the_field('dive_deeper_pane_text', $original_measurement_pageID);?></p>
					<img src="<?php echo get_template_directory_uri(); ?>/images/button-right-arrow.png" alt="" width="25" height="25">
				</div></a>

			</section>






			<section class="cell small-12 large-offset-1 large-3">
				<h2 class="col-title" style="text-align: left">See how other leading organisations are making changes</h2>
				
				<div class="toolkit-case-study-side">
					<?php 
						$post_object = get_field('case_study');
					?>

					<?php if( $post_object ): 
							$post = $post_object;
							setup_postdata( $post ); 
						?>

						<?php get_template_part( 'partials/case-study-individual-pane'); ?>
						
						<?php wp_reset_postdata();?>

					<?php endif; ?>
				</div>
				
				<h2 class="col-title" style="text-align: left">National benchmarks</h2>
				
				<div class="illustation" id="tk-illustation" style="margin-bottom: 40px;">
					<h2 class="icon" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/toolkit/parental-occupation-icon.png')">Parental occupation at age 14</h2>
					
					<div class="grid-x align-center small-up-2 medium-up-3 large-up-2">
						<?php get_template_part('partials/charts/parental-occupation'); ?>
					</div>

					<br>


					<?php if ($pagecat == 'financial-and-professional'): ?>
						<h3 class="col-title" style="text-align: left; font-weight: bold; margin-bottom: 0px">Industry benchmarks</h3>
						<div style="margin-bottom: 40px">
							<?php get_template_part('partials/charts/fps-benchmarks'); ?>
						</div>
					<?php endif; ?>


					<?php if ($pagecat == 'creative-industries'): ?>
						<h3 class="col-title" style="text-align: left; font-weight: bold; margin-bottom: 0px">Industry benchmarks</h3>
						<div style="margin-bottom: 40px">
							<?php get_template_part('partials/charts/creative-benchmarks'); ?>
						</div>
					<?php endif; ?>


					<?php get_template_part('partials/charts/type-of-school'); ?>
				
					<br>
				
					<?php get_template_part('partials/charts/free-school-meals'); ?>

				</div>


				<hr>
				<h2 class="col-title" style="text-align: left"><?php the_field('scorecard_section_title', $original_measurement_pageID) ;?></h2>
				<a href="<?php the_field('scorecard_link', $original_measurement_pageID) ;?>" target="_blank" class="standard-button standard-button-red plus-size-button-download"><div class="anim"></div>Download scorecard</a>
				<hr>

				<div id="contributors-logo-pane" class="contributors-logo-pane-small">
					<h2 class="col-title" style="text-align: left"><?php the_field('contributors_section_title', $original_measurement_pageID) ;?></h2>

						<div class="homeLogos">
							<?php 
								get_template_part('partials/toolkit_sidebar/toolkit_contributors', null, array('toolkit' => $pagecat)); 
							?>
						</div>
					</div>

			</section>



		</div>

		
	</div>



</main>

<!-- Main content pane -->



<div class="white-top">
	<?php get_template_part( 'partials/search-directory-pane'); ?>
</div>

<?php get_template_part( 'partials/news-and-case-study-pane'); ?>









			

<?php get_footer(); ?>

