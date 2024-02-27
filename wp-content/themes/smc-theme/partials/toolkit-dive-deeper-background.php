<?php
	$btr = get_field('background_to_research','option');
	if($btr): ?>
	<section>
		<a href="<?php echo $btr['download_link'];?>" target="_blank">
			<div class="dive-deeper-pane">
				<p><strong><?php echo $btr['title'];?></strong><br>
				<?php echo $btr['copy'];?></p>
				<img src="<?php echo get_template_directory_uri(); ?>/images/button-right-arrow.png" alt="" width="25" height="25">
			</div>
		</a>
	</section>
<?php endif; ?>