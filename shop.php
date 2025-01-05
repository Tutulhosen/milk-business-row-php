<?php include('include/header.php');


/*   if(isset($_GET['page'])){
    $page_id = $_GET['page'];
   }
   else{
    $page_id = 1;
  }

  $required_pro = 12;

  $query = "SELECT * FROM furniture_product Where status = 'publish' ORDER BY pid";
  $run   = mysqli_query($con,$query);
  $count_rows = mysqli_num_rows($run);

  $pages = ceil($count_rows / $required_pro);
  $product_start = ($page_id - 1) * $required_pro;  


  if(isset($_SESSION['id'])){
    $custid = $_SESSION['id'];
  
    if(isset($_GET['cart_id'])){
      $p_id = $_GET['cart_id'];
  
      $sel_cart = "SELECT * FROM cart WHERE cust_id = $custid and product_id = $p_id ";
      $run_cart    = mysqli_query($con,$sel_cart);
    
      if(mysqli_num_rows($run_cart) == 0){
        $cart_query = "INSERT INTO `cart`(`cust_id`, `product_id`,quantity) VALUES ($custid,$p_id,1)";    
        if(mysqli_query($con,$cart_query)){
          header("location:product.php");
        }
      }
     if(mysqli_num_rows($run_cart) > 0){
        while($row = mysqli_fetch_array($run_cart)){
          $exist_pro_id = $row['product_id'];
            if($p_id == $exist_pro_id){
             $error="<script>alert('⚠️ This product is already in your cart  '); </script>";
            }
          }
        }


      }
    }
    else if(!isset($_SESSION['email'])){
     echo "<script> function a(){alert('⚠️ Login is required to add this product into cart');}</script>";
    } */
   

?>




	<nav class="main-nav">
									<ul class="menu active-underline">
										<li>
											<a href="index.php">Home</a>
										</li>
										<li class="active">
											<a  href="shop.php">Shop</a>

								  </li>
										<li>
											<a href="about-us.php">About Us</a>
										   
										</li>
										
										<li>
											<a href="blog.php">Blog</a>
											
										</li>
										 <li>
                                        <a href="gallery.php">Gallery</a>
                                                
                                       </li>
										<li >
											<a href="faq">FAQ</a>
											
										</li>
										<li >
											<a href="inquiry">Inquiry</a>
											
										</li>
                                        <li>
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
          <nav class="breadcrumb-nav">
                <div class="container">
                    <ul class="breadcrumb bb-no">
                        <li><a href="index.php">Home</a></li>
                        <li class="active"> <strong>Shop</strong> </li>
                    </ul>
                </div>
            </nav>
              <!-- End of Breadcrumb -->

            <!-- Start of Page Content -->
            <div class="page-content mb-10">
                <div class="container">
                    <!-- Start of Shop Banner -->
                    <div class="shop-default-banner banner  align-items-center mb-5 "
                        style="background-image: url(assets/images/shop/Shop-Banner-5.jpg);
  background-size:cover;padding:18.4em 8.7em 7.6em !important;border: 2px solid #F1F1F1 !important;">
                        <div class="ml-5 pl-5">
                            
                          <!--  <a href="shop.php" style="margin-left:300px; margin-top:20px;"class="btn btn-dark btn-rounded btn-icon-right">Discover
                                Now<i class="w-icon-long-arrow-right"></i></a>-->

                        </div>
                    </div>
                    <!-- End of Shop Banner -->

                    <!-- End of Shop Brands-->

                    <!-- Start of Shop Category -->
                    <div class="shop-default-category category-ellipse-section mb-6">
                        <div class="swiper-container swiper-theme shadow-swiper"
                            data-swiper-options="{
                            'spaceBetween': 20,
                            'slidesPerView': 2,
                            'breakpoints': {
                                '480': {
                                    'slidesPerView': 3
                                },
                                '576': {
                                    'slidesPerView': 4
                                },
                                '768': {
                                    'slidesPerView': 6
                                },
                                '992': {
                                    'slidesPerView': 7
                                },
                                '1200': {
                                    'slidesPerView': 8,
                                    'spaceBetween': 30
                                }
                            }
                        }">
						
																		
								
		
<div class="container">

<!-- End of Tab -->
    <div class="tab-content product-wrapper appear-animate">


<div class="custom-container" style="width:85%; margin:auto;">

<div class="shop-default-category category-ellipse-section mb-6">





            <div class="swiper-container swiper-theme shadow-swiper"
                data-swiper-options="{
                'spaceBetween': 20,
                'slidesPerView': 2,
                'breakpoints': {
                    '480': {
                        'slidesPerView': 3
                    },
                    '576': {
                        'slidesPerView': 4
                    },
                    '768': {
                        'slidesPerView': 6
                    },
                    '992': {
                        'slidesPerView': 7
                    },
                    '1200': {
                        'slidesPerView': 8,
                        'spaceBetween': 30
                    }
                }
            }">
            
                                                            
                    
                                    
            
            <!--category---start-here-->
                <div class="swiper-wrapper row gutter-lg cols-xl-8 cols-lg-7 cols-md-6 cols-sm-4 cols-xs-3 cols-2" style="width:100%;
margin: auto;">
                 
                    <?php
                                    
                                    
$pcdetail_query = "SELECT * FROM categories order by id Desc";
$pcdetail_run   = mysqli_query($con,$pcdetail_query);

if(mysqli_num_rows($pcdetail_run) > 0){
    
    
    while($pcdetail_row = mysqli_fetch_array($pcdetail_run)){
  
    $category_name = $pcdetail_row['category'];
    $category_id = $pcdetail_row['id'];

 $category_tmnl_image = $pcdetail_row['tmnl_image'];




?>

                    
                    <div class="swiper-slide category-wrap"style="text-align:center">
                        <div class="category category-ellipse">
                            <figure class="category-media">
                                <a href="product.php?cat_id=<?php echo $category_id;  ?>">
                                    <img src="admin/img/category/<?php echo $category_tmnl_image;  ?>" alt="Categroy"
                                        width="190" height="190" style="background-color: #5C92C0;" />
                                </a>
                            </figure>
                            <div class="category-content">
                                <h4 class="category-name">
                                    <a href="product.php?cat_id=<?php echo $category_id;  ?>"><?php	echo $category_name;		?>	</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                   <?php  }}?>
                </div>
                
    
                <!--category---start-here-->
                <div class="swiper-pagination" style="margin-top:28px"></div>

                 <!-- Left and right controls -->


            </div>
        </div>
        
        
        
        
        
        </div>
        
        
                    <!-- End of Shop Category -->

                    <!-- Start of Shop Content -->
                    <div class="shop-content">
                        <!-- Start of Shop Main Content -->
                        <div class="main-content">
                            <nav class="toolbox sticky-toolbox sticky-content fix-top">
                                <div class="toolbox-left">
                                    <a href="#" class="btn btn-primary btn-outline btn-rounded left-sidebar-toggle 
                                        btn-icon-left"><i class="w-icon-category"></i><span>Filters</span></a>
                                    <div class="toolbox-item toolbox-sort select-box text-dark">
                                        <label>Sort By :</label>
                                        <select name="orderby" class="form-control">
                                            <option value="default" selected="selected">Default sorting</option>
                                            <option value="popularity">Sort by popularity</option>
                                            <option value="rating">Sort by average rating</option>
                                            <option value="date">Sort by latest</option>
                                            <option value="price-low">Sort by pric: low to high</option>
                                            <option value="price-high">Sort by price: high to low</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="toolbox-right">
                                    <div class="toolbox-item toolbox-show select-box">
                                        <select name="count" class="form-control">
                                            <option value="9">Show 9</option>
                                            <option value="12" selected="selected">Show 12</option>
                                            <option value="24">Show 24</option>
                                            <option value="36">Show 36</option>
                                        </select>
                                    </div>
                                    <div class="toolbox-item toolbox-layout">
                                        <a href="shop-fullwidth-banner.html" class="icon-mode-grid btn-layout active">
                                            <i class="w-icon-grid"></i>
                                        </a>
                                        <a href="shop-list.html" class="icon-mode-list btn-layout">
                                            <i class="w-icon-list"></i>
                                        </a>
                                    </div>
                                </div>
                            </nav>
                            <div class="product-wrapper row cols-lg-5 cols-md-4 cols-sm-3 cols-2">
                                
								
								
									
					
								   
										  
										  
										  
										  
										  
										  
										  
										  
										  
										  
										  
										  
										  
										  
										  
										  
										  
										  
										  
										  
										  
										  
										  
										  
										  
										  
										  
										  
										  
										  
										  
										  
<?php   
										 
									  $r_data = 10;
             $pquery = "SELECT * FROM furniture_product";
             $prun   = mysqli_query($con,$pquery);
             $prow   = mysqli_num_rows($prun);
             $page   = ceil($prow / $r_data);
             
            if(isset($_GET['tdata_id'])){
                 $t_id =$_GET['tdata_id'];
             }
            else {
                $t_id =1;
            }
            $pro_start = ($t_id - 1) * $r_data;  		
											
											
											
											
											
											
											$pdetail_query = "SELECT * FROM furniture_product WHERE status='publish' LIMIT $pro_start,$r_data ";
											$pdetail_run   = mysqli_query($con,$pdetail_query);
														
											if(mysqli_num_rows($pdetail_run) > 0){
												$totalproduct =mysqli_num_rows($pdetail_run);
												while($pdetail_row = mysqli_fetch_array($pdetail_run)){
											
												$pid = $pdetail_row['pid'];
												$title = $pdetail_row['title'];
												$category = $pdetail_row['category'];
												$detail = $pdetail_row['detail'];
												$price = $pdetail_row['price'];
												$size = $pdetail_row['size'];
												$img1 = $pdetail_row['image'];
											
											
			
								
											
											
											
			?>
								
								
								
								
								
								
								
								
								
								<div class="product-wrap">
                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <a href="product-detail.php?product_id=<?php echo $pid;?>">
                                                <img src="img/<?php echo $img1;?>" alt="Product" width="300"
                                                    height="338" />
                                            </a>
                                            <div class="product-action-horizontal">
                                             <!--    <a href="product-detail.php?product_id=<?php echo $pid;?>" class="btn-product-icon btn-cart w-icon-cart"
                                                    title="Add to cart"></a>
                                                <a href="product-detail.php?product_id=<?php echo $pid;?>" class="btn-product-icon btn-wishlist w-icon-heart"
                                                    title="Wishlist"></a> -->
                                                <!-- <a href="product-detail.php?product_id=<?php echo $pid;?>" class="btn-product-icon btn-compare w-icon-compare"
                                                    title="Compare"></a> -->
                                                    <a href="javascript:void(0)" data-id="<?php echo $pid; ?>" class="btn-product-icon btn-quickview w-icon-search"
                                                                    title="Quickview"></a>
                                                <!-- <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                    title="Quick View"></a> -->
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <div class="product-cat">
                                                <a href="product.php?cat_id=<?php echo $pid;?>">
												
												<?php
												
												
            $pcdetail_query = "SELECT * FROM categories  WHERE id=$category";
            $pcdetail_run   = mysqli_query($con,$pcdetail_query);

            if(mysqli_num_rows($pcdetail_run) > 0){
              $pcdetail_row = mysqli_fetch_array($pcdetail_run);
                $category_name = $pcdetail_row['category'];
                $category_id = $pcdetail_row['id'];
            }
			
			
			
       
		
        ?>
				
				<?php	echo $category_name;		?>					
												
												
												
												
												
												
												</a>
                                            </div>
                                            <h3 class="product-name">
                                                <a href="product-detail.php?product_id=<?php echo $pid;?>"><?php echo $title;?></a>
												 </br>
												
                                            </h3>
											 <a style="font-size:12px;"href="product-detail.php?product_id=<?php echo $pid;?>">Size:70x100 cm</a>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 100%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
												 
                                                <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                            </div>
                                            <div class="product-pa-wrapper">
                                                <div class="product-price">
                                                <a style="font-size:12px;" href="inquiry?product_id=<?php echo $pid ; ?>	">Click for inquiry</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								
								
									<?php
											}
											}
										?>
                                

                        
                        </div>
						
						
						    <div class="toolbox toolbox-pagination justify-content-between">
                                <p class="showing-info mb-2 mb-sm-0">
                                    Showing<span>1-<?php  
									
								$pageproducts = ($t_id - 1);
                               $producteqn =  ($pageproducts * 10);
                                $check	=mysqli_num_rows($pdetail_run);
                               $final_count = ($producteqn + $check);
                                 echo $final_count ;?>&nbsp;of <?php  
									$pdetail_query = "SELECT * FROM furniture_product WHERE status='publish'";
											$pdetail_run   = mysqli_query($con,$pdetail_query);
														
											echo $total = mysqli_num_rows($pdetail_run);?></span>Products
                                </p>
                                <ul class="pagination">
								<?php 
									if( $t_id >1){
									
									?>
                                    <li class="prev disabled">
                                       <a href="shop.php?tdata_id=<?php $next_page =($t_id - 1);
                         echo $next_page;?>"aria-label="Previous" tabindex="-1" aria-disabled="true">
                                            <i class="w-icon-long-arrow-left"></i>Prev
                                        </a>
                                    </li><?php

									}
									?>
									
									
                                    <li class="page-item active">
                                       <ul class="pagination">
                       <?php 

                       $page = ($total / "9");
                       for($i=1; $i<= $page; $i++)
                        {
                        echo "<li class='page-item ".($t_id == $i ? 'active' : ''). "'><a class='page-link' href='shop.php?tdata_id=".$i."'>$i</a></li>";
                    }
                        ?>
                    </ul>
                                    </li>
                                   <?php  
								   
								$condition  =   $i-1;
								if($condition >= $t_id){
								   ?>
                                    <li class="next">
                                        <a href="shop.php?tdata_id=<?php $next_page =($t_id + 1);
                         echo $next_page;?>" aria-label="Next">
                                            Next <?php   $condition = $i-1;?><i class="w-icon-long-arrow-right"></i>
											
                                        </a>
                                    </li>
									<?php 
										}

									?>
                                </ul>
                            </div>
                        <!-- End of Shop Main Content -->

                        <!-- Start of Sidebar, Shop Sidebar -->
                        <aside class="sidebar shop-sidebar left-sidebar sticky-sidebar-wrapper">
                            <!-- Start of Sidebar Overlay -->
                            <div class="sidebar-overlay"></div>
                            <a class="sidebar-close" href="#"><i class="close-icon"></i></a>

                            <!-- Start of Sidebar Content -->
                            <div class="sidebar-content scrollable">
                                <div class="filter-actions">
                                    <label>Filter :</label>
                                    <a href="#" class="btn btn-dark btn-link filter-clean">Clean All</a>
                                </div>
                                <!-- Start of Collapsible widget -->
                                <div class="widget widget-collapsible">
                                    <h3 class="widget-title"><span>All Categories</span></h3>
                                    <ul class="widget-body filter-items search-ul">
                                    <?php
										 $cat_query = "SELECT * FROM categories ORDER BY id desc";
					   $cat_run   = mysqli_query($con,$cat_query);
						if(mysqli_num_rows($cat_run) > 0){
						While($cat_row = mysqli_fetch_array($cat_run)){
							$cid      = $cat_row['id'];
							$cat_name = ($cat_row['category']);
							$font     = $cat_row['fontawesome-icon'];

										?>
                                        <li><a href="product?cat_id=<?php  echo $cid;?>"><?php echo $cat_name; ?> </a></li>
                                      


                                        <?php } }?>
                                    </ul>
                                </div>
                                <!-- End of Collapsible Widget -->

                                <!-- End of Collapsible Widget -->

                                <!-- Start of Collapsible Widget -->
                           
                                <!-- End of Collapsible Widget -->
                            </div>
                            <!-- End of Sidebar Content -->
                        </aside>
                        <!-- End of Shop Sidebar -->
                    </div>
                    <!-- End of Shop Content -->
                </div>
            </div>
            <!-- End of Page Content -->
        </main>
        <!-- End of Main -->

       <!--footer-start -->
<?php 

 include('include/footer.php');

?>
<!--footer-end  -->

<script>
    $(document).ready(function(){
       
        $('.btn-quickview').on('click', function(){
          
            let id= $(this).data('id');
            
            $.ajax({
                url:'ajax.php/?id='+ id,
                dataType:"json",
                success: function(data) {
                 $('#product_title').html(data.title);
                 $('#product_price').html(data.product_price + ' $');
                 $('#product_title').html(data.title);
                 $('#single_product_category').html(data.category);
                 $('#single_product_details').html(data.detail);
                 let path= 'img/' +data.image;
                 $('#single_image').html('<img '+'src="'+path+'"'+'width="800"'+'height="900"'+'>');
                 $('#thumb_single_img').html('<img '+'src="'+path+'"'+'width="103"'+'height="116"'+'>');
                }  
            });
            
            
           
            
            
        })
        
    });
</script>