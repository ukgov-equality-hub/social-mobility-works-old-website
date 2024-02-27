<section class="toolkit-footer text-center">
	<?php 
		$next_link = get_field('next_page_link');
		$link_title = $next_link['title'];
		$link_url = $next_link['url'];
		
	?>

	<?php if ($args['toolkit'] == 'cross-industry'): ?>
		<a href="<?php the_field('toolkit_pdf_download','option'); ?>" target="_blank" class="standard-button standard-button-red plus-size-button-download"><div class="anim"></div>Download Toolkit</a>
	<?php elseif ($args['toolkit'] == 'financial-and-professional') : ?>
		<a href="<?php the_field('toolkit_pdf_download_fps','option'); ?>" target="_blank" class="standard-button standard-button-blue plus-size-button-download"><div class="anim"></div>Download Toolkit</a>
	<?php elseif ($args['toolkit'] == 'creative-industries') : ?>
		<a href="<?php the_field('toolkit_pdf_download_creative','option'); ?>" target="_blank" class="standard-button standard-button-lightblue plus-size-button-download"><div class="anim"></div>Download Toolkit</a>
	<?php elseif ($args['toolkit'] == 'apprenticeships') : ?>
		<a href="<?php the_field('toolkit_pdf_download_apprenticeships','option'); ?>" target="_blank" class="standard-button standard-button-yellow plus-size-button-download"><div class="anim"></div>Download Toolkit</a>
	<?php endif; ?>



	<?php if($next_link): ?>
		<a href="<?php echo esc_url($link_url); ?>" class="standard-button standard-button-grey-outline standard-button-grey-outline-arrow standard-button-grey-outline-arrow-plus"><div class="anim"></div><?php echo esc_html($link_title); ?></a>
	<?php endif; ?>
</section>