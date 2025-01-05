


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
											<a href="contact.php">Contact Us</a>
										   
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
				</div><?PHP  
                if (isset($_POST["review_submit"]))
 {           
   
     
    echo   $name = mysqli_real_escape_string($con, $_POST["name"]);
    echo    $email = mysqli_real_escape_string($con, $_POST["email"]);
    echo   $comment = mysqli_real_escape_string($con, $_POST["comment"]);
    echo   $post_id = $_GET["product_id"];
  echo   $reply_of = 0;
 
     mysqli_query($con, "INSERT INTO reviews (name, email, comment, review_id, created_at, reply_of) VALUES ('" . $name . "', '" . $email . "', '" . $comment . "', '" . $post_id . "', NOW(), '" . $reply_of . "')");
     echo "<p>Comment has been posted.</p>";
 }

?>
        <!-- Start of Main -->
        <main class="main mb-10 pb-1">
            <!-- Start of Breadcrumb -->
          
            <!-- End of Breadcrumb -->











  <?php   
          if(isset($_GET['product_id'])){
            $p_id = $_GET['product_id'];
            
            $pdetail_query = "SELECT * FROM furniture_product WHERE pid=$p_id";
            $pdetail_run   = mysqli_query($con,$pdetail_query);

            if(mysqli_num_rows($pdetail_run) > 0){
              $pdetail_row = mysqli_fetch_array($pdetail_run);
                $pid = $pdetail_row['pid'];
                $title = $pdetail_row['title'];
                $category = $pdetail_row['category'];
                $detail = $pdetail_row['detail'];
                $price = $pdetail_row['price'];
                $size = $pdetail_row['size'];
                $img1 = $pdetail_row['image'];
            }
        }
        ?>
  <div class="page-content mt-5 pt-5">
                <div class="container">
                    <div class="product product-single row">
                        <div class="col-md-6 mb-6">
                            <div class="product-gallery product-gallery-sticky product-gallery-vertical">
                                <div class="swiper-container  swiper-theme " data-swiper-options="{
                                    'navigation': {
                                        'nextEl': '.swiper-button-next',
                                        'prevEl': '.swiper-button-prev'
                                    }
                                }">
                                    <div class="swiper-wrapper row cols-1 gutter-no">
                                       
                                        
                                       
                                        
										<div class="swiper-slide">
                                            <figure class="product-image">
                                                <img src="img/<?php echo $img1; ?>"
                                                    data-zoom-image="img/<?php echo $img1; ?>"
                                                    alt="Bright Green IPhone" width="800" height="900">
                                            </figure>
                                        </div>
                                        <div class="swiper-slide">
                                            <figure class="product-image">
                                                <img src="img/<?php echo $img1; ?>"
                                                    data-zoom-image="img/<?php echo $img1; ?>"
                                                    alt="Bright Green IPhone" width="800" height="900">
                                            </figure>
                                        </div>
										<div class="swiper-slide">
                                            <figure class="product-image">
                                                <img src="img/<?php echo $img1; ?>"
                                                    data-zoom-image="img/<?php echo $img1; ?>"
                                                    alt="Bright Green IPhone" width="800" height="900">
                                            </figure>
                                        </div>
										
										
                                    </div>
                                    <button class="swiper-button-next"></button>
                                    <button class="swiper-button-prev"></button>
                                 
                                </div>
                           <!--      <div class="product-thumbs-wrap swiper-container" data-swiper-options="{
                                    'navigation': {
                                        'nextEl': '.swiper-button-next',
                                        'prevEl': '.swiper-button-prev'
                                    },
                                    'breakpoints': {
                                        '992': {
                                            'direction': 'vertical',
                                            'slidesPerView': 'auto'
                                        }
                                    }
                                }">
                                <div class="product-thumbs swiper-wrapper row cols-lg-1 cols-4 gutter-sm">
                                        <div class="product-thumb swiper-slide">
                                            <img src="img/<?php echo $img1; ?>" alt="Product Thumb"
                                                width="800" height="900">
                                        </div>
                                        <div class="product-thumb swiper-slide">
                                            <img src="img/<?php echo $img1; ?>" alt="Product Thumb"
                                                width="800" height="900">
                                        </div>
                                        <div class="product-thumb swiper-slide">
                                            <img src="img/<?php echo $img1; ?>" alt="Product Thumb"
                                                width="800" height="900">
                                        </div>
                                        <div class="product-thumb swiper-slide">
                                            <img src="img/<?php echo $img1; ?>" alt="Product Thumb"
                                                width="800" height="900">
                                        </div>
                                       
                                    </div>
                                    <button class="swiper-button-prev"></button>
                                    <button class="swiper-button-next"></button>
                                </div> -->
                            </div>
                        </div>
						
						
						
                        <div class="col-md-6 mb-4 mb-md-6">
                            <div class="product-details">
                                <h1 class="product-title"><?php echo $title; ?></h1>
                                <div class="product-bm-wrapper">
                                  
                                    <div class="product-meta">
                                        <div class="product-categories">
                                            Category:
											<?php   
          if(isset($_GET['product_id'])){
            $p_id = $_GET['product_id'];
            
            $pcdetail_query = "SELECT * FROM categories WHERE id=$category";
            $pcdetail_run   = mysqli_query($con,$pcdetail_query);

            if(mysqli_num_rows($pcdetail_run) > 0){
              $pcdetail_row = mysqli_fetch_array($pcdetail_run);
                $category_name = $pcdetail_row['category'];
                $category_id = $pcdetail_row['id'];
            }
        }
        ?>
											
											
											
                                            <span class="product-category"><a href="product.php?cat_id=<?php  echo $category_id; ?>"><?php echo $category_name; ?></a></span>
                                        </div>
                                        <div class="product-sku">
                                            SKU: <span>NE0 - 0001</span>
                                        </div>
                                    </div>
                                </div>

                                <hr class="product-divider"style="margin-top:10px;margin-bottom:10px;">
									
                             <!--   <div class="product-price"><ins class="new-price">  <a style="font-size:12px;letter-spacing: 1px;" href="inquiry?product_id= <?php // echo $pid ; ?>	">Click for inquiry</a></ins></div>-->
							

                              

                                <div class="product-short-desc"style="margin-top:0; margin-bottom:45px;">
                                    <?=$detail?>
                                </div>

                                <hr class="product-divider">
                                <h4 class="title tab-pane-title font-weight-bold mb-3"style="font-weight: 400 !important;">Reviews</h4>
                                <div class="ratings-container mt-2">
                               
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 80%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                 
                                    <a href="#" class="rating-reviews">(1 Reviews)</a>
                                </div>
                                <hr class="product-divider" style="margin-top:10px; margin-bottom:15px">
                               <!-- <div class="fix-bottom product-sticky-content sticky-content">
                                    <div class="product-form container">
                                        <div class="product-qty-form with-label">
                                            <label>Quantity:</label>
                                            <div class="input-group">
                                                <input class="quantity form-control" type="number" min="1"
                                                    max="10000000">
                                                <button class="quantity-plus w-icon-plus"></button>
                                                <button class="quantity-minus w-icon-minus"></button>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary btn-cart">
                                            <i class="w-icon-cart"></i>
                                            <span>Add to Cart</span>
                                        </button>
                                    </div>
                                </div>-->

                                <div class="social-links-wrapper">
                                    <div class="social-links ">
                                        <div class="social-icons social-no-color border-thin">
										
										
										
										<div class="fb-share-button mr-2" 
											data-href="https://faysalkabir.com" 
											data-layout="button_count">
										</div>
										
					
                                          <!--
                                            <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
                                            <a href="#" class="social-icon social-pinterest fab fa-pinterest-p"></a>
                                            <a href="#" class="social-icon social-whatsapp fab fa-whatsapp"></a>
                                            <a href="#" class="social-icon social-youtube fab fa-linkedin-in"></a>
                                            -->
                                        </div>
                                    </div>
                                    <!-- <span class="divider d-xs-show"></span>
                                    <div class="product-link-wrapper d-flex">
                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"><span></span></a>
                             
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab tab-nav-boxed tab-nav-underline product-tabs mt-3">
                        <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                                <a href="#product-tab-description" class="nav-link active">Description</a>
                                
                            </li>
                      
                          <li class="nav-item">
                                <a href="#product-tab-reviews" class="nav-link">Customer Reviews ( <span id="comment_count"> 3 </span>)</a>
                            </li> 
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="product-tab-description">
                                <div class="row mb-4">
                                    <div class="col-md-6 mb-5">
                                        <h4 class="title tab-pane-title font-weight-bold mb-2">Details</h4>
                                        <p class="mb-4"><?php echo $detail; ?></p>
                                       
                                    </div>
                                    <div class="col-md-6 mb-5">
                                        
                                    </div>
                                </div>
                             
                            </div>
                            <div class="tab-pane" id="product-tab-reviews">
                                <div class="row mb-4">
                                    <div class="col-xl-4 col-lg-5 mb-4">
                                        <div class="ratings-wrapper">
                                            <div class="avg-rating-container">
                                                <h4 class="avg-mark font-weight-bolder ls-50">3.3</h4>
                                                <div class="avg-rating">
                                                    <p class="text-dark mb-1">Average Rating</p>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 60%;"></span>
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                        <a href="#" class="rating-reviews">(3 Reviews)</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ratings-value d-flex align-items-center text-dark ls-25">
                                                <span class="text-dark font-weight-bold">66.7%</span>Recommended<span
                                                    class="count">(2 of 3)</span>
                                            </div>
                                            <div class="ratings-list">
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <div class="progress-bar progress-bar-sm ">
                                                        <span></span>
                                                    </div>
                                                    <div class="progress-value">
                                                        <mark>70%</mark>
                                                    </div>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 80%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <div class="progress-bar progress-bar-sm ">
                                                        <span></span>
                                                    </div>
                                                    <div class="progress-value">
                                                        <mark>30%</mark>
                                                    </div>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 60%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <div class="progress-bar progress-bar-sm ">
                                                        <span></span>
                                                    </div>
                                                    <div class="progress-value">
                                                        <mark>40%</mark>
                                                    </div>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 40%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <div class="progress-bar progress-bar-sm ">
                                                        <span></span>
                                                    </div>
                                                    <div class="progress-value">
                                                        <mark>0%</mark>
                                                    </div>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 20%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <div class="progress-bar progress-bar-sm ">
                                                        <span></span>
                                                    </div>
                                                    <div class="progress-value">
                                                        <mark>0%</mark>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-7 mb-4">
                                        <div class="review-form-wrapper">
                                            <h3 class="title tab-pane-title font-weight-bold mb-1">Submit Your Review
                                            </h3>
                                            <p class="mb-3">Your email address will not be published. Required fields
                                                are marked *</p>
                                          
                                                <div class="rating-form">
                                                    <label for="rating">Your Rating Of This Product :</label>
                                                    <span class="rating-stars">
                                                        <a class="star-1" href="#">1</a>
                                                        <a class="star-2" href="#">2</a>
                                                        <a class="star-3" href="#">3</a>
                                                        <a class="star-4" href="#">4</a>
                                                        <a class="star-5" href="#">5</a>
                                                    </span>
                                               
                                                    <select name="rating" id="rating" required=""
                                                        style="display: none;">
                                                        <option value="">Rate…</option>
                                                        <option value="5">Perfect</option>
                                                        <option value="4">Good</option>
                                                        <option value="3">Average</option>
                                                        <option value="2">Not that bad</option>
                                                        <option value="1">Very poor</option>
                                                    </select>
                                                </div>
                                                <form id="review_form" action="#" method="post" >
                                                    <input type="hidden" id="product_id" value="<?php echo $_GET['product_id'] ?>">
                                                    <textarea cols="30" rows="6" placeholder="Write a Comment" class="form-control mb-4"name="comment" id="comment"></textarea>
                                                <div class="row gutter-md">
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control" name="author" placeholder="Your Name"
                                                            id="author">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control" name="email_1"placeholder="Your Email"
                                                            id="email_1">
                                                    </div>
                                                </div>
                                           
                                                <button type="button" id="review_submit" class="btn btn-dark mt-3" name="review_submit">Submit Review</button>
                                       <!--          <div style="margin-top:5px;" class="alert alert-success alert-simple alert-inline show-code-action">
                                    <h4  class="alert-title">Well done!</h4> 
                                </div> -->
                                            </form>
                                        </div>
                                </div>
                                </div>   <?php  

//  if (isset($_POST["review_submit"]))
//  {           
   
     
//     echo   $name = mysqli_real_escape_string($con, $_POST["name"]);
//     echo    $email = mysqli_real_escape_string($con, $_POST["email"]);
//     echo   $comment = mysqli_real_escape_string($con, $_POST["comment"]);
//     echo   $rating = mysqli_real_escape_string($con, $_POST["rating"]);
//     echo   $post_id = $_GET["product_id"];
//   echo   $reply_of = 0;
 
//     //  mysqli_query($con, "INSERT INTO reviews(name, email, comment, post_id, created_at, reply_of,review_star) VALUES ('" . $name . "','" . $rating . "', '" . $email . "', '" . $comment . "', '" . $post_id . "', NOW(), '" . $reply_of . "')");
//     //  echo "<p>Comment has been posted.</p>";
//  }

?>

                                <div class="tab tab-nav-boxed tab-nav-outline tab-nav-center">
                                  <!--  <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a href="#show-all" class="nav-link active">Show All</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#helpful-positive" class="nav-link">Most Helpful Positive</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#helpful-negative" class="nav-link">Most Helpful Negative</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#highest-rating" class="nav-link">Highest Rating</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#lowest-rating" class="nav-link">Lowest Rating</a>
                                        </li>
                                    </ul>-->
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="show-all">
                                            <ul class="comments list-style-none">

                      <?php 
 
 // conect with database
 $post_id = $_GET['product_id'];
  
 // get all comments of post
 $result = mysqli_query($con, "SELECT * FROM reviews WHERE review_id='$post_id' Order by id desc" );

        // save all records from database in an array
        $comments = array();
        while ($row = mysqli_fetch_object($result))
        {
            array_push($comments, $row);
        }
        // loop through each comment
        foreach ($comments as $comment_key => $comment)
        {
    // initialize replies array for each comment
    $replies = array();
 
    // check if it is a comment to post, not a reply to comment
    if ($comment->reply_of == 0)
    {
        // loop through all comments again
        foreach ($comments as $reply_key => $reply)
        {
            // check if comment is a reply
            if ($reply->reply_of == $comment->id)
            {
                // add in replies array
                array_push($replies, $reply);
 
                // remove from comments array
                unset($comments[$reply_key]);
            }
        }
    }
 
    // assign replies to comments object
    $comment->replies = $replies;


 
   

 
?>
<?php } ?>
<?php foreach ($comments as $comment): ?>








                                                <li class="comment">
                                                    <div class="comment-body">
                                                        <figure class="comment-avatar">
                                                            <img src="assets/images/agents/avatar.jpg"
                                                                alt="Commenter Avatar" width="90" height="90">
                                                        </figure>
                                                        <div class="comment-content">
                                                            <h4 class="comment-author">
                                                                <a href="#"><?php echo $comment->name; ?></a>
                                                                <span class="comment-date"><?php echo date("F d, Y h:i a", strtotime($comment->created_at)); ?></span>
                                                            </h4>
                                                            <div class="ratings-container comment-rating">
                                                                <div class="ratings-full">
                                                                    <span class="ratings" style="width: 60%;"></span>
                                                                    <span class="tooltiptext tooltip-top"></span>
                                                                </div>
                                                            </div>

                                                           
                                                            <p><?php echo $comment->comment; ?></p>
                                                             <!-- like & Dislike - image
                                                            <div class="comment-action">
                                                                <a href="#"
                                                                    class="btn btn-secondary btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                    <i class="far fa-thumbs-up"></i>Helpful (1)
                                                                </a>
                                                                <a href="#"
                                                                    class="btn btn-dark btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                    <i class="far fa-thumbs-down"></i>Unhelpful (0)
                                                                </a>
                                                                <div class="review-image">
                                                                    <a href="#">
                                                                        <figure>
                                                                            <img src="assets/images/products/default/review-img-1.jpg"
                                                                                width="60" height="60"
                                                                                alt="Attachment image of John Doe's review on Electronics Black Wrist Watch"
                                                                                data-zoom-image="assets/images/products/default/review-img-1-800x900.jpg" />
                                                                        </figure>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                           like & Dislike - image  -->



                                                        </div>
                                                    </div>
                                                </li>
                                           
                                           


<?php   endforeach; ?> 










                                            </ul>
                                        </div>
                                        <div class="tab-pane" id="helpful-positive">
                                            <ul class="comments list-style-none">
                                                <li class="comment">
                                                    <div class="comment-body">
                                                        <figure class="comment-avatar">
                                                            <img src="assets/images/agents/1-100x100.png"
                                                                alt="Commenter Avatar" width="90" height="90">
                                                        </figure>
                                                        <div class="comment-content">
                                                            <h4 class="comment-author">
                                                                <a href="#">John Doe</a>
                                                                <span class="comment-date">March 22, 2021 at 1:54
                                                                    pm</span>
                                                            </h4>
                                                            <div class="ratings-container comment-rating">
                                                                <div class="ratings-full">
                                                                    <span class="ratings" style="width: 60%;"></span>
                                                                    <span class="tooltiptext tooltip-top"></span>
                                                                </div>
                                                            </div>
                                                            <p>pellentesque habitant morbi tristique senectus et. In
                                                                dictum non consectetur a erat.
                                                                Nunc ultrices eros in cursus turpis massa tincidunt ante
                                                                in nibh mauris cursus mattis.
                                                                Cras ornare arcu dui vivamus arcu felis bibendum ut
                                                                tristique.</p>
                                                            <div class="comment-action">
                                                                <a href="#"
                                                                    class="btn btn-secondary btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                    <i class="far fa-thumbs-up"></i>Helpful (1)
                                                                </a>
                                                                <a href="#"
                                                                    class="btn btn-dark btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                    <i class="far fa-thumbs-down"></i>Unhelpful (0)
                                                                </a>
                                                                <div class="review-image">
                                                                    <a href="#">
                                                                        <figure>
                                                                            <img src="assets/images/products/default/review-img-1.jpg"
                                                                                width="60" height="60"
                                                                                alt="Attachment image of John Doe's review on Electronics Black Wrist Watch"
                                                                                data-zoom-image="assets/images/products/default/review-img-1.jpg" />
                                                                        </figure>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="comment">
                                                    <div class="comment-body">
                                                        <figure class="comment-avatar">
                                                            <img src="assets/images/agents/2-100x100.png"
                                                                alt="Commenter Avatar" width="90" height="90">
                                                        </figure>
                                                        <div class="comment-content">
                                                            <h4 class="comment-author">
                                                                <a href="#">John Doe</a>
                                                                <span class="comment-date">March 22, 2021 at 1:52
                                                                    pm</span>
                                                            </h4>
                                                            <div class="ratings-container comment-rating">
                                                                <div class="ratings-full">
                                                                    <span class="ratings" style="width: 80%;"></span>
                                                                    <span class="tooltiptext tooltip-top"></span>
                                                                </div>
                                                            </div>
                                                            <p>Nullam a magna porttitor, dictum risus nec, faucibus
                                                                sapien.
                                                                Ultrices eros in cursus turpis massa tincidunt ante in
                                                                nibh mauris cursus mattis.
                                                                Cras ornare arcu dui vivamus arcu felis bibendum ut
                                                                tristique.</p>
                                                            <div class="comment-action">
                                                                <a href="#"
                                                                    class="btn btn-secondary btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                    <i class="far fa-thumbs-up"></i>Helpful (1)
                                                                </a>
                                                                <a href="#"
                                                                    class="btn btn-dark btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                    <i class="far fa-thumbs-down"></i>Unhelpful (0)
                                                                </a>
                                                                <div class="review-image">
                                                                    <a href="#">
                                                                        <figure>
                                                                            <img src="assets/images/products/default/review-img-2.jpg"
                                                                                width="60" height="60"
                                                                                alt="Attachment image of John Doe's review on Electronics Black Wrist Watch"
                                                                                data-zoom-image="assets/images/products/default/review-img-2-800x900.jpg" />
                                                                        </figure>
                                                                    </a>
                                                                    <a href="#">
                                                                        <figure>
                                                                            <img src="assets/images/products/default/review-img-3.jpg"
                                                                                width="60" height="60"
                                                                                alt="Attachment image of John Doe's review on Electronics Black Wrist Watch"
                                                                                data-zoom-image="assets/images/products/default/review-img-3-800x900.jpg" />
                                                                        </figure>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane" id="helpful-negative">
                                            <ul class="comments list-style-none">
                                                <li class="comment">
                                                    <div class="comment-body">
                                                        <figure class="comment-avatar">
                                                            <img src="assets/images/agents/3-100x100.png"
                                                                alt="Commenter Avatar" width="90" height="90">
                                                        </figure>
                                                        <div class="comment-content">
                                                            <h4 class="comment-author">
                                                                <a href="#">John Doe</a>
                                                                <span class="comment-date">March 22, 2021 at 1:21
                                                                    pm</span>
                                                            </h4>
                                                            <div class="ratings-container comment-rating">
                                                                <div class="ratings-full">
                                                                    <span class="ratings" style="width: 60%;"></span>
                                                                    <span class="tooltiptext tooltip-top"></span>
                                                                </div>
                                                            </div>
                                                            <p>In fermentum et sollicitudin ac orci phasellus. A
                                                                condimentum vitae
                                                                sapien pellentesque habitant morbi tristique senectus
                                                                et. In dictum
                                                                non consectetur a erat. Nunc scelerisque viverra mauris
                                                                in aliquam sem fringilla.</p>
                                                            <div class="comment-action">
                                                                <a href="#"
                                                                    class="btn btn-secondary btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                    <i class="far fa-thumbs-up"></i>Helpful (0)
                                                                </a>
                                                                <a href="#"
                                                                    class="btn btn-dark btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                    <i class="far fa-thumbs-down"></i>Unhelpful (1)
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane" id="highest-rating">
                                            <ul class="comments list-style-none">
                                                <li class="comment">
                                                    <div class="comment-body">
                                                        <figure class="comment-avatar">
                                                            <img src="assets/images/agents/2-100x100.png"
                                                                alt="Commenter Avatar" width="90" height="90">
                                                        </figure>
                                                        <div class="comment-content">
                                                            <h4 class="comment-author">
                                                                <a href="#">John Doe</a>
                                                                <span class="comment-date">March 22, 2021 at 1:52
                                                                    pm</span>
                                                            </h4>
                                                            <div class="ratings-container comment-rating">
                                                                <div class="ratings-full">
                                                                    <span class="ratings" style="width: 80%;"></span>
                                                                    <span class="tooltiptext tooltip-top"></span>
                                                                </div>
                                                            </div>
                                                            <p>Nullam a magna porttitor, dictum risus nec, faucibus
                                                                sapien.
                                                                Ultrices eros in cursus turpis massa tincidunt ante in
                                                                nibh mauris cursus mattis.
                                                                Cras ornare arcu dui vivamus arcu felis bibendum ut
                                                                tristique.</p>
                                                            <div class="comment-action">
                                                                <a href="#"
                                                                    class="btn btn-secondary btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                    <i class="far fa-thumbs-up"></i>Helpful (1)
                                                                </a>
                                                                <a href="#"
                                                                    class="btn btn-dark btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                    <i class="far fa-thumbs-down"></i>Unhelpful (0)
                                                                </a>
                                                                <div class="review-image">
                                                                    <a href="#">
                                                                        <figure>
                                                                            <img src="assets/images/products/default/review-img-2.jpg"
                                                                                width="60" height="60"
                                                                                alt="Attachment image of John Doe's review on Electronics Black Wrist Watch"
                                                                                data-zoom-image="assets/images/products/default/review-img-2-800x900.jpg" />
                                                                        </figure>
                                                                    </a>
                                                                    <a href="#">
                                                                        <figure>
                                                                            <img src="assets/images/products/default/review-img-3.jpg"
                                                                                width="60" height="60"
                                                                                alt="Attachment image of John Doe's review on Electronics Black Wrist Watch"
                                                                                data-zoom-image="assets/images/products/default/review-img-3-800x900.jpg" />
                                                                        </figure>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane" id="lowest-rating">
                                            <ul class="comments list-style-none">
                                                <li class="comment">
                                                    <div class="comment-body">
                                                        <figure class="comment-avatar">
                                                            <img src="assets/images/agents/1-100x100.png"
                                                                alt="Commenter Avatar" width="90" height="90">
                                                        </figure>
                                                        <div class="comment-content">
                                                            <h4 class="comment-author">
                                                                <a href="#">John Doe</a>
                                                                <span class="comment-date">March 22, 2021 at 1:54
                                                                    pm</span>
                                                            </h4>
                                                            <div class="ratings-container comment-rating">
                                                                <div class="ratings-full">
                                                                    <span class="ratings" style="width: 60%;"></span>
                                                                    <span class="tooltiptext tooltip-top"></span>
                                                                </div>
                                                            </div>
                                                            <p>pellentesque habitant morbi tristique senectus et. In
                                                                dictum non consectetur a erat.
                                                                Nunc ultrices eros in cursus turpis massa tincidunt ante
                                                                in nibh mauris cursus mattis.
                                                                Cras ornare arcu dui vivamus arcu felis bibendum ut
                                                                tristique.</p>
                                                            <div class="comment-action">
                                                                <a href="#"
                                                                    class="btn btn-secondary btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                    <i class="far fa-thumbs-up"></i>Helpful (1)
                                                                </a>
                                                                <a href="#"
                                                                    class="btn btn-dark btn-link btn-underline sm btn-icon-left font-weight-normal text-capitalize">
                                                                    <i class="far fa-thumbs-down"></i>Unhelpful (0)
                                                                </a>
                                                                <div class="review-image">
                                                                    <a href="#">
                                                                        <figure>
                                                                            <img src="assets/images/products/default/review-img-3.jpg"
                                                                                width="60" height="60"
                                                                                alt="Attachment image of John Doe's review on Electronics Black Wrist Watch"
                                                                                data-zoom-image="assets/images/products/default/review-img-3-800x900.jpg" />
                                                                        </figure>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                   
                </div>
            </div>
            <!-- End of Page Content -->
			<div class="container">
			
			<section class="vendor-product-section">
                                <div class="title-link-wrapper mb-4">
                                    <h4 class="title text-left">More Related Products </h4>
                                    <a href="shop.php" class="btn btn-dark btn-link btn-slide-right btn-icon-right">More
                                        Products<i class="w-icon-long-arrow-right"></i></a>
                                </div>
                                <div class="swiper-container swiper-theme swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events" data-swiper-options="{
                                    'spaceBetween': 20,
                                    'slidesPerView': 2,
                                    'breakpoints': {
                                        '576': {
                                            'slidesPerView': 3
                                        },
                                        '768': {
                                            'slidesPerView': 4
                                        },
                                        '992': {
                                            'slidesPerView': 3
                                        }
                                    }
                                }">
                                    <div class="swiper-wrapper " style="transform: translate3d(0px, 0px, 0px);" id="swiper-wrapper-44fc771f9c72ebfd" aria-live="polite">
                                        
										
										
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
				
					
												
											
			
										
										
										
										
										
										<div class="swiper-slide product swiper-slide-active" style=" margin-right: 20px;" role="group" aria-label="1 / 4">
                                            <figure class="product-media"style="width: 400; !important;width:75%;
                                                  ">
                                                <a href="product-detail.php?product_id=<?php echo $pid;?>">
                                                    <img src="img/<?php echo $img1;?>" alt="Product" width="300" height="500">
                                                    <img src="img/<?php echo $img1;?>" alt="Product" width="300" height="500">
                                                </a>
                                               <!--  <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="Add to wishlist"></a>
                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Add to Compare"></a>
                                                </div>
                                               <div class="product-action">
                                                     <a href="javascript:void(0)" data-id="<?php echo $pid; ?>"  class="btn-product btn-quickview" title="Quick View">Quick
                                                        View</a>
														
                                                </div>-->
                                            </figure>
                                            <div class="product-details">
                                                <div class="product-cat"><a href="product-detail.php?product_id=<?php echo $pid;?>"><?php echo $category_name ;?></a>
                                                </div>
                                                <h4 class="product-name"><a href="#"><?php echo $title; ?></a>
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                                </div>
                                                <div class="product-pa-wrapper">
                                                <a style="font-size:12px;" href="inquiry?product_id=<?php echo $pid ; ?>	">Click for inquiry</a>
                                                </div>
                                            </div>
                                        </div>
                                
								
								
								
								
								
								
								
								<?php
											}
											}
										?>
								
								
								
								
                           
                              
                                    </div>
                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>






                                                    



                            </section>
			
			
			
			</div>
			
			
			
			
			
			
			
			
			
			
        </main>
        <!-- End of Main -->
		
		
		
<!--footer-start -->
<?php 

 include('include/footer.php');

?>
<!--footer-end  -->


<script>
    $(document).ready(function(){
        $('#review_submit').click(function(){
            let product_id= $('#product_id').val();
            let comment= $('#comment').val();
            let author= $('#author').val();
            let email_1= $('#email_1').val();
            var frmdta = new FormData();
            frmdta.append('product_id',product_id);
            frmdta.append('comment',comment);
            frmdta.append('author',author);
            frmdta.append('email_1',email_1);
            
            $.ajax({
                url:'ajax_new',
                type: "post",
                data: frmdta,
                processData: false,
                contentType: false,
                success: function(res) {
                    if(res !='')
                    {
                        $('#comment_count').empty();
                        $('#comment_count').html(res);
                        $("#show-all").load(location.href + " #show-all");
                        $('#review_form')[0].reset();
                    }
                }

            });


        });
    });
</script>