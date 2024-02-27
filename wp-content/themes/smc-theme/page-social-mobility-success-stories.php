<?php 
	if (!defined('ABSPATH')) exit;
	get_header();
?>

<?php smc_breadcrumb('null', 'null'); ?>


<main>
	<?php get_template_part( 'partials/case-study-search'); ?>
	
	<!-- potentially this page isnt being used due to rewrite making archive page front page -->
	<section class="case-study-content content-pane content-pane-top-mar">
		<div class="grid-container">
			<div class="grid-x grid-margin-x grid-margin-y small-up-1 medium-up-2 large-up-4">
				
					
					<?php
						$args = array( 'post_type' => 'CaseStudies', 'order'=> 'ASC', 'orderby' => 'title' );
						query_posts($args);
					?>
				
					<?php if (have_posts()): ?>
					
						<?php while (have_posts()): the_post(); ?>
							<div class="cell cs-pane">
							<?php get_template_part( 'partials/case-study-individual-pane_cs-page'); ?>
							</div>
						<?php endwhile; else : ?>
						<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
					<?php endif; ?>
					
					<?php wp_reset_query(); ?>
				
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

