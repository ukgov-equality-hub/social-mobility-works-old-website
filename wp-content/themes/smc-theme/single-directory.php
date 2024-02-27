<?php 
	if (!defined('ABSPATH')) exit;
	get_header();
?>
<?php smc_breadcrumb('Directory', 'null'); ?>


<main class="organisation-directory content-pane content-pane-top-mar">
	<div class="grid-container">
		<div class="grid-x">
	
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    	
    			<div class="cell small-12 medium-8 page-copy page-copy-blue-para">
    				<span class="company-logo"><img src="<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url();} ?>" alt="<?php the_title();?>" border="0"></span>
    				<h1><?php the_title();?></h1>
		        	<?php the_content();?>

		        	<?php if(get_field('_website')): ?>
						<a href="<?php the_field('_website'); ?>" target="_blank" class="website"><?php the_field('_website'); ?></a><br>
					<?php endif; ?>
		        </div>
		       

		        
		        <aside class="cell small-12 medium-3 medium-offset-1">
		        	 <div class="page-aside page-aside-light-blue">
		        		<h3>Sectors covered</h3>
		        		<?php the_category('', '', $post_id) ?>
		        		<?php   // Get sectors for post
							$terms = get_the_terms( $post->ID , 'sectors' );
							$count = count($terms);

							if ( $terms != null ){
								foreach( $terms as $term ) {
									if (--$count <= 0) {
								        echo $term->name;
								    } else {
								    	echo $term->name.' <span>|</span> ' ;
								    }
								 // Get rid of the other data stored in the object, since it's not needed
								 unset($term);
								} 
							} 
						?>
		        		<hr>
		        		
		        		<?php   // Get locations for post
							$terms = get_the_terms( $post->ID , 'location' );
							$count = count($terms);

							if ( $terms != null ){ ?>
								<h3>Locations covered</h3>
								<?php foreach( $terms as $term ) {
									if (--$count <= 0) {
								        echo $term->name;
								    } else {
								    	echo $term->name.' <span>|</span> ' ;
								    }
								 // Get rid of the other data stored in the object, since it's not needed
								 unset($term);
								} ?>
								<hr>
							<?php } ?> 
							
						
						
						<h3>Contact</h3>	
						<?php if(get_field('_tel-number')): ?>
							Tel: <?php the_field('_tel-number'); ?><br>
						<?php endif; ?>
						<?php if(get_field('_email-address')): ?>
							Email: <a href="mailto:<?php the_field('_email-address'); ?>" class="email"><?php the_field('_email-address'); ?></a><br>
						<?php endif; ?>
		        	</div>
		        </aside>



		    	<?php endwhile; else : ?>
				<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
    
    			
			
		</div>
	</div>
</div>









<?php get_template_part( 'partials/search-directory-pane'); ?>
	

<?php get_template_part( 'partials/news-and-case-study-pane'); ?>

	









</main>

<!-- Main content pane -->












			

<?php get_footer(); ?>

