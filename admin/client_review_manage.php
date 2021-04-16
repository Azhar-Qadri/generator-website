<?php 
include('include/db.php');

if(($_SESSION['ADMIN_LOGIN']!='yes')){

  header('location:login.php?id='.$_SESSION['ADMIN_LOGIN']);
  die();
}


$name='';
$review='';
$image='';
$status='';
$msg='';
$image_required='requried';


 if(isset($_GET['id']) && $_GET['id']!='')
 {
    $image_required='';
    $id=$_GET['id'];
    $result=mysqli_query($con,"SELECT * FROM `client_review` WHERE  id='$id'");
    $check1=mysqli_num_rows($result);
     
     if($check1>0){
     $show1=mysqli_fetch_assoc($result);
     
     $name=$show1['name'];
     $review=$show1['review'];
     $image=$show1['image'];
     
    }
     else
     {
      header('location:client_review.php');
      die();
     }
 }

if(isset($_POST['submit'])){
$name=$_POST['name'];
$review=$_POST['review'];
$image=$_FILES['image'];



        $image=rand(11111111,99999999).'_'.$_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'],'./media/client_review/'.$image);

    $insert_review=mysqli_query($con,"INSERT INTO `client_review`(name,review, image, status) VALUES ('$name','$review','$image','1')");
  ?>
    <script>alert('client Review Added Successfully'); window.location.href='client_review.php';</script>
    <?php   
    
 }
if(isset($_REQUEST['update']))
{
$name=$_POST['name'];
$review=$_POST['review'];
$image=$_FILES['image'];
      
 if($_FILES['image']['name']!=''){
            $image=rand(11111111,99999999).'_'.$_FILES['image']['name'];
            move_uploaded_file($_FILES['image']['tmp_name'],'./media/client_review/'.$image);

    $update_sql_review="UPDATE `client_review` SET name='$name',review='$review',image='$image' WHERE id='$id'";
          }else{
            $update_sql_review="UPDATE `client_review` SET name='$name',review='$review' WHERE id='$id'";
          }
        $update_run=mysqli_query($con,$update_sql_review);
        ?>
        <script>alert('client Review Updated Successfully'); window.location.href='client_review.php';</script>
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
                            <h1 class="h3 m-0">Client Review Form</h1>
                        </div>
                    </div>
                </div>

                <!-- row -->
                <div class="row">
                    <div class="col-md-12">
                        <section class="boxs">
                             <div style="margin-left: 85%">
                                <h3 class="custom-font hb-cyan" >
                                <a  class="btn btn-raised btn-primary" href="client_review.php">View Reviews</a>
                              </h3>
                            </div>
                            <div class="boxs-body">
                                <form method="post" enctype="multipart/form-data"  id="frm">
                                  <div class="form-group is-empty">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input type="text" class="form-control"  name="name" placeholder="Enter the Client Name" value="<?php echo $name; ?>">
                                    <span class="material-input"></span>
                                  </div>
                                  <div class="form-group is-empty">
                                        <label for="exampleInputEmail1">review</label>
                    <textarea name="review" class="form-control"><?php echo $review; ?></textarea>
                                        
                                    <span class="material-input"></span>
                                  </div>
                                  <div class="form-group is-empty">
                                        <label for="exampleInputEmail1">Image</label>
                                        <input type="file"  name="image" class="form-control" width="100px" height="100px" 
                    >
                   <?php if(isset($_REQUEST['id'])) { ?> <img src="media/client_review/<?php echo $image; ?>" height="100" width="100">    <?php } ?>
                   </div> 

                                    <span class="material-input"></span>
                                  </div>


                                       <div class="msg" style="color: red;">
                                        <?php echo $msg; ?>
                                       </div>
               
                                     <?php 
                if(isset($_REQUEST['id']))
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