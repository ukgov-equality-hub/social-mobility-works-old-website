<?php 
	if (!defined('ABSPATH')) exit;
	get_header('event');
?>


<?php smc_breadcrumb('Events', 'null'); ?>

<main>
	<div class="blue-stripe-bottom content-pane content-pane-top-mar">
		<div class="grid-container">
			<div class="grid-x">
				<div class="cell small-12 medium-8">	
				
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        				<div class="event_pane_pic-wrapper" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'medium_large');?>'); margin-bottom: 30px;">
							<div class="info-pane orange-bg">
								<?php echo event_categories(get_the_ID()); ?>
								<h4><strong><?php the_field('event_date'); ?></strong></h4>
							</div>
						</div>
        				<h1 class="main-title" style="margin-bottom: 10px"><?php the_title();?></h1>
        			
        			
        				<hr>
			        	<?php the_content();?>
			        	

			    	<?php endwhile; else : ?>
				
					<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>

			</div>

			<div class="cell small-12 medium-3 medium-offset-1">
				<h2 class="col-title" style="text-align: left">Event details</h2>
				<hr>
				<strong>Event date: <?php the_field('event_date'); ?></strong><br>
				<?php if(get_field('event_time')): ?>
					<?php the_field('event_time'); ?><br>
				<?php endif; ?>

				<?php if(get_field('event_details')): ?>
					<?php the_field('event_details'); ?><br>
				<?php endif; ?>
				<br>

				<?php if (get_field('event_button')):
					$event_link = get_field('event_button');
					$event_url = $event_link['url'];
					$event_title = $event_link['title'];
					$event_target = $event_link['target'] ? $event_link['target'] : '_self';
				?>
					<a href="<?php echo esc_url($event_url); ?>" target="<?php echo esc_attr( $event_target ); ?>" rel="noopener" class="standard-button standard-button-red plus-size-button-arrow"><span class="anim"></span><?php echo esc_html($event_title); ?></a>
				<?php endif; ?>
			</div>
		</div>
	</div>


	<div class="svg-container svg-bottom-expand">
		<svg xmlns="http://www.w3.org/2000/svg" version="1.1" preserveAspectRatio="xMinYMin meet" width="1200" height="85" viewBox="0 0 1200 85" class="svg-bottom-toleft svg-content">
		  <polygon points="1200 0 1200 85 0 85"/>
		</svg>
	</div>
</div>









	
	

	<?php get_template_part( 'partials/news-and-case-study-pane'); ?>

	









</main>

<!-- Main content pane -->












			

<?php get_footer(); ?>

