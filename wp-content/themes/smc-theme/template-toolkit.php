<?php 

/**
 * Template Name: Toolkit page template
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



	<section class="toolkit-info">
		<?php if( have_rows('toolkit_rows') ): ?>
			<?php $i = 0; ?>
				<?php while( have_rows('toolkit_rows') ): the_row(); 
					// vars
					
					$row = get_sub_field('row_name'); 
					$row_icon = get_sub_field('row_icon'); 
					
					$column_1_header = get_sub_field('column_1_header'); 
					$column_1_sub_header = get_sub_field('column_1_sub_header'); 
					$column_1_content = get_sub_field('column_1_content');
					
					$column_2_header = get_sub_field('column_2_header');
					$column_2_sub_header = get_sub_field('column_2_sub_header');
					$column_2_content = get_sub_field('column_2_content');
					
					?>

					
					<div class="row">
						<div class="grid-container <?php if (!$i++) echo 'toprow'; ?> ">
							<div class="grid-x grid-margin-x">

								<div class="cell small-12 large-2 row1">
									<div>
										<img src="<?php echo $row_icon[url]; ?>" alt="" border="" class="row-icon">
										<h2><?php echo $row; ?></h2>
									</div>
								</div>

								<div class="cell small-12 large-5 row2">
									<p class="col-title"><?php echo $column_1_header; ?></p>
									<?php if( $column_1_sub_header ): ?>
										<div class="col-sub-title"><?php echo $column_1_sub_header; ?></div>
									<?php endif; ?>


									<?php echo $column_1_content; ?>
								</div>

								<div class="cell small-12 large-5 row3">
									<p class="col-title"><?php echo $column_2_header; ?></p>
									<?php if( $column_2_sub_header ): ?>
										<div class="col-sub-title"><?php echo $column_2_sub_header; ?></div>
									<?php endif; ?>
									<?php echo $column_2_content; ?>
								</div>
							</div>
						</div>
					</div>
						
				<?php endwhile; ?>
			
		<?php endif; ?>
	</section>



	<section class="toolkit-footer">
		<?php 
			$next_link = get_field('next_page_link');
			$post_object = get_field('case_study');
		?>

		<?php if( $post_object ): ?>
			<div class="svg-toolkit-footer"><svg xmlns="http://www.w3.org/2000/svg" width="1200" height="250" viewBox="0 0 1200 250"><polygon points="1200 0 1200 250 0 250 0 200" class=""/></svg></div>
		<?php endif; ?>

		<div class="grid-container">
			<div class="grid-x grid-margin-x">
				<div class="cell small-12 large-3 button-wrap">
					<?php if($next_link): ?>
						<div>
							<a href="<?php echo $next_link[url]; ?>" class="standard-button standard-button-red plus-size-button-arrow"><div class="anim"></div><?php echo $next_link[title]; ?></a><br>

							<a href="<?php the_field('toolkit_pdf_download','option'); ?>" target="_blank" class="standard-button standard-button-red plus-size-button-arrow"><div class="anim"></div>Download Toolkit</a>


						</div>
					<?php endif; ?>

				</div>

				<div class="cell small-12 large-9">
					<?php if( $post_object ): 
						$post = $post_object;
						setup_postdata( $post ); 
					?>

					<?php get_template_part( 'partials/case-study-individual-pane'); ?>
					
					<?php wp_reset_postdata();?>

					<?php endif; ?>
				</div>
			</div>
		</div>    
	</section>


	
	<?php if( get_field('featured_directory') ): 
		get_template_part( 'partials/toolkit-footer-directory-pane');
	endif; ?>















</main>

<!-- Main content pane -->












			

<?php get_footer(); ?>

