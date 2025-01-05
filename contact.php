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
										<li >
											<a href="faq">FAQ</a>
											
										</li>
										<li >
											<a href="inquiry">Inquiry</a>
											
										</li>
                                        <li class="active">
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
                    <h1 class="page-title mb-0">Contact Us</h1>
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
                        <li class="active">  <strong>Contact Us</strong> </li>
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->
			  <div class="google-map contact-google-map mb-3 pv" id="googlemaps">
				
					<div class="container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.7538907966305!2d90.39118428666693!3d23.862871529269306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c4217683040f%3A0x8677afad0dd56f69!2s13%20Road-10%2C%20Dhaka%201230!5e0!3m2!1sen!2sbd!4v1695449668284!5m2!1sen!2sbd" width="100%" height="350px"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						
					
					
					</div>
				</div>
            <!-- Start of PageContent -->
            <div class="page-content contact-us mt-10 pt-10">
                <div class="container">
                    <section class="content-title-section mb-10">
                        <h3 class="title title-center mb-3">Contact
                            Information
                        </h3>
                        <p class="text-center">Lorem ipsum dolor sit amet,
                            consectetur
                            adipiscing elit, sed do eiusmod tempor incididunt ut</p>
                    </section>
                    <!-- End of Contact Title Section -->

                    <section class="contact-information-section ">
                        <div class=" swiper-container swiper-theme " data-swiper-options="{
                            'spaceBetween': 20,
                            'slidesPerView': 1,
                            'breakpoints': {
                                '480': {
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
                            <div class="swiper-wrapper row cols-xl-6 cols-md-3 cols-sm-2 cols-1">
                                <div class=" icon-box text-center icon-box-primary"style="width: 424.5px;">
                                    <span class="icon-box-icon icon-email">
                                        <i class="w-icon-envelop-closed"></i>
                                    </span>
                                    <div class="icon-box-content">
                                        <h4 class="icon-box-title">E-mail Address</h4>
                                        <p>infoneobazaar@gmail.com</p>
                                    </div>
                                </div>
                                <div class="swiper-slide icon-box text-center icon-box-primary">
                                    <span class="icon-box-icon icon-headphone">
                                        <i class="w-icon-headphone"></i>
                                    </span>
                                    <div class="icon-box-content">
                                        <h4 class="icon-box-title">Phone Number</h4>
                                        <p>(+880) 185-989-3939</p>
                                    </div>
                                </div>
                                <div class="swiper-slide icon-box text-center icon-box-primary">
                                    <span class="icon-box-icon icon-map-marker">
                                        <i class="w-icon-map-marker"></i>
                                    </span>
                                    <div class="icon-box-content">
                                        <h4 class="icon-box-title">Address</h4>
                                        <p style="line-height: 30px">House 13, 4th Floor, Road 10, Sector 06 <br /> Uttara, Dhaka-1230 Bangladesh</p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </section>
                    <!-- End of Contact Information section -->

                    <hr class="divider mb-10 pb-1">

                 
                    <!-- End of Contact Title Section -->
                            <div class="col-lg-12 mb-8" id="contact">
                                <h4 class="title mb-3 title-center">Send Us a Message</h4>
                                <form class="form contact-us-form" action="#" method="post">
                                    <div class="form-group">
                                        <label for="username">Your Name</label>
                                        <input type="text" id="username" name="username"
                                            class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="email_1">Your Email</label>
                                        <input type="email" id="email_1" name="email_1"
                                            class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="message">Your Message</label>
                                        <textarea id="message" name="message" cols="30" rows="5"
                                            class="form-control"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-dark btn-rounded">Send Now</button>
                                </form>
                            </div>
                        </div>
                    </section>
                    <!-- End of Contact Section -->
                </div>

               
            </div>
            <!-- End of PageContent -->
        </main>
        <!-- End of Main -->

<?php include('include/footer.php'); 
 ?>