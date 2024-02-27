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
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	        	
	        				<h1><?php the_title(); ?></h1>
				        	<?php the_content();?>
				        	

				    	<?php endwhile; else : ?>
						<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
					<?php endif; ?>
				</div>
			</div>


			<?php get_template_part( 'partials/academy/search-academy-pane'); ?>

				<!-- webinars & masterclasses pane -->
					<?php
						$args = array(
					        'posts_per_page' => 4,
					        'post_type' => 'academy',
					        'order'=> 'DESC', 
					        'orderby' => 'date',
					        'tax_query' => array(
						        array(
						            'taxonomy' => 'content-type',
						            'field'    => 'slug',
						            'terms'    => array('webinars-masterclasses')
						        )
						    )
						);
						$query = new WP_Query( $args );
					?>
				
					<?php if ($query->have_posts()): ?>
						<h2 class="col-title" style="text-align: left; margin-top: 40px; margin-bottom: 20px">Webinars & masterclasses</h2>
						<div class="grid-x grid-margin-x grid-margin-y small-up-1 medium-up-2 large-up-4">	
							<?php while ($query->have_posts()) : $query->the_post(); ?>
								<div class="cell cs-pane">
									<?php get_template_part('partials/academy/academy-individual-pane-video', null, array('pane_color' => '#eb662e')); ?>
								</div>
							<?php endwhile; ?>
						</div>
						<div class="grid-x grid-margin-x grid-margin-y">	
							<div class="cell small-12"><a href="<?php echo get_home_url(); ?>/social-mobility-academy/webinars-masterclasses" class="standard-button standard-button-grey-outline standard-button-grey-outline-arrow">See all webinars & masterclasses</a></div>
						</div>
					<?php endif; ?>




					<!-- Videos pane -->
					<?php
						$args = array(
					        'posts_per_page' => 4,
					        'post_type' => 'academy',
					        'order'=> 'DESC', 
					        'orderby' => 'date',
					        'tax_query' => array(
						        array(
						            'taxonomy' => 'content-type',
						            'field'    => 'slug',
						            'terms'    => array('videos')
						        )
						    )
						);
						$query = new WP_Query( $args );
					?>
				
					<?php if ($query->have_posts()): ?>
						<h2 class="col-title" style="text-align: left; margin-top: 40px; margin-bottom: 20px">Videos</h2>
						<div class="grid-x grid-margin-x grid-margin-y small-up-1 medium-up-2 large-up-4">	
							<?php while ($query->have_posts()) : $query->the_post(); ?>
								<div class="cell cs-pane">
									<?php get_template_part('partials/academy/academy-individual-pane-video', null, array('pane_color' => '#116388')); ?>
								</div>
							<?php endwhile; ?>
						</div>
						<div class="grid-x grid-margin-x grid-margin-y">	
							<div class="cell small-12"><a href="<?php echo get_home_url(); ?>/social-mobility-academy/videos/" class="standard-button standard-button-grey-outline standard-button-grey-outline-arrow">See all videos</a></div>
						</div>
					<?php endif; ?>


					<!-- Further reading pane -->
					<?php
						$args = array(
					        'posts_per_page' => 4,
					        'post_type' => 'academy',
					        'order'=> 'DESC', 
					        'orderby' => 'date',
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
						<h2 class="col-title" style="text-align: left; margin-top: 40px; margin-bottom: 20px">Further reading</h2>
						<div class="grid-x grid-margin-x grid-margin-y small-up-1 medium-up-2 large-up-4">	
							<?php while ($query->have_posts()) : $query->the_post(); ?>
								<div class="cell cs-pane">

									<?php get_template_part( 'partials/academy/academy-individual-pane-further-reading'); ?>
								</div>
							<?php endwhile; ?>
						</div>
						<div class="grid-x grid-margin-x grid-margin-y">	
							<div class="cell small-12"><a href="<?php echo get_home_url(); ?>/social-mobility-academy/further-reading" class="standard-button standard-button-grey-outline standard-button-grey-outline-arrow">See all further reading</a></div>
						</div>
					<?php endif; ?>
				

					<!-- Downloadable resources pane -->
					<?php
						$args = array(
					        'posts_per_page' => 4,
					        'post_type' => 'academy',
					        'order'=> 'DESC', 
					        'orderby' => 'date',
					        'tax_query' => array(
						        array(
						            'taxonomy' => 'content-type',
						            'field'    => 'slug',
						            'terms'    => array('resource-documents')
						        )
						    )
						);
						$query = new WP_Query( $args );
					?>
				
					<?php if ($query->have_posts()): ?>
						<h2 class="col-title" style="text-align: left; margin-top: 40px; margin-bottom: 20px">Resource documents</h2>
						<div class="grid-x grid-margin-x grid-margin-y small-up-1 medium-up-2 large-up-4">	
							<?php while ($query->have_posts()) : $query->the_post(); ?>
								<div class="cell cs-pane">

									<?php get_template_part( 'partials/academy/academy-individual-pane-downloads'); ?>
								</div>
							<?php endwhile; ?>
						</div>
						<div class="grid-x grid-margin-x grid-margin-y">	
							<div class="cell small-12"><a href="<?php echo get_home_url(); ?>/social-mobility-academy/resource-documents" class="standard-button standard-button-grey-outline standard-button-grey-outline-arrow">See all resource documents</a></div>
						</div>
					<?php endif; ?>







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

