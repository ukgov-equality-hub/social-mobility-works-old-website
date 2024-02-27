<?php 
	if (!defined('ABSPATH')) exit;
	get_header();
?>


<?php smc_breadcrumb('Maturity assessment', 'ma'); ?>

<div id="scoreBoard" style="display: none; background-color: red; color: black; position: fixed; top: 100px; left: 10px; padding: 20px; z-index: 999999;">
<strong>Scoreboard</strong><br>
question - <span id="qnum">0</span> (+1)<br>
T Score -  <span id="qscore">0</span><br>
AllScores - [<span id="allscores"></span>]<br>
All pair av - [<span id="mpairs"></span>]<br>
Mean Score - <span id="mscore">0</span><br>

</div>

<main>

	<div class="maturity-assessment-content content-pane content-pane-top-mar">
		<div class="grid-container">
			<div class="grid-x grid-margin-x grid-margin-y">

	
				<section class="cell small-12 large-8" style="padding-right: 20px; border: 0px solid red">
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					        	<div class="page-copy page-copy-blue-para">
					        		<h1 id="ma-title">Maturity assessment</h1>
					        		<h2 class="lightblue" id="ma-sub-title"></h2>
					        	</div>


					        	<!-- Intro pane for page -->

					        	<div class="ma-intro">
						        	<div class="page-copy page-copy-blue-para ma-anim">
						        		<?php the_content();?>
						        	</div>

						        	<div class="grid-x grid-margin-x grid-margin-y grid-padding-y medium-up-3 text-center ma-anim" style="margin-left: 0px;" id="">
						        		
						        		<div class="cell" style="position: relative; overflow: hidden">
						        			<h4>Stage 1</h4>
						        			<div class="rounded-block quicklink-text-orange" style="height: 100%;">
						        				<img src="<?php echo get_template_directory_uri(); ?>/images/ma/stage1-pic.png" alt="Answer 12 questions" border="0" style="margin-bottom: 10px"> 
						        				<strong>Answer 12 questions</strong>
						        			</div>
						        		</div>

						        		<div class="cell" style="position: relative;  overflow: hidden">
						        			<h4>Stage 2</h4>
						        			<div class="rounded-block quicklink-text-blue" style="height: 100%;">
						        				<img src="<?php echo get_template_directory_uri(); ?>/images/ma/stage2-pic.png" alt="Receive ratings on a muturity scale" border="0" style="margin-bottom: 10px"> 
						        				<strong>Receive ratings on a maturity scale</strong>
						        			</div>
						        		</div>

						        		<div class="cell" style="position: relative;  overflow: hidden">
						        			<h4>Stage 3</h4>
						        			<div class="rounded-block quicklink-text-red" style="height: 100%;">
						        				<img src="<?php echo get_template_directory_uri(); ?>/images/ma/stage3-pic.png" alt="Access an Employers’ Toolkit to get practical help and ideas to improve" border="0" style="margin-bottom: 10px"> 
						        				<strong>Access an Employers’ Toolkit to get practical help and ideas to improve</strong>
						        			</div>
						        		</div>
						        	</div>
						        


						        	<div class="grid-x grid-margin-y grid-padding-y text-center ma-anim" style="margin-top: 0px;">
							        	<div class="cell" style="position: relative;">
							        		<a href="#" class="standard-button standard-button-red plus-size-button-arrow" id="ma-intro-button"><span class="anim"></span>Find out how you are performing</a>
							       		</div>
							        </div>
							    </div>



							    <!-- After Intro - select industry -->


							    <div class="ma-pre" id="ma-pre">
							    	<div class="page-copy page-copy-blue-para ma-anim">
							    		<p>Which industry most closely relates to you?</p>
							    		<p>Before you begin please tell us what industry you work in so that we can provide you with the most relevant advice.</p>
							    	</div>

							    	<div class="search-wrap search-wrap_border ma-anim">
											<ul>
												<li style="padding-right: 10px; padding-top: 10px; min-width: 49%; vertical-align: top; margin: 0;">
							    					<select name="toolkits" id="ma_toolkit" class="postform">
							    						<option class="level-0" value="financial-and-professional">Financial and professional</option>
							    						<option class="level-0" value="creative-industries">Creative industries</option>
							    						<option class="level-0" value="apprenticeships">Apprenticeships</option>
							    						<option class="level-0" value="cross-industry">Other industry not listed here</option>
							    					</select>
							    				</li>

												<li style="padding-right: 10px; padding-top: 2px; min-width: 49%; vertical-align: top; margin: 0;">
							    					<div><a href="#" class="standard-button standard-button-red plus-size-button-arrow" id="ma-start-button" style="margin: 0"><span class="anim"></span>Start the assessment now</a></div>
							    				</li>
							    			</ul>
							    	</div>
							    </div>



							    <!-- Quiz pane - all questions -->


							    <div id="ma-quiz-copy">
									<p>To assess how well your organisation is doing on social mobility, we need to ask you a few questions about your organisation (or the business unit you are most familiar with)...</p>
								    
								    <div class="progress_bar">
								    	<div class="ma-prog-bar-wrap">
								    		<p class="blue" style="margin-bottom: 10px; text-align: center">Progress</p>
								    	
								    		<div class="ma-prog-bar">
								    			<div class="ma-prog-bar__ind ma-prog-bar__ind_start blue">0%</div>
								    			<div class="ma-prog-bar__ind ma-prog-bar__ind_end blue">100%</div>

								    			<div class="ma-prog-bar__inner">
								    				<div class="ma-prog-bar__pecent" id="bar-prog-percent"></div>
								    			</div>
								    		</div>
								    	</div>
								    </div>
								</div>


							    <form id="maForm" action="" name="maForm">
							    	<!-- Question 1 -->
								    <div class="question">
							    		<h2 class="large-copy orange ma-anim" style="margin-bottom: 20px">Question 1</h2>
							    		<p class="large-copy blue ma-anim">Does your organisation <strong class="lightblue">collect data</strong> about the <span class="lightblue">socio-economic background</span> of its employees? Please choose an option based on the statement that best describes your organisation.</p>
										
										<div class="form-field ma-anim">
											<input type="radio" class="radio" name="question1" id="question1a" value="a">
											<label for="question1a"><span class="ans">a)</span> Your organisation collects diversity data about its employees and applicants to new positions (not including socio-economic background data).</label>
										</div>

										<div class="form-field ma-anim">
											<input type="radio" class="radio" name="question1" id="question1b" value="b">
											<label for="question1b"><span class="ans">b)</span> Your organisation collects data about the <span class="lightblue">socio-economic background</span> of its current employees and applicants e.g. by inviting them to disclose it confidentially through a staff survey.</label>
										</div>

										<div class="form-field ma-anim">
											<input type="radio" class="radio" name="question1" id="question1c" value="c">
											<label for="question1c"><span class="ans">c)</span> Your organisation shares anonymised data on the profile of <span class="lightblue">socio-economic backgrounds</span> in your company internally and briefs senior managers on progress and targets in their areas.</label>
										</div>

										<div class="form-field ma-anim">
											<input type="radio" class="radio" name="question1" id="question1d" value="d">
											<label for="question1d"><span class="ans">d)</span> Somewhere between a & b.</label>
										</div>

										<div class="form-field ma-anim">
											<input type="radio" class="radio" name="question1" id="question1e" value="e">
											<label for="question1e"><span class="ans">e)</span> Somewhere between b & c.</label>
										</div>

										<div class="form-field ma-anim">									
											<input type="radio" class="radio" name="question1" id="question1f" value="f">
											<label for="question1f"><span class="ans">f)</span> None of the above.</label>
										</div>
										
										<div class="button-wrap">
											<button disabled class="standard-button standard-button-red plus-size-button-arrow ma-next"><span class="anim"></span>Next</button>
								    	</div>
								    </div>

								    <!-- Question 2 -->
								     <div class="question">
							    		<h2 class="large-copy orange ma-anim" style="margin-bottom: 20px">Question 2</h2>
							    		<p class="large-copy blue ma-anim">Does your organisation <strong class="lightblue">analyse data</strong> it collects about the <span class="lightblue">socio-economic background</span> of its employees? Please choose an option based on the statement that best describes your organisation.</p>
											<div class="form-field ma-anim">
												<input type="radio" class="radio" name="question2" id="question2a" value="a">
												<label for="question2a"><span class="ans">a)</span> Your organisation is aware of national and industry benchmarks for socio-economic diversity and inclusion.</label>
											</div>

											<div class="form-field ma-anim">
												<input type="radio" class="radio" name="question2" id="question2b" value="b">
												<label for="question2b"><span class="ans">b)</span> Your organisation compares high-level data about its employees’ <span class="lightblue">socio-economic backgrounds</span> against national and industry benchmarks.</label>
											</div>

											<div class="form-field ma-anim">
												<input type="radio" class="radio" name="question2" id="question2c" value="c">
												<label for="question2c"><span class="ans">c)</span> Your organisation looks at data by job function and seniority to understand the profile of <span class="lightblue">socio-economic backgrounds</span> across the organisation in greater detail.</label>
											</div>

											<div class="form-field ma-anim">
												<input type="radio" class="radio" name="question2" id="question2d" value="d">
												<label for="question2d"><span class="ans">d)</span> Somewhere between a & b.</label>
											</div>

											<div class="form-field ma-anim">
  												<input type="radio" class="radio" name="question2" id="question2e" value="e">
												<label for="question2e"><span class="ans">e)</span> Somewhere between b & c.</label>
											</div>

											<div class="form-field ma-anim">									
												<input type="radio" class="radio" name="question2" id="question2f" value="f">
												<label for="question2f"><span class="ans">f)</span> None of the above.</label>
											</div>

											<div class="button-wrap">
												<button disabled class="standard-button standard-button-red plus-size-button-arrow ma-next"><span class="anim"></span>Next</button>
								    		</div>
								    </div>

								    <!-- Question 3 -->
								     <div class="question">
								    	<h2 class="large-copy orange ma-anim" style="margin-bottom: 20px">Question 3</h2>
								    	<p class="large-copy blue ma-anim">How <strong>prominent</strong> is <span class="lightblue">socio-economic diversity and inclusion</span> in your workplace? Please choose an option based on the statement that best describes your organisation.</p>
  										
  										<div class="form-field ma-anim">
												<input type="radio" class="radio" name="question3" id="question3a" value="a">
												<label for="question3a"><span class="ans">a)</span> Your organisation includes discussion of <span class="lightblue">diversity and inclusion</span> on board-level agendas.</label>
											</div>

											<div class="form-field ma-anim">
												<input type="radio" class="radio" name="question3" id="question3b" value="b">
												<label for="question3b"><span class="ans">b)</span> Your organisation’s board-level discussion of diversity and inclusion includes socio-economic diversity and inclusion alongside more established issues such as gender and ethnicity.</label>
											</div>

											<div class="form-field ma-anim">
												<input type="radio" class="radio" name="question3" id="question3c" value="c">
												<label for="question3c"><span class="ans">c)</span> Your organisation appoints specific individuals to be accountable to the board for the agenda and communicates this internally.</label>
											</div>

											<div class="form-field ma-anim">
												<input type="radio" class="radio" name="question3" id="question3d" value="d">
												<label for="question3d"><span class="ans">d)</span> Somewhere between a & b.</label>
											</div>

											<div class="form-field ma-anim">
  											<input type="radio" class="radio" name="question3" id="question3e" value="e">
												<label for="question3e"><span class="ans">e)</span> Somewhere between b & c.</label>
											</div>

											<div class="form-field ma-anim">									
												<input type="radio" class="radio" name="question3" id="question3f" value="f">
												<label for="question3f"><span class="ans">f)</span> None of the above.</label>
											</div>

											<div class="button-wrap">
												<button disabled class="standard-button standard-button-red plus-size-button-arrow ma-next"><span class="anim"></span>Next</button>
								    		</div>
								    </div>


								     <!-- Question 4 -->
								     <div class="question">
								    	<h2 class="large-copy orange ma-anim" style="margin-bottom: 20px">Question 4</h2>
								    	<p class="large-copy blue ma-anim">How does your organisation <strong>communicate</strong> regarding <span class="lightblue">socio-economic diversity and inclusion</span> in the workplace? Please choose an option based on the statement that best describes your organisation.</p>
  											
										<div class="form-field ma-anim">
											<input type="radio" class="radio" name="question4" id="question4a" value="a">
											<label for="question4a"><span class="ans">a)</span> Your organisation understands what ‘socio-economic diversity and inclusion’ means within the context of its workforce.</label>
										</div>

										<div class="form-field ma-anim">
											<input type="radio" class="radio" name="question4" id="question4b" value="b">
											<label for="question4b"><span class="ans">b)</span> Your organisation talks about socio-economic diversity in regular internal communications alongside other diversity areas to emphasise <span class="lightblue">intersectionality</span> and equal importance.</label>
										</div>

										<div class="form-field ma-anim">
											<input type="radio" class="radio" name="question4" id="question4c" value="c">
											<label for="question4c"><span class="ans">c)</span> Your organisation communicates evidence of positive organisational change externally e.g. on your website, job adverts.</label>
										</div>

										<div class="form-field ma-anim">
											<input type="radio" class="radio" name="question4" id="question4d" value="d">
											<label for="question4d"><span class="ans">d)</span> Somewhere between a & b.</label>
										</div>

										<div class="form-field ma-anim">
											<input type="radio" class="radio" name="question4" id="question4e" value="e">
											<label for="question4e"><span class="ans">e)</span> Somewhere between b & c.</label>
										</div>

										<div class="form-field ma-anim">									
											<input type="radio" class="radio" name="question4" id="question4f" value="f">
											<label for="question4f"><span class="ans">f)</span> None of the above.</label>
										</div>

										<div class="button-wrap">
  											<button disabled class="standard-button standard-button-red plus-size-button-arrow ma-next"><span class="anim"></span>Next</button>
								    	</div>
								    </div>

								    <!-- Question 5 -->
								    <div class="question">
								    	<h2 class="large-copy orange ma-anim" style="margin-bottom: 20px">Question 5</h2>
								    	<p class="large-copy blue ma-anim">How does your organisation <strong>engage with prospective applicants?</strong> Please choose an option based on the statement that best describes your organisation.</p>
												
										<div class="form-field ma-anim">
											<input type="radio" class="radio" name="question5" id="question5a" value="a">
											<label for="question5a"><span class="ans">a)</span> Your organisation has an outreach programme for engaging with prospective applicants.</label>
										</div>

										<div class="form-field ma-anim">
											<input type="radio" class="radio" name="question5" id="question5b" value="b">
											<label for="question5b"><span class="ans">b)</span> Your organisation has developed a clear strategy (outreach programme) for engaging with prospective applicants from different socio-economic backgrounds e.g. including activities and success measures focused on raising awareness of opportunities and developing teamwork and problem-solving skills.</label>
										</div>

										<div class="form-field ma-anim">
											<input type="radio" class="radio" name="question5" id="question5c" value="c">
											<label for="question5c"><span class="ans">c)</span> Your organisation targets activities at young people from low socio-economic backgrounds, including in <span class="lightblue">social mobility coldspots</span> and in Further Education colleges.</label>
										</div>

										<div class="form-field ma-anim">
											<input type="radio" class="radio" name="question5" id="question5d" value="d">
											<label for="question5d"><span class="ans">d)</span> Somewhere between a & b.</label>
										</div>

										<div class="form-field ma-anim">
											<input type="radio" class="radio" name="question5" id="question5e" value="e">
											<label for="question5e"><span class="ans">e)</span> Somewhere between b & c.</label>
										</div>

										<div class="form-field ma-anim">									
											<input type="radio" class="radio" name="question5" id="question5f" value="f">
											<label for="question5f"><span class="ans">f)</span> None of the above.</label>
										</div>

										<div class="button-wrap">
											<button disabled class="standard-button standard-button-red plus-size-button-arrow ma-next"><span class="anim"></span>Next</button>
								    	</div>
								    </div>


								    <!-- Question 6 -->
								    <div class="question">
								    	<h2 class="large-copy orange ma-anim" style="margin-bottom: 20px">Question 6</h2>
								    	<p class="large-copy blue ma-anim">How does your organisation <strong>create opportunities for prospective applicants?</strong> Please choose an option based on the statement that best describes your organisation.</p>
												
										<div class="form-field ma-anim">
											<input type="radio" class="radio" name="question6" id="question6a" value="a">
											<label for="question6a"><span class="ans">a)</span> Your organisation offers internships, mentoring and other work experience opportunities.</label>
										</div>

										<div class="form-field ma-anim">
											<input type="radio" class="radio" name="question6" id="question6b" value="b">
											<label for="question6b"><span class="ans">b)</span> Your organisation targets internships, mentoring and other work experience opportunities at a diverse range of applicants, ensuring these opportunities are publicly advertised and paid.</label>
										</div>

										<div class="form-field ma-anim">
											<input type="radio" class="radio" name="question6" id="question6c" value="c">
											<label for="question6c"><span class="ans">c)</span> Your organisation ringfences internships for applicants from under-represented groups, including by socio-economic background.</label>
										</div>

										<div class="form-field ma-anim">
											<input type="radio" class="radio" name="question6" id="question6d" value="d">
											<label for="question6d"><span class="ans">d)</span> Somewhere between a & b.</label>
										</div>

										<div class="form-field ma-anim">
											<input type="radio" class="radio" name="question6" id="question6e" value="e">
											<label for="question6e"><span class="ans">e)</span> Somewhere between b & c.</label>
										</div>

										<div class="form-field ma-anim">									
											<input type="radio" class="radio" name="question6" id="question6f" value="f">
											<label for="question6f"><span class="ans">f)</span> None of the above.</label>
										</div>

										<div class="button-wrap">
											<button disabled class="standard-button standard-button-red plus-size-button-arrow ma-next"><span class="anim"></span>Next</button>
								    	</div>
								    </div>

								    <!-- Question 7 -->
								    <div class="question">
								    	<h2 class="large-copy orange ma-anim" style="margin-bottom: 20px">Question 7</h2>
								    	<p class="large-copy blue ma-anim">How does your organisation <strong>attract talent?</strong> Please choose an option based on the statement that best describes your organisation.</p>
												
										<div class="form-field ma-anim">
											<input type="radio" class="radio" name="question7" id="question7a" value="a">
											<label for="question7a"><span class="ans">a)</span> Your organisation is setting out a plan for how it can attract diverse talent.</label>
										</div>

										<div class="form-field ma-anim">
											<input type="radio" class="radio" name="question7" id="question7b" value="b">
											<label for="question7b"><span class="ans">b)</span> Your organisation advertises new roles for skills and not qualifications, ensuring messages have wide appeal e.g. ‘we’re looking for potential rather than experience’.</label>
										</div>

										<div class="form-field ma-anim">
											<input type="radio" class="radio" name="question7" id="question7c" value="c">
											<label for="question7c"><span class="ans">c)</span> Your organisation undertakes market research to understand how applicants from different demographics respond to adverts, to inform future development.</label>
										</div>

										<div class="form-field ma-anim">
											<input type="radio" class="radio" name="question7" id="question7d" value="d">
											<label for="question7d"><span class="ans">d)</span> Somewhere between a & b.</label>
										</div>

										<div class="form-field ma-anim">
											<input type="radio" class="radio" name="question7" id="question7e" value="e">
											<label for="question7e"><span class="ans">e)</span> Somewhere between b & c.</label>
										</div>

										<div class="form-field ma-anim">									
											<input type="radio" class="radio" name="question7" id="question7f" value="f">
											<label for="question7f"><span class="ans">f)</span> None of the above.</label>
										</div>

										<div class="button-wrap">
												<button disabled class="standard-button standard-button-red plus-size-button-arrow ma-next"><span class="anim"></span>Next</button>
								    	</div>
								    </div>



								    <!-- Question 8 -->
								    <div class="question">
								    	<h2 class="large-copy orange ma-anim" style="margin-bottom: 20px">Question 8</h2>
								    	<p class="large-copy blue ma-anim"><strong>Where</strong> does your organisation create and offer jobs? Please choose an option based on the statement that best describes your organisation.</p>
												
										<div class="form-field ma-anim">
											<input type="radio" class="radio" name="question8" id="question8a" value="a">
											<label for="question8a"><span class="ans">a)</span> Your organisation offers jobs in <span class="lightblue">coldspots</span> or outside of urban centres.</label>
										</div>

										<div class="form-field ma-anim">
											<input type="radio" class="radio" name="question8" id="question8b" value="b">
											<label for="question8b"><span class="ans">b)</span> Your organisation offers remote working roles at all levels of seniority and functions.</label>
										</div>

										<div class="form-field ma-anim">
											<input type="radio" class="radio" name="question8" id="question8c" value="c">
											<label for="question8c"><span class="ans">c)</span> Your organisation offers meaningful progression routes in areas outside of urban centres (i.e. promotion opportunities outside main cities).</label>
										</div>

										<div class="form-field ma-anim">
											<input type="radio" class="radio" name="question8" id="question8d" value="d">
											<label for="question8d"><span class="ans">d)</span> Somewhere between a & b.</label>
										</div>

										<div class="form-field ma-anim">
											<input type="radio" class="radio" name="question8" id="question8e" value="e">
											<label for="question8e"><span class="ans">e)</span> Somewhere between b & c.</label>
										</div>

										<div class="form-field ma-anim">									
											<input type="radio" class="radio" name="question8" id="question8f" value="f">
											<label for="question8f"><span class="ans">f)</span> None of the above.</label>
										</div>

										<div class="button-wrap">
												<button disabled class="standard-button standard-button-red plus-size-button-arrow ma-next"><span class="anim"></span>Next</button>
								    	</div>
								    </div>


								    <!-- Question 9 -->
								    <div class="question">
								    	<h2 class="large-copy orange ma-anim" style="margin-bottom: 20px">Question 9</h2>
								    	<p class="large-copy blue ma-anim">How is <strong>training and progression</strong> offered in your organisation? Please choose an option based on the statement that best describes your organisation.</p>
												
										<div class="form-field ma-anim">
											<input type="radio" class="radio" name="question9" id="question9a" value="a">
											<label for="question9a"><span class="ans">a)</span> Your organisation offers training opportunities to all functions and levels of seniority.</label>
										</div>

										<div class="form-field ma-anim">
											<input type="radio" class="radio" name="question9" id="question9b" value="b">
											<label for="question9b"><span class="ans">b)</span> Your organisation ensures training opportunities are evenly taken up by those from all backgrounds.</label>
										</div>

										<div class="form-field ma-anim">
											<input type="radio" class="radio" name="question9" id="question9c" value="c">
											<label for="question9c"><span class="ans">c)</span> Your organisation undertakes advanced analyses about how progression rates and receipt of bonuses and rewards may be affected by socio-economic background and takes action on inequalities brought to light by the data.</label>
										</div>

										<div class="form-field ma-anim">
											<input type="radio" class="radio" name="question9" id="question9d" value="d">
											<label for="question9d"><span class="ans">d)</span> Somewhere between a & b.</label>
										</div>

										<div class="form-field ma-anim">
											<input type="radio" class="radio" name="question9" id="question9e" value="e">
											<label for="question9e"><span class="ans">e)</span> Somewhere between b & c.</label>
										</div>

										<div class="form-field ma-anim">									
											<input type="radio" class="radio" name="question9" id="question9f" value="f">
											<label for="question9f"><span class="ans">f)</span> None of the above.</label>
										</div>

										<div class="button-wrap">
											<button disabled class="standard-button standard-button-red plus-size-button-arrow ma-next"><span class="anim"></span>Next</button>
								    	</div>
								    </div>



								    <!-- Question 10 -->
								    <div class="question">
								    	<h2 class="large-copy orange ma-anim" style="margin-bottom: 20px">Question 10</h2>
								    	<p class="large-copy blue ma-anim">How are <strong>pay and promotion opportunities</strong> offered in your organisation? Please choose an option based on the statement that best describes your organisation.</p>
												
										<div class="form-field ma-anim">
											<input type="radio" class="radio" name="question10" id="question10a" value="a">
											<label for="question10a"><span class="ans">a)</span> Your organisation offers non-graduate routes with opportunities for progression and reward.</label>
										</div>

										<div class="form-field ma-anim">
											<input type="radio" class="radio" name="question10" id="question10b" value="b">
											<label for="question10b"><span class="ans">b)</span> Your organisation ensures that those taking non-graduate routes receive comparable opportunities for progression and reward as those taking graduate routes.</label>
										</div>

										<div class="form-field ma-anim">
											<input type="radio" class="radio" name="question10" id="question10c" value="c">
											<label for="question10c"><span class="ans">c)</span> Your organisation implements rigorous processes for succession planning e.g. avoids rushed hiring processes to replace leavers, which risks compromising consideration of diversity; reduces the effectiveness of individuals threatening to leave to gain advantage (which is more common among dominant groups).</label>
										</div>

										<div class="form-field ma-anim">
											<input type="radio" class="radio" name="question10" id="question10d" value="d">
											<label for="question10d"><span class="ans">d)</span> Somewhere between a & b.</label>
										</div>

										<div class="form-field ma-anim">
											<input type="radio" class="radio" name="question10" id="question10e" value="e">
											<label for="question10e"><span class="ans">e)</span> Somewhere between b & c.</label>
										</div>

										<div class="form-field ma-anim">									
											<input type="radio" class="radio" name="question10" id="question10f" value="f">
											<label for="question10f"><span class="ans">f)</span> None of the above.</label>
										</div>

										<div class="button-wrap">
											<button disabled class="standard-button standard-button-red plus-size-button-arrow ma-next"><span class="anim"></span>Next</button>
								    	</div>
								    </div>


								    <!-- Question 11 -->
								    <div class="question">
								    	<h2 class="large-copy orange ma-anim" style="margin-bottom: 20px">Question 11</h2>
								    	<p class="large-copy blue ma-anim">How <strong>transparent</strong> is your organisation? Please choose an option based on the statement that best describes your organisation.</p>
												
										<div class="form-field ma-anim">
											<input type="radio" class="radio" name="question11" id="question11a" value="a">
											<label for="question11a"><span class="ans">a)</span> Your organisation publishes <span class="lightblue">high-level diversity data</span>.</label>
										</div>

										<div class="form-field ma-anim">
											<input type="radio" class="radio" name="question11" id="question11b" value="b">
											<label for="question11b"><span class="ans">b)</span> Your organisation publishes detailed <span class="lightblue">socio-economic diversity data</span>, together with the rationale for collecting these and statements about your strategy in response.</label>
										</div>

										<div class="form-field ma-anim">
											<input type="radio" class="radio" name="question11" id="question11c" value="c">
											<label for="question11c"><span class="ans">c)</span> Your organisation creates and publishes a detailed plan to increase socio-economic diversity, as measured against key metrics in the data.</label>
										</div>

										<div class="form-field ma-anim">
											<input type="radio" class="radio" name="question11" id="question11d" value="d">
											<label for="question11d"><span class="ans">d)</span> Somewhere between a & b.</label>
										</div>

										<div class="form-field ma-anim">
											<input type="radio" class="radio" name="question11" id="question11e" value="e">
											<label for="question11e"><span class="ans">e)</span> Somewhere between b & c.</label>
										</div>

										<div class="form-field ma-anim">									
											<input type="radio" class="radio" name="question11" id="question11f" value="f">
											<label for="question11f"><span class="ans">f)</span> None of the above.</label>
										</div>

										<div class="button-wrap">
											<button disabled class="standard-button standard-button-red plus-size-button-arrow ma-next"><span class="anim"></span>Next</button>
								    	</div>
								    </div>

								    <!-- Question 12 -->
								    <div class="question">
								    	<h2 class="large-copy orange ma-anim" style="margin-bottom: 20px">Question 12</h2>
								    	<p class="large-copy blue ma-anim">Does your organisation <strong>collaborate and advocate</strong> in support of socio-economic diversity and inclusion? Please choose an option based on the statement that best describes your organisation.</p>
												
										<div class="form-field ma-anim">
											<input type="radio" class="radio" name="question12" id="question12a" value="a">
											<label for="question12a"><span class="ans">a)</span> Your organisation publicly supports national campaigns to support socio-economic diversity e.g. sharing campaign information on website or social media.</label>
										</div>

										<div class="form-field ma-anim">
											<input type="radio" class="radio" name="question12" id="question12b" value="b">
											<label for="question12b"><span class="ans">b)</span> Your organisation collaborates with other employers in activities such as early outreach initiatives and support for diversity amongst work experience applicants.</label>
										</div>

										<div class="form-field ma-anim">
											<input type="radio" class="radio" name="question12" id="question12c" value="c">
											<label for="question12c"><span class="ans">c)</span> Your organisation shows leadership regarding socio-economic diversity e.g. by <span class="lightblue">sharing and celebrating evidence of impact</span> to help drive positive, informed change.</label>
										</div>

										<div class="form-field ma-anim">
											<input type="radio" class="radio" name="question12" id="question12d" value="d">
											<label for="question12d"><span class="ans">d)</span> Somewhere between a & b.</label>
										</div>

										<div class="form-field ma-anim">
											<input type="radio" class="radio" name="question12" id="question12e" value="e">
											<label for="question12e"><span class="ans">e)</span> Somewhere between b & c.</label>
										</div>

										<div class="form-field ma-anim">									
											<input type="radio" class="radio" name="question12" id="question12f" value="f">
											<label for="question12f"><span class="ans">f)</span> None of the above.</label>
										</div>

										<div class="button-wrap">
											<button disabled class="standard-button standard-button-red plus-size-button-arrow ma-next"><span class="anim"></span>Finish</button>
								    	</div>
								    </div>

								</form>



								<!-- End pane - Suggestion + Tip blocks  -->

								<div id="ma-end-copy"></div>
								
								<div id="status_bar" class="end-element">
								    <div class="ma-prog-bar-wrap">
								    	<p class="ma-status-title blue" style="margin-bottom: 10px; margin-top: 40px; text-align: center"><strong>Your Organisation is here</strong></p>
								    		

								    		<div class="ma-status-bar end-element" style="margin-top: 20px; margin-bottom: 80px">
								    			<div class="ma-status-dividers">
								    				<hr style="left: 10%"><hr style="left: 20%"><hr style="left: 30%"><hr style="left: 40%"><hr style="left: 50%"><hr style="left: 60%"><hr style="left: 70%"><hr style="left: 80%"><hr style="left: 90%">
								    			</div>

								    			<div class="ma-status-bar__ind ma-status-bar__ind_start blue">Foundational</div>
								    			<div class="ma-status-bar__ind ma-status-bar__ind_middle blue">Developing</div>
								    			<div class="ma-status-bar__ind ma-status-bar__ind_end blue">Optimising</div>

								    			<div class="ma-status-bar__marker"></div>
								    		</div>
								    </div>
								</div>






								<div id="ma-next-steps" class="page-copy" style="margin-bottom: 40px"></div>

								
								<div class="grid-x grid-padding-x grid-margin-x grid-margin-y grid-padding-y medium-up-3" style="margin-left: -0.9375rem; margin-right: -0.9375rem;" id="ma-next-steps-tips"></div>
								<div class="grid-x grid-padding-x grid-margin-x grid-margin-y grid-padding-y medium-up-3" style="margin-left: -0.9375rem; margin-right: -0.9375rem; margin-bottom: 40px" id="ma-next-steps-examples"></div>



							<!-- 	<div id="ma-contact-form" class="end-element">
									<h2 class="large-copy lightblue"><strong>Keep up to date</strong></h2>
									<p>To keep up to date with latest from Social Mobility Commission please fill in the the below details.</p>
									<?php /* echo do_shortcode('[wpforms id="912" title="false"]');*/ ?>
								</div> -->

					    	<?php endwhile; else : ?>
							<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
						<?php endif; ?>
		    
		    	</section>








		    	<aside class="cell small-12 large-4" id="ma-aside">
		    		<hr class="hide-for-large">
		    		<div class="ma-intro">
			    		<h2 class="col-title" style="text-align: left">Glossary of Terms</h2>
			    		<strong>Diversity</strong> – This term captures the importance of recognising and valuing difference among individuals, along the lines of gender, ethnicity, socio economic background, sexual orientation, age, and disability, for example. It generally refers to increasing the representation of groups that are under represented in organisations. It must however be understood alongside ‘inclusion’. Diversity in and of itself does not result in an inclusive environment.
			    		<hr>
			    		<strong>Inclusion</strong> – This is the meaningful achievement of diversity. This involves creating the conditions to ensure individuals from diverse backgrounds are valued and treated equally, feel empowered and are able to progress.
			    		<hr>
		    			<strong>Social mobility</strong> – Social mobility is the link between an individual’s income and occupation and the income and occupation of their parents. It is about where people end up in comparison to their parents or relative to their peers. It is widely adopted as a way of describing the importance of creating opportunities for individuals from lower socio economic backgrounds to enable them to become more economically successful.
		    		</div>

		    		<!-- Question 1 -->
		    		<div class="aside-info">
				    	<h2 class="col-title" style="text-align: left">Glossary of Terms</h2>
				    	<span class="lightblue">Collect data</span> – Data that specifically measures the socio-economic diversity of your workforce based on questions around parental occupation at age 14, type of school attended, free school meal eligibility, and highest parental qualification.
				    	<hr>
				    	<span class="lightblue">Socio-economic background</span> – ‘Socio-economic background’ is the term to refer to the particular set of social and economic circumstances that an individual has come from. It permits objective discussion of the influence of these circumstances on individuals’ educational and career trajectories; and it can be objectively measured by capturing information on parental occupation and level of education.
		    		</div>

		    		<!-- Question 2 -->
		    		<div class="aside-info">
				    	<h2 class="col-title" style="text-align: left">Glossary of Terms</h2>
				    	<span class="lightblue">Data</span> – Data that specifically measures the socio- economic diversity of your workforce based on questions around parental occupation at age 14, type of school attended, free school meal eligibility, and highest parental qualification.
				    	<hr>
				    	<span class="lightblue">Socio-economic background</span> – ‘Socio-economic background’ is the term to refer to the particular set of social and economic circumstances that an individual has come from. It permits objective discussion of the influence of these circumstances on individuals’ educational and career trajectories; and it can be objectively measured by capturing information on parental occupation and level of education.
		    		</div>

		    		<!-- Question 3 -->
		    		<div class="aside-info">
				    	<h2 class="col-title" style="text-align: left">Glossary of Terms</h2>
				    	<span class="lightblue">Socio-economic diversity and inclusion</span> – ‘Socio-economic background’ is the term to refer to the particular set of social and economic circumstances that an individual has come from. Having a socio-economically diverse and inclusive workforce plays a role in social mobility by ensuring someone's background does not determine their future.
				    	<hr>
				    	<span class="lightblue">Diversity and inclusion </span> – This means diversity and inclusion within the workplace covering gender, ethnicity, disability, sexuality, religion.
		    		</div>


		    		<!-- Question 4 -->
		    		<div class="aside-info">
			    		<h2 class="col-title" style="text-align: left">Glossary of Terms</h2>
			    		<span class="lightblue">Socio-economic diversity and inclusion</span> – Having a socio-economically diverse and inclusive workforce plays a role in social mobility by ensuring someone's background does not determine their future.
			    		<hr>
			    		<span class="lightblue">Intersectionality</span> – Individuals do not experience their diversity characteristics in isolation: these characteristics overlap and collide to compound the experience of inequality. For example, patterns of progression in the firm will vary not only by gender, ethnicity or socio-economic background, but by combinations of all three. Policy and practice need to recognise the convergence of factors and respond accordingly.
			    	
		    		</div>

		    		<!-- Question 5 -->
		    		<div class="aside-info">
			    		<h2 class="col-title" style="text-align: left">Glossary of Terms</h2>
			    		<span class="lightblue">Social mobility coldspots</span> – Social mobility coldspots are areas with significantly low social mobility across 16 key performance indicators used in the Social Mobility Index
			    		<hr>
			    		<span class="lightblue">Intersectionality</span> – Individuals do not experience their diversity characteristics in isolation: these characteristics overlap and collide to compound the experience of inequality. For example, patterns of progression in the firm will vary not only by gender, ethnicity or socio-economic background, but by combinations of all three. Policy and practice need to recognise the convergence of factors and respond accordingly.
		    		</div>

		    		<!-- Question 6 -->
		    		<div class="aside-info">
		    			<!-- Nothing to show -->
		    		</div>
		    		
		    		<!-- Question 7 -->
		    		<div class="aside-info">
		    			<!-- Nothing to show -->
		    		</div>


		    		<!-- Question 8 -->
		    		<div class="aside-info">
				    	<h2 class="col-title" style="text-align: left">Glossary of Terms</h2>
				    	<span class="lightblue">Coldspots</span> – Social mobility coldspots are areas with significantly low social mobility across 16 key performance indicators used in the Social Mobility Index
		    		</div>

		    		<!-- Question 9 -->
		    		<div class="aside-info">
		    			<!-- Nothing to show -->
		    		</div>

		    		<!-- Question 10 -->
		    		<div class="aside-info">
		    			<!-- Nothing to show -->
		    		</div>

		    		<!-- Question 11 -->
		    		<div class="aside-info">
				    	<h2 class="col-title" style="text-align: left">Glossary of Terms</h2>
				    	<span class="lightblue">High-level diversity data</span> – This means data such as gender or ethnicity, separated by function and grade.
				    	<hr>
				    	<span class="lightblue">Socio-economic diversity data</span> – Data that specifically measures the socio-economic diversity of your workforce based on questions around parental occupation at age 14, type of school attended, free school meal eligibility, and highest parental qualification.
		    		</div>


		    		<!-- Question 12 -->
		    		<div class="aside-info">
				    	<h2 class="col-title" style="text-align: left">Glossary of Terms</h2>
				    	<span class="lightblue">Sharing and celebrating evidence of impact</span> – This means data such as gender or ethnicity, separated by function and grade.
		    		</div>

					<!-- End of quiz aside -->
		    		<div id="ma-end-aside" class="end-element">
		    			<div class="ma-end-aside-content"></div>

		    			
		    			<div class="toolkit-pane" id="cross-industry">
		    				<a href="<?php echo esc_url(the_field('toolkit_pdf_download','option')); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/ma/toolkit-covers/cross-industry-cover.jpg" class="" width="50%" height="auto" alt="Cross-industry toolkit pic" border=""></a>
		    				<a href="<?php echo esc_url(the_field('toolkit_pdf_download','option')); ?>" target="_blank" class="standard-button standard-button-red plus-size-button-arrow" ><span class="anim"></span>Download toolkit PDF</a>
		    			</div>


		    			<div class="toolkit-pane" id="creative-industries">
		    				<a href="<?php echo esc_url(the_field('toolkit_pdf_download_creative','option')); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/ma/toolkit-covers/creative-industries-cover.jpg" class="" width="50%" height="auto" alt="Creative industries toolkit pic" border=""></a>
		    				<a href="<?php echo esc_url(the_field('toolkit_pdf_download_creative','option')); ?>" target="_blank" class="standard-button standard-button-lightblue plus-size-button-arrow" ><span class="anim"></span>Download toolkit PDF</a>
		    			</div>

		    			<div class="toolkit-pane" id="apprenticeships">
		    				<a href="<?php echo esc_url(the_field('toolkit_pdf_download_apprenticeships','option')); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/ma/toolkit-covers/apprenticeships-cover.jpg" class="" width="50%" height="auto" alt="Apprenticeships toolkit pic" border=""></a>
		    				<a href="<?php echo esc_url(the_field('toolkit_pdf_download_apprenticeships','option')); ?>" target="_blank" class="standard-button standard-button-yellow plus-size-button-arrow" ><span class="anim"></span>Download toolkit PDF</a>
		    			</div>
		    				
		    			<div class="toolkit-pane" id="financial-and-professional">
			    			<a href="<?php echo esc_url(the_field('toolkit_pdf_download_fps','option')); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/ma/toolkit-covers/financial-and-professional-cover.jpg" class="" width="50%" height="auto" alt="Financial and professional toolkit pic" border=""></a>
			    			<a href="<?php echo esc_url(the_field('toolkit_pdf_download_fps','option')); ?>" target="_blank" class="standard-button standard-button-red plus-size-button-arrow"><span class="anim"></span>Download toolkit PDF</a>
			    		</div>
		    		</div>



		    	</aside>


			</div>
		</div>




		<div class="svg-container svg-bottom-expand">
			<svg xmlns="http://www.w3.org/2000/svg" version="1.1" preserveAspectRatio="xMinYMin meet" width="1200" height="85" viewBox="0 0 1200 85" class="svg-bottom-toleft svg-content">
			  <polygon points="1200 0 1200 85 0 85"/>
			</svg>
		</div>
	</div>


	<?php get_template_part( 'partials/news-and-case-study-pane'); ?>
	
	









</main>

<!-- Main content pane -->












			

<?php get_footer(); ?>

