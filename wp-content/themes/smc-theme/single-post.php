<?php 
	if (!defined('ABSPATH')) exit;
	get_header('news');
?>


<?php smc_breadcrumb('News & Events', 'null'); ?>

<main class="news-events content-pane content-pane-top-mar">
	
	<div class="grid-container">
		<div class="grid-x">
			<div class="cell small-12 medium-8 post-copy">		
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        			<h1><?php the_title();?></h1>
        			<p class="cat"><?php foreach((get_the_category()) as $category){ echo $category->name;}	?></p>
        			<?php if(!in_category('events')): ?>
        				<p class="details"><?php echo get_the_date(); ?> | <?php the_author();?></p>
        			<?php endif; ?>
        			<hr>
			        	<?php the_content();?>
			        	

			    	<?php endwhile; else : ?>
					<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>

			</div>

			<div class="cell widget-wrap small-12 medium-3 medium-offset-1">
					<?php 
						if ( ! is_active_sidebar( 'news-side1' ) ) {
						    return;
						}
					?>
	 
					<aside id="secondary" class="widget-area" role="complementary">
					    <?php dynamic_sidebar( 'news-side1' ); ?>
					</aside><!-- #secondary -->
			</div>
	</div>
</div>









	
	

	<?php get_template_part( 'partials/news-and-case-study-pane'); ?>

	









</main>

<!-- Main content pane -->












			

<?php get_footer(); ?>

