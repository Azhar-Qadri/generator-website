<?php include('include/header.php'); 


$p_id='';
//Display Products 
$p_id=$_GET['p_id'];
$detial=mysqli_query($con,"select * from product as p,categories as c where p.cat_id=c.cat_id and p.p_id='$p_id' and p.status=1"); 
?>

<!-- BODY START -->
    
    <!--Sidebar Page Container-->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
                
                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar padding-right">
                       
                        <!-- Enquery Option -->
                        <div class="sidebar-widget brochures">
                            <div class="sidebar-title"><h5>Rentual Enquery</h5></div>
                            <div class="widget-content">
                                <a href="enquery.php?p_id=<?php echo $p_id ?>" class="brochure-btn"><span class="icon fas fa-file-alt"></span> Make an Enquery</a>
                            </div>
                            <div class="widget-content">
                                <a href="quotation.php?p_id=<?php echo $p_id ?>" class="brochure-btn"><span class="icon fas fa-file-alt"></span> Get an Estimate</a>
                            </div>
                        </div>


                        <!-- Brochures Widget -->
                        <div class="sidebar-widget brochures">
                            <div class="sidebar-title"><h5>Service Downloads</h5></div>
                            <div class="widget-content">
                                <a href="#" class="brochure-btn"><span class="icon fas fa-file-pdf"></span> Presentation PDF</a>
                                <a href="#" class="brochure-btn"><span class="icon fas fa-file-alt"></span> Brochure DOC</a>
                            </div>
                        </div>
                        
                        <!-- Services Widget -->
                        <div class="sidebar-widget services-widget">
                            <div class="widget-content" style="background-image:url(images/resource/support.jpg);">
                                <div class="icon flaticon-settings-4"></div>
                                <h3>Optimising Perfomance with Special Services</h3>
                                <div class="text">Discover how we're improving <br> quality of Industries</div>
                                <a href="https://webmastersinfotech.com/" class="theme-btn btn-style-two">get in touch</a>
                            </div>
                        </div>
                        
                        <!-- Support Widget -->
                        <div class="sidebar-widget support-widget">
                            <div class="widget-content">
                                <span class="icon flaticon-telephone-1"></span>
                                <div class="text">Got any Questions? <br> Call us Today!</div>
                                <div class="number">+91 95748 56940</div>
                                <div class="email"><a href="https://webmastersinfotech.com/contact-us/">support@webmastersinfotech.com</a></div>
                            </div>
                        </div>
                        
                    </aside>
                </div>
                
                <!--Content Side / Services Detail-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="services-detail">

                        <div class="inner-box">
                <?php while($machine_display=mysqli_fetch_array($detial)) { ?>

                            <div class="image">
                <img src="admin/media/product/<?php echo $machine_display['image']; ?>" alt="" class="img-a img-fluid"></a>
                                
                            </div>
                            <div class="lower-content">
                                <!-- Title Box -->
                                <div class="title-box">
                                    <div class="title">We are Shree Ram</div>
                                    <h2><?php echo $machine_display['name']; ?></h2>
                                    <h4><?php echo $machine_display['cat_name']; ?></h4>
                                </div>
                                <div class="bold-text"><?php echo $machine_display['description']; ?>.
                                </div>
                             <?php } ?>
                                <div class="text">
                                    
                                    <h3>Why Choose us</h3>
                                    <p>To become one of the preferential selections of our clients, we are working in a keen way right from our establishment in this industry.</p>
                                    <!-- Services Featured Outer -->
                                    <div class="services-featured-outer">
                                        <div class="row clearfix">
                                            
                                            <!-- Feature Block -->
                                            <div class="feature-block col-lg-6 col-md-6 col-sm-12">
                                                <div class="inner-box">
                                                    <div class="icon-box">
                                                        <span class="icon flaticon-home-2"></span>
                                                    </div>
                                                    <h4>Well Maintained</h4>
                                                    <div class="featured-text">Incididunt laboret dolore magna exercitation laboris nisis dolor in derit in voluptate velit.</div>
                                                </div>
                                            </div>
                                            
                                            <!-- Feature Block -->
                                            <div class="feature-block col-lg-6 col-md-6 col-sm-12">
                                                <div class="inner-box">
                                                    <div class="icon-box">
                                                        <span class="icon flaticon-fan"></span>
                                                    </div>
                                                    <h4>Modern Equipments</h4>
                                                    <div class="featured-text">Incididunt laboret dolore magna exercitation laboris nisis dolor in derit in voluptate velit.</div>
                                                </div>
                                            </div>
                                            
                                            <!-- Feature Block -->
                                            <div class="feature-block col-lg-6 col-md-6 col-sm-12">
                                                <div class="inner-box">
                                                    <div class="icon-box">
                                                        <span class="icon flaticon-worker"></span>
                                                    </div>
                                                    <h4>All Expert Engineers</h4>
                                                    <div class="featured-text">Incididunt laboret dolore magna exercitation laboris nisis dolor in derit in voluptate velit.</div>
                                                </div>
                                            </div>
                                            
                                            <!-- Feature Block -->
                                            <div class="feature-block col-lg-6 col-md-6 col-sm-12">
                                                <div class="inner-box">
                                                    <div class="icon-box">
                                                        <span class="icon flaticon-nuclear-plant"></span>
                                                    </div>
                                                    <h4>Power Efficient Factory</h4>
                                                    <div class="featured-text">Incididunt laboret dolore magna exercitation laboris nisis dolor in derit in voluptate velit.</div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                
                                <h5>Our services at a glance ...</h5>
                                <!-- Fact Counter -->
                                <div class="fact-counter">
                                    <div class="clearfix">
                                        
                                        <!--Column-->
                                        <div class="column counter-column col-lg-4 col-md-4 col-sm-12">
                                            <div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                                                <div class="count-outer count-box">
                                                    <span class="count-text" data-speed="2000" data-stop="25">0</span>+
                                                    <h4 class="counter-title">Years Experience</h4>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!--Column-->
                                        <div class="column counter-column col-lg-4 col-md-4 col-sm-12">
                                            <div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                                                <div class="count-outer count-box">
                                                    <span class="count-text" data-speed="2500" data-stop="36">0</span>
                                                    <h4 class="counter-title">Industries Served</h4>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!--Column-->
                                        <div class="column counter-column col-lg-4 col-md-4 col-sm-12">
                                            <div class="inner wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
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
                </div>
                
            </div>
        </div>
    </div>
    
	
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