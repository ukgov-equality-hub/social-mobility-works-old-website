<?php 

/**
 * Template Name: Toolkit Appendix page template
 * Template Post Type: toolkit
 
 **/

?>
<?php 
	if (!defined('ABSPATH')) exit;
	get_header();
?>



<?php get_template_part('partials/toolkit-navigation'); ?>

<?php smc_breadcrumb('Toolkit', 'null'); ?>


<main class="toolkit-page content-pane content-pane-top-mar">
	<div class="grid-container">
		<div class="grid-x">
			<section class="cell small-12 page-copy page-copy-blue-para">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
			        	<?php the_content();?>

			    	<?php endwhile; else : ?>
					<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>
			</section>
		</div>
	</div>



	



	<section class="toolkit-appendix-c content-pane content-pane-bot-pad-xx">
		<?php if( have_rows('appendix_c') ): ?>
			<div class="grid-container terms">
				<div class="grid-x">
					<div class="cell">
						<?php while( have_rows('appendix_c') ): the_row(); 
							// vars						
							$term_title = get_sub_field('term_title'); 
							$term_description = get_sub_field('term_description'); 		
						?>				
					
						<div class="term">
							<h2><?php echo $term_title; ?></h2>
							<?php echo $term_description; ?>
						</div>
				
						
					<?php endwhile; ?>
				</div>
			</div>
		</div>
			
		<?php endif; ?>


		<?php $next_link = get_field('next_link'); ?>
			<?php if($next_link): ?>
				<div class="grid-container" style="margin-top: 40px; text-align: center">
					<div class="grid-x sub-text">
						<div class="cell small-12">
							<div><a href="<?php echo $next_link[url]; ?>" class="standard-button standard-button-red plus-size-button-arrow"><div class="anim"></div><?php echo $next_link[title]; ?></a></div>

							<a href="<?php the_field('toolkit_pdf_download','option'); ?>" target="_blank" class="standard-button standard-button-red plus-size-button-arrow"><div class="anim"></div>Download Toolkit</a>
						</div>
					</div>
				</div>
			<?php endif; ?>


	<svg xmlns="http://www.w3.org/2000/svg" width="1200" height="85" viewBox="0 0 1200 85" class="svg-bottom-toleft">
	  <polygon points="1200 0 1200 85 0 85"/>
	</svg>
	
	</section>






<?php get_template_part( 'partials/news-and-case-study-pane'); ?>






</main>

<!-- Main content pane -->












			

<?php get_footer(); ?>

