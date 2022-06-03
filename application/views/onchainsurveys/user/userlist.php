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
		td:nth-of-type(1)::before { content: "User No"; }
		td:nth-of-type(2)::before { content: "Username"; }
		td:nth-of-type(3)::before { content: "First Name"; }
		td:nth-of-type(4)::before { content: "Last Name"; }
		td:nth-of-type(5)::before { content: "Email"; }
		td:nth-of-type(6)::before { content: "Country"; }
		td:nth-of-type(7)::before { content: "Status"; }
		td:nth-of-type(8)::before { content: "Rank"; }
		td:nth-of-type(9)::before { content: "User Surveys"; }
		td:nth-of-type(10)::before { content: "Edit"; }
	}
</style>

 <!-- Masthead-->
        <header class="masthead pages-head">
            <div class="container">
                <div class="masthead-subheading">User List</div>
                <div class="masthead-heading text-uppercase">Onchain Surveys </div>
             </div>
        </header>





				<section class="custom-cards p-relative mb-5 pb-5 z-index-2">
					<div class="container">
						<div class="row">


						<!--   --> 
						
 						<div class="col-lg-12" id="user_list">
							<div class="card border-0 bg-color-dark rounded-0 z-index-1 p-5  table-responsive" data-appear-animation="maskUp" data-appear-animation-delay="100">
								 
								 
								<table class="table table-hover table_link" id="list_table" role="table" >
									<thead role="rowgroup">
										<tr role="row">
											<th role="columnheader">
												#
											</th>
											<th role="columnheader">
												Username
											</th>
											<th role="columnheader">
												First Name
											</th>
											<th role="columnheader">
												Last Name
											</th>
											<th role="columnheader">
												Email
											</th>
 											<th role="columnheader">
												Country
											</th>
											<th role="columnheader">
												Status
											</th>
											<th role="columnheader">
												Rank
											</th>
											<th role="columnheader">
												User Surveys
											</th>
											<th role="columnheader">
												#Edit
											</th>
										</tr>
									</thead>
									<tbody role="rowgroup">
										  
									<?php foreach ($list as $key => $value) {
										$user = @get_user($value->id,'user_name'); ?>
										<tr role="row" onclick="go('user/detail/<?=id_encode($value->id);?>');">
									 		<td role="cell">
												 <span>#<?=$value->id;?></span>
											</td>
											<td role="cell">
												<a href="user/detail/<?=id_encode($value->id); ?>">
													<?=@$user->user_name; ?>
												</a>
											</td>
											<td role="cell">
												<span><?=@$user->name;?></span>
											</td>
											<td role="cell">
													<span><?=@$user->surname;?></span>
											</td>
											<td role="cell">
												 <span><?=@$user->email;?></span>
											</td>
											<td role="cell">	
												 <span><?=@$user->country;?></span>
											</td>
											<td role="cell" class="text-center">	
 												<span><?php is_active_icon(@$user->is_active); ?></span> 
											</td>
											<td role="cell" class="text-center">
												<span><?=@$user->rank;?></span>
											</td>
											<td role="cell">
												<div class="text-center">
													<a href="survey/all/<?=id_encode($value->id);?>">
													<button class="btn btn-outline-secondary btn-sm">Surveys</button>
												</a>
												</div>
												
											</td>

											<td role="cell">
												<div class="text-center">
													<?php if(is_superUser()){?>
													<a href="user/edit/<?=id_encode($value->id);?>"><button class="btn btn-outline-secondary btn-sm"> <i class="fas fa-edit"></i></button></a>
												<?php } ?>
												</div>
												
											</td>
										 </tr>
									<?php } ?>
									</tbody>
								</table>
								 
							</div>
						</div>	 

						<!-- /   --> 
 
						</div>
					</div>
				</section>