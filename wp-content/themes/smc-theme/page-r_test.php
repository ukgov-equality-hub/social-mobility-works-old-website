<?php 
	if (!defined('ABSPATH')) exit;
	get_header('academy');
?>

<?php smc_breadcrumb('null', 'null'); ?>


<main>


<!-- Got to create 4 custom loops for each of the taxonomies -->
	<section class="case-study-content content-pane content-pane-top-mar">
		<div class="grid-container">
			
			<div class="grid-x grid-margin-x">
				<div class="cell small-12 page-copy page-copy-blue-para">
					nothing
				</div>
			</div>



			<?php wp_reset_query(); ?>


					<!-- Further reading pane -->
					<?php
						$args = array(
					        'posts_per_page' => 4,
					        'post_type' => 'resource',
					        'orderby'   => array(
						      'date' =>'ASC',
						     ),


					        //'orderby' => 'date',
					        //'order'=> 'DESC', 
					        //'suppress_filters' => true,
					        'tax_query' => array(
						        array(
						            'taxonomy' => 'content-type',
						            'field'    => 'slug',
						            'terms'    => array('further-reading')
						        )
						    )
						);
						$query = new WP_Query( $args );
					?>
				
					<?php if ($query->have_posts()): ?>
						<h2 class="col-title" style="text-align: left; margin-top: 40px; margin-bottom: 20px; border: 1px solid blue">Further reading</h2>
						<div class="grid-x grid-margin-x grid-margin-y small-up-1 medium-up-2 large-up-4">	
							<?php while ($query->have_posts()) : $query->the_post(); ?>
								<div class="cell cs-pane">

									<?php get_template_part( 'partials/resources/resource-individual-pane-further-reading'); ?>
								</div>
							<?php endwhile; ?>
						</div>
						<div class="grid-x grid-margin-x grid-margin-y">	
							<div class="cell small-12"><a href="<?php echo get_home_url(); ?>/resources/further-reading" class="standard-button standard-button-grey-outline standard-button-grey-outline-arrow">See all further reading</a></div>
						</div>
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

