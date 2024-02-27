<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="format-detection" content="telephone=no">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		
		<!-- insert any font scripts here -->

		<title><?php wp_title(); ?></title>
		

		<!-- Global site tag (gtag.js) - Google Analytics -->
		
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-157910485-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-157910485-1');
		</script>


		<?php wp_head(); ?>
		
	</head>
	
<body <?php body_class(); ?> id="pageTop">