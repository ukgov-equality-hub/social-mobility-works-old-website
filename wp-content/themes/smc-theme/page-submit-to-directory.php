<?php 
	if (!defined('ABSPATH')) exit;
	get_header();
?>


<?php smc_breadcrumb('Directory', 'null'); ?>



<main class="content-pane content-pane-top-mar">

	<div class="grid-container">
		<div class="grid-x">
			<div class="cell small-12 page-copy page-copy-blue-para">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
        			<?php the_content();?>  			
        			
			    	<?php endwhile; else : ?>
					<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>
			</div>
		</div>
	</div>



	


	<?php get_template_part( 'partials/news-and-case-study-pane'); ?>

	

	</main>

	











<!-- Main content pane -->












			

<?php get_footer(); ?>

