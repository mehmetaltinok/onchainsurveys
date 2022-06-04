<style>
	@media only screen and (max-width:991px){ /* S */
		/* Force table to not be like tables anymore */
		table, thead, tbody, th, td, tr {
			display: block;
		}

		/* Hide table headers (but not display: none;, for accessibility) */
		thead tr {
			position: absolute;
			top: -9999px;
			left: -9999px;
		}

		tbody {
			border: none !important;
		}

	  tr {
	    margin: 0 0 1rem 0;
	    border-bottom: 1px solid white;
	  }
    
	.surveyAbout td:nth-child(even),.surveyAbout td>span,.surveyAbout td>a,.surveyAbout td>div{
		/* Behave  like a "row" */
		border: none;
		/* border-bottom: 1px solid #eee; */
		position: relative;
		top: -27px;
		padding-left: 50%;
	}

	td >i {
		border: none;
		/* border-bottom: 1px solid #eee; */
		position: relative;
		padding-left: 6%;
	}

	ul {
		padding-left: 9px;
	}
}
</style>


<!-- Masthead-->
<header class="masthead pages-head">
	<div class="container">
		<div class="masthead-subheading"><?=@$title;?></div>
		<div class="masthead-heading text-uppercase">Onchain Surveys </div>
	</div>
</header>

 
				<section class="custom-cards p-relative mb-5 pb-5 z-index-2" id="home_allsurveys">
					<div class="container">
						<div class="row">
 
						<!-- survey --> 
						<?php  //pre($item); ?>
						<?php  //pre($list); ?>
 						
 						<div class="col-lg-12" id="all_surveys2">
							<div class="card border-0 bg-color-dark rounded-0 z-index-1 p-5  table-responsive" data-appear-animation="maskUp" data-appear-animation-delay="100">
 
								<div class="d-flex justify-content-end">
									<?php go_back(); ?>
								</div>

								<hr>

								<table class="text-white surveyAbout" role="table">
									<h4>About Survey</h4>
									<tr role="row">
										<td role="cell">Survey Title :</td>
										<td role="cell"><?php echo $item->title; ?></td>
									</tr>
									<tr role="row">
										<td role="cell">Survey Type :</td>
										<td role="cell"><?php echo $item->type; ?></td>
									</tr>
									<tr role="row">
										<td role="cell">Survey Start Date :</td>
										<td role="cell"> <?php echo $item->start_date; ?></td>
									</tr>
									<tr role="row">
										<td role="cell">Survey End Date :</td>
										<td role="cell"><?php echo $item->end_date; ?></td>
									</tr>

									<tr role="row">
										<td role="cell">Approval :</td>
										<td role="cell"><?php echo is_approval_icon($item->is_approved); ?></td>
									</tr>
									
								</table>
								<hr>
								<div id="time" class="text-center" style="font-size: 25px;"></div>
 								 <hr>

								  <table class="table table-hover" role="table">
								  	 <h4>Survey Questions</h4>
									  <?php 
 									  foreach ($list as $key => $value) {  //pre($value);
 									 	$questions_arr = get_question_participate($value->question_id);
 									 	//pre($all_answers);
  									 	
  									 	if($questions_arr){
 									 		$total_vote = count($questions_arr);
 									 	}else{
 									 		$total_vote = 0;
 									 	}
 									 	

 									 	$this_answer = [];
							  	 		foreach ($all_answers as $key_answer => $answer) {
							  	 			 if($answer->question_id == $value->question_id){
 								  	 			$this_answer[] = $answer;
								  	 		}
							  	 		}
							  	 		//pre($this_answer);


 									 	//$answer_arr = get_questions_answer($value->question_id);

									 	//pre($questions_arr);
									   ?>
									  	 <tr role="row">
									  	 	<td style="min-width: 250px;" role="cell">
									  	 		<?=++$key .") ". $value->text;?>
									  	 	</td>
									  	 	<td role="cell">
									  	 		<ul style="list-style-type: none;">
									  	 		<?php 
									  	 			$options_arr =  json_decode($value->options);
									  	 			 // pre($options_arr);
 									  	 			foreach ($options_arr as $key => $option) {
 									  	 				$vote_count = 0;
 									  	 				foreach ($this_answer as $key_sub => $answer_sub) {
 									  	 					if($answer_sub->answer == $key){
 									  	 						$vote_count ++;
 									  	 					}
 									  	 				}


 									  	 				?>
 									  	 				<li> 
 									  	 				<span class="letter <?=@$value->answer == $key ? ' selected-letter': null;?>"><?=$key.' ) ';?></span> 
 									  	 				<?=$option;?>   
 									  	 				-> <?php //echo $vote_count; ?>
 									  	 				<meter value="<?= $vote_count; ?>" min="0" max="<?= $total_vote; ?>">2 out of 10</meter>
 									  	 					<!-- <?php //echo $vote_count > 1 ? ' votes' : ' vote'; ?> -->
 									  	 				  <!-- |   -->
 									  	 				<?php echo ' % '.@number_format((($vote_count / $total_vote)*100), 2, '.', ','); ?>

 									  	 				</li>

 									  	 				<!-- <span><?=$key.' ) ';?></span> <?=$option.'<br>';?> -->
							  	 				
									  	 			<?php } ?>
								  	 			</ul>
									  	 	</td>
									  	 		

									  	 	<td role="cell">
									  	 		Total : <?php echo $total_vote > 1 ? "$total_vote votes" : "$total_vote vote"; ?> 

									  	 		 <?php /*  
									  	 		 	foreach ($all_answers as $key => $answer) {
									  	 		 		 if($answer->question_id == $value->question_id){
									  	 		 		 	pre($answer);
									  	 		 		 }
									  	 		 		 
									  	 		 	} */ 

									  	 		  ?>
									  	 	</td>
									  	 </tr>
									  <?php } ?>

								  </table>


								  

							</div>
						</div>	 

						<!-- /  surveys --> 

							 
						 

						</div>
					</div>
				</section>



				

<script>
// Set the date we're counting down to
//var countDownDate = new Date("Jan 5, 2024 15:37:25").getTime();
var countDownDate = new Date("<?=$item->end_date;?>").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("time").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("time").innerHTML = "EXPIRED";
    //alert('EXPIRED');
    // window.location="survey";
  }
}, 1000);
</script>