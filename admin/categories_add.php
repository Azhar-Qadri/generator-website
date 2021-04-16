<?php 
include('include/db.php');

if(($_SESSION['ADMIN_LOGIN']!='yes')){

  header('location:login.php?id='.$_SESSION['ADMIN_LOGIN']);
  die();
}
$msg='';
$categories='';

if(isset($_POST['submit'])){
  
  $cat_name=$_POST['cat_name'];
 
 $res=mysqli_query($con,"select * from categories where cat_name='$cat_name'");

 $check1=mysqli_num_rows($res);

 if($check1>0){
    $msg="categories is Alreay Present";
 }else{
  $run_cat_insert=mysqli_query($con,"INSERT INTO `categories`(cat_name,status) VALUES ('$cat_name','1')");
    ?>
    <script type="text/javascript">
      alert('categories Inserted Successfully');
      window.location.href="categories.php";
    </script>
    <?php  

 }
 
  
}

if(isset($_GET['cat_id']) && $_GET['cat_id']!=''){
  $cat_id=$_GET['cat_id'];
  $edit=mysqli_query($con,"select * from categories where cat_id='$cat_id'");
  $check=mysqli_num_rows($edit);
  if($check>0){
    $edit1=mysqli_fetch_array($edit);
  $categories=$edit1['cat_name'];
  }else{
    header('location:categories.php');
    die();
  }
  
}

if(isset($_REQUEST['update'])){
  $cat_name=$_POST['cat_name'];

  $update=mysqli_query($con,"UPDATE `categories` SET cat_name ='$cat_name' WHERE cat_id='$cat_id'");
  header('location:categories.php');
  die(); 
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
                            <h1 class="h3 m-0">Categories Form</h1>
                        </div>
                    </div>
                </div>

                <!-- row -->
                <div class="row">
                    <div class="col-md-12">
                        <section class="boxs">
                            <div style="margin-left: 85%">
                                <h3 class="custom-font hb-cyan" >
                                <a  class="btn btn-raised btn-primary" href="categories.php">View Categories</a>
                              </h3>
                            </div>
                            <div class="boxs-body">
                                <form method="post">
                                    <div class="form-group is-empty">
                                        <label for="exampleInputEmail1">Category</label>
                                        <input type="text" class="form-control"  name="cat_name" placeholder="Enter Name of Category" value="<?php echo $categories; ?>" required>
                                    <span class="material-input"></span></div>
                                       <div class="msg" style="color: red;">
                                        <?php echo $msg; ?>
                                       </div>
               
                                     <?php 
                if(isset($_REQUEST['cat_id']))
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