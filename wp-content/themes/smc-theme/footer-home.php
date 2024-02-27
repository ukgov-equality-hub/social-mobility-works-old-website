

<footer class="standard-footer" style="padding-top: 10px;">
	
	<div class="grid-container">
		<div class="grid-x grid-margin-x">
			<div class="cell small-12 medium-4">
				<p>&copy; <?php echo date("Y"); ?> <?php the_field('footer-text','option'); ?><br>
				<a href="<?php echo home_url(); ?>/privacy/">Privacy &amp; Cookies policy</a><br>
				Site designed and built by <a href="https://form.agency" target="_blank">Form Agency</a></p>
			</div>

			<div class="cell small-12 medium-auto">
				<h4>Connect with us</h4>
				<a href="https://twitter.com/SMCommission" target="_blank" class="social-link social-link-twitter"></a>
				<a href="https://www.linkedin.com/company/social-mobility-commission/" target="_blank" class="social-link social-link-linkedin"></a>
				<a href="https://www.instagram.com/socialmobilitystories/?hl=en" target="_blank" class="social-link social-link-instagram"></a>

				
			</div>

			<div class="cell small-12 medium-4 logos">
				<a href="https://www.thebridgegroup.org.uk/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/footer-logos-bridge-group.png" width="70" height="70" alt="" border="0"></a>
				<a href="https://www.gov.uk/government/organisations/social-mobility-commission" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/footer-logos-smc.png" width="115" height="62" alt="" border="0"></a>
			</div>
		</div>
	</div>
</footer>


<!-- close footer container -->

<?php wp_footer(); ?>


</body>

</head>