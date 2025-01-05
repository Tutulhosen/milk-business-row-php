
<?php include('include/header.php'); ?>
		
		<nav class="main-nav">
									<ul class="menu active-underline">
										<li>
											<a href="index.php">Home</a>
										</li>
										<li >
											<a  href="shop.php">Shop</a>

								  </li>
										<li>
											<a href="about-us.php">About Us</a>
										   
										</li>
											<li>
											<a href="contact.php">Contact Us</a>
										   
										</li>
										<li class="active">
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
				</div>
		
		
		
		
		
        <!-- Start of Main -->
        <main class="main">
            <!-- Start of Page Header -->
                       <div class="page-header"style="height: 11rem !important;margin-top:10px !important;background-color:#F1F1F1 !important">
                <div class="container">
                    <h1 class="page-title mb-0">Classic</h1>
                </div>
            </div>
            <!-- End of Page Header -->

            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav mb-6">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li> <strong><a href="blog.php">Blog</a></strong> </li>
                        <li> <strong><a href="blog.php">Category</a></strong> </li>
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->
<?php 
		if(isset($_GET['post_id'])){
			echo $search_post_id = $_GET['post_id'];
			$post_select = mysqli_query($con,"SELECT * FROM post WHERE post_list= '$search_post_id'");
			$post_part = mysqli_fetch_array($post_select);
			 $search_post_id;
			 $date = $post_part['date'];
			 $title = $post_part['post_title'];
			  $img = $post_part['post_image'];
			  $desc = $post_part['post_description'];
		}
		?>
		
            <!-- Start of Page Content -->
            <div class="page-content mb-8">
                <div class="container">
                    <div class="row gutter-lg">
                        <div class="main-content post-single-content">
                            <div class="post post-grid post-single">
                                <figure class="post-media br-sm">
                                    <img src="admin/img/post/<?php echo $img ; ?>" alt="Blog" width="930" height="500" />
                                </figure>
                                <div class="post-details">
                                    <div class="post-meta">
                                        by <a href="#" class="post-author">Admin </a>
                                        - <a href="#" class="post-date">03.01.2021<?php echo $date;?></a>
                                        <a href="#" class="post-comment"><i class="w-icon-comments"></i><span>0</span>Comments</a>
                                    </div>
                                    <h2 class="post-title"><a href="#"><?php echo $title; ?></a></h2>
                                    <div class="post-content">
                                      <?php 
									  
									  
									  
									  echo $desc;
									  
									  ?>
                                    </div>
                                </div>
                            </div>
                            <!-- End Post -->
                          
                            <!-- End Blockquote -->
                       
                           
                            <!-- End Tag -->
                            <div class="social-links mb-10">
                                <div class="social-icons social-no-color border-thin">
                                    <a href="#" class="social-icon social-facebook w-icon-facebook"></a>
                                    <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
                                    <a href="#" class="social-icon social-pinterest w-icon-pinterest"></a>
                                    <a href="#" class="social-icon social-instagram w-icon-instagram"></a>
                                    <a href="#" class="social-icon social-youtube w-icon-youtube"></a>
                                </div>
                            </div>
                            <!-- End Social Links -->
                           
                            <!-- End Post Author Detail -->
                            <div class="post-navigation">
                                <div class="nav nav-prev">
                                   
                                </div>
                                <div class="nav nav-next"> 
                                   
                                </div>
                            </div>
                            <!-- End Post Navigation -->
                            <h4 class="title title-lg font-weight-bold mt-10 pt-1 mb-5">Related Posts</h4>
                            <div class="swiper">
                                <div class="post-slider swiper-container swiper-theme nav-top pb-2" data-swiper-options="{
                                    'spaceBetween': 20,
                                    'slidesPerView': 1,
                                    'breakpoints': {
                                        '576': {
                                            'slidesPerView': 2
                                        },
                                        '768': {
                                            'slidesPerView': 3
                                        },
                                        '992': {
                                            'slidesPerView': 2
                                        },
                                        '1200': {
                                            'slidesPerView': 3
                                        }
                                    }
                                }">
                                    <div class="swiper-wrapper row cols-lg-3 cols-md-4 cols-sm-3 cols-xs-2 cols-1">

                                    <?php   
										  $blog_select = mysqli_query($con,"SELECT * FROM post order by post_list desc limit 5 ");
										
										
										while($Sel_divide_post_part = mysqli_fetch_array($blog_select)){
											
											
								$Sel_divide_post_part['time'];
									 $title = $Sel_divide_post_part['post_title'];
										$date = $Sel_divide_post_part['date'];
											$post_id = $Sel_divide_post_part['post_list'];	
											$post_image= $Sel_divide_post_part['post_image_thumbnail'];	
												$post_description = $Sel_divide_post_part['post_description']; 
											
											?>

                                        <div class="swiper-slide post post-grid">
                                            <figure class="post-media br-sm">
                                                <a href="post-single?post_id=<?php echo $post_id; ?>">
                                                    <img src="admin/img/post/<?php  echo $post_image;?>" alt="Post" width="296"
                                                        height="190" style="background-color: #bcbcb4;" />
                                                </a>
                                            </figure>
                                            <div class="post-details text-center">
                                                <div class="post-meta">
                                                    by <a href="post-single?post_id=<?php echo $post_id;  ?>" class="post-author">Admin</a>
                                                    - <a href="post-single?post_id=<?php echo $post_id;  ?>" class="post-date"><?php echo $date; ?></a>
                                                </div>
                                                <h4 class="post-title mb-3"><a href="post-single?post_id=<?php echo $post_id;  ?>"><?php echo  $title; ?></a></h4>
                                                <a href="post-single?post_id=<?php echo $post_id;  ?>" class="btn btn-link btn-dark btn-underline font-weight-normal">Read More<i class="w-icon-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                      <?php }?>
                                      
                                    </div>
                                    <button class="swiper-button-next"></button>
                                    <button class="swiper-button-prev"></button>
                                </div>
                            </div>
                            <!-- End Related Posts -->
                            <?php 
 
 // conect with database
 $post_id = $_GET['post_id'];
  
 // get all comments of post
 $result = mysqli_query($con, "SELECT * FROM comments WHERE post_id = " . $post_id);
 $total_comments =  mysqli_num_rows($result);



?>
                            <h4 class="title title-lg font-weight-bold pt-1 mt-10"><?php  echo  $total_comments?> Comments</h4>

                            <ul class="comments list-style-none pl-0"id="main_comment">
                            <?php


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
                                    

                                <li class="comment"id="show-all">
                                    <div class="comment-body">
                                        <figure class="comment-avatar">
                                            <img src="assets/images/blog/single/1.png" alt="Avatar" width="90" height="90" />
                                        </figure>
                                        <div class="comment-content">
                                            <h4 class="comment-author font-weight-bold">
                                                <a href="#"><?php echo $comment->name; ?></a>
                                                <span class="comment-date"><?php echo date("F d, Y h:i a", strtotime($comment->created_at)); ?></span>
                                            </h4>
                                            <p><?php echo $comment->comment; ?></p>
                                            
                                             <div class="btn btn-dark btn-link btn-underline btn-icon-right btn-reply" onclick="showReplyForReplyForm(this);" data-name="<?php echo $comment->name; ?>" data-id="<?php echo $comment->id; ?>"> Reply<i class="w-icon-long-arrow-right"></i></div>
                                             
                                        </div>
                                    </div>
                                </li>
                                    <?php 
                                        foreach ($comment->replies as $reply): 


?>

                                
                                    <li class="comment"style="margin-left: 9rem;">
                                        <div class="comment-body">
                                            <figure class="comment-avatar">
                                                <img src="assets/images/blog/single/2.png" alt="Avatar" width="90" height="90" />
                                            </figure>
                                            <div class="comment-content">
                                                <h4 class="comment-author font-weight-bold">
                                                    <a href="#"><?php echo $reply->name; ?></a>
                                                    <span class="comment-date"><?php echo date("F d, Y h:i a", strtotime($reply->created_at)); ?></span>
                                                </h4>
                                                <p><?php echo $reply->comment; ?></p>
                                                <div class="btn btn-dark btn-link btn-underline btn-icon-right btn-reply" onclick="showReplyForReplyForm(this);" data-name="<?php echo $reply->name; ?>" data-id="<?php echo $comment->id; ?>"> Reply<i class="w-icon-long-arrow-right"></i></div>
                                            </div>  
                                        </div>
                                    </li> 
                                  
                              <?php   endforeach; ?> 

                                    
                                <form action="" method="post" id="form-<?php echo $comment->id; ?>" style="display: none;">
                                    
                                    <input type="hidden" name="reply_num" id="comment_num" value="<?php echo $comment_id = $comment->id; ?>">
                                    

                                    <input type="hidden" name="post_id" id="do_post_id" value="<?php echo $post_id; ?>" required>
                                    <div class="row">
                                    <div class="col-sm-6 mb-4">
                                        <input type="text" class="form-control" id="do_author"placeholder="Enter Your Name <?php echo $comment->id; ?>"name="name" id="name"required>
                                    </div>
                                    <div class="col-sm-6 mb-4">
                                        <input type="text" class="form-control" placeholder="Enter Your Email" name="email"  id="do_email_1"required>
                                    </div>
                                </div>
                                <textarea cols="10" rows="2" placeholder="Write a Comment" class="form-control mb-4"name="comment" id="do_comment"Required></textarea>
                                <?php $post_id = $search_post_id;?>
                                <input type="hidden" name="post_id" value="<?php echo $post_id; ?>" required>
                                <input type="hidden" id="comment_number" class="comment_number" name="comment_id" value="<?php echo $comment_id; ?>" required>
                               
                                <input type="button" class="btn btn-dark btn-rounded btn-icon-right btn-comment"value="Reply" id="do_reply" name="do_reply">
                                </form>

                         
                                
                                </li>
                                <?php endforeach; ?>

                                <?php 
                                
                                
                                if (isset($_POST["do_reply"]))
    {
        $name = mysqli_real_escape_string($con, $_POST["name"]);
        $email = mysqli_real_escape_string($con, $_POST["email"]);
        $comment = mysqli_real_escape_string($con, $_POST["comment"]);
        $post_id = mysqli_real_escape_string($con, $_POST["post_id"]);
        $reply_of = mysqli_real_escape_string($con, $_POST["reply_of"]);

        $result = mysqli_query($con, "SELECT * FROM comments WHERE id = " . $reply_of);
        if (mysqli_num_rows($result) > 0)
        {
            $row = mysqli_fetch_object($result);

            // sending email
            /*$headers = 'From: YourWebsite <no-reply@yourwebsite.com>' . "\r\n";
            $headers .= 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            
            $subject = "Reply on your comment";

            $body = "<h1>Reply from:</h1>";
            $body .= "<p>Name: " . $name . "</p>";
            $body .= "<p>Email: " . $email . "</p>";
            $body .= "<p>Reply: " . $comment . "</p>";

            mail($row->email, $subject, $body, $headers);*/
        }

        mysqli_query($con, "INSERT INTO comments(name, email, comment, post_id, created_at, reply_of) VALUES ('" . $name . "', '" . $email . "', '" . $comment . "', '" . $post_id . "', NOW(), '" . $reply_of . "')");
        echo "<p>Reply has been posted.</p>";
    }
                                
                                
                                
                                
                                
                                
                                ?>
                            <!-- 
                                <li class="comment">
                                    <div class="comment-body">
                                        <figure class="comment-avatar">
                                            <img src="assets/images/blog/single/1.png" alt="Avatar" width="90" height="90" />
                                        </figure>
                                        <div class="comment-content">
                                            <h4 class="comment-author font-weight-bold">
                                                <a href="#">John Doe</a>
                                                <span class="comment-date">Aug 23, 2021 at 10:46 am</span>
                                            </h4>
                                            <p>Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl.arcu fer
                                                ment umet, dapibus sed, urna.</p>
                                            <a href="#" class="btn btn-dark btn-link btn-underline btn-icon-right btn-reply">Reply<i class="w-icon-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>-->
                            <!-- End Comments -->


                            <form class="reply-section pb-4"method="post"id="commentform">
                                <h4 class="title title-md font-weight-bold pt-1 mt-10 mb-0">Leave a Reply</h4>
                                <p>Your email address will not be published. Required fields are marked</p>
                                <div class="row">
                                    <div class="col-sm-6 mb-4">
                                        <input type="text" class="form-control" placeholder="Enter Your Name"name="name" id="author"required>
                                    </div>
                                    <div class="col-sm-6 mb-4">
                                        <input type="text" class="form-control" placeholder="Enter Your Email" name="email"  id="mainemail_1"required>
                                    </div>
                                </div>
                              
                                <textarea cols="30" rows="6" placeholder="Write a Comment" class="form-control mb-4"name="comment" id="maincomment"></textarea>
                                                
                                <?php $post_id = $search_post_id;?>
                                <input type="hidden" name="post_id" id="product_id"  value="<?php echo $post_id; ?>" required>
                                <button id="formsubmit"class="btn btn-dark btn-rounded btn-icon-right btn-comment"type="button" name="postcomment">Post Comment<i class="w-icon-long-arrow-right"></i></button>
                              
                            </form>
                                    <?php  $post_id = 1;
 
                                                        if (isset($_POST["post_comment"]))
                                                        {
                                                            $name = mysqli_real_escape_string($con, $_POST["name"]);
                                                            $email = mysqli_real_escape_string($con, $_POST["email"]);
                                                            $comment = mysqli_real_escape_string($con, $_POST["comment"]);
                                                            $post_id = mysqli_real_escape_string($con, $_POST['post_id']);
                                                            $reply_of = 0;
                                                        
                                                            mysqli_query($con, "INSERT INTO comments(name, email, comment, post_id, created_at, reply_of) VALUES ('" . $name . "', '" . $email . "', '" . $comment . "', '" . $post_id . "', NOW(), '" . $reply_of . "')");
                                                            echo "<p>Comment has been posted.</p>";
                                                        }
 
?>

                        </div>
                        <!-- End of Main Content -->
                        <aside class="sidebar right-sidebar blog-sidebar sidebar-fixed sticky-sidebar-wrapper">
                            <div class="sidebar-overlay">
                                <a href="#" class="sidebar-close">
                                    <i class="close-icon"></i>
                                </a>
                            </div>
                            <a href="#" class="sidebar-toggle">
                                <i class="fas fa-chevron-left"></i>
                            </a>
                            <div class="sidebar-content">
                                <div class="sticky-sidebar">
                                    <div class="widget widget-search-form">
                                        <div class="widget-body">
                                            <form action="#" method="GET" class="input-wrapper input-wrapper-inline">
                                                <input type="text" class="form-control"
                                                    placeholder="Search in Blog" autocomplete="off" required>
                                                <button class="btn btn-search"><i
                                                        class="w-icon-search"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- End of Widget search form -->
                                   
                                    <!-- End of Widget categories -->
                                    <div class="widget widget-posts">
                                        <h3 class="widget-title bb-no">Popular Posts</h3>
                                        <div class="widget-body">
                                            <div class="swiper">
                                                <div class="swiper-container swiper-theme nav-top" data-swiper-options="{
                                                    'spaceBetween': 20,
                                                    'slidesPerView': 1
                                                }">
                                                    <div class="swiper-wrapper row cols-1">
                                                    <?php   
										  $blog_select = mysqli_query($con,"SELECT * FROM post order by post_list desc limit 5 ");
										
										
										while($Sel_divide_post_part = mysqli_fetch_array($blog_select)){
											
											
								$Sel_divide_post_part['time'];
									 $title = $Sel_divide_post_part['post_title'];
										$date = $Sel_divide_post_part['date'];
											$post_id = $Sel_divide_post_part['post_list'];	
											$post_image= $Sel_divide_post_part['post_image_thumbnail'];	
												$post_description = $Sel_divide_post_part['post_description']; 
											
											?>
                                                        <div class="swiper-slide widget-col">
                                                           
                                                            <div class="post-widget mb-4">
                                                                <figure class="post-media br-sm">
                                                                    <a href="post-single?post_id=<?php echo $post_id; ?>"> <img src="admin/img/post/<?php  echo $post_image;?>" alt="150" height="150" /></a>
                                                                   
                                                                </figure>
                                                                <div class="post-details">
                                                                    <div class="post-meta">
                                                                        <a href="post-single?post_id=<?php echo $post_id; ?>" class="post-date"><?php echo $date;?></a>
                                                                    </div>
                                                                    <h4 class="post-title">
                                                                        <a href="post-single?post_id=<?php echo $post_id; ?>"><?php echo $title; ?></a>
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                          
                                                        </div>

                                                        <?php } ?>
                                                      <!--  <div class="swiper-slide widget-col">
                                                        
                                                           
                                                            <div class="post-widget mb-2">
                                                                <figure class="post-media br-sm">
                                                                    <img src="assets/images/blog/sidebar/6.jpg" alt="150" height="150" />
                                                                </figure>
                                                                <div class="post-details">
                                                                    <div class="post-meta">
                                                                        <a href="#" class="post-date">March 1, 2021</a>
                                                                    </div>
                                                                    <h4 class="post-title">
                                                                        <a href="post-single.html">Comes a cool blog post with Images</a>
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>-->
                                                    </div>
                                                    <div class="swiper-button-next"></div>
                                                    <div class="swiper-button-prev"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                 
                                    <div class="widget widget-calendar">
                                        <h3 class="widget-title bb-no">Calendar</h3>
                                        <div class="widget-body">
                                            <div class="calendar-container" data-calendar-options="{
                                                'dayExcerpt': 1
                                            }"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
            <!-- End of Page Content -->
        </main>
        <!-- End of Main -->

        <!-- Start of Footer -->
        <footer class="footer appear-animate" data-animation-options="{
            'name': 'fadeIn'
        }">
		
		<?php include('include/footer.php'); ?>
        <script>
    $(document).ready(function(){
        $(document).on('click','#formsubmit', function(e) {
            e.preventDefault();
            let post_id= $('#product_id').val();
            let comment= $('#maincomment').val();
            let name= $('#author').val();
            let email_1= $('#mainemail_1').val();
            var frmdta = new FormData();
            frmdta.append('post_id',post_id);
            frmdta.append('comment',comment);
            frmdta.append('author',name);
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
                       console.log(res);
                        $('#test').html(res);
                        $("#main_comment").load(location.href + " #main_comment");
                        $('#commentform')[0].reset();
                    }
                }

            });



        });


        $(document).on('click','#do_reply', function(e) {
            e.preventDefault();
            let do_post_id= $('#do_post_id').val();
            let do_comment= $('#do_comment').val();
            let do_name= $('#do_author').val();
            let do_email_1= $('#do_mainemail_1').val();
            let do_reply_of= $('#comment_number').val();
                alert(do_reply_of);
            var frmdta = new FormData();
            frmdta.append('do_post_id',do_post_id);
            frmdta.append('do_comment',do_comment);
            frmdta.append('do_author',do_name);
            frmdta.append('do_email_1',do_email_1);
            frmdta.append('do_reply_of',do_reply_of);


            
          $.ajax({
                url:'ajax_new',
                type: "post",
                data: frmdta,
                processData: false,
                contentType: false,
                success: function(res) {
                    if(res !='')
                    {
                       console.log(res);
                       
                        $("#main_comment").load(location.href + " #main_comment");
                        $('#commentform')[0].reset();
                    }
                }

            }); 



        });
    });
</script>