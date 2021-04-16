<?php 
include('include/db.php');


if(($_SESSION['ADMIN_LOGIN']!='yes')){

  header('location:login.php?id='.$_SESSION['ADMIN_LOGIN']);
  die();
}

if(isset($_REQUEST['btnupload'])){
  
      $filename=$_FILES['f']['name'];
      $i=0;
      foreach($filename as $finalname)
      {
          $tmp=$_FILES['f']['tmp_name'][$i];
          $path="./media/gallery/".$finalname;
          move_uploaded_file($tmp, $path);        
          $in="insert into gallery (id,file) values('$id','$path')";
          mysqli_query($con,$in);
          $i++;
          ?>
          <script type="text/javascript">
            alert('Images Uploaded Successfully');
      window.location.href="gallery.php";
            
          </script>          
          <?php 
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
       
        <!--  CONTENT  -->
        <section id="content">
            <div class="page page-tables-footable">
                <!-- bradcome -->
                <div class="b-b mb-10">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <h1 class="h3 m-0">Add Gallery Images</h1>
                        </div>
                    </div>
                </div>

                <!-- row -->
                <div class="row">
                    <div class="col-md-12">
                        <section class="boxs">
                            <div style="margin-left: 85%" class="boxs-header">
                                <h3>
                                    <a class="btn btn-raised btn-primary" href="gallery.php">View Gallery</a></h3>
                              </div>
                            <div class="boxs-body">
                                <form method="post" enctype="multipart/form-data">
      <fieldset style="margin-left: 20%">  
        <legend>Upload Multiple Images</legend>
          <table class="table table-bordered" align="center" border="1">
            <tr>
                <th>Files:</th>
                <td>
                  <input type="file" name="f[]" multiple/></td>
            </tr>

            <tr>
                <th colspan='1' class="text-center">
                  <input class="btn btn-raised btn-primary" type="submit" name="btnupload" value="Upload">
                </th>
            </tr>
          </table>
      </fieldset>
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