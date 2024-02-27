<a href="<?php the_permalink(); ?>" class="case-study-pane">
	<?php $bg_image = get_field('case_study_square_image'); ?>
	<div class="case-study-pane-bg" style="background-image: url('<?php echo $bg_image; ?>')"></div>
	<div class="case-study-pane-text">
		<?php   
			// Loop through list of industries (if more than 1)
			// Get industries for post
			$industries = get_the_terms( $post->ID , 'industries' );
			$count = count($industries);

			if ( $industries != null ){ 
				echo '<span class="industries">';
			?>
				<?php foreach( $industries as $industry ) {
					if (--$count <= 0) {
				        echo $industry->name;
				    } else {
				    	echo $industry->name.' <span>|</span> ' ;
				    }
				 // Get rid of the other data stored in the object, since it's not needed
				 unset($industries);
				} ?>

			<?php 
			echo '</span>';
			} ?> 
		</span>

		<?php   
			// Loop through list of Sectors
			// Get Sectors for post
			$sectors = get_the_terms( $post->ID , 'sectors' );
			$count = count($sectors);

			if ( $sectors != null ){ 
				echo '<span class="sectors">';
			?>
				
				<?php foreach( $sectors as $sector ) {
					if (--$count <= 0) {
				        echo $sector->name;
				    } else {
				    	echo $sector->name.' <span>|</span> ' ;
				    }
				 // Get rid of the other data stored in the object, since it's not needed
				 unset($sectors);
				} ?>
			<?php 
			echo '</span>';
			} ?>
		
		<h2 style="margin-bottom: 5px; margin-top: 10px;"><?php the_title(); ?></h2>
	</div>
</a>