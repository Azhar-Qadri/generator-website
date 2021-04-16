<?php include('include/header.php');
//header
$cat_sql="select * from categories where status=1 order by cat_name";
$cat_result=mysqli_query($con,$cat_sql);
$cat_res=mysqli_query($con,$cat_sql);

//insert data

if(isset($_POST['submit'])){
        $p_id=$_REQUEST['p_id'];
        $e_name=$_POST['e_name'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $message=$_POST['message'];
        $address=$_POST['address'];
        $added_on=date('y-m-d h:i:s');
        $status=$_POST['status'];
            
   $insert_enquery="INSERT INTO `enquery`(p_id,e_name, email, mobile, message, address,added_on,status) VALUES ('$p_id','$e_name','$email','$mobile','$message','$address','$added_on','1')";
   $run=mysqli_query($con,$insert_enquery); 
      
        if($run){
            $_SESSION['STATUS'] ="Your Enquery is Done Successfully!";
            $_SESSION['STATUS_CODE'] ="success";
         // header('location:all_services.php');
        } else{
            $_SESSION['STATUS']="Your Enquery is Not Done!";
            $_SESSION['STATUS_CODE']="error";
           // header('location:all_services.php');
        }
     }



 ?>

    <!--Page Title-->
    <section class="page-banner" style="background-image:url(images/background/3.jpg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Enquery</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.php">Home</a></li>
                    <li>Get In Touch</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->
    
    <!-- Contact Page Section -->
    <section class="contact-page-section">
        <div class="auto-container">
            <div class="row clearfix">
                
                <!-- Info Column -->
                <div class="info-column col-lg-4 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInLeft" data-wow-delay="0ms">
                        <!-- Title Box -->
                        <div class="title-box">
                            <h3>Contact Details</h3>
                            <div class="title-text">Get in touch with us for any questions about Generators Ask Freely.</div>
                        </div>
                        <ul class="contact-info-list">
                            <li><span class="icon icon-home"></span><strong>Head Office</strong>127,Nathubhai Tower, Above Motiwala Optical, udhna, surat-394210.</li>
                            <li><span class="icon icon-location-pin"></span><strong>Factory Address</strong>127,Nathubhai Tower, Above Motiwala Optical, udhna, surat-394210.</li>
                            <li><span class="icon icon-envelope-open"></span><strong>Email us</strong>solustrid@example.com</li>
                            <li><span class="icon icon-call-in"></span><strong>Call Support</strong>+91 70 69 7070  <br>+91 95 74 8569 40</li>
                        </ul>
                        
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
                
                <!-- Form Column -->
                <div class="form-column col-lg-8 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInRight" data-wow-delay="0ms">
                        <!-- Sec Title -->
                        <div class="sec-title">
                            <div class="title">We are Shree Ram</div>
                            <h2>Send an Enquery Message</h2>
                        </div>
                        
                        <!-- Contact Form -->
                        <div class="contact-form">
                            <form method="POST"  id="frm">
                                <div class="row clearfix">
                                    
                                    <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="e_name" placeholder="First Name " required>
                                    </div>
                                    
                                    
                                    <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                                        <input type="email" name="email" placeholder="Email " required>
                                    </div>
                                    
                                    <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="mobile" placeholder="Phone " required>
                                    </div>
                                    
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <textarea name="message"  placeholder="Message " required=""></textarea>
                                    </div>
                                    

                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <textarea name="address"  placeholder="Address " required=""></textarea>
                                    </div>
                                    
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <button class="theme-btn btn-style-five" type="submit" name="submit">Send Now</button>
                                    </div>
                                    
                                </div>
                            </form>
                                
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- End Contact Page Section -->
    
    <!-- Contact Map Section -->
    <section class="contact-map-section">
        <div class="outer-container">
            <div class="map-outer">
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3720.4392844959316!2d72.83405275037482!3d21.17470148585033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04e4b45d3ca2b%3A0xaf9ae5ffda2095d3!2sWebmasters%20InfoTech!5e0!3m2!1sen!2sin!4v1614587412114!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>
    <!-- End Map Section -->
    
    <!--Newsleter Section-->
    <section class="newsletter-section">
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
    
    <!--Main Footer-->
   <?php include('include/footer.php') ?>
</div>  
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

<!--Scroll to top-->
<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/validate.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/appear.js"></script>
<script src="js/script.js"></script>
<!--Google Map APi Key-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDcaOOcFcQ0hoTqANKZYz-0ii-J0aUoHjk"></script>
<script src="js/map-script.js"></script>
<script src="js/message.js"></script>
<script src="js/jq.js"></script>
<script src="js/jqv.js"></script>

<!--End Google Map APi-->

<!-- swal({
  title: "Your Enquery is Done Successfully!",
  icon:  "success",
  button: "Okay!",
  window.location= "index.php",
}); -->
<?php 
if(isset($_SESSION['STATUS']) && $_SESSION['STATUS'] !='') { ?>

<script type="text/javascript">
  
  swal({
    title: "Your Enquery is Done Successfully!",
    icon:  "success",
    button: "Okay!"
}).then(function() {
    window.location = "all_services.php";
});
</script> 
<!-- <p><?php echo $_SESSION['STATUS']; ?></p> -->
<?php 
unset($_SESSION['STATUS']);
}
 ?>

 <script>
        $(document).ready(function(){
            $("#frm").validate({
                rules:
                {
                    e_name:
                    {
                        required:true,
                    },
                    email:
                    {
                        required:true,
                        email:true,
                    },
                    mobile:
                    {
                        required:true,
                        number:true,
                        minlength:10,
                        maxlength:10,
                    },
                    message:
                    {
                        required:true,
                    },
                    address:
                    {
                        required:true,
                    },



                },

                messages:
                {
                    e_name:
                    {
                        required:"Please Enter Your Name",
                    },
                    email:
                    {
                        required:"Please Enter Your Email",
                        email:"Please Enter Valid Email Address",
                    },

                    mobile:
                    {
                        required:"Please enter Your Mobile",
                        number:"Please Enter Only Digits",
                        minlength:"Please Enter 10 Digits Mobile No",
                        maxlength:"Please Enter Valid Mobile Number",
                    },
                    message:
                    {
                        required:"Please Write Message",
                    },
                     address:
                    {
                        required:"Please Write your Address",
                    },


                },



            });
        });
    </script>

</body>

<!-- Mirrored from t.commonsupport.xyz/solustrid/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Feb 2021 09:24:06 GMT -->
</html>