<?php 
	if (!defined('ABSPATH')) exit;
	get_header();
?>
<?php smc_breadcrumb('Case studies', 'null'); ?>


<main>



	<section class="case-study-content content-pane content-pane-top-mar content-pane-bot-pad-x" style="padding-bottom: 200px;">
		<div class="grid-container">
			<div class="grid-x">
				<div class="cell small-12 medium-8 ">
					<?php if(get_field('company_logo')): ?>
							<span class="company-logo"><img src="<?php echo get_field('company_logo'); ?>" border="0"></span>
						<?php endif; ?>

						<div class="page-copy page-copy-blue-para page-copy-grey2-para">
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			        
			        			<h1 class="main-title"><?php the_title();?></h1>   			
			        			<?php the_content();?>
						       	 	

						    	<?php endwhile; else : ?>
								<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
							<?php endif; ?>
						</div>

						<?php if( have_rows('sector_panes') ): ?>
							<?php while( have_rows('sector_panes') ): the_row(); 
								// vars
								$title = get_sub_field('sector_title'); 
								$content  = get_sub_field('sector_content'); 
							?>
								<h2 class="large-copy-bold" style="margin-bottom: 20px; margin-top: 60px"><?php echo $title; ?></h2>
								<div class="page-copy page-copy-blue-para">
									
									<?php echo $content; ?>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>

					
				</div>


				<aside class="cell small-12 medium-offset-1 medium-3">
					<?php 
						$post_objects = get_field('additional-case-studies');
					?>
		
					<?php if( $post_objects ): ?>

						<div class="grid-container">
							<div class="grid-x grid-margin-x">
								<div class="cell small-12">
									<h2 class="col-title" style="text-align: left">Additional success stories of interest</h2>
								</div>
							</div>

							<div class="grid-x grid-margin-x grid-margin-y small-up-1">
									    
							    <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
							        <?php setup_postdata($post); ?>
							         <div class="cell cs-pane">
							         

							         	<?php get_template_part( 'partials/case-study-individual-pane_cs-page'); ?>


									</div>
							       
							    <?php endforeach; ?>
								    
					    		<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
							
							</div>
						</div> 
					<?php endif; ?>
				</aside>


			</div>
		</div>

		<div class="svg-container">
			<svg xmlns="http://www.w3.org/2000/svg" version="1.1" preserveAspectRatio="xMinYMin meet" width="1200" height="85" viewBox="0 0 1200 85" class="svg-bottom-toleft svg-content">
			  <polygon points="1200 0 1200 85 0 85"/>
			</svg>
		</div>


	</section>


	

<?php get_template_part( 'partials/news-and-case-study-pane'); ?>


</main>

<!-- Main content pane -->












			

<?php get_footer(); ?>

