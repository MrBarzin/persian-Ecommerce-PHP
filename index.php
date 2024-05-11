<?php include_once('content/partials/_header.php'); ?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>خوش آمدید به تکنولایف</title>
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
    <style>
        .text-bg {
            padding-top: 100px;
        }
        .text-img {
            margin-top: 50px;
        }
        .carousel-item img {
            margin: auto;
            display: block;
        }
        .carousel-caption {
            background-color: rgba(0,0,0,0.6);
            padding: 20px;
            border-radius: 10px;
        }
        .carousel-caption p {
            font-size: 2rem;
            color: #fff;
        }
        .carousel-control-prev, .carousel-control-next {
            color: #fff;
            font-size: 2rem;
        }
        .carousel-control-prev {
            left: -50px;
        }
        .carousel-control-next {
            right: -50px;
        }
    </style>
</head>
<body class="main-layout">
<!-- loader  -->
<div class="loader_bg">
    <div class="loader"><img src="images/loading.gif" alt="#" /></div>
</div>
<!-- end loader -->
<!-- banner -->
<section class="banner_main">
    <div id="banner1" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#banner1" data-slide-to="0" class="active"></li>
            <li data-target="#banner1" data-slide-to="1"></li>
            <li data-target="#banner1" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="carousel-caption">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="text-bg">
                                    <p>به تکنولایف خوش آمدید!</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="text-img">
                                    <figure><img src="images/19.png" alt="#" style="width: 600px; height: 500px;"/></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="carousel-caption">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="text-bg">
                                    <p>انواع گوشی‌های هوشمند</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="text-img">
                                    <figure><img src="images/22.png" alt="#" style="width: 700px; height: 500px;"/></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="carousel-caption">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="text-bg">
                                    <p>تکنولایف، همراه همیشگی شما</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="text-img">
                                    <figure><img src="images/23.png" alt="#" style="width: 1000px; height: 450px;"/></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
            <i class="fa fa-chevron-left" aria-hidden="true"></i>
        </a>
        <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
        </a>
    </div>
</section>
<!-- end banner -->
<br><br><br>
<!-- laptop  section -->
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <a href="categories.php?id=12">
                <img src="images/27.png" alt="" style="width: 100%; height: 300px; border: 3px solid #000; border-radius: 20px;">
            </a>
        </div>
        <div class="col-md-6">
            <a href="categories.php?id=11">
                <img src="images/28.webp" alt="" style="width: 100%; height: 500px; border: 3px solid #ff0000; border-radius: 20px;">
            </a>
        </div>
    </div>
</div>
<!-- end laptop  section -->
<!-- customer -->
<br>
<!-- end contact -->
<!--  footer -->
</body>
</html>
<?php include_once('content/partials/_footer.php') ?>
s