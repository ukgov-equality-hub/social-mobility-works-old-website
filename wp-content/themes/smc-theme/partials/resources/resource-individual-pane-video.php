<?php 
	$pane_color = $args['pane_color'];
?>

<a href="<?php the_permalink(); ?>" class="case-study-pane">
	<?php $bg_image = get_field('case_study_square_image'); ?>
	<div class="case-study-pane-bg" style="background-image: url('<?php echo $bg_image; ?>')"></div>
	<div class="case-study-pane-bg_video-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/video-circle-outline.png" width="100%" height="100%" alt="" border="0"></div>
	<div class="case-study-pane-text" style="background-color: <?php echo $pane_color; ?>">
		<span class="academy-title"><?php echo the_title(); ?></span>
		<h2 class="video-link">Watch video</h2>
	</div>
</a>