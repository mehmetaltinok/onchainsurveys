<style>
	pre{
		font-size: 15px;
	}
</style>

<style>
	html.dark hr {
	background-image: linear-gradient(to left, #212529, #c4ccd9, #212529);
	height: 5px;
	}

	.question {
		border: 1px solid #292929;
		padding: 10px;
		 transition-property: border;
		transition: 500ms;
		margin-bottom: 20px;
	}

	.question:hover{
		border: 1px solid #99999936;
	}

	.question:hover .clear-question{
		display: block;
	}

	.clear-question{
		margin-top: -5px;
		display: none;
		cursor: pointer;
		font-size: 18px;
	}

	.survey-title-container{
		padding: 10px;
	}

	#addQuestion, #finishSurvey { min-width: 200px; }
</style>	

  <!-- Masthead-->
<header class="masthead pages-head">
	<div class="container">
		<div class="masthead-subheading"><?=@$title;?></div>
		<div class="masthead-heading text-uppercase">Onchain Surveys </div>
	</div>
</header>



				<section class="custom-cards p-relative mb-5 pb-5 z-index-2" >
					<div class="container">
						<div class="row">
 
						<!-- create_survey --> 
 						<div class="col-lg-12 " id="create_survey">
							<div class="card border-0 bg-color-dark rounded-0 z-index-1 p-5  " >

								
								<!-- <div class="container mt-5"> -->
									<div class="row">

									<form action="survey/save" method="post" id="createSurvey" >

										<div class="col-sm-12" id="surveyForm">
 											
											<div class="survey-title-container">

												<div class="d-flex justify-content-end">
													<?php go_back(); ?>
												</div>


												<label for="comment">Enter a name for your survey</label>
												<div class="form-group input-group">
	 												<input type="text" name="form[title]" id="survey_title" class="form-control" placeholder="Enter Survey Title" maxlength="255">
												</div>

												<div class="row">
													
													<!-- <div class="col-md-4">
														<label for="type">Select Type</label>
														<div class="form-group input-group">
															<select name="form[type]" id="" class="form-control">
																<option value="public">Puplic</option>
																<option value="private">Private</option>
															</select>
														</div>
													</div> -->

													<div class="col-md-4">
														<label for="start_date">Start Date</label>
														<div class="form-group input-group">
															<input type="datetime-local" name="form[start_date]" id="start_date" class="form-control">
 														</div>
 														<span id="start_date_error" class="form_error"></span>
													</div>

													<div class="col-md-4">
														<label for="end_date">End Date</label>
														<div class="form-group input-group">
															<input type="datetime-local" name="form[end_date]" id="end_date" class="form-control">
 														</div>
 														<span id="end_date_error" class="form_error"></span>
													</div>

												</div>
 
												<hr>
											</div>
 											 
											
											 
											<div class="question mb-5 pb-5">
												<div class="float-end clear-question" onclick="clearQuestion(event);">
													<i class="fas fa-times-circle "></i>
												</div>
 
													<label for="comment">Enter your question</label>
													<div class="form-group input-group mb-3">
														<textarea class="form-control" rows="2" id="text" name="0[text]" placeholder="Enter your question" maxlength="255"></textarea>
													</div>

													<div class="form-group mb-3">
														<div class="input-group">
															<span class="input-group-text">A</span>
															<input type="text" class="form-control" name="0[options][]" placeholder="Option text" maxlength="255">
															<button class="btn btn-danger btn-xs deleteOption" disabled><i class="fas fa-times-circle"></i></button>
														</div>
													</div>

													<div class="form-group mb-3">
														<div class="input-group">
															<span class="input-group-text">B</span>
															<input type="text" class="form-control" name="0[options][]" placeholder="Option text" maxlength="255">
															<button class="btn btn-danger btn-xs deleteOption" disabled><i class="fas fa-times-circle"></i></button>
														</div>
													</div>
												 
	 											
	 											 
	 												<div class="form-group mb-3">
														<div class="float-end">
															<button type="button" class="btn btn-outline-secondary btn-sm " id="" onclick="addOption(event,0);"> <i class="fas fa-plus-circle"></i> Add Option</button>
														</div>
													</div>
 

											</div>




											<!-- last question -->
											<div id="lastQuestion"></div>
 
										</div>


										<div class="form-group">
											<div class="text-center">
												 <button type="button" class="btn btn-outline-secondary btn-lg mb-2" id="addQuestion" onclick="addQuestionBlock(event);"> <i class="fas fa-question-circle"></i> Add Question</button>

												 <button type="button" class="btn btn-outline-secondary btn-lg mb-2" id="finishSurvey" onclick="formSave(event);"><i class="fas fa-clipboard-check"></i> Start Survey</button>  
											</div>
										</div>
  

									 </form>
									 <?php loading_image_html(); ?>
										
									 <div id="result" class="text-center"></div>
 

								</div>
								<!-- </div> -->

								<div id="alert"></div>

								<div id="info" style="visibility: hidden;">
									<!-- Success alert --> 
									<div class="alert alert-success alert-dismissible">
									    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
									    <strong>Success!</strong> The survey has been created.
									</div>

									<!--/ Success alert --> 

									<!-- Error alert -->
									<div class="alert alert-danger alert-dismissible">
										<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
										<strong>Error!</strong> Please fill in all blank fields.
									</div>
									<!--/ Error alert -->
								</div>
									

								

							</div>
						</div>	 

						<!-- / create_survey --> 

							 
						 

						</div>
					</div>
				</section>