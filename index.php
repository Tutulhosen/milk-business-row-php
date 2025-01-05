
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
                            
                            class="
                            active
                            "

                            
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


</div>
    </div>



<!-- Start of Main-->

<main class="main">

<div class="container">
<div id="demo" class="carousel slide" data-ride="carousel">

<!-- Indicators -->
<ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
</ul>


<!-- The slideshow -->
<div class="carousel-inner" style="height: 450px;">
   
    <div class="carousel-item">
    <img src="img/slider 02.jpg" alt="Los Angeles" width="1100" height="700">
    </div>
    
    <div class="carousel-item">
    <img src="img/slider.jpg" alt="Los Angeles" width="1100" height="700">
    </div>
    
    <div class="carousel-item active">
    <img src="img/slider 04.jpg" alt="Los Angeles" width="1100" height="700">
    </div>

   
</div>

<!-- Left and right controls -->
<a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
</a>
</div>
</div>

<!-- End of .intro-section -->
<!-- End of .intro-section -->

<div class="container">
    <div class="swiper-container appear-animate icon-box-wrapper br-sm mt-6 mb-6" data-swiper-options="{
        'slidesPerView': 1,
        'loop': false,
        'breakpoints': {
            '576': {
                'slidesPerView': 2
            },
            '768': {
                'slidesPerView': 3
            },
            '1200': {
                'slidesPerView': 4
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
        
        
        
        
        
                            <!--starts-dorm-here-->			
                    
                    <div class="tab tab-nav-boxed tab-nav-outline appear-animate fadeIn appear-animation-visible" style="animation-duration: 1.2s;">
        <ul class="nav nav-tabs justify-content-center" role="tablist">
        <li class="nav-item mr-2 mb-2">
                <a class="nav-link br-sm font-size-md ls-normal" href="#tab1-3"> Popular Products</a>
            </li>
            <li class="nav-item mr-2 mb-2">
                <a class="nav-link active br-sm font-size-md ls-normal" href="#tab1-1">New arrivals</a>
            </li>
            <li class="nav-item mr-2 mb-2">
                <a class="nav-link br-sm font-size-md ls-normal" href="#tab1-2">Best seller</a> 
            </li>
            
           
        </ul>
    <div></div></div>
                    <div class="tab-content product-wrapper appear-animate fadeIn appear-animation-visible" style="animation-duration: 1.2s;">
        <div class="tab-pane pt-4 active in" id="tab1-1">
            <div class="row cols-xl-5 cols-md-4 cols-sm-3 cols-2">
            
            
                                              <?php   
                              
                                
                                $pdetail_query = "SELECT * FROM furniture_product WHERE status='publish' Order by  	category Desc limit 10 ";
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
                                
                                

                    
                                
                                                                
                                    
                                    
$pcdetail_query = "SELECT * FROM categories  WHERE id=$category";
$pcdetail_run   = mysqli_query($con,$pcdetail_query);

if(mysqli_num_rows($pcdetail_run) > 0){
  $pcdetail_row = mysqli_fetch_array($pcdetail_run);
    $category_name = $pcdetail_row['category'];
    $category_id = $pcdetail_row['id'];
}





?>
    
            
            
            
            
                <div class="product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                             <a href="product-detail.php?product_id=<?php echo $pid;?>">
                                <img src="img/<?php echo $img1;?>" alt="Product" width="300" height="338">
                                <img src="img/<?php echo $img1;?>" alt="Product" width="300" height="338">
                            </a>
                            <div class="product-action-vertical"style="mt-5">
                               <!--  <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="Add to wishlist"></a> -->
                               <a href="javascript:void(0)" data-id="<?php echo $pid; ?>" class="btn-product-icon btn-quickview w-icon-search" title="Quickview"></a>
                            <!--     <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Add to Compare"></a>
                             -->
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="product-detail?product_id=<?php echo $pid ; ?>	"><?php echo $title; ?>	</a></h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 60%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="product-detail?product_id=<?php echo $pid ; ?>	" class="rating-reviews">(1 Reviews)</a>
                            </div>
                            <div class="product-price">
                                <ins class="new-price">
                                
                            
                                
                                <a style="font-size:12px;" href="inquiry?product_id=<?php echo $pid ; ?>	">Click for inquiry</a>
                                
                                </ins>
                            </div>
                        </div>
                    </div>
                </div>
                
                <?php
                                }
                                }
                            ?>
                    
              
         
                
                
            </div>
        </div>
        <!-- End of Tab Pane -->
        <div class="tab-pane pt-4" id="tab1-2">
            <div class="row cols-xl-5 cols-md-4 cols-sm-3 cols-2">
                
                               <?php   
                              
                                
                                $pdetail_query = "SELECT * FROM furniture_product WHERE status='publish' Order by pid Desc limit 10 ";
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
                                
                                

                    
                                
                                                                
                                    
                                    
$pcdetail_query = "SELECT * FROM categories  WHERE id=$category";
$pcdetail_run   = mysqli_query($con,$pcdetail_query);

if(mysqli_num_rows($pcdetail_run) > 0){
  $pcdetail_row = mysqli_fetch_array($pcdetail_run);
    $category_name = $pcdetail_row['category'];
    $category_id = $pcdetail_row['id'];
}





?>
    
            
            
            
            
                <div class="product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="product-detail.php?product_id=<?php echo $pid;?>">
                                <img src="img/<?php echo $img1;?>" alt="Product" width="300" height="338">
                                <img src="img/<?php echo $img1;?>" alt="Product" width="300" height="338">
                            </a>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="Add to wishlist"></a>
                               <a href="javascript:void(0)" data-id="<?php echo $pid; ?>" class="btn-product-icon btn-quickview w-icon-search" title="Quickview"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Add to Compare"></a>
                                  
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="product-detail?product_id=<?php echo $pid ; ?>	"><?php echo $title; ?>	</a></h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 60%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="product-detail?product_id=<?php echo $pid ; ?>" class="rating-reviews">(1 Reviews)</a>
                            </div>
                            <div class="product-price">
                                <ins class="new-price"><a style="font-size:12px;" href="inquiry?product_id=<?php echo $pid ; ?>	">Click for inquiry</a>
                                </ins>
                            </div>
                        </div>
                    </div>
                </div>
                
                <?php
                                }
                                }
                            ?>
                    
              
         
             
         

            </div>
        </div>
        <!-- End of Tab Pane -->
        <div class="tab-pane pt-4" id="tab1-3">
            <div class="row cols-xl-5 cols-md-4 cols-sm-3 cols-2">
                                
                      <?php   
                              
                                
                                $pdetail_query = "SELECT * FROM furniture_product WHERE status='publish' limit 10 ";
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
                                
                                

                    
                                
                                                                
                                    
                                    
$pcdetail_query = "SELECT * FROM categories  WHERE id=$category";
$pcdetail_run   = mysqli_query($con,$pcdetail_query);

if(mysqli_num_rows($pcdetail_run) > 0){
  $pcdetail_row = mysqli_fetch_array($pcdetail_run);
    $category_name = $pcdetail_row['category'];
    $category_id = $pcdetail_row['id'];
}





?>
    
            
            
            
            
                <div class="product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="product-detail.php?product_id=<?php echo $pid;?>">
                                <img src="img/<?php echo $img1;?>" alt="Product" width="300" height="338">
                                <img src="img/<?php echo $img1;?>" alt="Product" width="300" height="338">
                            </a>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="Add to wishlist"></a>
                               <a href="javascript:void(0)" data-id="<?php echo $pid; ?>" class="btn-product-icon btn-quickview w-icon-search" title="Quickview"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Add to Compare"></a>
                                 
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="product-detail?product_id=<?php echo $pid ; ?>	"><?php echo $title; ?>	</a></h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 60%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="product-detail?product_id=<?php echo $pid ; ?>" class="rating-reviews">(1 Reviews)</a>
                            </div>
                            <div class="product-price">
                                <ins class="new-price"><a style="font-size:12px;" href="inquiry?product_id=<?php echo $pid ; ?>	">Click for inquiry</a>
                                </ins>
                            </div>
                        </div>
                    </div>
                </div>
                
                <?php
                                }
                                }
                            ?>
                    
                
               
             
            </div>
        </div>
       
    </div>
                    
                    
    </div>






<!--epics-start-form-here-->

  
   


                <div class="banner banner-fashion appear-animate br-sm mb-9 fadeIn appear-animation-visible" style="background-image: url(&quot;assets/images/home small banner .jpg &quot;); background-color: rgb(90, 80, 57); animation-duration: 1.2s;">
                        <div class="banner-content align-items-center">
                            <div class="content-left d-flex align-items-center mb-3">
                                <div class="banner-price-info font-weight-bolder text-secondary text-uppercase lh-1 ls-25">
                                    
                                    <sup class="font-weight-bold"></sup><sub class="font-weight-bold ls-25"></sub>
                                </div>
                                <hr class="banner-divider bg-white mt-0 mb-0 mr-8">
                            </div>
                            <div class="content-right d-flex align-items-center flex-1 flex-wrap">
                                <div class="banner-info mb-0 mr-auto pr-4 mb-3">
                                    <h3 class="banner-title text-primary font-weight-bolder text-uppercase ls-25"></h3>
                                    <p class="text-white mb-0 text-success">
                                        <span class="text-dark bg-white font-weight-bold ls-50 pl-1 pr-1 d-inline-block">
                                            <strong></strong></span> </p>
                                </div>
                                <a href="shop.php" class="btn btn-white btn-outline btn-rounded btn-icon-right mb-3 mr-5"style="padding: 17px;font-size:14px;border-radius: 25px;font-weight: bold;border:3px solid white;">Shop Now<i class="w-icon-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                
                    <!-- End of Product Wrapper 1 -->

                    <!-- End of Brands Wrapper -->

                    <div class="post-wrapper appear-animate mb-4">
                        <div class="title-link-wrapper pb-1 mb-4">
                            <h2 class="title ls-normal mb-0">From Our Blog</h2>
                            <a href="blog-listing.html" class="font-weight-bold font-size-normal">View All Articles</a>
                        </div>
                        <div class="swiper">
                            <div class="swiper-container swiper-theme" data-swiper-options="{
                                'slidesPerView': 1,
                                'spaceBetween': 20,
                                'breakpoints': {
                                    '576': {
                                        'slidesPerView': 2
                                    },
                                    '768': {
                                        'slidesPerView': 3
                                    },
                                    '992': {
                                        'slidesPerView': 4
                                    }
                                }
                            }">
                                <div class="swiper-wrapper row cols-lg-4 cols-md-3 cols-sm-2 cols-1">
                                  <?php   
                              $blog_select = mysqli_query($con,"SELECT * FROM post order by post_list desc");
                            
                            
                            while($Sel_divide_post_part = mysqli_fetch_array($blog_select)){
                    $Sel_divide_post_part['time'];
                         $title = $Sel_divide_post_part['post_title'];
                            $date = $Sel_divide_post_part['date'];
                                $post_id = $Sel_divide_post_part['post_list'];	
                                ?>
                                
                                    <div class="swiper-slide post text-center overlay-zoom">
                                        <figure class="post-media br-sm"style="width:100%; !important;">
                                            <a href="post-single.php?post_id=<?php echo $post_id; ?>">
                                                <img src="admin/img/post/<?php  echo $Sel_divide_post_part['post_image_thumbnail']; ?>" alt="Post" width="280"
                                                    height="30" style="background-color: #4b6e91;" />
                                            </a>
                                        </figure>
                                        
                                        <div class="post-details">
                                            <div class="post-meta">
                                                by <a href="post-single.php?post_id=<?php echo $post_id; ?>" class="post-author">Admin</a>
                                                - <a href="post-single.php?post_id=<?php echo $post_id; ?>" class="post-date mr-0"><?php echo $date; ?></a>
                                            </div>
                                            <h4 class="post-title"><a href="post-single.php?post_id=<?php echo $post_id; ?>"><?php $str = $title;
        echo substr($str, 0, 40).''?></a>
                                            </h4>
                                            <a href="post-single.php?post_id=<?php echo $post_id; ?>" class="btn btn-link btn-dark btn-underline">Read
                                                More<i class="w-icon-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                            <?php  }?>
                                
                                 
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                   
                    
                    
                    
                    
                    
                    
                    





</main>
<!-- End of Main -->





<?php include('include/footer.php'); ?>

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

