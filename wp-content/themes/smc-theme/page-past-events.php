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
						<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
					<?php endif; ?>
				</div>
			</div>





			<div class="grid-x grid-margin-x grid-margin-y">
				<div class="cell small-12"><h3 class="col-title" style="text-align: left; margin-bottom: 0; margin-top: 30px">Previous events</h3></div>
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
						      'value' => '0',
						      'compare' => '==' // not really needed, this is the default
						    )
						  ),
				        'order'   => 'DESC'
					);
					query_posts($args);
					?>
					<?php if (have_posts()): ?>
							<?php while (have_posts()): the_post(); ?>
								
								<?php get_template_part( 'partials/events/single_event_pane'); ?>

							<?php endwhile; else : ?>
							<div class="cell small-12">
								<p><?php esc_html_e( 'Sorry, there are no past events to display.' ); ?></p>
							</div>
						<?php endif; ?>
					<?php wp_reset_query(); ?>
				
			


				<div class="grid-x grid-margin-x grid-margin-y">
					<div class="cell small-12 text-center">

						<a href="<?php echo home_url(); ?>/events/" class="standard-button standard-button-red plus-size-button-arrow"><div class="anim"></div>See upcoming events</a>
					

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

