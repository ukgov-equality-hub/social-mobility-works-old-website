<?php 
	if (!defined('ABSPATH')) exit;
	get_header('academy');
?>

<?php smc_breadcrumb('Resources', 'null'); ?>


<main>
	<div class="case-study-content content-pane content-pane-top-mar">
		<div class="grid-container">
			<div class="grid-x grid-margin-x">
				<div class="cell small-12 medium-5 page-copy page-copy-blue-para">		
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	        			<h1><?php the_title();?></h1>
	        				<?php the_content();?>

				    	<?php endwhile; else : ?>
						<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
					<?php endif; ?>
				</div>

				<div class="cell widget-wrap small-12 medium-6 medium-offset-1">
					<?php 
						$videos_content = get_field('webinar-masterclass_content'); 
						
					?>

					<?php if($videos_content['video_url']): ?>
						<section class="cell small-12 medium-6">
							<div class="videoWrapper">
								<iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/<?php echo esc_html( $videos_content['video_url'] ); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
						</section>
					<?php endif; ?>

				</div>
			</div>


			<?php if($videos_content['related_content']): ?>
				<section>
					<div class="grid-x grid-margin-x content-pane content-pane-top-mar">
						<div class="cell small-12">
							<h2 class="col-title" style="text-align: left">Related content</h2>
							<hr style="max-width: 100%">
						</div>
					</div>
					
					<div class="grid-x grid-margin-x grid-margin-y small-up-1 medium-up-2 large-up-3">	
						<?php $related_content_rows = $videos_content['related_content']; ?>
						
						<?php foreach ($related_content_rows as $related_content_row) : 
							$related_link = $related_content_row['related_content_link'];
							$link_target = $related_link['target'] ? $related_link['target'] : '_self';
							$link_image = $related_content_row['related_content_thumbnail'];
						?>
				
						<div class="cell">
							<a href="<?php echo $related_link[url]; ?>" target="<?php echo esc_attr( $link_target ); ?>">
								<div class="news-post-pic" style="background-image: url('<?php echo $link_image['sizes']['medium_large']; ?>')"></div>
							</a>
							
							<h3 class="col-title" style="text-align: left; margin-bottom: 5px"><?php echo esc_html($related_content_row['related_content_title']);?></h3>
							<?php echo $related_content_row['related_content_text'];?>
							
							<?php if($related_link): ?>
								<a href="<?php echo $related_link[url]; ?>" target="<?php echo esc_attr( $link_target ); ?>" class="standard-button standard-button-red"><div class="anim"></div><?php echo $related_link[title]; ?></a>
							<?php endif; ?>
						</div>
						<?php endforeach; ?>
					</div>
				</section>
			<?php endif; ?>



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

