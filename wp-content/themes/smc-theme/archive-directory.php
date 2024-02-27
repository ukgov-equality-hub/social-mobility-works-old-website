<?php 
	if (!defined('ABSPATH')) exit;
	get_header('directory');
?>

<?php smc_breadcrumb('sr', 'sr'); ?>

<main class="organisation-directory content-pane content-pane-top-mar">

<div class="grid-container">
	<div class="grid-x">
		<div class="cell small-12 page-copy page-copy-blue-para">
			<p>Directory Search Results</p>
		</div>
	</div>
</div>






	<section class="directory-results">
		<div class="grid-container">
			<div class="grid-x grid-margin-x grid-margin-y small-up-1 medium-up-2 large-up-3">
				
					<?php if (have_posts()): ?>
					
					<?php while (have_posts()): the_post(); ?>
						<?php get_template_part( 'partials/directory-individual-pane'); ?>
					<?php endwhile; else : ?>
						<div class="page-copy">
							<p><?php esc_html_e( 'Sorry, no companies matched your search criteria.' ); ?></p>
						</div>
					<?php endif; ?>
					
			</div>
		</div>
	</section>






	<?php get_template_part( 'partials/directory-pane-submission-invite'); ?>
	

	<?php get_template_part( 'partials/news-and-case-study-pane'); ?>

	





</main>

<!-- Main content pane -->












			

<?php get_footer(); ?>

