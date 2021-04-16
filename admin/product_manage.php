<?php 
include('include/db.php');

if(($_SESSION['ADMIN_LOGIN']!='yes')){

  header('location:login.php?id='.$_SESSION['ADMIN_LOGIN']);
  die();
}


$cat_id='';
$p_id='';
$name='';
$description='';
$image='';
$status='';
$msg='';
$image_required='requried';


 if(isset($_GET['p_id']) && $_GET['p_id']!='')
 {
    $image_required='';
    $p_id=$_GET['p_id'];

    $res=mysqli_query($con,"SELECT * FROM `product` WHERE  p_id='$p_id'");
  
 

     $check=mysqli_num_rows($res);
     
     if($check>0){
     $show=mysqli_fetch_assoc($res);
     
     $p_id=$show['p_id'];
     $cat_id=$show['cat_id'];
     $name=$show['name'];
     $description=$show['description'];
     $image=$show['image'];
     
    }
     else
     {
      header('location:product.php');
      die();
     }
 }
if(isset($_POST['submit'])){

$cat_id=$_POST['cat_id'];
$name=$_POST['name'];
$description=$_POST['description'];
$image=$_FILES['image'];



        $image=rand(11111111,99999999).'_'.$_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'],'./media/product/'.$image);

   $insert_run=mysqli_query($con,"INSERT INTO `product`(cat_id, name, description, image, status) VALUES ('$cat_id','$name','$description','$image','1')");
      
    ?>
    <script>alert('Machine Added Successfully'); window.location.href='product.php';</script>
    <?php   
    
 }
if(isset($_POST['update']))
{


$cat_id=$_POST['cat_id'];
$name=$_POST['name'];
$description=$_POST['description'];
$image=$_FILES['image'];


      
 if($_FILES['image']['name']!=''){
           $image=rand(11111111,99999999).'_'.$_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'],'./media/product/'.$image);

        $update_sql="UPDATE `product` SET cat_id='$cat_id',name='$name',description='$description',image='$image' WHERE p_id='$p_id'";
          }else{
            $update_sql="UPDATE `product` SET cat_id='$cat_id',name='$name',description='$description' WHERE p_id='$p_id'";
          }
        $update_run=mysqli_query($con,$update_sql);
        ?>
        <script>alert('Property Updated Successfully'); window.location.href='product.php';</script>
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
                            <h1 class="h3 m-0"><a href="categories.php">Machines Form</a></h1>
                        </div>
                    </div>
                </div>

                <!-- row -->
                <div class="row">
                    <div class="col-md-12">
                        <section class="boxs">
                            <div style="margin-left: 85%">
                                <h3 class="custom-font hb-cyan" >
                                <a  class="btn btn-raised btn-primary" href="product.php">View Machine</a>
                              </h3>
                            </div>
                            <div class="boxs-body">
                                <form method="post" enctype="multipart/form-data"  id="frm">
                                    <div class="form-group is-empty">
                                        <label for="exampleInputEmail1">Machine Category</label>
                      <select class="form-control" name="cat_id" id="cat_id" required>
                      <?php 
                      echo $cat_id;
                      ?>
                      <option value="">Select Categories</option>
                      <?php 
                      
                      $sql=mysqli_query($con,"SELECT * FROM categories order by cat_name ");
                      while($row=mysqli_fetch_array($sql))
                       {

                        if($row['cat_id']==$cat_id){
                          echo "<option selected value=".$row['cat_id'].">".$row['cat_name']."</option>";
                        
                        }else{
                          echo "<option value=".$row['cat_id'].">".$row['cat_name']."</option>";
                        
                        }
                        
                        }
                       ?>
                    </select>
                                        <span class="material-input"></span>
                                     </div>

                                     <div class="form-group is-empty">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input type="text" class="form-control"  name="name" placeholder="Enter the Machine Name" value="<?php echo $name; ?>">
                                    <span class="material-input"></span>
                                  </div>
                                   <div class="form-group is-empty">
                                        <label for="exampleInputEmail1">description</label>
                    <textarea name="description" class="form-control"><?php echo $description; ?></textarea>
                                        
                                    <span class="material-input"></span>
                                  </div>

                                    <div class="form-group is-empty">
                                        <label for="exampleInputEmail1">Image</label>
                                        <input type="file"  name="image" class="form-control" width="100px" height="100px" 
                    >
                   <?php if(isset($_REQUEST['p_id'])) { ?> <img src="./media/product/<?php echo $image; ?>" height="100" width="100">    <?php } ?>
                   </div> 

                                    <span class="material-input"></span>
                                  


                                       <div class="msg" style="color: red;">
                                        <?php echo $msg; ?>
                                       </div>                    
               
                                     <?php 
                if(isset($_REQUEST['p_id']))
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