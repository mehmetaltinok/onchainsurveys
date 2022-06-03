<!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Onchain Surveys 2022</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>



<!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="assets/onchainsurveys/js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script> -->

 
		 
		<!-- Survey Form -->
		<script src="assets/onchainsurveys/js/form.js?v=23_04_22_<?=rand(1,1000);?>"></script>


		<script>
			
			function ajaxReq() {
			    if (window.XMLHttpRequest) {
			        return new XMLHttpRequest();
			    } else if (window.ActiveXObject) {
			        return new ActiveXObject("Microsoft.XMLHTTP");
			    } else {
			        alert("Browser does not support XMLHTTP.");
			        return false;
			    }
			}


			function error_show(resultItem,id){
				if(resultItem != ""){
	       			document.getElementById(id).innerHTML=resultItem;
	       		}
			}

			function go($url=false){
				window.location = $url;
			}
		

		</script>
 