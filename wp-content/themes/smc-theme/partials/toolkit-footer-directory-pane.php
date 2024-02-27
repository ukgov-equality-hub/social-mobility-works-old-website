	<section class="toolkit-footer-directory-pane">
		<div class="grid-container">
			<div class="grid-x">
				<div class="cell small-12">
		 			<h3>Organisations that can offer helpful advice</h3>
		 		</div>
		 	</div>

		 	<div class="grid-x grid-margin-x grid-margin-y small-up-1 medium-up-2 large-up-3">
			 <?php
			 $post_objects = get_field('featured_directory');
				if( $post_objects ): ?>
				    
				    <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
				        <?php setup_postdata($post); ?>
				        <?php get_template_part( 'partials/directory-individual-pane'); ?>
				    <?php endforeach; ?>
				    
	    		<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
			<?php endif; ?>
			</div>

			<div class="grid-x grid-margin-x ">
				<div class="cell small-12" style="text-align: center; margin-top: 20px">
		 			<div><a href="<?php echo get_site_url(); ?>/organisation-directory/" class="standard-button standard-button-red plus-size-button-arrow"><div class="anim"></div>See all</a></div>
		 		</div>
		 	</div>
		</div>
	</section>