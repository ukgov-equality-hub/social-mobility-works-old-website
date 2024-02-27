<?php 
	if (!defined('ABSPATH')) exit;
	get_header('event');
?>

<?php smc_breadcrumb('Events', 'sr'); ?>


<main>



	<section class="case-study-content content-pane content-pane-top-mar">
		<div class="grid-container">
			
			<?php get_template_part( 'partials/events/search-events-pane'); ?>




			<div class="grid-x grid-margin-x grid-margin-y">
				<div class="cell small-12"><h3 class="col-title" style="text-align: left; margin-bottom: 0; margin-top: 30px">Event search results</h3></div>
			</div>
					
					<?php if (have_posts()): ?>
							<?php while (have_posts()): the_post(); ?>
								
								<?php get_template_part( 'partials/events/single_event_pane'); ?>

							<?php endwhile; else : ?>
							<div class="cell small-12">
								<p><?php esc_html_e( 'Sorry, no games matched your criteria.' ); ?></p>
							</div>
						<?php endif; ?>
					<?php wp_reset_query(); ?>
				
			


				<div class="grid-x grid-margin-x grid-margin-y">
					<div class="cell small-12 text-center">
						
						<a href="<?php echo home_url(); ?>/events/past-events/" class="standard-button standard-button-grey-outline standard-button-grey-outline-arrow plus-size-button-arrow-grey"><div class="anim"></div>See past events</a>&nbsp;
						
						<a href="<?php echo home_url(); ?>/events/" class="standard-button standard-button-red plus-size-button-arrow"><div class="anim"></div>See all events</a>

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

