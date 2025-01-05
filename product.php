<?php include('include/header.php'); 

            if(isset($_SESSION['email'])){
            $custid = $_SESSION['id'];

            if(isset($_GET['cart_id'])){
                $p_id = $_GET['cart_id'];

                $sel_cart = "SELECT * FROM cart WHERE cust_id = $custid and product_id = $p_id ";
                $run_cart    = mysqli_query($con,$sel_cart);
            
                if(mysqli_num_rows($run_cart) == 0){
                $cart_query = "INSERT INTO `cart`(`cust_id`, `product_id`,quantity) VALUES ($custid,$p_id,1)";    
                if(mysqli_query($con,$cart_query)){
                    header('location:index.php');
                }
                }
                if(mysqli_num_rows($run_cart) > 0){
                while($row = mysqli_fetch_array($run_cart)){
                    $exist_pro_id = $row['product_id'];
                    if($p_id == $exist_pro_id){
                    $error="<script> alert('⚠️ This product is already in your cart  ');</script>";
                    }
                    }
                }


                }
            }
            else if(!isset($_SESSION['email'])){
            echo "<script> function a(){alert('⚠️ Login is required to add this product into cart');}</script>";
            }
            ?>
		
		
								<nav class="main-nav">
									<ul class="menu active-underline">
										<li
										
										

										
										>
											<a href="index.php">Home</a>
										</li>
										<li>
											<a href="shop.php">Shop</a>

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
<?php 


 if(isset($_GET['page'])){
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
    } 
     if(isset($_GET['cat_id'])){
                      $catid = $_GET['cat_id'];
                      $cat_query = "SELECT * FROM categories WHERE id=$catid ORDER BY id ASC";
                      $run   = mysqli_query($con,$cat_query);
                      $row   = mysqli_fetch_array($run);
                      $catname=$row['category'];

?>
				 
                   
                


        <!-- Start of Main -->
        <main class="main">
            <!-- Start of Breadcrumb -->
			
			<nav class="breadcrumb-nav">
                <div class="container">
                    <ul class="breadcrumb bb-no">
                        <li><a href="index.php">Home</a></li>
                        <li>
						
						<strong calss="active"><?php echo $catname; ?></li></strong>
						
                    </ul>
                </div>
            </nav>
           <!-- of Breadcrumb -->

              <div class="page-content mb-10">
                <div class="container">
                    <!-- Start of Shop Banner -->
               <div class="shop-default-banner banner  align-items-center mb-5 " style="background-image: url(assets/images/shop/Shop-Banner-5.jpg);
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
                      $p_query = "SELECT * FROM furniture_product WHERE category=$catid ORDER BY pid DESC LIMIT $product_start,$required_pro";  
                      
                  } else if(isset($_POST['sear_submit'])){
                      $search = $_POST['search'];
                      $p_query = "SELECT * FROM furniture_product WHERE title LIKE '%$search%' ";
                  }
                else{
					
					
                    $p_query = "SELECT * FROM furniture_product WHERE status='publish' ORDER BY pid DESC LIMIT $product_start,$required_pro";
                  }
                 
                  $p_run   = mysqli_query($con,$p_query);
                  
                  if(mysqli_num_rows($p_run) > 0 ){
                      while($p_row = mysqli_fetch_array($p_run)){
                       $pid      = $p_row['pid'];
                       $ptitle  = $p_row['title'];
                       $pcat    = $p_row['category'];
                       $p_price = $p_row['price'];
                       $size    = $p_row['size'];
                       $img1    = $p_row['image'];
                     ?>
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
					
								
								
								
								
								
								
								
								
								<div class="product-wrap">
                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <a href="product-detail.php?product_id=<?php echo $pid;?>">
                                                <img src="img/<?php echo $img1; ?>" alt="Product" width="300"
                                                    height="338" />
                                            </a>
                                            <div class="product-action-horizontal">
                                               <!--  <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                    title="Add to cart"></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                    title="Wishlist"></a> -->
                                                    <a href="javascript:void(0)" data-id="<?php echo $pid; ?>" class="btn-product-icon btn-quickview w-icon-search"
                                                                    title="Quickview"></a>
                                                <!-- <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                    title="Compare"></a>
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                    title="Quick View"></a> -->
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <div class="product-cat">
                                                <a href="shop-banner-sidebar.html"><?php  ?></a>
                                            </div>
                                            <h3 class="product-name">
                                               
												 <a href="product-detail.php?product_id=<?php echo $pid;?>"><?php echo $ptitle; ?></a>
												 </br>
												
											</h3>
											 <a style="font-size:12px;"href="product-detail.php?product_id=<?php echo $pid;?>">Size: 70x100 cm</a>
                                            
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 100%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="product-detail.php?product_id=<?php echo $pid;?>" class="rating-reviews">(3 reviews)</a>
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
                  else{             ?>



<div class="alert alert-icon alert-warning alert-bg alert-inline show-code-action">
                                    <h4 class="alert-title">
                                        <i class="w-icon-exclamation-triangle"></i>Warning!</h4>
                                  No Products at this cayegory
                                </div>

                    <?php 
                  }

                ?>
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
							
                            
                            </div>

                            <div class="toolbox toolbox-pagination justify-content-between">
                                <p class="showing-info mb-2 mb-sm-0">
                                    Showing<span>1-15 of 60</span>Products
                                </p>
                                <ul class="pagination">
                                    <li class="prev disabled">
                                        <a href="#" aria-label="Previous" tabindex="-1" aria-disabled="true">
                                            <i class="w-icon-long-arrow-left"></i>Prev
                                        </a>
                                    </li>
                                    <li class="page-item active">
                                        <a class="page-link" href="#">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="next">
                                        <a href="#" aria-label="Next">
                                            Next<i class="w-icon-long-arrow-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
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
                                        <li><a href="#">Accessories</a></li>
                                        <li><a href="#">Babies</a></li>
                                        <li><a href="#">Beauty</a></li>
                                        <li><a href="#">Decoration</a></li>
                                        <li><a href="#">Electronics</a></li>
                                        <li><a href="#">Fashion</a></li>
                                        <li><a href="#">Food</a></li>
                                        <li><a href="#">Furniture</a></li>
                                        <li><a href="#">Kitchen</a></li>
                                        <li><a href="#">Medical</a></li>
                                        <li><a href="#">Sports</a></li>
                                        <li><a href="#">Watches</a></li>
                                    </ul>
                                </div>
                                <!-- End of Collapsible Widget -->

                                <!-- Start of Collapsible Widget -->
                                <div class="widget widget-collapsible">
                                    <h3 class="widget-title"><span>Price</span></h3>
                                    <div class="widget-body">
                                        <ul class="filter-items search-ul">
                                            <li><a href="#">$0.00 - $100.00</a></li>
                                            <li><a href="#">$100.00 - $200.00</a></li>
                                            <li><a href="#">$200.00 - $300.00</a></li>
                                            <li><a href="#">$300.00 - $500.00</a></li>
                                            <li><a href="#">$500.00+</a></li>
                                        </ul>
                                        <form class="price-range">
                                            <input type="number" name="min_price" class="min_price text-center"
                                                placeholder="$min"><span class="delimiter">-</span><input type="number"
                                                name="max_price" class="max_price text-center" placeholder="$max"><a
                                                href="#" class="btn btn-primary btn-rounded">Go</a>
                                        </form>
                                    </div>
                                </div>
                                <!-- End of Collapsible Widget -->

                                <!-- Start of Collapsible Widget -->
                                <div class="widget widget-collapsible">
                                    <h3 class="widget-title"><span>Size</span></h3>
                                    <ul class="widget-body filter-items item-check mt-1">
                                        <li><a href="#">Extra Large</a></li>
                                        <li><a href="#">Large</a></li>
                                        <li><a href="#">Medium</a></li>
                                        <li><a href="#">Small</a></li>
                                    </ul>
                                </div>
                                <!-- End of Collapsible Widget -->

                                <!-- Start of Collapsible Widget -->
                                <div class="widget widget-collapsible">
                                    <h3 class="widget-title"><span>Brand</span></h3>
                                    <ul class="widget-body filter-items item-check mt-1">
                                        <li><a href="#">Elegant Auto Group</a></li>
                                        <li><a href="#">Green Grass</a></li>
                                        <li><a href="#">Node Js</a></li>
                                        <li><a href="#">NS8</a></li>
                                        <li><a href="#">Red</a></li>
                                        <li><a href="#">Skysuite Tech</a></li>
                                        <li><a href="#">Sterling</a></li>
                                    </ul>
                                </div>
                                <!-- End of Collapsible Widget -->

                                <!-- Start of Collapsible Widget -->
                                <div class="widget widget-collapsible">
                                    <h3 class="widget-title"><span>Color</span></h3>
                                    <ul class="widget-body filter-items item-check">
                                        <li><a href="#">Black</a></li>
                                        <li><a href="#">Blue</a></li>
                                        <li><a href="#">Brown</a></li>
                                        <li><a href="#">Green</a></li>
                                        <li><a href="#">Grey</a></li>
                                        <li><a href="#">Orange</a></li>
                                        <li><a href="#">Yellow</a></li>
                                    </ul>
                                </div>
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

        <!-- End of Footer -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Start of Sticky Footer -->
    <div class="sticky-footer sticky-content fix-bottom">
        <a href="demo1.html" class="sticky-link active">
            <i class="w-icon-home"></i>
            <p>Home</p>
        </a>
        <a href="shop-banner-sidebar.html" class="sticky-link">
            <i class="w-icon-category"></i>
            <p>Shop</p>
        </a>
        <a href="my-account.html" class="sticky-link">
            <i class="w-icon-account"></i>
            <p>Account</p>
        </a>
        <div class="cart-dropdown dir-up">
            <a href="cart.html" class="sticky-link">
                <i class="w-icon-cart"></i>
                <p>Cart</p>
            </a>
            <div class="dropdown-box">
                <div class="products">
                    <div class="product product-cart">
                        <div class="product-detail">
                            <h3 class="product-name">
                                <a href="product-default.html">Beige knitted elas<br>tic
                                    runner shoes</a>
                            </h3>
                            <div class="price-box">
                                <span class="product-quantity">1</span>
                                <span class="product-price">$25.68</span>
                            </div>
                        </div>
                        <figure class="product-media">
                            <a href="#">
                                <img src="assets/images/cart/product-1.jpg" alt="product" height="84" width="94" />
                            </a>
                        </figure>
                        <button class="btn btn-link btn-close" aria-label="button">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>

                    <div class="product product-cart">
                        <div class="product-detail">
                            <h3 class="product-name">
                                <a href="https://www.portotheme.com/html/wolmart/product.html">Blue utility pina<br>fore
                                    denim dress</a>
                            </h3>
                            <div class="price-box">
                                <span class="product-quantity">1</span>
                                <span class="product-price">$32.99</span>
                            </div>
                        </div>
                        <figure class="product-media">
                            <a href="#">
                                <img src="assets/images/cart/product-2.jpg" alt="product" width="84" height="94" />
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
            <!-- End of Dropdown Box -->
        </div>

        <div class="header-search hs-toggle dir-up">
            <a href="#" class="search-toggle sticky-link">
                <i class="w-icon-search"></i>
                <p>Search</p>
            </a>
            <form action="#" class="input-wrapper">
                <input type="text" class="form-control" name="search" autocomplete="off" placeholder="Search"
                    required />
                <button class="btn btn-search" type="submit">
                    <i class="w-icon-search"></i>
                </button>
            </form>
        </div>
    </div>


<?php include('include/footer.php'); 
 ?>

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
<script>
    $(document).ready(function(){
       
        $('.name').on('click', function(){
          
           alert();
           
            
            
        })
        
    });
</script>

