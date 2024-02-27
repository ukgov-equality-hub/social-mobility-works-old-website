<?php 
	if (!defined('ABSPATH')) exit;
	get_header();
?>

<section class="home-quicklinks">
	<div class="grid-container" style="background-color: #fff; padding-top: 20px; border-radius: 5px">	
		
		<?php if( have_rows('quicklinks') ): ?>
			<div class="grid-x grid-margin-x align-center">
				<?php while ( have_rows('quicklinks') ) : the_row(); ?>
					<div class="cell small-6 large-3">
						<div class="quicklink">
							<a href="<?php echo get_sub_field('pane_link') ;?>">
								<div class="quicklink-image-wrapper">
									<div class="quicklink-image" style="background-image: url('<?php echo get_sub_field('pane_image') ;?>');"></div>
									<div class="quicklink-text <?php echo get_sub_field('pane_link_color') ;?>"><?php echo get_sub_field('quicklink_title') ;?></div>
								</div>

							</a>
							<a class="quick-title" href="<?php echo get_sub_field('pane_link') ;?>"><?php echo get_sub_field('quicklink_copy_title') ;?></a>
							<p><?php echo get_sub_field('quicklink_copy') ;?></p>
						</div>
					</div>
				<?php endwhile; ?>

				<!-- temp pulling in news pane -->
				<?php 
					$args = array(
						'post_type' => 'post',
						'posts_per_page' => 1
					);
					query_posts($args);
				?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<div class="cell small-6 large-3">
							<div class="quicklink">
								<a href="<?php the_permalink();?>">
									<div class="quicklink-image-wrapper">
										<div class="quicklink-image" style="background-image: url('<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url();} ?>');"></div>
										<div class="quicklink-text quicklink-text-yellow">Latest news</div>
									</div>

								</a>
								<a class="quick-title" href="<?php the_permalink();?>">Latest news</a>
								<p><?php echo get_the_title(); ?></p>
							</div>

						</div>

					<?php endwhile; endif; ?>
				<?php wp_reset_query(); ?>

			</div>
		<?php endif; ?>
		
</section>





<?php if (get_field('promo_pane_active')): ?>
	<section id="home-promo-pane">
		<div class="home-promo-pane--side-pic" style="background-image: url('<?php the_field('promo_pane_image') ;?>')"></div>
		<div class="grid-container">
			<div class="grid-x">
				<div class="small-12 medium-5">
					<h2><?php the_field('promopane-title') ;?>&nbsp;<span><?php the_field('promopane-subtitle') ;?></span></h2>

					<p>
						<strong><?php the_field('promopane-date') ;?></strong><br>
						<?php the_field('promopane-copy') ;?>
					</p>
					
					<?php $promoLink = get_field('promo_pane_link'); ?>
					<a href="<?php echo $promoLink['url']; ?>" class="standard-button standard-button-white-outline standard-button-white-outline-arrow" style="margin-bottom: 40px;" target="<?php echo $promoLink['target']; ?>"><div class="anim"></div><?php echo $promoLink['title']; ?></a>

				</div>

			</div>
		</div>
	</section>
<?php endif; ?>




<main>
	<!-- toolkit contributors logos -->
	<section id="contributors-logo-pane">
		<div class="grid-container">
			<div class="grid-x">
				<div class="cell small-12">
					<h2 class="home-title"><?php the_field('contributors_section_title') ;?></h2>

					<div class="homeLogos">
						<?php if( have_rows('toolkit_contributors') ): ?>			
							<?php $logoAmount = 1; $wrapAmount = 0; ?>

							<?php while( have_rows('toolkit_contributors') ): the_row(); ?>
								
								
								<?php if ($logoAmount%7 == 1){ $wrapAmount++; echo "<div class=\"logoWrapper logoWrapper".$wrapAmount."\">"; } ?>
								
									<span class="contributorLogo contributorLogoSet<?php echo $logoAmount; ?>"><img src="<?php the_sub_field('contributors_logo'); ?>" alt="<?php echo get_sub_field('contributors_name'); ?>" border="0"></span>
		   						
		   						<?php if ($logoAmount%7 == 0){ echo "</div>"; } ?>
								
								<?php $logoAmount++; ?>

							<?php endwhile; ?>
							<?php if ($logoAmount%7 != 1) echo "</div>"; ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</section>



	<!-- Main copy and video pane -->

	<div class="grid-container">
		<div class="grid-x">
			<section class="cell small-12 large-6 page-copy page-copy-home page-copy-blue-para">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        				<div style="padding-right: 20px">
			        		<?php the_content();?>

			        		<?php $buttonLink = get_field('video_pane_button'); ?>
			        		
			        		<a href="<?php echo $buttonLink['url']; ?>" class="standard-button standard-button-grey-outline standard-button-grey-outline-arrow" style="margin-left: 30px; margin-bottom: 40px" target="<?php echo $buttonLink['target']; ?>"><?php echo $buttonLink['title']; ?></a>
			        	</div>
			    	<?php endwhile; else : ?>
					<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>
			</section>


			<?php $video_pane = get_field('video_pane'); if( $video_pane  ): ?>
				<section class="cell small-12 large-6">
					<div class="videoWrapper">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo esc_html( $video_pane['video_link'] ); ?>?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
					</div>
				</section>

				
			<?php endif; ?>
			
		</div>
	</div>

	

	<!-- Toolkit info pane -->

	<div id="home-toolkit-pane" class="verylightgrey-bg">
		<div class="svg-container svg-container-bottom">
			<svg xmlns="http://www.w3.org/2000/svg" version="1.1" preserveAspectRatio="xMinYMin meet" width="1200" height="30" viewBox="0 0 1200 30" class="svg-bottom-toleft">
			  <polygon points="1200 0 1200 30 0 30"/>
			</svg>
		</div>

		<div class="svg-container svg-container-top">
			<svg xmlns="http://www.w3.org/2000/svg" version="1.1" preserveAspectRatio="xMinYMin meet" width="1200" height="40" viewBox="0 0 1200 40" class="svg-top-toright">
			  <polygon points="0 40 0 0 1200 0"/>
			</svg>
		</div>



		<div class="grid-container">
			<div class="grid-x">
				<section class="cell small-12 large-6 page-copy page-copy-toolkit" style="padding-right: 20px">
					<h1><?php the_field('toolkit_title') ;?></h1>
					<?php the_field('toolkit_pane_text') ;?>
					<br>
				</section>

				<div class="cell small-12 large-6">
					<aside class="page-aside page-aside-blue">
						<h2><?php the_field('toolkit_aside_title') ;?></h2>
						<p><?php the_field('toolkit_aside_text') ;?></p>
						<?php $toolkitLink = get_field('toolkit_aside_link'); ?>
						<a href="<?php echo $toolkitLink['url']; ?>" class="standard-button standard-button-white-outline standard-button-white-outline-arrow" target="<?php echo $toolkitLink['target']; ?>"><div class="anim"></div><?php echo $toolkitLink['title']; ?></a>
					</aside>
				</div>
			</div>
		</div>
	</div>





	<!-- Testimonial quote pane -->

	<div class="home-quote-pane">
		<div class="grid-container">
			<div class="grid-x">
				<?php if( have_rows('homepage_testimonial_quote') ): ?>			
					<?php 
						$numrows = count( get_sub_field( 'homepage_testimonial_quote' ) ); 
						$quoteLink = get_field('testomonial_pane_link');
					?>

						<?php while( have_rows('homepage_testimonial_quote') ): the_row(); ?>
							<aside class="cell small-12 large-5 small-order-2 large-order-1">
								<?php $quoteImage = get_sub_field('the_quote_supporting_image'); ?>
								<img src="<?php echo $quoteImage['sizes']['medium_large']; ?>" alt="<?php echo $quoteImage['title']; ?>"> 
							</aside>


							<section class="cell small-12 large-7 page-copy small-order-1 large-order-2">
								<p class="quote"><?php echo get_sub_field('the_quote') ;?></p>
								<p class="quote-name"><?php echo get_sub_field('the_quote_name') ;?></p>
								<p class="quote-title"><?php echo get_sub_field('the_quote_job') ;?></p><br>
								<a href="<?php echo $quoteLink['url']; ?>" class="standard-button standard-button-grey-outline standard-button-grey-outline-arrow" style="margin-left: 30px; margin-bottom: 80px" target="<?php echo $quoteLink['target']; ?>"><?php echo $quoteLink['title']; ?></a>
							</section>
					<?php endwhile; ?>
					
				<?php endif; ?>
			</div>
		</div>

		<div class="svg-container svg-container-bottom">
			<svg xmlns="http://www.w3.org/2000/svg" version="1.1" preserveAspectRatio="xMinYMin meet" width="1200" height="30" viewBox="0 0 1200 30" class="svg-bottom-toleft">
			  <polygon points="1200 30 0 30 0 0"/>
			</svg>
		</div>
	</div>

	





	<div class="home-news-wrap">
		<?php get_template_part( 'partials/news-and-case-study-pane'); ?>
	</div>
	
	<?php get_template_part( 'partials/search-directory-pane-home'); ?>
	

	

</main>

<!-- Main content pane -->




<?php get_footer('home'); ?>

