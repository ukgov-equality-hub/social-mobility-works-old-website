<?php 
	if (!defined('ABSPATH')) exit;
	get_header('academy');
?>

<?php smc_breadcrumb('Resources', 'null'); ?>


<main>

	<div class="case-study-content content-pane content-pane-top-mar">
		<div class="grid-container"  id="acadamy-content">
			
			<div class="grid-x grid-margin-x">
				<div class="cell small-12 page-copy page-copy-blue-para">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	        	
	        				<h1><?php the_title(); ?></h1>
				        	<?php the_content();?>
				        	

				    	<?php endwhile; else : ?>
						<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
					<?php endif; ?>
				</div>
			</div>

			<?php
				/* initial setting up of terms */

				$sectors_terms = get_terms(
				    array('sectors'),
				    array(
				    	'hide_empty'    => false,
				        'orderby'       => 'name',
				        'order'         => 'ASC'  
				        )
				);
			?>

			<section class="content-pane content-pane-top-mar">
				<div class="grid-x grid-margin-x">
					<div class="cell small-12 medium-8 medium-offset-2 text-center">
						<div class="search-wrap search-wrap_border">
								<div>
									<ul>
										<li style="padding-right: 20px; padding-top: 2px">
											<select name="ofsectors" id="ofsectors" class="postform">
												<option value="all" selected="selected">All Sectors</option>
													<?php
														if( $sectors_terms ) :
															//var_dump( $sectors_terms );

														    foreach( $sectors_terms as $term ) : 
																$args = array(
															        'posts_per_page' => -1,
															        'post_type' => 'resource',
															        'order'=> 'DESC', 
															        'orderby' => 'date',
															        'tax_query' => array(
															        	'relation' => 'AND',
																        array(
																            'taxonomy' => 'content-type',
																            'field'    => 'slug',
																            'terms'    => array('resource-documents')
																        ),
																        array(
																            'taxonomy' => 'sectors',
																            'field'    => 'slug',
																            'terms'    => array($term->slug)
																        )
																    )
																);
																$query = new WP_Query( $args );
															?>

															
															<?php if ($query->have_posts()): ?>
																<option class="level-0" value="<?php echo $term->slug; ?>"><?php echo $term->name; ?></option>
															<?php endif; ?>
															<?php wp_reset_query(); ?>

														<?php endforeach; ?>

													<?php endif; ?>
											</select>
											</li>
											<li>
											<button class="standard-button standard-button-orange" id="academy-filter">Filter</button>
										</li>
									</ul>
								</div>
									
						</div>
					</div>
				</div>
			</section>





			

			<?php
			/* loop thru sectors and populate */
				if( $sectors_terms ) :
				    foreach( $sectors_terms as $term ) : 
				      //var_dump( $term );
				       
						$args = array(
					        'posts_per_page' => -1,
					        'post_type' => 'resource',
					        'order'=> 'DESC', 
					        'orderby' => 'date',
					        'tax_query' => array(
					        	'relation' => 'AND',
						        array(
						            'taxonomy' => 'content-type',
						            'field'    => 'slug',
						            'terms'    => array('resource-documents')
						        ),
						        array(
						            'taxonomy' => 'sectors',
						            'field'    => 'slug',
						            'terms'    => array($term->slug)
						        )
						    )
						);
						$query = new WP_Query( $args );
					?>

					
						<?php if ($query->have_posts()): ?>
							<section class="acadamy-pane active <?php echo $term->slug; ?>">
								<h2 class="col-title" style="text-align: left; margin-top: 40px; margin-bottom: 20px"><?php echo $term->name; ?> - Resource documents</h2>
								<div class="grid-x grid-margin-x grid-margin-y small-up-1 medium-up-2 large-up-4">	
									<?php while ($query->have_posts()) : $query->the_post(); ?>
										<div class="cell cs-pane">
											<?php get_template_part( 'partials/resources/resource-individual-pane-downloads'); ?>
										</div>
									<?php endwhile; ?>
								</div>
							</section>
						<?php endif; ?>

					<?php wp_reset_query(); ?>


				       
					<?php endforeach; ?>

				<?php endif; ?>

		</div>

		<div class="svg-container svg-bottom-expand">
			<svg xmlns="http://www.w3.org/2000/svg" version="1.1" preserveAspectRatio="xMinYMin meet" width="1200" height="85" viewBox="0 0 1200 85" class="svg-bottom-toleft svg-content">
			  <polygon points="1200 0 1200 85 0 85"/>
			</svg>
		</div>
	</div>



	<?php get_template_part( 'partials/news-and-case-study-pane'); ?>

	

</main>

<!-- Main content pane -->





			

<?php get_footer(); ?>

