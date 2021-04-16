<?php 
include('include/db.php');

if(($_SESSION['ADMIN_LOGIN']!='yes')){

  header('location:login.php?id='.$_SESSION['ADMIN_LOGIN']);
  die();
}


$name='';
$bio='';
$image='';
$status='';
$msg='';
$image_required='requried';


 if(isset($_GET['id']) && $_GET['id']!='')
 {
    $image_required='';
    $id=$_GET['id'];
    $res=mysqli_query($con,"SELECT * FROM `client` WHERE  id='$id'");
  
 

     $check=mysqli_num_rows($res);
     
     if($check>0){
     $show=mysqli_fetch_assoc($res);
     
     $name=$show['name'];
     $bio=$show['bio'];
     $image=$show['image'];
     
    }
     else
     {
      header('location:client.php');
      die();
     }
 }
if(isset($_POST['submit'])){
$name=$_POST['name'];
$bio=$_POST['bio'];
$image=$_FILES['image'];



        $image=rand(11111111,99999999).'_'.$_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'],'./media/client/'.$image);

    $insert_run=mysqli_query($con,"INSERT INTO `client`(name,bio, image, status) VALUES ('$name','$bio','$image','1')");
  ?>
    <script>alert('Client Added Successfully'); window.location.href='client.php';</script>
    <?php   
    
 }
if(isset($_REQUEST['update']))
{
$name=$_POST['name'];
$bio=$_POST['bio'];
$image=$_FILES['image'];
      
 if($_FILES['image']['name']!=''){
            $image=rand(11111111,99999999).'_'.$_FILES['image']['name'];
            move_uploaded_file($_FILES['image']['tmp_name'],'./media/client/'.$image);

    $update_sql="UPDATE `client` SET name='$name',bio='$bio',image='$image' WHERE id='$id'";
          }else{
            $update_sql="UPDATE `client` SET name='$name',bio='$bio' WHERE id='$id'";
          }
        $update_run=mysqli_query($con,$update_sql);
        ?>
        <script>alert('Client Updated Successfully'); window.location.href='client.php';</script>
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
                            <h1 class="h3 m-0">Client Form</h1>
                        </div>
                    </div>
                </div>

                <!-- row -->
                <div class="row">
                    <div class="col-md-12">
                        <section class="boxs">
                           <div style="margin-left: 85%">
                                <h3 class="custom-font hb-cyan" >
                                <a  class="btn btn-raised btn-primary" href="client.php">View Client</a>
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
                                        <label for="exampleInputEmail1">Bio</label>
                    <textarea name="bio" class="form-control"><?php echo $bio; ?></textarea>
                                        
                                    <span class="material-input"></span>
                                  </div>
                                  <div class="form-group is-empty">
                                        <label for="exampleInputEmail1">Image</label>
                                        <input type="file"  name="image" class="form-control" width="100px" height="100px" 
                    >
                   <?php if(isset($_REQUEST['id'])) { ?> <img src="media/client/<?php echo $image; ?>" height="100" width="100">    <?php } ?>
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