<?php
session_start();
require('inc/functions.php');

?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>cla</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout inner_posituong computer_page">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto" style="direction: rtl;">
                              <li class="nav-item active" >
                                 <a class="nav-link" href="index.php">خانه</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="about.php">درباره ما</a>
                              </li>
                          
                              <li class="nav-item">
                                 <a class="nav-link" href="products.php">محصولات</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="contact-us.php">ارتباط با ما</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="register.php">ثبت نام</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="login.php">ورود</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="cart.php">سبد خرید</a>
                              </li>
                              <li class="nav-item d_none">
                                 <a class="nav-link" href="search.php"><i class="fa fa-search" aria-hidden="true" style="margin-left: -550px;"></i></a>
                              </li>
                              <?php
 if (isset($_SESSION['user']) || isset($_SESSION['admin'])) {
     echo
     '<form action="check-user.php?logout-user" method="post" class="logout-form">  
     <input type="submit"  style=" background-color:#fff0f5;  margin-left:-50px; border:#fff0f5; margin-top:-100px " value="خروج">

 </form>';
 } 
?>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>