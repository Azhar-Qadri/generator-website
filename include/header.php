<?php
   require('include/db.php');
   $cat_sql="select * from categories where status=1 order by cat_name";
   $cat_result=mysqli_query($con,$cat_sql);
   $cat_res=mysqli_query($con,$cat_sql);
   $url=$_SERVER['PHP_SELF'];
   $u=explode("/", $url);
   ?>
<!DOCTYPE html>
<html lang="en">
   <!-- Mirrored from t.commonsupport.xyz/solustrid/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Feb 2021 09:13:58 GMT -->
   <head>
      <meta charset="utf-8">
      <title>Shree Ram -  Generator Sales And Service | Home </title>
      <!-- Stylesheets -->
      <link href="css/bootstrap.css" rel="stylesheet">
      <link href="plugins/revolution/css/settings.css" rel="stylesheet" type="text/css">
      <!-- REVOLUTION SETTINGS STYLES -->
      <link href="plugins/revolution/css/layers.css" rel="stylesheet" type="text/css">
      <!-- REVOLUTION LAYERS STYLES -->
      <link href="plugins/revolution/css/navigation.css" rel="stylesheet" type="text/css">
      <!-- REVOLUTION NAVIGATION STYLES -->
      <link href="css/style.css" rel="stylesheet">
      <link href="css/responsive.css" rel="stylesheet">
      <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
      <link rel="icon" href="images/favicon.png" type="image/x-icon">
      <!-- Responsive -->
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
      <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
      <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
   </head>
   <style>
      label.error
      {
      color:red;
      }
      input.error
      {
      color: red;
      }
      input.valid
      {
      color:green;
      }
      .active{
      color: orange;
      }
   </style>
   <body>
      <div class="page-wrapper">
      <!-- Preloader -->
      <div class="preloader"></div>
      <header class="main-header">
         <!--Header Top-->
         <div class="header-top">
            <div class="auto-container clearfix">
               <div class="top-left clearfix">
                  <div class="text">We offer Generator on Rent</div>
                  <!-- Social Links -->
                  <ul class="social-links clearfix">
                     <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                     <li><a href="#"><span class="fab fa-google-plus-g"></span></a></li>
                     <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                     <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                     <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                  </ul>
               </div>
               <div class="top-right clearfix">
                  <!-- Info List -->
                  <ul class="info-list clearfix">
                     <li><a href="#"><span class="txt">+91 70 69 7070 67</span> <span class="icon fa fa-phone"></span></a></li>
                     <li><a href="https://webmastersinfotech.com/contact-us/"  target="_blank"><span class="txt"> support@webmastersinfotech.com</span> <span class="icon fa fa-envelope-open"></span></a></li>
                  </ul>
               </div>
            </div>
         </div>
         <!-- End Header Top -->
         <!-- Header Upper -->
         <div class="header-upper">
            <div class="inner-container">
               <div class="auto-container clearfix">
                  <!--Info-->
                  <div class="logo-outer">
                     <div class="logo"><a href="index.php"><img src="images/logo.png" alt="" title=""></a></div>
                  </div>
                  <!--Nav Box-->
                  <div class="nav-outer clearfix">
                     <!-- Main Menu -->
                     <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="navbar-header">
                           <!-- Togg le Button -->      
                           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                           <span class="icon flaticon-menu-button"></span>
                           </button>
                        </div>
                        <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                           <ul class="navigation clearfix">
                              <li><a href="index.php" <?php if($u[4]=='index.php'){?>
                                 style="color:#fd7e14"
                                 <?php 
                                    } ?>>Home</a></li>
                              <li><a href="about.php" <?php if($u[4]=='about.php'){?>
                                 style="color:#fd7e14"
                                 <?php 
                                    } ?>>About us</a></li>
                              <li><a href="all_services.php" <?php if($u[4]=='all_services.php'){?>
                                 style="color:#fd7e14"
                                 <?php 
                                    } ?>>All Machines</a></li>
                              <li class="dropdown">
                                 <a href="#">Services</a>
                                 <ul>
                                    <li>
                                       <?php 
                                          $cat_arr=array();
                                          while($row=mysqli_fetch_assoc($cat_result)){ ?>
                                       <a href="service.php?cat_id=<?php echo $row['cat_id'] ?>" <?php if($u[4]=='service.php'){?>
                                          style="color:#fd7e14"
                                          <?php 
                                             } ?>><?php echo $row['cat_name'] ?></a>
                                       <?php 
                                          }
                                          ?>
                                    </li>
                                 </ul>
                              </li>
                              <li><a href="gallery.php" <?php if($u[4]=='gallery.php'){?>
                                 style="color:#fd7e14"
                                 <?php 
                                    } ?>>Gallery</a></li>
                              <li><a href="career.php" <?php if($u[4]=='career.php'){?>
                                 style="color:#fd7e14"
                                 <?php 
                                    } ?>>Career</a></li>
                           </ul>
                        </div>
                     </nav>
                     <!-- Main Menu End-->
                     <!-- Main Menu End-->
                     <div class="outer-box clearfix">
                        <div class="btn-box">
                           <form method="post" action="search.php">
                              <div class="input-group">
                                 <div class="form-outline">
                                    <input id="search-input" type="text" name="search" id="form1" placeholder="Search" class="form-control" />
                                 </div>
                                 <input type="submit" style="height: 40px" name="btnsearch" class="form-control btn btn-primary" value="search">
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!--End Header Upper-->
         <!-- Sticky Header  -->
         <div class="sticky-header">
            <div class="auto-container clearfix">
               <!--Logo-->
               <div class="logo pull-left">
                  <a href="index.php" title=""><img src="images/logo-small.png" alt="" title=""></a>
               </div>
               <!--Right Col-->
               <div class="pull-right">
                  <!-- Main Menu -->
                  <nav class="main-menu">
                     <div class="navbar-collapse show collapse clearfix">
                        <ul class="navigation clearfix">
                           <li><a href="index.php" <?php if($u[4]=='index.php'){?>
                              style="color:#fd7e14"
                              <?php 
                                 } ?>>Home</a></li>
                           <li><a href="about.php" <?php if($u[4]=='about.php'){?>
                              style="color:#fd7e14"
                              <?php 
                                 } ?>>About us</a></li>
                           <li><a href="all_services.php" <?php if($u[4]=='all_service.php'){?>
                              style="color:#fd7e14"
                              <?php 
                                 } ?>>All Machines</a></li>
                           <li class="dropdown">
                              <a href="#">Services</a>
                              <ul>
                                 <li>
                                    <?php 
                                       $cat_arr=array();
                                       
                                       while($row=mysqli_fetch_assoc($cat_res)){ ?>
                                    <a href="service.php?cat_id=<?php echo $row['cat_id'] ?>" <?php if($u[4]=='services.php'){?>
                                       style="color:#fd7e14"
                                       <?php 
                                          } ?>><?php echo $row['cat_name'] ?></a>
                                    <?php 
                                       }
                                       ?>
                                 </li>
                              </ul>
                           </li>
                           <li><a href="gallery.php" <?php if($u[4]=='gallery.php'){?>
                              style="color:#fd7e14"
                              <?php 
                                 } ?>>Gallery</a></li>
                           <li><a href="career.php" <?php if($u[4]=='career.php'){?>
                              style="color:#fd7e14"
                              <?php 
                                 } ?>>Career</a></li>
                        </ul>
                     </div>
                  </nav>
                  <!-- Main Menu End-->
               </div>
            </div>
         </div>
         <!-- End Sticky Menu -->
      </header>
      <!-- End Main Header -->
      <script type="text/javascript">
         const searchButton = document.getElementById('search-button');
         const searchInput = document.getElementById('search-input');
         searchButton.addEventListener('click', () => {
         const inputValue = searchInput.value;
         alert(inputValue);
         });
      </script>