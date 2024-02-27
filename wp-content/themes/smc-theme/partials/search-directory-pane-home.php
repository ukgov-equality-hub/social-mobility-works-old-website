<section class="seach-directory-pane seach-directory-pane--home">
	<div class="svg-container svg-container-bottom">
		<svg xmlns="http://www.w3.org/2000/svg" version="1.1" preserveAspectRatio="xMinYMin meet" width="1200" height="85" viewBox="0 0 1200 85" class="svg-bottom-toleft svg-bottom-toleft-grey" style="fill: #787878">
		  <polygon points="1200 0 1200 85 0 85"/>
		</svg>
	</div>

	<div class="grid-container">
		<div class="grid-x">
			<div class="cell small-12 medium-6 medium-offset-3">
				<h1>Find an organisation for further help</h1>
				<div class="search-wrap">
					<?php echo do_shortcode( '[searchandfilter post_types="directory" fields="search,location,sectors" order_dir="asc,asc" order_by="id,name" hide_empty="1"]' ); ?>
				</div>
			</div>
		</div>
	</div>
</section>