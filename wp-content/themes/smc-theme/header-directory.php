<?php get_template_part( 'partials/header/header-top'); ?>
	


<header class="standard-header">
	<!-- header backgrounds -->
	<div class="standard-header-bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/directory-header.jpg') "></div>

	<?php get_template_part( 'partials/header/main-navigation'); ?>

	<?php get_template_part( 'partials/header/header-svg-directory'); ?>

	<div class="standard-header-content">
		<div class="grid-container" >
			<div class="grid-x" style="width: 100%; text-align: center">
				<div class="cell small-12 medium-8 medium-offset-2">
					<h1>Directory</h1>
					<h2>Find partners to help</h2>
					<div class="search-wrap">
						<?php echo do_shortcode( '[searchandfilter post_types="directory" fields="search,location,sectors" order_dir="asc,asc" order_by="id,name" hide_empty="1"]' ); ?>
					</div>
				</div>
			</div>
		</div>
	</div>

</header>










