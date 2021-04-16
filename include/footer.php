<?php 
$cat_sql="select * from categories where status=1 order by cat_name";
$cat_result=mysqli_query($con,$cat_sql);
$cat_res=mysqli_query($con,$cat_sql);

 ?>
	<script type="text/javascript">
  function googleTranslateElementInit() {
    new google.translate.TranslateElement({pageLanguage: 'en' , includedLanguages : 'en,hi,gu'}, 'google_translate_element');
  }

</script>
<footer class="main-footer">
    
		<div class="auto-container">
        
        	<!--Widgets Section-->
            <div class="widgets-section">
            	<div class="row clearfix">
                	
					<!--big column-->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">
						
							<!--Footer Column-->
							<div class="footer-column col-lg-6 col-md-6 col-sm-12">
								<div class="footer-widget about-widget">
									<div class="logo">
										<a href="index.php"><img src="images/footer-logo.png" alt="" /></a>
									</div>
									<div class="text">At Shree Ram, Our goal is to generate oriented sales by our staff members which enables us to meet the clients expectations in timely manner with full of Trust.</div>
									<a href="about.php"  target="_blank" class="theme-btn btn-style-four">About Company</a>
								</div>
							</div>
							
							<!--Footer Column-->
							<div class="footer-column col-lg-6 col-md-6 col-sm-12">
								<div class="footer-widget services-widget">
									<h2>Our Services</h2>
									<ul class="footer-service-list">
										<li>
							<?php 
                           $cat_arr=array();
                           while($row=mysqli_fetch_assoc($cat_result)){ ?>
                        <a href="service.php?cat_id=<?php echo $row['cat_id'] ?>"> &#10687; <?php echo $row['cat_name'] ?></a><br>
                        <?php 
                           }
                          ?>
										</li>
									</ul>
								</div>
							</div>
							
						</div>
					</div>
					
					<!--big column-->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">
						
							<!--Footer Column-->
							<div class="footer-column col-lg-7 col-md-6 col-sm-12">
								<div class="footer-widget post-widget">
									<h2>Facebook Page</h2>
									
									<!--News Widget Block-->
									<div class="news-widget-block">
											 <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fwiwebmasters&tabs=timeline&width=300&height=200&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="300" height="200" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe> 
											<!-- <div class="taggbox-container" style=" width:300px;height:800px;overflow: auto;"><div class="taggbox-socialwall" data-wall-id="50234" view-url="https://widget.taggbox.com/50234">  </div><script src="https://widget.taggbox.com/embed.min.js" type="text/javascript"></script></div> -->
								   </div>
								</div>
							</div>
							
							<!--Footer Column-->
							<div class="footer-column col-lg-5 col-md-6 col-sm-12">
								<div class="footer-widget contact-widget">
									<h2>Contact</h2>
									<div class="number">+91 70 69 7070 67</div>
									<div class="number">+91 95 74 8569 40</div>

									<ul>
										<li>127,Nathubhai Tower, Above Motiwala Optical, udhna, surat-394210.</li>
										<li><a href="https://webmastersinfotech.com/"  target="_blank">support@webmastersinfotech.com</a></li>
										<li>Open Monday to Saturday
From 10:00 AM to 19:00 PM</li>
									</ul>
								</div>
							</div>
							
						</div>
					</div>
					
				</div>
			</div>
			
			<!-- Footer Bottom -->
			<div class="footer-bottom">
				<div class="clearfix">
					<div class="pull-left">
						<div class="copyright">&copy; 2021 All rights reserved by Shree Ram Generator and Develop by <a href="https://webmastersinfotech.com/"  target="_blank">WebMasters Infotech</a></div>
					</div>
					<div class="pull-right">
						<!-- Social Links -->
						<ul class="social-links">
							<li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
							<li><a href="#"><span class="fab fa-google-plus-g"></span></a></li>
							<li><a href="#"><span class="fab fa-twitter"></span></a></li>
							<li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
							<li><a href="#"><span class="fab fa-youtube"></span></a></li>
						</ul>
					</div>
				</div>
			</div>
			
		</div>

	</footer>

	<script src="https://cdn.jsdelivr.net/gh/stevenschobert/instafeed.js@2.0.0rc1/src/instafeed.min.js"></script>


	<!-- <script type="text/javascript">
	var userFeed = new Instafeed({
		get: 'user',
		target: "instafeed-container",
    	resolution: 'low_resolution',
		accessToken: 'YOUR_INSTAGRAM_ACCESS_TOKEN_GOES_HERE'
	});
	userFeed.run();
	</script> -->