<div class="grid-x grid-margin-x grid-margin-y" >
	<a href="<?php the_permalink();?>" class="cell small-12 medium-8 large-4" style="position: relative;">
		<div class="event_pane_pic-wrapper" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'medium_large');?>');">
			<div class="info-pane orange-bg">
				<?php echo event_categories(get_the_ID()); ?>
				<h4><strong><?php the_field('event_date'); ?></strong></h4>
			</div>
		</div>
	</a>
	<div class="cell small-12 medium-10 large-5" style="position: relative;">
		<h2 class="large-copy" style="margin-bottom: 20px;"><?php the_title(); ?></h2>
		<strong><?php the_field('event_date'); ?></strong>
		<?php if(get_field('event_time')): ?>
			&nbsp;-&nbsp;<?php the_field('event_time'); ?><br>
		<?php endif; ?>

		<?php if(get_field('event_details')): ?>
			<span class="grey"><?php the_field('event_details'); ?></span><br>
		<?php endif; ?>
		<br>

		<?php the_excerpt(); ?>
		<a href="<?php the_permalink();?>" class="">Read more</a>
	</div>
	
	
	<div class="cell small-12 large-3 text-left large-text-right" style="position: relative;">
		

		<?php if (get_field('event_button')):
			$event_link = get_field('event_button');
			$event_url = $event_link['url'];
			$event_title = $event_link['title'];
			$event_target = $event_link['target'] ? $event_link['target'] : '_self';
		?>
			<a href="<?php echo esc_url($event_url); ?>" target="<?php echo esc_attr( $event_target ); ?>" rel="noopener" class="standard-button standard-button-red plus-size-button-arrow"><span class="anim"></span><?php echo esc_html($event_title); ?></a>
		<?php endif; ?>
		

		
	</div>

	<div class="cell small-12" style="position: relative;">
		<hr style="border-bottom: 1px solid #707070; margin-bottom: 20px; margin-top:  0; max-width: 100%; padding:0">
	</div>
</div>