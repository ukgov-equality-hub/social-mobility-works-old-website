<?php 
	if (!defined('ABSPATH')) exit;
	get_header('academy');
?>

<?php smc_breadcrumb('null', 'null'); ?>


<main>


<!-- Got to create 4 custom loops for each of the taxonomies -->
	<section class="case-study-content content-pane content-pane-top-mar">
		<div class="grid-container">
			
			<div class="grid-x grid-margin-x">
				<div class="cell small-12 page-copy page-copy-blue-para">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	        	
	        				<h1><?php the_title(); ?></h1>
				        	<?php the_content();?>
				        	

				    	<?php endwhile; else : ?>
						<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
					<?php endif; ?>
				</div>
			</div>


			<?php get_template_part( 'partials/resources/search-resource-pane'); ?>



				<!-- webinars & masterclasses pane -->
				
					<?php $featured_wm = get_field('webinars_masterclasses');
						if( $featured_wm ): ?>
						<h2 class="col-title" style="text-align: left; margin-top: 40px; margin-bottom: 20px">Webinars & masterclasses</h2>
						<div class="grid-x grid-margin-x grid-margin-y small-up-1 medium-up-2 large-up-4">	
							

							    <?php foreach( $featured_wm as $post ): 
        							// Setup this post for WP functions (variable must be named $post).
        							setup_postdata($post); ?>
									<div class="cell cs-pane">
										<?php get_template_part('partials/resources/resource-individual-pane-video', null, array('pane_color' => '#eb662e')); ?>
									</div>
								<?php endforeach; ?>
						</div>
						<div class="grid-x grid-margin-x grid-margin-y">	
							<div class="cell small-12"><a href="<?php echo get_home_url(); ?>/resources/webinars-masterclasses" class="standard-button standard-button-grey-outline standard-button-grey-outline-arrow">See all webinars & masterclasses</a></div>
						</div>
					<?php 
    				// Reset the global post object so that the rest of the page works correctly.
   	 					wp_reset_postdata(); 
   	 				endif; ?>







					<!-- Videos pane -->

					<?php $featured_video = get_field('videos');
						if( $featured_video ): ?>
						<h2 class="col-title" style="text-align: left; margin-top: 40px; margin-bottom: 20px">Videos</h2>
						<div class="grid-x grid-margin-x grid-margin-y small-up-1 medium-up-2 large-up-4">	
							

							    <?php foreach( $featured_video as $post ): 
        							// Setup this post for WP functions (variable must be named $post).
        							setup_postdata($post); ?>
									<div class="cell cs-pane">
										<?php get_template_part('partials/resources/resource-individual-pane-video', null, array('pane_color' => '#116388')); ?>
									</div>
								<?php endforeach; ?>
						</div>
						<div class="grid-x grid-margin-x grid-margin-y">	
							<div class="cell small-12"><a href="<?php echo get_home_url(); ?>/resources/videos/" class="standard-button standard-button-grey-outline standard-button-grey-outline-arrow">See all videos</a></div>
						</div>
					<?php 
    				// Reset the global post object so that the rest of the page works correctly.
   	 					wp_reset_postdata(); 
   	 				endif; ?>



	
					<!-- Further reading pane -->

					<?php $featured_fr = get_field('further_reading');
						if( $featured_fr ): ?>
						<h2 class="col-title" style="text-align: left; margin-top: 40px; margin-bottom: 20px">Further reading</h2>
						<div class="grid-x grid-margin-x grid-margin-y small-up-1 medium-up-2 large-up-4">	
							

							    <?php foreach( $featured_fr as $post ): 
        							// Setup this post for WP functions (variable must be named $post).
        							setup_postdata($post); ?>
									<div class="cell cs-pane">
										<?php get_template_part( 'partials/resources/resource-individual-pane-further-reading'); ?>
									</div>
								<?php endforeach; ?>
						</div>
						<div class="grid-x grid-margin-x grid-margin-y">	
							<div class="cell small-12"><a href="<?php echo get_home_url(); ?>/resources/further-reading" class="standard-button standard-button-grey-outline standard-button-grey-outline-arrow">See all further reading</a></div>
						</div>
					<?php 
    				// Reset the global post object so that the rest of the page works correctly.
   	 					wp_reset_postdata(); 
   	 				endif; ?>



					<!-- Downloadable resources pane -->
					<?php $featured_rd = get_field('resource_documents');
						if( $featured_rd ): ?>
						<h2 class="col-title" style="text-align: left; margin-top: 40px; margin-bottom: 20px">Resource documents</h2>
						<div class="grid-x grid-margin-x grid-margin-y small-up-1 medium-up-2 large-up-4">	
							

							    <?php foreach( $featured_rd as $post ): 
        							// Setup this post for WP functions (variable must be named $post).
        							setup_postdata($post); ?>
									<div class="cell cs-pane">
										<?php get_template_part( 'partials/resources/resource-individual-pane-downloads'); ?>
									</div>
								<?php endforeach; ?>
						</div>
						<div class="grid-x grid-margin-x grid-margin-y">	
							<div class="cell small-12"><a href="<?php echo get_home_url(); ?>/resources/resource-documents" class="standard-button standard-button-grey-outline standard-button-grey-outline-arrow">See all resource documents</a></div>
						</div>
					<?php 
    				// Reset the global post object so that the rest of the page works correctly.
   	 					wp_reset_postdata(); 
   	 				endif; ?>



			</div>
		</div>

		<div class="svg-container svg-bottom-expand">
			<svg xmlns="http://www.w3.org/2000/svg" version="1.1" preserveAspectRatio="xMinYMin meet" width="1200" height="85" viewBox="0 0 1200 85" class="svg-bottom-toleft svg-content">
			  <polygon points="1200 0 1200 85 0 85"/>
			</svg>
		</div>
	</section>



	<?php get_template_part( 'partials/news-and-case-study-pane'); ?>

	

</main>

<!-- Main content pane -->





			

<?php get_footer(); ?>

