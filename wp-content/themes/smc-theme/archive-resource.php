<?php 
	if (!defined('ABSPATH')) exit;
	get_header('academy');
?>

<?php smc_breadcrumb('Resources', 'sr'); ?>


<main>
	<section class="case-study-content content-pane content-pane-top-mar">
		<div class="grid-container">
			
			<div class="grid-x grid-margin-x">
				<div class="cell small-12 page-copy">
					<h1 style="margin-bottom: 0">Resources search results</h1>
				</div>
			</div>


			<?php get_template_part( 'partials/resources/search-resources-pane'); ?>


			<!-- webinars & masterclasses pane -->

			<?php 
				$webinarPostCount = 0; 
				$searchPostCount = 0;
			?>
			
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php if (has_term('webinars-masterclasses', 'content-type')) {
					$webinarPostCount++;
					$searchPostCount++;
				} ?>
			<?php endwhile; endif; ?>		
			<?php rewind_posts(); ?>

			<?php if($webinarPostCount>0): ?>
				<div class="grid-x">
					<div class="cell small-12"><h2 class="col-title" style="text-align: left; margin-top: 40px; margin-bottom: 20px">Webinars & masterclasses</h2></div>
				</div>
				<div class="grid-x grid-margin-x grid-margin-y small-up-1 medium-up-2 large-up-4">	
			<?php endif; ?>
				
				<?php 
					if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<?php if (has_term('webinars-masterclasses', 'content-type')) : ?>
							<div class="cell cs-pane">
								<?php get_template_part( 'partials/resources/resource-individual-pane-video'); ?>
							</div>
						<?php endif; ?>
					<?php endwhile; ?>
				<?php endif; ?>

			<?php if($webinarPostCount>0): ?>
				</div>
			<?php endif; ?>
			<?php rewind_posts(); ?>



			<!-- videos pane -->

			<?php 
				$videosPostCount = 0; 
			?>
			
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php if (has_term('videos', 'content-type')) {
					$videosPostCount++;
					$searchPostCount++;
				} ?>
			<?php endwhile; endif; ?>		
			<?php rewind_posts(); ?>

			<?php if($videosPostCount>0): ?>
				<div class="grid-x">
					<div class="cell small-12"><h2 class="col-title" style="text-align: left; margin-top: 40px; margin-bottom: 20px">Videos</h2></div>
				</div>
				<div class="grid-x grid-margin-x grid-margin-y small-up-1 medium-up-2 large-up-4">	
			<?php endif; ?>
				
				<?php 
					if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<?php if (has_term('videos', 'content-type')) : ?>
							<div class="cell cs-pane">
								<?php get_template_part( 'partials/resources/resource-individual-pane-video'); ?>
							</div>
						<?php endif; ?>
					<?php endwhile; ?>
				<?php endif; ?>

			<?php if($videosPostCount>0): ?>
				</div>
			<?php endif; ?>
			<?php rewind_posts(); ?>




			<!-- Further reading pane -->

			<?php 
				$readingPostCount = 0; 
			?>
			
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php if (has_term('further-reading', 'content-type')) {
					$readingPostCount++;
					$searchPostCount++;
				} ?>
			<?php endwhile; endif; ?>		
			<?php rewind_posts(); ?>

			<?php if($readingPostCount>0): ?>
				<div class="grid-x">
					<div class="cell small-12"><h2 class="col-title" style="text-align: left; margin-top: 40px; margin-bottom: 20px">Further reading</h2></div>
				</div>
				<div class="grid-x grid-margin-x grid-margin-y small-up-1 medium-up-2 large-up-4">	
			<?php endif; ?>
				
				<?php 
					if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<?php if (has_term('further-reading', 'content-type')) : ?>
							<div class="cell cs-pane">
								<?php get_template_part( 'partials/resources/resource-individual-pane-further-reading'); ?>
							</div>
						<?php endif; ?>
					<?php endwhile; ?>
				<?php endif; ?>

			<?php if($readingPostCount>0): ?>
				</div>
			<?php endif; ?>
			<?php rewind_posts(); ?>




			<!-- Downloadable resources pane -->

			<?php 
				$resourcePostCount = 0; 
			?>
			
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php if (has_term('resource-documents', 'content-type')) {
					$resourcePostCount++;
					$searchPostCount++;
				} ?>
			<?php endwhile; endif; ?>		
			<?php rewind_posts(); ?>

			<?php if($resourcePostCount>0): ?>
				<div class="grid-x">
					<div class="cell small-12"><h2 class="col-title" style="text-align: left; margin-top: 40px; margin-bottom: 20px">Resource documents</h2></div>
				</div>
				<div class="grid-x grid-margin-x grid-margin-y small-up-1 medium-up-2 large-up-4">	
			<?php endif; ?>
				
				<?php 
					if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<?php if (has_term('resource-documents', 'content-type')) : ?>
							<div class="cell cs-pane">
								<?php get_template_part( 'partials/resources/resource-individual-pane-downloads'); ?>
							</div>
						<?php endif; ?>
					<?php endwhile; ?>
				<?php endif; ?>

			<?php if($resourcePostCount>0): ?>
				</div>
			<?php endif; ?>
			<?php rewind_posts(); ?>





			<?php 
				if ($searchPostCount == 0): ?>
				<div class="grid-x grid-margin-x">
					<div class="cell small-12">
						<h2 class="col-title" style="text-align: left; margin-top: 40px; margin-bottom: 20px">Sorry, no posts matched your search criteria.</h2>
					</div>
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

