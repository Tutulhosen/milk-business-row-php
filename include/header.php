
<?php include('include/dbcon.php'); 

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Handicrafts - Marketplace </title>

    <meta name="keywords" content="Marketplace ecommerce responsive HTML5 Template" />
    <meta name="description"
        content="Wolmart is powerful marketplace &amp; ecommerce responsive Html5 Template.">
    <meta name="author" content="D-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/images/neo-bazar.png">

    <!-- WebFont.js -->
    <script>
        WebFontConfig = {
            google: { families: ['Poppins:400,500,600,700,800'] }
        };
        (function (d) {
            var wf = d.createElement('script'), s = d.scripts[0];
            wf.src = 'assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>

	
	  <!-- Main JS -->
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <link rel="preload" href="assets/vendor/fontawesome-free/webfonts/fa-regular-400.woff2" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="assets/vendor/fontawesome-free/webfonts/fa-solid-900.woff2" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="assets/vendor/fontawesome-free/webfonts/fa-brands-400.woff2" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="assets/fonts/wolmart87d5.woff?png09e" as="font" type="font/woff" crossorigin="anonymous">
    <!-- Vendor CSS -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/magnific-popup/magnific-popup.min.css">
	<!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="assets/vendor/swiper/swiper-bundle.min.css">
    <!-- Default CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/demo1.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

		<style>
		
		#loadingOverlay {
    display: none;
    position: fixed;
	top: -29px;
  	left: -33px;
    background: rgba(0, 0, 0, 0.5);
    z-index: 9999;
    text-align: center;
}

.spinner {
    position: absolute;
    top: 0%;
    left: 15%;
    border: 5px solid #f3f3f3;
    border-top: 5px solid #3498db;
    border-radius: 50%;
    width: 40px;
    height:  40px;
    animation: spin 2s linear infinite;
}

.hidden {
    display: none;
}


@keyframes spin {
    0% { transform: translate(-50%, -50%) rotate(0deg); }
    100% { transform: translate(-50%, -50%) rotate(360deg); }
		
		
		
		
		
		
		
		
		
    /* Make the image fully responsive */
    .carousel-inner img {
      width: 100%;
      height: 100%;
	  background-size: cover;
    }
	.carousel-inner{
		height: 400px;	
	}
	.breadcrumb{
		background-color: #fff !important;	
	}
	a:hover {
  color: #0056b3;
  text-decoration: none;
  
  .btn-outline:hover {
  color: #red !important;

  }
  .active{
	  
	  
	  color: #fff;
  background-color: #4285f4;
  border-radius: .125rem;
  transition: all .2s linear;
  }



.swiper-pagination-bullet {
	width: 12px;
	height: 12px;}
  
    </style>
</head>
<body id="body"class="">
	<div class="page-wrapper">
	<!--alert-->
	
	
	<?php  
	


	 if(isset($_GET['result'])=='success'){
	?>
	<div class="row">
		
					<div class="col-4">
					
					</div>
					<div class="col-4">
					
					</div>
					<div class="col-4">
					<div class="custom-container"style="width:50%;margin:auto;">
						<div class="alert alert-icon alert-warning alert-bg alert-inline show-code-action"style="position: absolute !important;
		margin-left: 170px!important;
		margin-top: 44px!important;color: #fd1717;">
											<h4 class="alert-title">
												<i class="w-icon-exclamation-triangle"></i>Warning: Success!
												
												
												</h4>
											 
						</div>
						</div>	
					</div>
						
					
					
	</div>
	<?php } ?>
	
		<!--alert-->
	
	
	
	
	
	
	
	
	
			<h1 class="d-none">Handicrufts - Responsive Marketplace</h1>
			<!-- Start of Header -->
			<header class="header">
			  
				<!-- End of Header Top -->

				<div class="header-middle">
					<div class="container">
						<div class="header-left mr-md-4">
							<a href="#" class="mobile-menu-toggle  w-icon-hamburger" aria-label="menu-toggle">
							</a>
							<a href="index.php" class="logo ml-lg-0">
								<img src="assets/images/BD-Handicrafts-Logo-130923.png" alt="logo" width="190px" height="190px" />
							</a>
							<form method="POST" action=""
								class="header-search hs-expanded hs-round d-none d-md-flex input-wrapper">
								<div class="select-box">
									<select id="category" name="category">
										<option value="">All Categories</option>
										<?php
										 $cat_query = "SELECT * FROM categories ORDER BY id desc";
					   $cat_run   = mysqli_query($con,$cat_query);
						if(mysqli_num_rows($cat_run) > 0){
						While($cat_row = mysqli_fetch_array($cat_run)){
							$cid      = $cat_row['id'];
							$cat_name = ($cat_row['category']);
							$font     = $cat_row['fontawesome-icon'];

										?>

										<option value="4"><?php echo $cat_name; ?>
										<a href="home.php"></a>
										</option>	
						<?php } }?>
									</select>
								</div>
								<input id="search" autocomplete="off" name="name" type="text" class="form-control" placeholder="Search in..."
									 />
									  
							<button class="btn btn-search" type="submit"><i class="w-icon-search"></i>

								<div id="showresult">



								</div>
								<div class="search-box col-12" id="searchBox" style="  display:none;
  position: absolute !important;
top: 100%!important;
left: 00px;
max-height: 300px;
border: 1px solid #dee2e6!important;
width: 100%!important;
background: white!important;
z-index: 99999!important;
overflow-y: auto!important;
overflow-x: hidden!important;
-webkit-box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.05)!important;
box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.05)!important;
-ms-overflow-style: none!important;
scrollbar-width: none!important;
overflow-y: scroll!important; display:none;">
				<div class="row" id="serch_item">
		
				</div>


								</button> 
								 
							</form>
						</div>
						
						<!--<form action=""method="post">
    <input id="getName" type="text" name="munna" class="form-control"style=" padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 100%;
  background: #f1f1f1;" />
   </form>

   <table class="table table-striped">
       
	   <tbody id="showdata">
	   
	   </tbody>-->
   </table>
							
						<div class="header-right ml-4">
							<div class="header-call d-xs-show d-lg-flex align-items-center">
								<a  class="w-icon-call"></a>
								<div class="call-info d-lg-show">
									<h4 class="chat font-weight-normal font-size-md text-normal ls-normal text-light mb-0">
										<a class="text-capitalize">Support Center</a> or :</h4>
									<a  class="phone-number font-weight-bolder ls-50">(+880)185-9893939</a>
								</div>
							</div>
							<!--<a class="wishlist label-down link d-xs-show" href="wishlist.html">
								<i class="w-icon-heart"></i>
								<span class="wishlist-label d-lg-show">Wishlist</span>
							</a>
							<a class="compare label-down link d-xs-show" href="compare.html">
								<i class="w-icon-compare"></i>
								<span class="compare-label d-lg-show">Compare</span>
							</a>-->
						
								
								
								
							<!-- <a class="compare label-down link d-xs-show login sign-in" href="assets/ajax/login.php">
								<i class="w-icon-account d-lg-show login "></i>
								<span class="compare-label d-lg-show">Account</span>
							</a> -->
							<!--<div class="dropdown cart-dropdown cart-offcanvas mr-0 mr-lg-2">
	
							<div class="cart-overlay"></div>

								<a href="#" class="cart-toggle label-down link">
									<i class="w-icon-cart">
										<span class="cart-count">2</span>
									</i>
									<span class="cart-label">Cart</span>
								</a>
								<div class="dropdown-box">
									<div class="cart-header">
										<span>Shopping Cart</span>
										<a href="#" class="btn-close">Close<i class="w-icon-long-arrow-right"></i></a>
									</div>

									<div class="products">
										<div class="product product-cart">
											<div class="product-detail">
												<a href="product-default.html" class="product-name">Beige knitted
													elas<br>tic
													runner shoes</a>
												<div class="price-box">
													<span class="product-quantity">1</span>
													<span class="product-price">$25.68</span>
												</div>
											</div>
											<figure class="product-media">
												<a href="product-default.html">
													<img src="assets/images/cart/product-1.jpg" alt="product" height="84"
														width="94" />
												</a>
											</figure>
											<button class="btn btn-link btn-close" aria-label="button">
												<i class="fas fa-times"></i>
											</button>
										</div>

										<div class="product product-cart">
											<div class="product-detail">
												<a href="product-default.html" class="product-name">Blue utility
													pina<br>fore
													denim dress</a>
												<div class="price-box">
													<span class="product-quantity">1</span>
													<span class="product-price">$32.99</span>
												</div>
											</div>
											<figure class="product-media">
												<a href="product-default.html">
													<img src="assets/images/cart/product-2.jpg" alt="product" width="84"
														height="94" />
												</a>
											</figure>
											<button class="btn btn-link btn-close" aria-label="button">
												<i class="fas fa-times"></i>
											</button>
										</div>
									</div>

									<div class="cart-total">
										<label>Subtotal:</label>
										<span class="price">$58.67</span>
									</div>

									<div class="cart-action">
										<a href="cart.html" class="btn btn-dark btn-outline btn-rounded">View Cart</a>
										<a href="checkout.html" class="btn btn-primary  btn-rounded">Checkout</a>
									</div>
									
								</div>
								
								
							</div> --><!-- End of Dropdown Box -->
							
							
						</div>
						
					</div>
				</div>
				
				<tbody id="showdata">
        
						</tbody>
				
				
				<!-- End of Header Middle -->
				<div class="header-bottom sticky-content fix-top sticky-header has-dropdown">
					<div class="container">
						<div class="inner-wrap">
							<div class="header-left">
								<div class="dropdown category-dropdown has-border" data-visible="true">
									<a href="#" class="category-toggle text-dark" role="button" data-toggle="dropdown"
										aria-haspopup="true" aria-expanded="true" data-display="static"
										title="Browse Categories">
										<i class="w-icon-category"></i>
										<span>Browse Categories</span>
									</a>
									<div class="dropdown-box">
										<ul class="menu vertical-menu category-menu">
			 <?php   $cat_query = "SELECT * FROM categories ORDER BY id desc";
					   $cat_run   = mysqli_query($con,$cat_query);
						if(mysqli_num_rows($cat_run) > 0){
						  While($cat_row = mysqli_fetch_array($cat_run)){
							$cid      = $cat_row['id'];
							$cat_name = ($cat_row['category']);
							$font     = $cat_row['fontawesome-icon'];

					   ?>
											<li>
												<a href="product.php?cat_id= <?php echo $cid ?>">
												
												
													<i class="<?php echo $font; ?></i><?php echo $cat_name ?>
												</a>
												
												</li>
																							
												<?php } ?>
											<?php 
											
											}
						else{?>
	 <li>
												<a href="#"
													class="font-weight-bold text-primary text-uppercase ls-25">
													No Categories<i class="w-icon-angle-right"></i>
												</a>
											</li>
					<?php     }
																
											?>
											
											
										</ul>
									</div>
								</div>
								



								<script>
  $(document).ready(function(){
	
		$("#search").click(function(){
			$("#searchBox").fadeToggle(500);
		});
	
		







   $('#search').on("keyup", function(){

	var search = $(this).val();

	
    
     $.ajax({
       method:'POST',
       url:'ajax_new',
       data:{catch:search},
	
       success:function(response)
       {
		
            $("#serch_item").empty();
            $("#serch_item").html(response);
			
       } 
     });
   });
  });
</script>









