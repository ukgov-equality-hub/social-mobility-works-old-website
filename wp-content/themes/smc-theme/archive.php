<?php 
	if (!defined('ABSPATH')) exit;
	get_header('news');
?>


<?php smc_breadcrumb('ne', 'ne'); ?>

<main class="news-events content-pane content-pane-top-mar">
	<section class="news-wrap">
		<div class="grid-container">
			<div class="grid-x grid-margin-x">
				<div class="cell small-12 medium-8">
			
				
					<?php if ( have_posts() ) : ?>
						
					<div class="grid-x grid-margin-x grid-margin-y small-up-1 medium-up-2">
					<?php while ( have_posts() ) : the_post(); ?>

						<?php if ( 'directory' == get_post_type() )  : ?>
								This is showing because of all fields call
								but wrong template?
								Needs to be fixed;
						<?php else : ?>


							
							<div class="cell news-pane">
								<p class="cat"><?php foreach((get_the_category()) as $category){ echo $category->name;}	?></p>
								<a href="<?php the_permalink();?>">
									<div class="news-post-pic" style="background-image: url('<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url();} ?>"></div>
								</a>

								<div class="quicklink-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/quicklink-directory-bg.jpg');"></div>

								<?php if(!in_category('events')): ?>
									<p class="details"><?php echo get_the_date(); ?> | <?php the_author();?></p>
								<?php endif; ?>
								<h1><a href="<?php the_permalink();?>"><?php the_title();?></h1></a></h1>
								
			        			<?php the_excerpt();?>
					        	<a href="<?php the_permalink();?>" class="text-link text-link-arrow text-link-blue">Read more</a>
					        </div>
					    	
				        	

				        	<?php endif; ?>
				        	
				    	<?php endwhile; ?>

				    	</div>

				    	<!-- Add the pagination functions here. -->
						<?php the_posts_pagination(); ?>

				    	<?php else : ?>
				    	
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
	
	<svg xmlns="http://www.w3.org/2000/svg" width="1200" height="85" viewBox="0 0 1200 85" class="svg-bottom-toleft">
	  <polygon points="1200 0 1200 85 0 85"/>
	</svg>

</section>







<?php get_template_part( 'partials/news-and-case-study-pane'); ?>

	


</main>

<!-- Main content pane -->










			

<?php get_footer(); ?>

