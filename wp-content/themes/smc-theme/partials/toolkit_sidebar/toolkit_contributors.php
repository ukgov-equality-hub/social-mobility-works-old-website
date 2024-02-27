<?php 
	// check what toolkit and set the ACF to get images from
	if ($args['toolkit'] == 'cross-industry') {
		$imageset = 'toolkit_contributors_cross-industry';
		$logonumber = 4;
	} elseif ($args['toolkit'] == 'financial-and-professional'){
		$imageset = 'toolkit_contributors_fps';
		$logonumber = 4;
	} elseif ($args['toolkit'] == 'creative-industries'){
		$imageset = 'toolkit_contributors_creative';
		$logonumber = 4;
	} elseif ($args['toolkit'] == 'apprenticeships'){
		$imageset = 'toolkit_contributors_apprenticeships';
		$logonumber = 4;
	}
	// echo $args['toolkit'];
?>

<?php if( have_rows($imageset, 'option') ): ?>			
	<?php $logoAmount = 1; $wrapAmount = 0; ?>

	<?php while( have_rows($imageset, 'option') ): the_row(); ?>
		
		<?php if ($logoAmount%$logonumber == 1){ $wrapAmount++; echo "<div class=\"logoWrapper logoWrapper".$wrapAmount."\">"; } ?>
		
			<span class="contributorLogo contributorLogoSet<?php echo $logoAmount; ?>"><img src="<?php the_sub_field('contributors_logo'); ?>" alt="<?php echo get_sub_field('contributors_name'); ?>" border="0"></span>
			
			<?php if ($logoAmount%$logonumber == 0){ echo "</div>"; } ?>
		
		<?php $logoAmount++; ?>

	<?php endwhile; ?>
	<?php if ($logoAmount%$logonumber != 1) echo "</div>"; ?>
<?php endif; ?>