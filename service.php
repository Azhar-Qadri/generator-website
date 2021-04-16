<?php include('include/header.php'); 




function shorten($string,$length){
  if(strlen($string)<=$length){
    echo $string;
  }else{
    $qwerty=substr($string,0,$length). '...';
    echo $qwerty;
  }
}


//Display Products 
$cat_id=$_GET['cat_id'];

$service=mysqli_query($con,"select * from product as p,categories as c where p.cat_id=c.cat_id and p.cat_id='$cat_id' and p.status=1 order by p_id");
$check=mysqli_num_rows($service);
?>

<!-- BODY START -->
    <!--Page Title-->
    <section class="page-banner style-two" style="background-image:url(images/background/services-title-bg.jpg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Our Services</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.php">Home</a></li>
                    <li>What We Do</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Services Section Three -->
    <section class="services-section-three style-two">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title">
                <div class="row">
                    <div class="col-lg-4 col-md-12 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="title">We are Solustrid</div>
                        <h2>We’re Helping Industries</h2>
                    </div>
                    <div class="col-lg-8 col-md-12 wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="text">Aliquip ex ea commodo consequat duis aute irure dolor in reprehenderit voluptate velit sunt culpa quis officia deseru mollit anim ipsum id est laborum sed do eiusmod tempor incididunt.</div>
                    </div>
                </div>
            </div>
<?php if($check>0){ ?>
            <div class="row">
            	<?php while($service_display=mysqli_fetch_array($service)) { ?>
			    <!-- Services Block Three -->
                <div class="services-block-three col-xl-4 col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="detial.php?p_id=<?php echo $service_display['p_id']; ?>">
                <img style="height: 300px"src="admin/media/product/<?php echo $service_display['image']; ?>" alt="" class="img-a img-fluid"></a>
                        </div>
                        <div class="lower-content">
                            <h3><a href="detial.php?p_id=<?php echo $service_display['p_id']; ?>"><?php echo $service_display['name']; ?></a></h3>
                            <div class="text"><?php echo shorten($_SESSION['TEXT'], 30); ?> </div>
                           <a href="detial.php?p_id=<?php echo $service_display['p_id']; ?>" class="read-more">Read More <span class="fas fa-angle-right"></span></a>
                        </div>
                    </div>
                </div>
            <?php } ?>

            </div>
        <?php }else{
            ?>
            <h4><b>Data is Not Available</b><a style="margin-left: 10px" class="fas fa-arrow-left" href="all_services.php">Back</a></h4>
            <?php 
        } ?>
        </div>
    </section>
    <!-- End Services Section Three -->
	
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