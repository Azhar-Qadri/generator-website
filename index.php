<?php $page='home'; include('include/header.php'); 

//Display Products 
$sql="select * from product  where status=1  order by p_id desc LIMIT 4";
$product=mysqli_query($con,$sql);


//Display Client 
$client_sql=mysqli_query($con,"select * from client where status=1 order by id desc");

//Display Client Reviews
$client_reviews=mysqli_query($con,"SELECT * FROM `client_review`  where status=1 order by id desc");


?>
<?php include('include/slider.php'); ?>


<!-- BODY START -->
<!-- Innovation Section -->
	<section class="innovation-section">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Content Column -->
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<!-- Sec Title -->
						<div class="sec-title wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="title">We are Solustrid</div>
							<h2>Transforming <br> With Innovations</h2>
						</div>
						<div class="text">Incepted in the year 2001, “Shree Ram Generator Sales And Service” is a distinguished wholesaler offering an enormous consignment of Portable Generators,Diesel Generator etc. Immensely acclaimed in the industry owing to their preciseness, these are presented by us in standard forms to our clients. These are inspected sternly to retain their optimum qua   lity.</div>
						<div class="bold-text">Under the administration of our guide “Mr. Vishnudev Kumar Singh”, we have garnered a reputed position in this highly competitive industry.</div>
						
						<!-- Counter Box -->
						<div class="counter-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
							
							<div class="fact-counter">
								<div class="clearfix">
									
									<!--Column-->
									<div class="column counter-column col-lg-4 col-md-4 col-sm-12">
										<div class="inner">
											<div class="count-outer count-box">
												<span class="count-text" data-speed="2000" data-stop="21">0</span>+
												<h4 class="counter-title">Years Experience</h4>
											</div>
										</div>
									</div>
									
									<!--Column-->
									<div class="column counter-column col-lg-4 col-md-4 col-sm-12">
										<div class="inner">
											<div class="count-outer count-box">
												<span class="count-text" data-speed="2500" data-stop="36">0</span>
												<h4 class="counter-title">Industries Served</h4>
											</div>
										</div>
									</div>
									
									<!--Column-->
									<div class="column counter-column col-lg-4 col-md-4 col-sm-12">
										<div class="inner">
											<div class="count-outer count-box">
												<span class="count-text" data-speed="3000" data-stop="105">0</span>
												<h4 class="counter-title">Factories Built</h4>
											</div>
										</div>
									</div>
									
								</div>
								
							</div>
							
						</div>
						
					</div>
				</div>
				
				<!-- Imaages Column -->
				<div class="images-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="image wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
							<img src="images/gallery/21.jpg" alt="" />
						</div>
						<div class="image wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
							<img src="images/gallery/2.png" alt="" />
														
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Innovation Section -->
	
	<!-- Services Section -->
	<section class="services-section">
		<div class="auto-container">
			<div class="row clearfix">
				
				 <?php while ($list=mysqli_fetch_assoc($product)) { ?>
				<!-- Services Block -->
				<div class="services-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" style="max-height:350px" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="big-icon flaticon-settings-4"></div>
						<div class="icon-box">
                <img style="height: 150px"src="admin/media/product/<?php echo $list['image']; ?>" alt="" class="img-a img-fluid">
							
						</div>
						<h3><a href="#"><?php echo $list['name'] ?></a></h3>
						<a class="arrow" href="detial.php?p_id=<?php echo $list['p_id']; ?>"><span class="icon flaticon-next"></span></a>
					</div>
				</div>
          <?php } ?>
			</div>
		</div>
	</section>
	<!-- End Services Section -->
	
   <!-- Clients Reviews Section -->
	<section class="clients-section">
		<div class="auto-container">
			<div class="logo-icon flaticon-settings-4"></div>
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="title">We are Shree Ram</div>
				<h2>Client’s Reviews</h2>
			</div>
			
			<div class="single-item-carousel owl-carousel owl-theme">
				 <?php while ($reviews_display=mysqli_fetch_assoc($client_reviews)) { ?>
				
				<!-- Testimonial Block -->
				<div class="testimonial-block">
					<div class="inner-box">
						<div class="image-outer">
								<div>
								<img style=" border-radius: 50%;" src="admin/media/client_review/<?php echo $reviews_display['image']; ?>">
							</div>
						</div>
						
						<div style="margin-top: 10%" class="text"><h2><?php echo $reviews_display['review']; ?></h2></h3></div>
						<div class="location"><h2><b><?php echo $reviews_display['name']; ?></b></h2></div>
					</div>
				</div>
			<?php } ?>
				
			</div>
			
		</div>
	</section>
	<!-- End Clients Section -->

	<br>
	<br>
	<br>
	<br>

	<!-- Factory Section -->
	<section class="factory-section" style="background-image:url(images/background/2.png)">
		<div class="auto-container">
			<!-- Title Box -->
			<div class="title-box">
				<h2>We are committed to provide safe <br> industrial solutions to many factories</h2>
				<div class="text">At Solustrid, Our goal is to generate oriented sales by our staff  members which enables us to meet the clients expectations in <br> timely manner ipsum dolor sit amet consectetur adipisicing elit sed ipsum eiusmod tempor incididunt labore</div>
			</div>
			<div class="factories-icons-carousel owl-carousel owl-theme">
				 <?php while ($client=mysqli_fetch_assoc($client_sql)) { ?>
				<div class="factory-icon">
                <a href="#"><img style="height: 150px"src="admin/media/client/<?php echo $client['image']; ?>" alt="" class="img-a img-fluid"></a>
				</div>
			    <?php } ?>

			</div>
		</div>
	</section>
	<!-- End Factory Section -->
	
	<!--Newsleter Section-->
    <section class="newsletter-section wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
    	<div class="auto-container">
        	<div class="inner-container">
            	<div class="row clearfix">
                	
                    <!--Title Column-->
                    <div class="title-column col-lg-6 col-md-12 col-sm-12">
                    	<div class="inner-column">
                        	<h2>Stay Updated With Our Newsletter</h2>
                        </div>
                    </div>
                    
                    <!--Form Column-->
                    <div class="form-column col-lg-6 col-md-12 col-sm-12">
                    	<div class="inner-column">
                        	
                            <!--Subscribe Form-->
                            <div class="subscribe-form">
                                <form method="post" action="http://t.commonsupport.xyz/solustrid/contact.html">
                                    <div class="form-group">
										<span class="icon far fa-envelope"></span>
                                        <input type="email" name="email" value="" placeholder="Email address ..." required>
                                        <button type="submit" class="theme-btn submit-btn">Submit</button>
                                    </div>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!--End Newsleter Section-->
	
<!-- BODY END -->
<?php include('include/footer.php'); ?>

</div>  
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
<!--Scroll to top-->

<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--Revolution Slider-->
<script src="plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="js/main-slider-script.js"></script>
<!--Revolution Slider-->

<script src="js/jquery-ui.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/appear.js"></script>
<script src="js/script.js"></script>
</body>

<!-- Mirrored from t.commonsupport.xyz/solustrid/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Feb 2021 09:15:30 GMT -->
</html>