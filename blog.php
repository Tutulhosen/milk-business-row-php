
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
            <!-- Start of Page Header -->
                       <div class="page-header"style="height: 11rem !important;margin-top:10px !important;background-color:#F1F1F1 !important">
                <div class="container">
                    <h1 class="page-title mb-0">Blog</h1>
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




            <!-- Start of Page Content -->
            <div class="page-content">
                <div class="container">
                    <div class="row gutter-lg mb-10">
                        <div class="main-content">
						  <?php   
										  $blog_select = mysqli_query($con,"SELECT * FROM post order by post_list desc");
										
										
										while($Sel_divide_post_part = mysqli_fetch_array($blog_select)){
											
											
								$Sel_divide_post_part['time'];
									 $title = $Sel_divide_post_part['post_title'];
										$date = $Sel_divide_post_part['date'];
											$post_id = $Sel_divide_post_part['post_list'];	
											
												$post_description = $Sel_divide_post_part['post_description']; 
											
											?>
						
						
						
						
                            <article class="post post-classic overlay-zoom mb-4">
                                <figure class="post-media br-sm">
                                    <a href="post-single.php?post_id=<?php echo $post_id; ?>">
                                        <img src="admin/img/post/<?php  echo $Sel_divide_post_part['post_image']; ?>" width="930"
                                            height="500" alt="blog">
                                    </a>
                                </figure>
                                <div class="post-details">
                                    <div class="post-cats text-primary">
                                       <!-- <a href="#">Fashion</a>-->
                                    </div>
                                    <h4 class="post-title">
                                        <a href="post-single.php?post_id=<?php echo $post_id; ?>"><?php  echo $title;?></a>
                                    </h4>
                                    <div class="post-content">
                                        <p>
										<?php $str = $post_description;
					echo substr($str, 0, 280).''?>
										
										
                                        <a style="padding-top: 0.3rem;
  text-transform: lowercase;
  font-weight: 400;
  font-size: 1.3rem;
  letter-spacing: -0.025em;"href="post-single.php?post_id=<?php echo $post_id; ?>" class=" btn-link btn-primary">(read more)</a>
                                  </p>  </div>
                                    <div class="post-meta">
                                        by <a href="#" class="post-author">Admin</a>
                                        - <a href="#" class="post-date"><?php echo $date; ?></a>
                                    </div>
                                </div>
                            </article>
                        <?php  }?>
                        
                      
                     <?php  $total_post = mysqli_num_rows($blog_select);
					 if($total_post>3){
					 
					 ?>
                            <ul class="pagination justify-content-center pb-2">
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
					 <?php } ?>
                        </div>
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

     <!--  footer-start of here-->
	 
	 <?php include('include/footer.php'); ?>
	 
	 
	<!--  footer-end  of here-->