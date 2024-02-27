<!-- Navigation elements here -->

 <section id="header-top-bar">
	<div class="grid-container">
		<div class="grid-x">
			<div class="small-12 cell" style="position: relative;">
				<a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/header-logos-smc.png" width="138" height="40" alt="Social Mobility Commission" border="0" class="main-logo"></a>	
				
				<nav role="navigation" aria-labelledby="Main navigation" id="primary-navigation">			
				        	<div style="display: inline-block; position: relative;">
				        		<ul class="menu">
							<li class="dropdown"><a href="<?php echo get_site_url(); ?>/strategic-approach/">Strategic approach</a>
								<ul class="dropdown" aria-label="submenu">
									<li><a href="<?php echo get_site_url(); ?>/strategic-approach/why-use-a-strategic-approach/">Why use a strategic approach</a></li>
								</ul>
							</li><!--
							--><li class="dropdown"><a href="<?php echo get_site_url(); ?>/toolkit/">Toolkits</a>
								<ul class="dropdown" aria-label="submenu">
									<li><a href="<?php echo get_site_url(); ?>/toolkit/measurement/">Cross-industry toolkit</a></li>
									<li><a href="<?php echo get_site_url(); ?>/toolkit/financial-and-professional-measurement/">Financial and professional services toolkit</a></li>
									<li><a href="<?php echo get_site_url(); ?>/toolkit/creative-industries-measurement/">Creative industries toolkit</a></li>
									<li><a href="<?php echo get_site_url(); ?>/toolkit/apprenticeships-toolkit-data/">Apprenticeships toolkit</a></li>
								</ul>
							</li><!--
							--><li class="dropdown"><a href="<?php echo get_site_url(); ?>/organisation-directory/">Organisation directory</a>
							<ul class="dropdown" aria-label="submenu">
									<li><a href="<?php echo get_site_url(); ?>/organisation-directory/#join-our-directory">Join our directory</a></li>
									
								</ul>
							</li><!--
							--><li><a href="<?php echo get_site_url(); ?>/social-mobility-success-stories/">Success stories</a></li><!--
							--><li><a href="<?php echo get_site_url(); ?>/news/">News &amp; blogs</a></li><!--
							--><li><a href="<?php echo get_site_url(); ?>/events/">Events</a></li><!--

						--></ul>
							<ul class="menu secondary-menu">
								<li><a href="<?php echo get_site_url(); ?>/maturity-assessment/">Maturity assessment</a></li><!--
								--><li><a href="<?php echo get_site_url(); ?>/resources/">Resources</a></li><!--
								--><li><a href="<?php echo get_site_url(); ?>/meet-our-commissioners/">Commissioners</a></li><!--
								--><li class="contact-li"><a href="<?php echo get_site_url(); ?>/contact/">Get in touch</a></li>
							</ul>
						</div>
							<ul class="menu toolkit-menu">
								<li><a href="#" class="download-toolkit">Download toolkits</a>
									<ul class="dropdown dropdown-right" aria-label="submenu">
										<li><a href="<?php the_field('toolkit_pdf_download','option'); ?>" target="_blank" >Cross-industry toolkit</a></li>
										<li><a href="<?php the_field('toolkit_pdf_download_fps','option'); ?>" target="_blank" >Financial and <br class="show-for-medium">professional services toolkit</a></li>
										<li><a href="<?php the_field('toolkit_pdf_download_creative','option'); ?>" target="_blank" >Creative industries toolkit</a></li>
										<li><a href="<?php the_field('toolkit_pdf_download_apprenticeships','option'); ?>" target="_blank" >Apprenticeships toolkit</a></li>
										<li><a href="<?php the_field('toolkit_pdf_download_building_blocks','option'); ?>" target="_blank" >Building blocks toolkit</a></li>
									</ul>
								</li>
							</ul>

					</nav>
					
					<button class="hamburger hamburger--elastic" type="button" aria-label="Main menu">
					  <span class="hamburger-box">
					    <span class="hamburger-inner"></span>
					  </span>
					</button>

			</div>
		</div>
	</div>
 </section>