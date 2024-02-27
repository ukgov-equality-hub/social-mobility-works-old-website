<section class="content-pane content-pane-top-mar">
	<div class="grid-x grid-margin-x">
		<div class="cell small-12 medium-8 medium-offset-2 text-center">
			<div class="search-wrap search-wrap_border">
				<?php echo do_shortcode( '[searchandfilter post_types="resource" fields="content-type,sectors" order_dir="asc,asc" order_by="id,name" hide_empty="1,1" submit_label="Filter"]' ); ?>
			</div>
		</div>
	</div>
</section>