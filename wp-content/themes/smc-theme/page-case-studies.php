<?php 
	if (!defined('ABSPATH')) exit;
	get_header();
?>

<?php smc_breadcrumb('null', 'null'); ?>


<main>



	<section class="case-study-content content-pane content-pane-top-mar content-pane-bot-mar">
		<div class="grid-container">
			<div class="grid-x grid-margin-x grid-margin-y small-up-1 medium-up-2">
				
					
					<?php
						$args = array( 'post_type' => 'CaseStudies', 'order'=> 'ASC', 'orderby' => 'title' );
						query_posts($args);

					?>
				
					<?php if (have_posts()): ?>
					
						<?php while (have_posts()): the_post(); ?>
							<div class="cell cs-pane">
							<?php get_template_part( 'partials/case-study-individual-pane'); ?>
							</div>
						<?php endwhile; else : ?>
						<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
					<?php endif; ?>
					

					<?php wp_reset_query(); ?>
					
				

			</div>
		</div>
	</section>



	<?php get_template_part( 'partials/news-and-case-study-pane'); ?>

	









</main>

<!-- Main content pane -->












			

<?php get_footer(); ?>

