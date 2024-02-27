<?php if(is_front_page()) { ?>
	<div class="svg-container svg-container-home">
		<svg xmlns="http://www.w3.org/2000/svg" version="1.1" preserveAspectRatio="none" viewBox="0 0 1200 100" class="hero-svg-frame-desktop" style="height: 100px; width: 100vw;">
		  <g class="hero-orange-top-fade"><polygon points="0 65 0 0 1200 0 1200 30 "/></g>
		  <g class="hero-orange-top"><polygon points="0 85 0 0 1200 0 "/></g>
		</svg>
	<!-- tablet SVG  here -->
		<svg xmlns="http://www.w3.org/2000/svg" version="1.1" preserveAspectRatio="xMinYMin meet" viewBox="0 0 800 580" class="hero-svg-frame-tablet">
		  <g class="hero-orange-top-fade"><polygon class="st0" points="0 0 800 0 800 35 0 60 "/></g>
		  <g class="hero-orange-top"><polygon points="0 0 800 0 800 13.4 0 70 "/></g>
		</svg>
	<!-- mobile SVG  here -->
		<svg xmlns="http://www.w3.org/2000/svg" version="1.1" preserveAspectRatio="xMinYMin meet" viewBox="0 0 600 680" class="hero-svg-frame-mobile">
		  <g class="hero-orange-top-fade"><polygon class="st0" points="0 0 600 0 600 30 0 48 "/></g>
		  <g class="hero-orange-top"><polygon points="0 0 600 0 0 44 "/></g>
		</svg>
	</div>
<?php } else { ?>
	<div class="svg-container svg-container-standard">
		<svg xmlns="http://www.w3.org/2000/svg" version="1.1" preserveAspectRatio="xMinYMin meet" viewBox="0 0 1200 240" class="hero-svg-frame-desktop">
		  <g class="hero-orange-bottom"><polygon points="1200 160 1200 240 460 240 "/></g>
		  <g class="hero-blue-bottom"><polygon points="1200 190 1200 240 0 240 "/></g>
		  <g class="hero-orange-top-fade"><polygon points="0 25 0 0 1200 0 1200 20 "/></g>
		  <g class="hero-orange-top"><polygon points="0 30 0 0 1200 0 "/></g>
		</svg>
		<!-- tablet SVG  here -->
		<svg xmlns="http://www.w3.org/2000/svg" version="1.1" preserveAspectRatio="xMinYMin meet" viewBox="0 0 800 340" class="hero-svg-frame-tablet">
		  <g class="hero-orange-bottom"><polygon class="st0" points="800 340 100 340 800 265 "/></g>
		  <g class="hero-blue-bottom"> <polygon points="800 340 0 340 0 325 800 290 "/></g>
		  <g class="hero-orange-top-fade"><polygon class="st0" points="0 0 800 0 800 35 0 60 "/></g>
		  <g class="hero-orange-top"><polygon points="0 0 800 0 800 13.4 0 70 "/></g>
		</svg>
		<!-- mobile SVG  here -->
		<svg xmlns="http://www.w3.org/2000/svg" version="1.1" preserveAspectRatio="xMinYMin meet" viewBox="0 0 600 440" class="hero-svg-frame-mobile">
		  <g class="hero-orange-bottom"><polygon points="600 360 600 440 0 440 0 425 "/></g>
		  <g class="hero-blue-bottom"><polygon points="600 390 600 440 0 440 0 415.1 "/></g>
		  <g class="hero-orange-top-fade"><polygon class="st0" points="0 25 0 0 600 0 600 20 "/></g>
		  <g class="hero-orange-top"><polygon points="0 30 0 0 600 0 "/></g>
		</svg>
	</div>
<?php } ?>