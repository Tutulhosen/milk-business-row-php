		<?php include('include/header.php'); ?>

<nav class="main-nav">
									<ul class="menu active-underline">
										<li>
											<a href="index.php">Home</a>
										</li>
										<li>
											<a  href="shop.php">Shop</a>

								  </li>
										<li >
											<a href="about-us.php">About Us</a>
										   
										</li>
										
										<li>
											<a href="blog.php">Blog</a>
											
										</li>
										 <li>
                                        <a href="gallery.php">Gallery</a>
                                                
                                       </li>
										
										<li class="">
											<a href="blog.php">FAQ</a>
											
										</li>
										<li class="active">
											<a href="inquiry">Inquiry</a>
											
										</li>
											<li >
											<a href="contact.php">Contact Us</a>
										   
										</li>
										
										
									</ul>
								</nav>
							</div>
							<!--<div class="header-right">
								<a href="#" class="d-xl-show"><i class="w-icon-map-marker mr-1"></i>Track Order</a>
								<a href="#"><i class="w-icon-sale"></i>Daily Deals</a>
							</div>-->
								<?php include('include/headerright.php'); 	?>		
						</div>
					</div>
				</div>
			</header>
			<!-- End of Header -->
			

	</div>
				</div>
        <!-- Start of Main -->
        <main class="main">
            <!-- Start of Page Header-->
                    <div class="page-header"style="height: 11rem !important;margin-top:10px !important;background-color:#F1F1F1 !important">
                <div class="container">
                    <h1 class="page-title mb-0">Inquiry</h1>
                </div>
             <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
              
				
                <!-- End Map Section -->
			
			
			</div>
            <!-- End of Page Header -->

            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav mb-10 pb-1">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">  <strong>Inquiry</strong> </li>
                    </ul>
                </div>
            </nav>
         
            <!-- Start of PageContent -->
            <div class="page-content contact-us  ">
                <div class="container">
                  		<?php 
														if(isset($_GET['product_id'])){
		if(isset($_GET['product_id'])){
			 $search_post_id = $_GET['product_id'];
			$post_select = mysqli_query($con,"SELECT * FROM furniture_product WHERE pid='$search_post_id'");
			$post_part = mysqli_fetch_array($post_select);
			 
		
			  $product_name = $post_part['title'];
			 $product_img = $post_part['image'];
			$title = $post_part['detail'];						
		?>
		<div class="container">
			<div class="custom-container"style="width:60%;margin:auto;">
     <div class="store store-list mt-4">
                        <div class="store-header">
                            <a href="product-detail?product_id=<?php echo $search_post_id ;?>">
                                <figure class="store-banner">
                                     <img src="assets/images/chat.jpg" alt="Vendor" width="400" height="200 px" style="background-color: #40475E">
                                
                                </figure>
                            </a>
                            <label class="featured-label"></label>
                        </div>
                        <!-- End of Store Header -->
                        <div class="store-content">
                            <figure class="seller-brand">
                                <img src="img/<?php echo  $product_img?>" alt="Brand" width="80" height="80">
                            </figure>
                            <div class="seller-date">
                                <h4 class="store-title">
                                    <a href="product-detail?product_id=<?php echo $search_post_id ;?>"><?php echo $product_name; ?></a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 100%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                </div>
                                <div class="store-address">
                                
								  
								  <?php $str = $title;
					echo substr($str, 0, 120).'';?>
								 
                                </div>
                                <a href="product-detail?product_id=<?php echo $search_post_id ;?>" class="btn btn-dark btn-link btn-underline btn-icon-right btn-visit">
                                    Visit Product Page<i class="w-icon-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <!-- End of Store Content -->
                    </div></div></div>
<?php  	}}?>
                   

													<section class="contact-section">
														<div class="row gutter-lg pb-3">
														
														
														<div class="container">
														
														
														
														
														
														
														
														
														
														
														
														
														
																							
														
														
														
														
														
															<div class="col-lg-12 mb-8">
														<div class="title-link-wrapper pb-1 mb-4">
                        <h2 class="title ls-normal mb-0 "style="color:#8F93A1;">
						
						
						Online Inquiry</h2>
                       
					   
                    </div>
					<p style="display: none;" id="mgs"></p>
					<form method="post" action="" id="inquiryform">  
								  <div class="form-group row">
									<label  for="inputEmail3" class="col-sm-2 col-form-label"style="font-size:22px;color:#8F93A1;">Name <span class="text-danger">*</span> </label>
									<div class="col-sm-10 col-12">
									  <input type="text" class="form-control" name="name" id="name" placeholder="Required"required>
									  <h5 id="usercheck"
										style="color: red;display:none;">
										*Username is missing
									</h5>
									</div>
								  </div>
								  <div class="form-group row">
									<label  for="inputEmail3" class="col-sm-2 col-form-label"style="font-size:22px;color:#8F93A1;">Company <span class="text-danger"></span> </label>
									<div class="col-sm-10 col-12">
									  <input type="text" class="form-control" name="company" id="company" placeholder="Optional">
									</div>
								  </div>
								  <div class="form-group row">
									<label  for="inputEmail3" class="col-sm-2 col-form-label"style="font-size:22px;color:#8F93A1;">Telephone <span class="text-danger"></span> </label>
									<div class="col-sm-10 col-12">
									  <input type="tel" class="form-control" name="phone" id="phone" placeholder="Optional">
									</div>
								  </div> 
								  <div class="form-group row">
									<label  for="inputEmail3" class="col-sm-2 col-form-label"style="font-size:22px;color:#8F93A1;">Email <span class="text-danger">*</span> </label>
									<div class="col-sm-10 col-12">
									  <input type="email" class="form-control" name="email" id="email" placeholder="Required"required>
									  <h5 id="usercheckemail"
										style="color: red;display:none;">
										*email is missing
									</h5>
									</div>
									
									

									<small id="emailvalid"
									class="form-text text-muted invalid-feedback">
									Your email must be a valid email
									</small>
								  </div>
								  <div class="form-group row">
									<label  for="inputEmail3" class="col-sm-2 col-form-label"style="font-size:22px;color:#8F93A1;">Website <span class="text-danger"></span> </label>
									<div class="col-sm-10 col-12">
									  <input type="url" name="site" class="form-control" id="site" placeholder="Optional">
									</div>
								  </div>
								    <div class="form-group row">
									<label  for="inputEmail3" class="col-sm-2 col-form-label"style="font-size:22px;color:#8F93A1;">Inquiry <span class="text-danger">*</span> </label>
									<div class="col-sm-10 col-12">

											<input type="hidden" name="pname" id="productname" value="<?php echo $search_post_id; ?> ">
											<textarea rows="14" class="form-control" name="view" id="view"  placeholder="" required > </textarea>
										
											
										

</textarea>
<h5 id="usercheckview"
										style="color: red; display:none;">
										*Inquiry is missing
									</h5>
											
									</div>
								  </div>
								 
								
								 
								  <div class="form-group row">
								  <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
									<div class="col-sm-10">
									  <button type="button" name="submit_inquery" id="inquory_btn" class="btn btn-secondary btn-sm mt-3">Send</button>
									  
									  
									    <div id="loadingOverlay" style="  position: relative;">
													<div class="spinner">


													</div>
												</div>
												<div id="content" class="hidden">
													<!-- Your content goes here -->
												
										</div>
									  
									  <div class=" alert-simple alert-inline show-code-action" id="msgalert" style="margin-top:10px">
                                  
                                </div>
									</div>
								  </div>
								</form>
								<?php
							
								?>
	
								<?php 
										
										if ($_SERVER["REQUEST_METHOD"] == "POST") {
											echo $name = $_POST["name"];
											echo	$company = $_POST["company"];
											echo	$phone = $_POST["phone"];
											echo    $email = $_POST["email"];
											echo	$site = $_POST["site"];
											echo	$view = $_POST["view"];

										  }
										  
										
										  ?>
										  
									
										
										
										
										

							</div>
                        </div>
					
				
					
						
						</div>
						
						
                    </section>
                    <!-- End of Contact Section -->
					  <hr class="divider mb-10 pb-1">
                </div>

               
            </div>
            <!-- End of PageContent -->
        </main>
        <!-- End of Main -->

<?php include('include/footer.php'); 
 ?>


<script>
	$(document).ready(function(){
		$(document).on('click', '#inquory_btn', function(){
			let name= $('#name').val();
			let company= $('#company').val();
			let phone= $('#phone').val();
			let email= $('#email').val();
			let site= $('#site').val();
			let view= $('#view').val();
			let productname= $('#productname').val();
			let inquory_btn= $('#inquory_btn').val();

			if (name === '') {
				$("#usercheck").show();
               
             
            }else{
				$("#usercheck").hide();
				
			}
			if (email === '') {
				$("#usercheckemail").show();
				
              
            }else{
				$("#usercheckemail").hide();
				
			}
			if (view === '') {
				$("#usercheckview").show();
				return;
               
            }else{
				$("#usercheckview").hide();
				
			}
			
			
			
			$.ajax({
				type:"post",
				url:"mail",
				data:{
					name:name,
					company:company,
					phone:phone,
					email:email,
					site:site,
					view:view,
					productname:productname,
					inquory_btn:inquory_btn,


				},
			
				success:function(res){
					console.log(res);
				
					$('#msgalert').html('  <h4 class="alert-title alert alert-success">Well done!</h4> Message sent successfully.');
					 $('#inquiryform')[0].reset();
					
				}
				
			});
		});
	});
</script>