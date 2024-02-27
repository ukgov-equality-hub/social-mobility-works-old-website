<?php $cat = get_field('category'); ?>
<a href="<?php the_permalink(); ?>" class="case-study-pane">
	<div class="case-study-pane-bg" style="background-image: url('<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url();} ?>')"></div>
	<div class="case-study-pane-text">
		<?php if($cat): ?><span class="category"><?php echo $cat; ?></span><?php endif; ?>
		<h1>Case Study</h1>
		<h2><?php the_title(); ?></h2>
		<?php the_excerpt(); ?>
		<span class="text-link text-link-arrow">Find out more</span>
	</div>
</a>