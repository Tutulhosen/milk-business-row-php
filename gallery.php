		<?php include('include/header.php'); ?>

	<!--for galllery-start-->
	
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="css/gallery-grid.css">
    
	<!--for galllery-end-->

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
										</li>
											<li class="active">
											<a href="gallery.php">Gallery</a>
										   
										</li>
										<li class="">
											<a href="faq.php">FAQ</a>
											
										</li>
										<li >
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
                    <h1 class="page-title mb-0">Gallery</h1>
                </div>
             <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
              
				
                <!-- End Map Section -->
			
			
			</div>
            <!-- End of Page Header -->

            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav mb-2 pb-1">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">  <strong>Gallery</strong> </li>
                    </ul>
                </div>
            </nav>
			<div class="container gallery-container" style="margin-bottom: 76px;">

<h1 style="">Gallery</h1>



<div class="tz-gallery">

	<div class="row">
		<div class="col-sm-6 col-md-4">
			<a class="lightbox" href="assets/images/gallery/img1.jpg">
				<img src="assets/images/gallery/img1.jpg" alt="Park">
			</a>
		</div>
		
		<div class="col-sm-12 col-md-4">
			<a class="lightbox" href="assets/images/gallery/img3.jpg">
				<img src="assets/images/gallery/img3.jpg" alt="Tunnel">
			</a>
		</div>
	
		<div class="col-sm-6 col-md-4">
			<a class="lightbox" href="assets/images/gallery/img7.jpg">
				<img src="assets/images/gallery/img7.jpg" alt="Traffic">
			</a>
		</div>
	

		
		<!--video-col-start-->		
		<div class="banner banner-video br-xs col-sm-6 col-md-4">
			<a class="lightbox btn-iframe" href="assets/video/IMG_0_1.mp4">
				<img src="assets/images/gallery/basket making.jpg" alt="Sky">
				
			</a>
			<a class="btn-play-video btn-iframe" href="assets/video/IMG_0_1.mp4"></a>
		</div>
		<!--video-col-end-->
		
		<!--video-col-start-->		
		<div class="banner banner-video br-xs col-sm-6 col-md-4">
			<a class="lightbox btn-iframe" href="assets/video/IMG_0.mp4">
				<img src="assets/images/gallery/ready basket.jpg" alt="Sky">
				
			</a>
			<a class="btn-play-video btn-iframe" href="assets/video/IMG_0.mp4"></a>
		</div>
		<!--video-col-end-->
				<!--video-col-start-->		
		<div class="banner banner-video br-xs col-sm-6 col-md-4">
			<a class="lightbox btn-iframe" href="assets/video/IMG_0_2.mp4">
				<img src="assets/images/gallery/jute weaving.jpg" alt="Sky">
				
			</a>
			<a class="btn-play-video btn-iframe" href="assets/video/IMG_0_2.mp4"></a>
		</div>
		<!--video-col-end-->
						<!--video-col-start-->		
		<div class="banner banner-video br-xs col-sm-6 col-md-4">
			<a class="lightbox btn-iframe" href="assets/video/IMG_0_3.mp4">
				<img src="assets/images/gallery/basket making from sea grass.jpg" alt="Sky">
				
			</a>
			<a class="btn-play-video btn-iframe" href="assets/video/IMG_0_3.mp4"></a>
		</div>
		<!--video-col-end-->
		
		
		
	</div>
	
</div>

</div>



												
        <!-- End of Main -->

<?php include('include/footer.php'); 
 ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>