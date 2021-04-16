<?php $page='gallery'; include('include/header.php'); 

//Display Products 
// $multiple_sql="SELECT * FROM `gallery`";
// $multiple_run=mysqli_query($con,$multiple_sql);




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
$per_page=6;
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
$record=mysqli_num_rows(mysqli_query($con,"SELECT * FROM gallery  where status=1 order by id"));
$pagi=ceil($record/$per_page);

$sql.= "select * from gallery where status=1 limit $start,$per_page";
}
$res=mysqli_query($con,$sql);

?>

<!-- BODY START -->
    
<style type="text/css">
    /* (A) GALLERY CONTAINER */
/* (A1) ON BIG SCREENS */
.gallery {
  display: grid;
  grid-template-columns: repeat(3, auto); /* 3 IMAGES PER ROW */
  grid-gap: 10px;
  max-width: 1200px;
  margin: 0 auto; /* HORIZONTAL CENTER */
}
/* (A2) ON SMALL SCREENS */
@media screen and (max-width: 640px) {
  .gallery {
    grid-template-columns: repeat(2, auto); /* 2 IMAGES PER ROW */
  }
}

/* (B) THUMBNAILS */
.gallery img { 
  width: 100%; 
  height: 200px;
  cursor: pointer;
  /* FILL, CONTAIN, COVER, SCALE-DOWN : USE WHICHEVER YOU LIKE */
  object-fit: cover;
}
.gallery img:fullscreen { object-fit: contain; }

/* (C) CAPTION */
.gallery figure { margin: 0; }
.gallery figcaption { 
  padding: 5px;
  background: #3e3e3e;
  color: #fff;
}

/* (X) DOES NOT MATTER */
body, html {
  padding: 0;
  margin: 0;
}
</style>
    <!-- Services Section Three -->
    <section class="services-section-three style-two">
        <div class="auto-container">    
            <!-- Sec Title -->
            <div class="sec-title">
                <div class="row">
                    <div class="col-lg-4 col-md-12 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="title">We are Solustrid</div>
                        <h2>Our Gallery</h2>
                    </div>
                </div>
            </div>

            <div class="row">
        
      <!-- Services Block Three -->
         <?php      
         // echo mysqli_num_rows($res);
        while($show=mysqli_fetch_array($res)) { ?>
                <div class="services-block-three col-xl-4 col-lg-6 col-md-6 col-sm-12">
                   <div class="gallery">
                
                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                           <img style="height: 300px" src="admin/<?php echo $show['file']; ?>" >
                        </div>
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
    ?><li class="page-item active"><a class="page-link" href="javascript:void(0)"><?php echo $i?></a></li><?php
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
    window.addEventListener("DOMContentLoaded", function(){
  // (A) GET ALL IMAGES
  var all = document.querySelectorAll(".gallery img");
  
  // (B) CLICK ON IMAGE TO TOGGLE FULLSCREEN
  if (all.length>0) { for (let img of all) {
    img.addEventListener("click", function(){
      // EXIT FULLSCREEN
      if (document.webkitFullscreenElement || document.fullscreenElement) {
        if (document.exitFullscreen) { document.exitFullscreen(); }
        else if (document.webkitExitFullscreen) { document.webkitExitFullscreen(); }
      }

      // ENGAGE FULLSCREEN
      else {
        if (this.requestFullscreen) { this.requestFullscreen(); }
        else if (this.webkitRequestFullscreen) { this.webkitRequestFullscreen(); }
      }
    });
  }}
});
</script>
</body>

<!-- Mirrored from t.commonsupport.xyz/solustrid/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Feb 2021 09:15:30 GMT -->
</html>