<?php get_template_part( 'partials/header/header-top'); ?>
	
<header class="standard-header">
	<!-- header backgrounds -->
	<div class="standard-header-bg" style="background-image: url('<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url();} else {echo get_template_directory_uri()."/images/main-academy-header.jpg";} ?>') "></div>

	<?php get_template_part( 'partials/header/main-navigation'); ?>

	<?php get_template_part( 'partials/header/header-svg'); ?>

	<div class="standard-header-content">
		<div class="grid-container">
			<div class="grid-x" style="width: 100%; text-align: left">
				<div class="cell small-12 medium-8">
					<h1>Social Mobility resources</h1>
				</div>
			</div>
		</div>
	</div>

</header>