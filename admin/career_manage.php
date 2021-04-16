<?php 
include('include/db.php');

if(($_SESSION['ADMIN_LOGIN']!='yes')){

  header('location:login.php?id='.$_SESSION['ADMIN_LOGIN']);
  die();
}


$job_name='';
$description='';
$experience='';
$location='';
$status='';
$msg='';
$image_required='requried';


 if(isset($_GET['career_id']) && $_GET['career_id']!='')
 {
    $image_required='';
    $career_id=$_GET['career_id'];
    $res=mysqli_query($con,"SELECT * FROM `career` WHERE  career_id='$career_id'");
  
 

     $check=mysqli_num_rows($res);
     
     if($check>0){
     $show=mysqli_fetch_assoc($res);
     
     $job_name=$show['job_name'];
     $description=$show['description'];
     $experience=$show['experience'];
     $location=$show['location'];

     
    }
     else
     {
      header('location:career.php');
      die();
     }
 }
if(isset($_POST['submit'])){
     $job_name=$_POST['job_name'];
     $description=$_POST['description'];
     $experience=$_POST['experience'];
     $location=$_POST['location'];

    $insert_run=mysqli_query($con,"INSERT INTO `career`(job_name,description, experience,location, status) VALUES ('$job_name','$description','$experience','$location','1')");
  ?>
    <script>alert('Job Added Successfully'); window.location.href='career.php';</script>
    <?php   
    
 }

if(isset($_REQUEST['update']))
{

 $job_name=$_POST['job_name'];
     $description=$_POST['description'];
     $experience=$_POST['experience'];
     $location=$_POST['location'];
      
    $update_sql="UPDATE `career` SET job_name='$job_name',description='$description',experience='$experience',location='$location' WHERE career_id='$career_id'";
          
        $update_run=mysqli_query($con,$update_sql);
        ?>
        <script>alert('Career Updated Successfully'); window.location.href='career.php';</script>
        <?php

}
?>
<!doctype html>
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">

<title>:: Web Master - Admin Dashboard ::</title>
<link rel="icon" type="image/ico" href="assets/images/favicon.ico" />
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- vendor css files -->
<link rel="stylesheet" href="assets/js/vendor/bootstrap/bootstrap.min.css">    
<link rel="stylesheet" href="assets/css/vendor/animsition.min.css">
<link rel="stylesheet" href="assets/js/vendor/morris/morris.css">    
<!-- project main css files -->
<link rel="stylesheet" href="assets/css/main.css">
</head>
<body id="falcon" class="main_Wrapper">
    <div id="wrap" class="animsition">
       <!-- HEADER START -->
        <?php include('include/header.php'); ?>
       <!-- HEADER ENDS -->
       <!-- SIDE BAR START -->
        <?php include('include/sidebar.php'); ?>
       <!-- SIDE BAR ENDS -->
       
        <!--  CONTENT  -->
        <section id="content">
            <div class="page page-tables-footable">
                <!-- bradcome -->
                <div class="b-b mb-10">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <h1 class="h3 m-0">Career Form</h1>
                        </div>
                    </div>
                </div>

                <!-- row -->
                <div class="row">
                    <div class="col-md-12">
                        <section class="boxs">
                                <div style="margin-left: 85%">
                                <h3 class="custom-font hb-cyan" >
                                <a  class="btn btn-raised btn-primary" href="career.php">View Career</a>
                              </h3>
                            </div>
                            <div class="boxs-body">
                                <form method="post" enctype="multipart/form-data"  id="frm">
                                  <div class="form-group is-empty">
                                        <label for="exampleInputEmail1">Job Title</label>
                                        <input type="text" class="form-control"  name="job_name" placeholder="Enter Job Title" value="<?php echo $job_name; ?>">
                                    <span class="material-input"></span>
                                  </div>
                                  <div class="form-group is-empty">
                                        <label for="exampleInputEmail1">Description</label>
                    <textarea name="description"  placeholder="Enter Detial information about Job" class="form-control"><?php echo $description; ?></textarea>
                                        
                                    <span class="material-input"></span>
                                  </div>
                                   <div class="form-group is-empty">
                                        <label for="exampleInputEmail1">Experience</label>
                                        <input type="text" class="form-control"  name="experience" placeholder="Enter the Experience" value="<?php echo $experience; ?>">
                                    <span class="material-input"></span>
                                  </div>
                                  <div class="form-group is-empty">
                                        <label for="exampleInputEmail1">Location</label>
                                        <input type="text" class="form-control"  name="location" placeholder="Enter the location" value="<?php echo $location; ?>">
                                    <span class="material-input"></span>
                                  </div>
               
                                     <?php 
                if(isset($_REQUEST['career_id']))
                {
                ?>
                  <button type="submit" name="update" class="btn btn-raised btn-primary">Update</button>
                <?php 
                }
                else
                {
                ?>
                  <button type="submit" name="submit" class="btn btn-raised btn-primary">Add</button>
                 <?php 
               }
                 ?>
                                </form>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
        <!--/ CONTENT -->

    </div>
    <!-- Vendor JavaScripts -->
    <script src="assets/bundles/libscripts.bundle.js"></script>
    <script src="assets/bundles/vendorscripts.bundle.js"></script>

    <!--/ vendor javascripts -->
    <script src="assets/bundles/flotscripts.bundle.js"></script>    
    <script src="assets/bundles/d3cripts.bundle.js"></script>
    <script src="assets/bundles/sparkline.bundle.js"></script>
    <script src="assets/bundles/raphael.bundle.js"></script>
    <script src="assets/bundles/morris.bundle.js"></script>
    <script src="assets/bundles/loadercripts.bundle.js"></script>

    <!-- page Js -->
    <script src="assets/bundles/mainscripts.bundle.js"></script>
    <script src="assets/js/page/index.js"></script>   

<!--  Custom JavaScripts  -->
    <script src="assets/bundles/mainscripts.bundle.js"></script>    <!-- Custom Js -->


    <!--  Page Specific Scripts  -->
    <script >
        $(window).load(function () {
            $('.footable').footable();
        });
    </script>  
</body>

</html>