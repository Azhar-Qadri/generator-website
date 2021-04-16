<?php $page='machine'; include('include/header.php'); 
   //Display Products 
   //$machine=mysqli_query($con,"select * from product where status=1 order by p_id desc");
   
   
   
   function shorten($string,$length){
     if(strlen($string)<=$length){
       echo $string;
     }else{
       $qwerty=substr($string,0,$length). '...';
       echo $qwerty;
     }
   }
   
   
   
   
   $p_id='';
   $rows='';
   $sql='';
   $res='';
   $pagi='';
   
   
     //$p_id=$_GET['p_id'];
   
   if(isset($_GET['sort'])){
   
     $sort=$_GET['sort'];
   
       if($sort=='high'){
         $sql.="select * from product where status=1  order by price desc";
       }
       if($sort=='low'){
         $sql.="select * from product where status=1  order by price asc";
       }
       if($sort=='new'){
         $sql.="select * from product where status=1  order by p_id desc";
   
       }if($sort=='old'){
         $sql.="select * from product where status=1  order by p_id asc";
       }
   
   }
   else{
   $per_page=3;
   $start=0;
   $current_page=1;
   if(isset($_GET['start'])){
     $start=$_GET['start'];
     if($start<=0){
       $startp_id=0;
       $current_page=1;
     }else{
       $current_page=$start;
       $start--;
       $start=$start*$per_page;
     }
   }
   $record=mysqli_num_rows(mysqli_query($con,"select * from product where status=1 order by p_id desc"));
   $pagi=ceil($record/$per_page);
   
   $sql.= "select * from product where status=1 limit $start,$per_page";
   }
   $res=mysqli_query($con,$sql);
   
   ?>
<!-- BODY START -->
<!--Page Title-->
<section class="page-banner style-two" style="background-image:url(images/background/services-title-bg.jpg);">
   <div class="auto-container">
      <div class="inner-container clearfix">
         <h1>Our Services</h1>
         <ul class="bread-crumb clearfix">
            <li><a href="index.php">Home</a></li>
            <li>What We Do</li>
         </ul>
      </div>
   </div>
</section>
<!--End Page Title-->
<!-- Services Section Three -->
<section class="services-section-three style-two">
   <div class="auto-container">
      <!-- Sec Title -->
      <div class="sec-title">
         <div class="row">
            <div class="col-lg-4 col-md-12 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
               <div class="title">We are Shree Ram</div>
               <h2>We are Renting Generators</h2>
            </div>
            <div class="col-lg-8 col-md-12 wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
               <div class="text">
                  Incepted in the year 2001, “Shree Ram Generator Sales And Service” is a distinguished wholesaler offering an enormous consignment of Portable Generators,Diesel Generator etc.
               </div>
            </div>
         </div>
      </div>
      <!--  <div class="grid-option">
         <form>
              <select class="custom-select" onchange="sort_property('<?php echo $p_id?>','<?php echo SITE_PATH ?>')" id="sort_p_id">
             <option selected>All</option>
             <option value="high">Price High to Low</option>
             <option value="low">Price Low to High</option>
             <option value="new">New Properties</option>
             <option value="old">Old Properties</option>
           </select>
         </form>
         </div> -->
      <div class="row">
         <?php while($machine_display=mysqli_fetch_array($res)) {
            $_SESSION['TEXT']=$machine_display['description'];
            
            
            
            ?>
         <!-- Services Block Three -->
         <div style="height: 450px" class="services-block-three col-xl-4 col-lg-6 col-md-6 col-sm-12">
            <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
               <div class="image">
                  <a href="detial.php?p_id=<?php echo $machine_display['p_id']; ?>">
                  <img src="admin/media/product/<?php echo $machine_display['image']; ?>" alt="" class="img-a img-fluid"></a>
               </div>
               <div class="lower-content">
                  <h3><a href="detial.php?p_id=<?php echo $machine_display['p_id']; ?>"><?php echo $machine_display['name']; ?></a></h3>
                  <div class="text"><?php echo shorten($_SESSION['TEXT'], 30); ?></div>
                  <a href="detial.php?p_id=<?php echo $machine_display['p_id']; ?>" class="read-more">Read More <span class="fas fa-angle-right"></span></a>
               </div>
            </div>
         </div>
         <?php } ?>
      </div>
      <div class="row">
         <div class="col-sm-12">
            <nav class="pagination-a">
               <ul class="pagination justify-content-end">
                  <?php 
                     for($i=1;$i<=$pagi;$i++){
                     $class='';
                     if($current_page==$i){
                       ?>
                  <li class="page-item active"><a class="page-link" href="javascript:void(0)"><?php echo $i?></a></li>
                  <?php
                     }else{
                     ?>
                  <li class="page-item"><a class="page-link" href="?start=<?php echo $i?>"><?php echo $i?></a></li>
                  <?php
                     }
                     ?>
                  <?php } ?>
               </ul>
            </nav>
         </div>
      </div>
   </div>
</section>
<!-- End Services Section Three -->
<!-- BODY END -->
<?php include('include/footer.php'); ?>
</div>  
<!--End pagewrapper-->
<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
<!--Scroll to top-->
<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--Revolution Slider-->
<script src="plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="js/main-slider-script.js"></script>
<!--Revolution Slider-->
<script src="js/jquery-ui.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/appear.js"></script>
<script src="js/script.js"></script>
<script type="text/javascript">
   function sort_property(p_id,site_path){
       var sort_p_id=jQuery('#sort_p_id').val();
       window.location.href=site_path+"all_services.php?p_id="+p_id+"&sort="+sort_p_id;
   }
   
</script>
</body>
<!-- Mirrored from t.commonsupport.xyz/solustrid/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Feb 2021 09:15:30 GMT -->
</html>