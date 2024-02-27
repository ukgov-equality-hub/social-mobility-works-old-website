<?php get_template_part( 'partials/header/header-top'); ?>
	


<header class="standard-header">
	<!-- header backgrounds -->
	<?php if(is_single() && 'directory' == get_post_type()) { ?>
		<div class="standard-header-bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/directory-header.jpg') "></div>
	<?php } elseif(is_404()) { ?>
		<div class="standard-header-bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/news-header.jpg') "></div>
	<?php } else { ?>
		<div class="standard-header-bg" style="background-image: url(<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url();} ?>"></div>
		<?php if(is_front_page()) { ?>
			<div class="standard-header-bg--front-page-cover"></div>
		<?php } ?>
	<?php } ?>

	<?php get_template_part( 'partials/header/main-navigation'); ?>

	<?php get_template_part( 'partials/header/header-svg'); ?>

	<div class="standard-header-content">
		<div class="grid-container">
			<div class="grid-x align-middle" style="width: 100%; text-align: left">
				
					<?php if ('toolkit' == get_post_type()) { ?>
						<div class="cell small-12 medium-8">
							<h2 class="header-title"><?php echo get_field('toolkit_title'); ?> toolkit</h2>
							<h2>For employers</h2>
						</div>
					<?php } elseif('casestudies' == get_post_type()) { ?>
						<div class="cell small-12 medium-8">
							<h2 class="header-title">Success stories</h2>
						</div>
					<?php } elseif(is_front_page()) { ?>
						<div class="cell small-12 medium-10 large-7" style="margin-top: 140px">
							<h1 class="header-title"><?php the_title();?></h1>
							<h2>Take the lead in helping drive social progress</h2>
						</div>
					<?php } else { ?>
						<div class="cell small-12 medium-6">
							<h2 class="header-title"><?php the_title();?></h2>
						</div>
					<?php } ?>
					<!-- <h2>subtitle</h2> -->
				</div>
			</div>
		</div>
	</div>

</header>










