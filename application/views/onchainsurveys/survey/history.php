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
	      
	    tr:nth-child(odd) {
	      /* background: #ffffff2e; */
	    }
	    
		td,td>span,td>a,td>div{
			/* Behave  like a "row" */
			border: none;
			/* border-bottom: 1px solid #eee; */
			position: relative;
			padding-left: 50%;
		}

		td>span,td>a,td>div,td >i{
			top: -8px;
		}

		td >i {
			border: none;
			/* border-bottom: 1px solid #eee; */
			position: relative;
			padding-left: 6%;
		}

		td::before {
			/* Now like a table header */
			position: absolute;
			/* Top/left values mimic padding */
			top: 0;
			left: 6px;
			width: 45%;
			padding-right: 10px;
			white-space: nowrap;
			text-align: initial;
		}

			/*
			Label the data
	    You could also use a data-* attribute and content for this. That way "bloats" the HTML, this way means you need to keep HTML and CSS in sync. Lea Verou has a clever way to handle with text-shadow.
			*/
			td:nth-of-type(1)::before { content: "Survey No"; }
			td:nth-of-type(2)::before { content: "Survey Name"; }
			td:nth-of-type(3)::before { content: "Created"; }
			td:nth-of-type(4)::before { content: "Start Date - End Date"; }
			td:nth-of-type(5)::before { content: "Participated"; }
			td:nth-of-type(6)::before { content: "Status"; }
			td:nth-of-type(7)::before { content: "Edit"; }
	}
</style>


<!-- Masthead-->
<header class="masthead pages-head">
	<div class="container">
		<div class="masthead-subheading"><?=@$title;?></div>
		<div class="masthead-heading text-uppercase">Onchain Surveys </div>
	</div>
</header>


 
				<section class="custom-cards p-relative mb-5 pb-5 z-index-2">
					<div class="container">
						<div class="row">


						<!-- all_surveys --> 
						
 						<div class="col-lg-12" id="all_surveys2">
							<div class="card border-0 bg-color-dark rounded-0 z-index-1 p-5  table-responsive" data-appear-animation="maskUp" data-appear-animation-delay="100">
								 
								 
								<table class="table table-hover table_link" id="table-list" role="table">
									<thead role="rowgroup">
										<tr role="row">
											<th role="columnheader">
												#
											</th>
											<th role="columnheader">
												Survey Name
											</th>
											<th role="columnheader">
												Created
											</th>
											<th role="columnheader">
												Start Date - End Date
											</th>
 											<th role="columnheader">
												Participated
											</th>
											<!-- <th role="columnheader">
												Type
											</th> -->
											 
											<th role="columnheader">
												Status
											</th>
											<th role="columnheader">
												#
											</th>
										</tr>
									</thead>
									<tbody role="rowgroup">
										  
									<?php foreach ($list as $key => $value) {?>
										 <tr role="row" onclick="go('survey/detail/<?=id_encode($value->survey_id);?>');">
										 		<td role="cell">
													 <span>#<?=$value->survey_id; ?></span>
												</td>
												<td role="cell">
													<a href="survey/detail/<?=$value->survey_id; ?>">
														 <?=$value->title; ?>
													</a>
												</td>
												<td role="cell">
													<span><?=@get_user($value->create_user_id,'user_name')->user_name; ?></span>
												</td>
												<td role="cell">
													<span>
														<?php 
															# start date explode
															$start_date_arr = explode(' ',$value->start_date);
														?> 
	 													<?=$start_date_arr[0];?> 
	 													<span class="surver_time"><?=$start_date_arr[1];?></span> <br>
													</span>
													
													<span>
														<?php 
	 														# end date explode
	 														$end_date_arr = explode(' ',$value->end_date); 
	 													?> 
	 													<?=$end_date_arr[0];?> 
	 													<span class="surver_time"><?=$end_date_arr[1];?></span>  
													</span>
 													

 												</td>

 												<td role="cell">

 													<div>
 														<?php 

 														# şuanki zaman
														$now = date('Y-m-d H:i:s');

 														if(is_participated($value->survey_id)){
 															echo '<i class="fas fa-check btn btn-success btn-sm"></i>';  
 														}else{
 															# end_date büyük ise anktet devam ediyor
															if($value->end_date > $now){
																echo '<button class="btn btn-outline-secondary btn-sm"> Participate </button> ';
															}else{
																//echo '<button class="btn btn-outline-secondary btn-sm">  </button> ';
															}
 
 															
 														}

 													 ?> 
 													</div>
 													
 												</td>

 												<!-- <td role="cell">
 													<?//=$value->type;?>
 												</td> -->
												 
												<td role="cell">

													<div>
														<?php 
														# şuanki zaman
														$now = date('Y-m-d H:i:s');
 														
 														# end_date büyük ise anktet devam ediyor
														if($value->end_date > $now){
															survey_continue_btn();
														}else{
															 survey_end_btn();
														}
													 ?>

													</div>
													
												</td>

												<td role="cell">
													<?php if(is_superUser()){?>
														<a href="survey/survey_edit/<?=$value->survey_id;?>"><button class="btn btn-outline-secondary btn-sm"> <i class="fas fa-edit"></i></button></a>
													<?php } ?>
												</td>
										 </tr>
									<?php } ?>
									</tbody>
								</table>
								
								  

							</div>
						</div>	 

						<!-- / all_surveys --> 

							 

						</div>
					</div>
				</section>