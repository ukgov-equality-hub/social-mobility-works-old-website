<?php 
	if (!defined('ABSPATH')) exit;
	get_header('directory');
?>



<?php smc_breadcrumb('null', 'null'); ?>



<main class="organisation-directory content-pane content-pane-top-mar">

	<div class="grid-container">
		<div class="grid-x">
			<div class="cell small-12 page-copy page-copy-blue-para">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
        			<p>Use this directory to find organisations that can support you on your journey.</p>   			
        			<?php the_content();?>
			    	<?php endwhile; else : ?>
					<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>
			</div>
		</div>
	</div>



	<section class="directory-results">
		<div class="grid-container">
			<div class="grid-x grid-margin-x grid-margin-y small-up-1 medium-up-2 large-up-3">
				
				
					<?php
						$args = array( 
							'posts_per_page' => -1,
							'post_type' => 'Directory', 
							'order'=> 'ASC', 
							'orderby' => 'title'
						);

						$query = new WP_Query( $args );
					?>
				
					<?php if ($query->have_posts()): ?>
					
					<?php while ($query->have_posts()) : $query->the_post(); ?>
						<?php get_template_part( 'partials/directory-individual-pane'); ?>
					<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
					<?php else : ?>
						<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
					<?php endif; ?>
					

					
				

			</div>
		</div>
	</section>





	<div id="join-our-directory"></div>
	<?php get_template_part( 'partials/directory-pane-submission-invite'); ?>
	

	<?php get_template_part( 'partials/news-and-case-study-pane'); ?>

	

	
	









</main>

<!-- Main content pane -->












			

<?php get_footer(); ?>

