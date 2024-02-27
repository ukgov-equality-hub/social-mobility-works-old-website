<?php 
	if (!defined('ABSPATH')) exit;
	get_header();
?>
<?php smc_breadcrumb('null', 'null'); ?>

<main class="content-pane content-pane-top-mar">
	<section class="commissioner-wrap">
			<div class="grid-container">
				<div class="grid-x">
					<div class="cell page-copy page-copy-blue-para">
						
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		        	
					        	<?php the_content();?>
					        	
					    	<?php endwhile; else : ?>
							<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
						<?php endif; ?>

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

