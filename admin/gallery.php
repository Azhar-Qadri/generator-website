<?php 
include('include/db.php');

if(($_SESSION['ADMIN_LOGIN']!='yes')){

  header('location:login.php?id='.$_SESSION['ADMIN_LOGIN']);
  die();
}

//multiple images

$multiple_sql="SELECT * FROM `gallery`";
$multiple_run=mysqli_query($con,$multiple_sql);
$type='';

  if(isset($_GET['type']) && $_GET['type']!=''){
   
    $type=$_GET['type'];
   
    if($type=='status'){
       $operation=$_GET['operation'];
       $id=$_GET['id'];
   
      if($operation=='active'){
          $status='1';
      }else{
          $status='0';
      }
      $update_status="UPDATE `gallery` SET status='$status' WHERE id='$id'";
      mysqli_query($con,$update_status);
      mysqli_query($con,$delete_sql);
      header('location:gallery.php');
      die();

    }

      if($type=='delete'){
      $id=$_GET['id'];
      $delete_sql="DELETE FROM `gallery` WHERE id='$id'";
      mysqli_query($con,$delete_sql);
      header('location:gallery.php');
      die();
    }
}

?>
<!doctype html>
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">

<title>:: WebMaster - Admin Dashboard ::</title>
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
       
        <!-- CONTENT  -->
    <section id="content">
      <div class="page page-gallery">
        <!-- bradcome -->
        <div class="b-b mb-10">
          <div class="row">
            <div class="col-sm-6 col-xs-12">
              <h1 class="h3 m-0">Gallery Table</h1>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
                
                    <a style="float:right;" href="gallery_manage.php" class="btn btn-raised btn-primary"> Add Images</a>
              
              
            <section class="boxs">
            
           <?php 
            while($file2=mysqli_fetch_array($multiple_run)) {?>
      
         <div style="height: 200px; width: 200px; float: left; margin: 25px;">

                <img src="<?php echo $file2['file']; ?>" height="200" width="200">
                <br>

                <a style="color: red" href="gallery.php?type=delete&id=<?php echo $file2['id']?>"><b>Delete</b></a>
                 <td>
                        <?php 
                        if($file2['status']==1){
                            echo "<a class='btn btn-success' href='?type=status&operation=deactive&id=".$file2['id']."'>Active</a>";
                         }else{
                            echo "<a class='btn btn-danger' href='?type=status&operation=active&id=".$file2['id']."'>Deactive</a>";
                         }  
                         ?>                        
                 </td> 
              </div>
            <?php } ?>

       
            
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
    