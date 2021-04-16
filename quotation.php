<?php include('include/header.php');
error_reporting(0);

//insert data
if(isset($_POST['submit'])){
        $p_id=$_REQUEST['p_id'];
        $q_name=$_POST['q_name'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $notes=$_POST['notes'];
        $status=$_POST['status'];

        $added_on=date('y-m-d h:i:s');
    
$insert_enquery="INSERT INTO `quotation`(p_id,q_name,email,mobile,notes,added_on,status) VALUES ('$p_id','$q_name','$email','$mobile','$notes','$added_on','1')";
   $run=mysqli_query($con,$insert_enquery); 
      
        if($run){
            $_SESSION['STATUS'] ="Your Quotation is Submitted!";
            $_SESSION['STATUS_CODE'] ="success";
         // header('location:all_services.php');
        } else{
            $_SESSION['STATUS']="Your Quotation is Not Done!";
            $_SESSION['STATUS_CODE']="error";
           // header('location:all_services.php');
        }
     }



 ?>

    <!--Page Title-->
    <section class="page-banner" style="height: 200px"  style="background-image:url(images/background/3.jpg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Quotation</h1>
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
                                
                <!-- Form Column -->
                <div class="form-column col-lg-8 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInRight" data-wow-delay="0ms">
                        <!-- Sec Title -->
                        <div class="sec-title">
                            <div class="title">We are Shree Ram</div>
                            <h2>Send a Message to get Quotation</h2>
                        </div>
                        
                        <!-- Contact Form -->
                        <div class="contact-form">
                            <form method="POST"  id="frm">
                                <div class="row clearfix">
                                    
                                    <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="q_name" placeholder="First Name " required>
                                    </div>
                                    
                                    <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="email" placeholder="Enter Email Id" required>
                                    </div>
                                    
                                    <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="mobile" placeholder="Enter Whatapp Number " required>
                                    </div>

                                    <div class="col-lg-12 col-md-6 col-sm-12 form-group">
                                       <textarea name="notes" placeholder="Write your Requirement"></textarea>
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
    title: "Your Quotation is Submitted!",
    icon:  "success",
    button: "Okay!"
}).then(function() {
    window.location = "all_services.php";
});
</script> 
<?php 
unset($_SESSION['STATUS']);
}
 ?>


  <script>
        $(document).ready(function(){
            $("#frm").validate({
                rules:
                {
                    q_name:
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
                    notes:
                    {
                        required:true,
                    },

                },

                messages:
                {
                    q_name:
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
                    notes:
                    {
                        required:"Please Write your Requirements",
                    },


                },



            });
        });
    </script>

</body>

<!-- Mirrored from t.commonsupport.xyz/solustrid/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Feb 2021 09:24:06 GMT -->
</html>