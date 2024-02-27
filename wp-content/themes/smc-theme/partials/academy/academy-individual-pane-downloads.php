<?php 
	$download_pane = get_field('downloadable-resources');
	$inex = $download_pane['internal_or_external_file'];
	if ($inex == 'internal'){
		$download_link = $download_pane['download_internal_file'];
	} elseif ($inex == 'external') {
		$download_link = $download_pane['download_file_link'];
	}
	$linktext = $download_pane['download_text'];
?>


<a href="<?php echo $download_link; ?>" class="case-study-pane" target="_blank" rel="nofollow">
	<?php $bg_image = get_field('case_study_square_image'); ?>
	<div class="case-study-pane-bg" style="background-image: url('<?php echo $bg_image; ?>')"></div>
	<div class="case-study-pane-text" style="background-color: #b22a2b">
		<span class="academy-title"><?php echo the_title(); ?></span>
		<h2 class="download-link"><?php echo $linktext; ?></h2>
	</div>
</a>