<section id="seach-directory-pane" style="border: 5px solid blue">
	<div class="grid-container">
		<div class="grid-x">
			<div class="cell small-12 medium-8 medium-offset-2">
				<?php
					$args = array( 'post_type' => 'Directory');
					query_posts($args);
				?>

				
				
				<?php
					//$defaults = array( 'taxonomy' => 'sectors' );
					//$args = wp_parse_args( $args, $defaults );


					$categories = get_terms( array(
					    'taxonomy' => 'sectors',
					    'orderby' => 'name',
					    'hide_empty'  => false,
					    'order' => 'ASC',
					
					));

					$select = "<select name='sectors' id='sectors' class='postform'>";
					$select.= "<option value='-1'>Select sector:</option>";
 
				  foreach($categories as $category){
				    if($category->count > 0){
				        $select.= "<option value='".$category->slug."'>".$category->name."</option>";
				    }
				  }
 
				  $select.= "</select>";
				 
				  echo $select;
				?>

				<?php
					//$defaults = array( 'taxonomy' => 'location' );
					//$args = wp_parse_args( $args, $defaults );
					$categories = get_terms('location', array(
    					'hide_empty' => false,
    					'orderby'    => 'ID',
    					'orderby'    => 'none',
    					// manual ordering by ID	
    					//'orderby'    => 'include',
    					//'include'    => array( 2, 13)
					));

					$select = "<select name='location' id='location' class='postform'>";
					$select.= "<option value='-1'>Select Location:</option>";
 
				  foreach($categories as $category){
				    if($category->count > 0){
				        $select.= "<option value='".$category->slug."'>".$category->name."</option>";
				    }
				  }
 
				  $select.= "</select>";
				 
				  echo $select;
				?>

				

				this is almost working!!

				<?php wp_reset_query(); ?>
			</div>
		</div>
	</div>
</section>