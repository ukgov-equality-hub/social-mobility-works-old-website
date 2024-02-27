<?php $event_featured = get_field('featured_event'); ?>
<?php
	$featID = $event_featured->ID;
	$feat_permalink = get_permalink( $event_featured->ID);
	$feat_title = get_the_title( $event_featured->ID);
	$feat_exc = get_the_excerpt( $event_featured->ID);
	$feat_date = get_the_date('j F Y', $event_featured->ID);
	$featured_img_url = get_the_post_thumbnail_url($featID, 'medium_large'); 
?>
<div class="grid-x grid-margin-x grid-margin-y" style="border: 0px solid red">
	<a href="<?php echo $feat_permalink; ?>" class="cell small-12 medium-8 large-6" style="position: relative;">
		<div class="event_pane_pic-wrapper" style="background-image: url('<?php echo $featured_img_url;?>');">
			<div class="info-pane orange-bg">
				<?php echo event_categories($featID); ?>
				<h4><strong><?php the_field('event_date'); ?><?php the_field('event_date', $featID); ?></strong></h4>
			</div>
		</div>
	</a>
	<div class="cell small-12 medium-10 large-6" style="position: relative;">
		<h2 class="medium-title" style="margin-bottom: 20px;"><?php echo $feat_title; ?></h2>
		<p><?php echo $feat_exc; ?></p>
		<a href="<?php echo $feat_permalink; ?>" class="">Read more</a>

		<?php the_field('event_date'); ?><br>
		<?php if(get_field('event_time')): ?>
			<?php the_field('event_time'); ?><br>
		<?php endif; ?>

		<?php if(get_field('event_details')): ?>
			<?php the_field('event_details'); ?><br>
		<?php endif; ?>
		<br>

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
		<hr style="border-bottom: 1px solid #707070; margin-bottom: 0px; margin-top:  0; max-width: 100%; padding:0">
	</div>
</div>