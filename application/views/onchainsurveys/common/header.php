<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Onchain Surveys</title>

        <base href="<?=base_url();?>">
		<meta name="keywords" content="Onchain Surveys, Blockchain" />
		<meta name="description" content="Onchain Surveys, Blockchain">
		<meta name="author" content="">

        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/onchainsurveys/assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="assets/onchainsurveys/css/styles.css" rel="stylesheet" />
        <link href="assets/onchainsurveys/css/custom.css" rel="stylesheet" />



        <!-- Sweet ALert  -->
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

		<style>
			pre{font-size: 15px;}
			.form_error p {  color: #e41645 ;  margin: 0px; }
			/* anket tablolar */
			#all_surveys tr:hover,#my_survey tr:hover,#user_list tr:hover { cursor: pointer; }
			
			/* survey answering label */
			label.form-check-label:hover {cursor: pointer;}
			/* survey result options, letters */
			.letter{ padding: 5px; }
			.selected-letter{ border: 2px solid red; border-radius: 50px; }
			/* required fields in forms *  */
			label.required:after{color: red;}
			select{
				background: url('assets/onchainsurveys/img/icons/br_down_white.webp') no-repeat 97% #fff;
			}
		</style>

		<style>
			/*header.masthead{ background: url("assets/img/header-bg-2.jpg"); }*/
		</style>

		 <style>
		 	.pages-head{
		 		padding-top: 6em !important;
		 		padding-bottom: 2em !important;
		 	}

		 	/*.page-section{ background: #f4f4f4; }*/

		 	.page-section { padding: 3rem 0; }

		 	a { color: #777; }

		 	.text-primary { color: red !important; }

		 	header.masthead .masthead-heading { font-size: 3.5rem; }

		 	body { background: #252525; color: #777; }

		 	html .bg-color-secondary, html .bg-secondary { background-color: #292929 !important; }
		 	.form-control.bg-secondary, .form-control.bg-color-secondary { color: #FFF; }

		 	html .bg-color-dark, html .bg-dark { background-color: #292929 !important; }
		 </style>


    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img src="assets/onchainsurveys/img/logo/onchaing_survey_logo_white.png" alt="Onchain Surveys" / style="width: 100px; height: auto;"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
  	
  						 

                        <li class="nav-item "><a class="nav-link menu_wallet" href="javascript:" id="menu_wallet" style="padding: 5px 15px;"> <i class="fas fa-wallet"></i>  Connect Wallet</a></li>
                        <li class="nav-item"><a class="nav-link" href="#page-top">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>

                        <li class="dropdown nav-item">
							<a class="nav-link dropdown-toggle" href="javascript:" data-bs-toggle="dropdown" aria-expanded="false" id="survey">Surveys</a>

							<ul class="dropdown-menu" aria-labelledby="survey">
						    	<li><a class="dropdown-item" href="<?=base_url("survey/all#table-list");?>">All Surveys</a></li>
						    	<li><a class="dropdown-item" href="<?=base_url("survey/open#table-list");?>" id="open_survey">Open Surveys</a></li>
						    
							    <?php if(is_login()){?>
							    	<li><a class="dropdown-item" href="<?=base_url("survey/my_surveys#table-list");?>">My Surveys</a></li>
							    <?php } ?>

							    <li><a class="dropdown-item" href="<?=base_url("survey/create#create_survey");?>">Create Survey</a></li>
						  </ul>
						</li>


						<?php if(is_login()){?>

						<li class="dropdown nav-item">
							<a class="nav-link dropdown-toggle" href="javascript:" data-bs-toggle="dropdown" aria-expanded="false" id="profile">Profile</a>
							
							<ul class="dropdown-menu" aria-labelledby="profile">
						    <li><a class="dropdown-item" href="<?=base_url("user#profile");?>"><?php echo $this->session->userdata('user_name'); ?></a></li>
						    <li><a class="dropdown-item" href="<?=base_url("survey/my_surveys#table-list");?>">My Surveys</a></li>
						    <li><a class="dropdown-item" href="<?=base_url('survey/history#table-list');?>">Survey History</a></li>
						  </ul>
						</li>

							<?php if(is_superUser()){?>
								<li class="dropdown nav-item">
									<a class="nav-link dropdown-toggle" href="javascript:" data-bs-toggle="dropdown" aria-expanded="false" id="admin">Admin</a>
									<ul class="dropdown-menu" aria-labelledby="admin">
								    <li><a class="dropdown-item" href="<?=base_url("user/userlist#list_table");?>">User List</a></li>
								    <li><a class="dropdown-item" href="<?=base_url('survey/approve#table-list');?>" id="approve">Approve Surveys</a></li>
								    <li><a class="dropdown-item" href="<?=base_url('survey/rejected#table-list');?>">Rejected Surveys</a></li>
								  </ul>
								</li>

							<?php }?>

							<li class="nav-item"><a class="nav-link" href="<?=base_url("user/logout");?>" id="logout">Logout</a></li>

						<?php }else{?>

							<li class="nav-item"><a class="nav-link" href="<?=base_url("user/login");?>" id="login">Login</a></li>
						<?php } ?> 
 

                         
                    </ul>
                </div>
            </div>
        </nav>







 
  
										 