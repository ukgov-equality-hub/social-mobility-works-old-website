<section class="news-and-case-study-pane">
	<div class="grid-container">
		<div class="grid-x grid-margin-x">
			<div class="cell small-12 medium-4">
				<h1>Latest news and blogs</h1>
				
				<?php 
					$args = array(
						'post_type' => 'post',
						'posts_per_page' => 1
					);
					query_posts($args);
				?>

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<a href="<?php the_permalink();?>">
					<div class="news-post-pic" style="background-image: url('<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url();} ?>"></div>
				</a>
				<h2 class="small-title"><?php echo the_title(); ?></h2>
				<p><?php echo get_the_excerpt(); ?><br></p>
				<a href="<?php the_permalink(); ?>" class="text-link text-link-arrow"> Read full story</a>
			    
			<?php endwhile; endif; ?>
			<?php wp_reset_query(); ?>



			</div>

			<div class="cell small-12 medium-4">
				<h1>Latest Linkedin</h1>
				

				<?php if( get_field('linkedin_title', 'option') ): ?>
					<p><?php the_field('linkedin_title', 'option'); ?></p>
				<?php endif; ?>

				<?php if( get_field('linkedin_date', 'option') ): ?>
					<p><strong><?php the_field('linkedin_date', 'option'); ?></strong></p>
				<?php endif; ?>

				<?php if( get_field('linkedin_content', 'option') ): ?>
					<p><?php the_field('linkedin_content', 'option'); ?></p>
				<?php endif; ?>

				<?php if( get_field('linkedin_link', 'option') ): ?>
					<a href="<?php the_field('linkedin_link', 'option'); ?>" class="text-link text-link-arrow">Find out more</a>
				<?php endif; ?>








			</div>

			<div class="cell small-12 medium-4">
				<h1>Latest Tweets</h1>
				<?php echo do_shortcode('[custom-twitter-feeds]'); ?>
				
			</div>
		</div>
	</div>
</section>


