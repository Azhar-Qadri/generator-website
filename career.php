<?php $page='career'; include('include/header.php'); 

$check='';
//Display Products 
$career=mysqli_query($con,"select * from career where status=1 order by career_id desc");
$check=mysqli_num_rows($career);
?>

<!-- BODY START -->
    <!--Page Title-->
    <section class="page-banner style-two" style="background-image:url(images/background/services-title-bg.jpg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Career</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.php">Home</a></li>
                    <li>Comes toward bright future</li>
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
                        <div class="title">We are Shree Ram</div>
                        <h2>Career's Opportunity</h2>
                    </div>
                   <!--  <div class="col-lg-8 col-md-12 wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="text">All Job Vacancy is listing below Comes toward bright future.</div>
                    </div> -->
                </div>
            </div>

            <section>
                            <?php if($check>0){ ?>
                
                            <div class="boxs-header">
                                <h3 class="custom-font">
                                    <strong>Jobs </strong>Listing</h3>
                            </div>
                            <div class="boxs-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-hover table-bordered">
                                        <thead>
                                            <tr>
                                                <th><b>Sr.No</b></th>
                                                <th><b>Job Title</b></th>
                                                <th><b>Description</b></th>
                                                <th><b>Experience</b></th>
                                                <th><b>Location</b></th>
                                                <th><b>Date Posted</b></th>
                                                <th><b>Applied</b></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                <?php  
                                $i=1;
                                  while($row=mysqli_fetch_array($career)){ ?>
                                
                                            <tr>
                                                <td><?php echo $i ?></td>
                                                <td><?php echo $row['job_name']; ?></td>
                                                <td><?php echo $row['description']; ?></td>
                                                <td><?php echo $row['experience']; ?></td>
                                                <td><?php echo $row['location']; ?></td>
                                                <td><?php echo $row['added_on']; ?></td>
                                                <td><a class="btn btn-info" href="career_applied.php?career_id=<?php echo $row['career_id']; ?>">Click here to Apply</a></td>
                                            </tr>
                                            <?php $i++; } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        <?php }else{ ?>
            <div class="row">
            <h5>Vacancy is not Available</h4>   <a style="margin-left: 8px" href="index.php"><h4 class="fas fa-angle-left"><b>Back</b></h5></a>
            </div>
            <?php 
          } ?>
                        </section>
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