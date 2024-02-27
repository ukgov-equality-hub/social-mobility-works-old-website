
<article class="cell directory-entry">
	<a href="<?php echo get_permalink();?>">
	<span class="company-logo"><img src="<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url();} ?>" alt="<?php the_title();?>" border="0"></span>
	<h1><?php the_title();?></h1>
	<?php the_excerpt();?>

	<?php if(get_field('_website')): ?>
		<a href="<?php the_field('_website'); ?>" target="_blank" class="web-link"><?php the_field('_website'); ?></a>
	<?php endif; ?>
	
	</a>
	<a href="<?php echo get_permalink();?>" class="text-link text-link-arrow text-link-blue">Find out more</a>

</article>