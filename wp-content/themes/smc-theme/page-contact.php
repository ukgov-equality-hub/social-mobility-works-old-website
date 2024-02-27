<?php 
	if (!defined('ABSPATH')) exit;
	get_header();
?>
<?php smc_breadcrumb('null', 'null'); ?>


<main class="content-pane content-pane-top-mar">
	<div class="grid-container">
		<div class="grid-x">
			<div class="cell small-12 page-copy page-copy-blue-para page-copy-contact">
				<section>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	        	      			
				        	<?php the_content();?>			        	

				    	<?php endwhile; else : ?>
						<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
					<?php endif; ?>
	    
				</section>
			</div>
		</div>


		<div class="grid-x">
			<div class="cell page-copy small-12 medium-8 medium-offset-2 page-copy-blue-para">
				<?php echo do_shortcode('[wpforms id="347" title="false" description="false"]'); ?>
			</div>
		</div>
	</div>





	<div class="white-top">
		<?php get_template_part( 'partials/search-directory-pane'); ?>
	</div>

	<?php get_template_part( 'partials/news-and-case-study-pane'); ?>

	









</main>

<!-- Main content pane -->












			

<?php get_footer(); ?>

