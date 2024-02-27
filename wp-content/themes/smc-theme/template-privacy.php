<?php 

/**
 * Template Name: Privacy Policy template 
 **/

?>
<?php 
	if (!defined('ABSPATH')) exit;
	get_header();
?>


<?php smc_breadcrumb('Privacy notice Cookies information', 'null'); ?>


<main class="toolkit-page content-pane content-pane-top-mar content-pane-bot-mar">
	<div class="grid-container">
		<div class="grid-x">
			<section class="cell small-12 medium-9 page-copy page-copy-blue-para">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
			        	<?php the_content();?>

			    	<?php endwhile; else : ?>
					<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>
			</section>
		</div>
	</div>




	
	</section>







</main>

<!-- Main content pane -->












			

<?php get_footer(); ?>

