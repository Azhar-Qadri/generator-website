<?php include('include/header.php');

//insert data
if(isset($_POST['submit'])){
        $career_id=$_REQUEST['career_id'];
        $e_name=$_POST['name'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $notes=$_POST['notes'];

        $added_on=date('y-m-d h:i:s');

          $image=rand(11111111,99999999).'_'.$_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'],'admin/media/resume/'.$image);

    
   $in_form="INSERT INTO `career_applied`(career_id,name, email, mobile, image,added_on,status) VALUES ('$career_id','$e_name','$email','$mobile','$image','$added_on','1')";
   $run=mysqli_query($con,$in_form); 


        if($run){
            $_SESSION['MSG'] ="Your Form is submited!";
            $_SESSION['MSG_CODE'] ="success";
            } else{
            $_SESSION['MSG']="Your Form is Not submited!";
            $_SESSION['MSG_CODE']="error";
            
        }

}
 ?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from t.commonsupport.xyz/solustrid/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Feb 2021 09:24:05 GMT -->

    <!--Page Title-->
    <section class="page-banner" style="background-image:url(images/background/3.jpg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Job Vacancy</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.php">Home</a></li>
                    <li>Get In Touch</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->
    
                
                <!-- Form Column -->
                <div class="form-column col-lg-8 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInRight" data-wow-delay="0ms">
                        <!-- Sec Title -->
                        <div class="sec-title">
                            <div class="title">We are Shree Ram</div>
                            <h2>Employment Form</h2>
                        </div>
                        
                        <!-- Contact Form -->
                        <div class="contact-form">
                            <form method="POST" enctype="multipart/form-data" style="margin-left: 100px" id="frm">
                                <div class="row clearfix">
                                    
                                    <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="name" placeholder="First Name " required>
                                    </div>
                                    
                                    
                                    <div class="col-lg-4 col-md-3 col-sm-12 form-group">
                                        <input type="email" name="email" placeholder="Email " required>
                                    </div>
                                    
                                    <div class="col-lg-4 col-md-3 col-sm-12 form-group">
                                        <input type="text" name="mobile" placeholder="Phone " required>
                                    </div>
                                    

                                    <div class="col-lg-4 col-md-3 col-sm-12 form-group">
                                        <input type="file" name="image" class="form-control" required>
                                        <span>Upload your Resume</span>

                                    </div>
                                    
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <button class="theme-btn btn-style-five" type="submit" name="submit">Submit Now</button>
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
<?php 
if(isset($_SESSION['MSG']) && $_SESSION['MSG'] !='') { ?>

 <script type="text/javascript">
 
  swal({
    title: "Your Form is Submitted!",
    icon:  "success",
    button: "Okay!"
}).then(function() {
    window.location = "career.php";
});
</script> 
<?php 
unset($_SESSION['MSG']);
}
 ?>



 <script>
        $(document).ready(function(){

jQuery.validator.addMethod("lettersonly", function(value, element) {
  return this.optional(element) || /^[a-z]+$/i.test(value);
}, "Letters only please"); 

            $("#frm").validate({
                rules:
                {
                    name:
                    {
                        required:true,
                        lettersonly: true,
                        
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

                },

                messages:
                {
                    name:
                    {
                        required:"Please Enter Your Name",
                        lettersonly:"Please Type Letters Only",
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

                },



            });
        });
    </script>


</body>

<!-- Mirrored from t.commonsupport.xyz/solustrid/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Feb 2021 09:24:06 GMT -->
</html>