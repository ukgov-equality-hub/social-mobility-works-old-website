<?php 
	if (!defined('ABSPATH')) exit;
	get_header('event');
?>

<?php smc_breadcrumb('null', 'null'); ?>


<main>



	<section class="case-study-content content-pane content-pane-top-mar">
		<div class="grid-container">
			
			<div class="grid-x grid-margin-x">
				<div class="cell small-12 page-copy page-copy-blue-para">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	        	
	        				<h1><?php the_title(); ?></h1>
				        	<?php the_content();?>
				        	

				    	<?php endwhile; else : ?>
						<p><?php esc_html_e( 'Sorry, there are no upcoming events to display.' ); ?></p>
					<?php endif; ?>
				</div>
			</div>


			<?php get_template_part( 'partials/events/search-events-pane'); ?>



			<?php 
				$event_featured = get_field('featured_event');
					if($event_featured): 
						$featID = $event_featured->ID;
					?>
						
					<div class="grid-x grid-margin-x" style="margin-top: 40px">
						<div class="cell small-12"><h3 class="col-title" style="text-align: left;">Featured event</h3></div>
					</div>

						<?php get_template_part( 'partials/events/featured_event_pane'); ?>
		
					
			<?php endif; ?>





			<div class="grid-x grid-margin-x grid-margin-y">
				<div class="cell small-12"><h3 class="col-title" style="text-align: left; margin-bottom: 0; margin-top: 30px">Upcoming events</h3></div>
			</div>
					<?php
					$args = array(
				        'posts_per_page' => -1,
				        'post_type' => 'event',
				        'meta_key'  => 'event_date',
    					'orderby'   => 'meta_value_num',
    					'post__not_in' => array($featID),
    					// checking to see if event is listed as archived (ACF)
    					'meta_query' => array(
						    array(
						      'key' => 'archive_event',
						      'value' => '1',
						      'compare' => '==' // not really needed, this is the default
						    )
						  ),
				        'order'   => 'ASC'
					);
					query_posts($args);
					?>
					<?php if (have_posts()): ?>
							<?php while (have_posts()): the_post(); ?>
								
								<?php get_template_part( 'partials/events/single_event_pane'); ?>

							<?php endwhile; else : ?>
							<div class="cell small-12">
								<p><?php esc_html_e( 'Sorry, there are no upcoming events to display.' ); ?></p>
							</div>
						<?php endif; ?>
					<?php wp_reset_query(); ?>
				
			


				<div class="grid-x grid-margin-x grid-margin-y">
					<div class="cell small-12 text-center">

						<a href="<?php echo home_url(); ?>/events/past-events/" class="standard-button standard-button-grey-outline standard-button-grey-outline-arrow plus-size-button-arrow-grey"><div class="anim"></div>See past events</a>
					

				</div>
				</div>


			</div>




			






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

