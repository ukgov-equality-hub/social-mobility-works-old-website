<?php 
	$further_reading_pane = get_field('further-reading');
	$further_reading_link = $further_reading_pane['further_reading_page'];
?>

<a href="<?php echo $further_reading_link; ?>" class="case-study-pane">
	<?php $bg_image = get_field('case_study_square_image'); ?>
	<div class="case-study-pane-bg" style="background-image: url('<?php echo $bg_image; ?>')"></div>
	<div class="case-study-pane-text" style="background-color: #f1b502">
		<span class="academy-title"><?php echo the_title(); ?></span>
		<h2 class="reading-link">Blog article</h2>
	</div>
</a>