<?php include_once('content/partials/_header.php');
?>
<? if(isset($_SESSION['user']) || isset($_SESSION['admin'])){
    header('Location: ./');
}
?>

    <?php
    
    if(isset($_GET['error'])){
        echo '<p class="alert-danger">نام کاربری یا رمز عبور یا ایمیل اشتباه است</>';
    }
    
    if(isset($_GET['empty'])){
        echo '<p class="alert-danger">لطفا همه ی فیلد ها را پر کنید</p>';
    }
    
    ?>

<style>


    .wrappers {
      overflow: hidden;
      max-width: 390px;
      background: #fff;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.1);
      margin-left: 500px;
    }
    .wrappers .title-text {
      display: flex;
      width: 200%;
    }
    .wrappers .title {
      width: 50%;
      font-size: 35px;
      font-weight: 600;
      text-align: center;
      transition: all 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }
    .wrappers .slide-controls {
      position: relative;
      display: flex;
      height: 50px;
      width: 100%;
      overflow: hidden;
      margin: 30px 0 10px 0;
      justify-content: space-between;
      border: 1px solid lightgrey;
      border-radius: 15px;
    }
    .slide-controls .slide {
      height: 100%;
      width: 100%;
      color: #fff;
      font-size: 18px;
      font-weight: 500;
      text-align: center;
      line-height: 48px;
      cursor: pointer;
      z-index: 1;
      transition: all 0.6s ease;
    }
    .slide-controls label.signup {
      color: #000;
    }
    .slide-controls .slider-tab {
      position: absolute;
      height: 100%;
      width: 50%;
      left: 0;
      z-index: 0;
      border-radius: 15px;
      background: -webkit-linear-gradient(left, #003366, #004080, #0059b3, #0073e6);
      transition: all 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }
    input[type="radio"] {
      display: none;
    }
    #signup:checked ~ .slider-tab {
      left: 50%;
    }
    #signup:checked ~ label.signup {
      color: #fff;
      cursor: default;
      user-select: none;
    }
    #signup:checked ~ label.login {
      color: #000;
    }
    #login:checked ~ label.signup {
      color: #000;
    }
    #login:checked ~ label.login {
      cursor: default;
      user-select: none;
    }
    .wrapper .form-containers {
      width: 100%;
      overflow: hidden;
    }
    .form-containers .form-inner {
      display: flex;
      width: 200%;
      height: 300px;
    }
    .form-containers .form-inner form {
      width: 50%;
      transition: all 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }
    .form-inner form .field {
      height: 50px;
      width: 100%;
      margin-top: 20px;
    }
    .form-inner form .field input {
      height: 100%;
      width: 100%;
      outline: none;
      padding-left: 15px;
      border-radius: 15px;
      border: 1px solid lightgrey;
      border-bottom-width: 2px;
      font-size: 17px;
      transition: all 0.3s ease;

    }
    .form-inner form .field input:focus {
      border-color: #1a75ff;
      /* box-shadow: inset 0 0 3px #fb6aae; */
    }
    .form-inner form .field input::placeholder {
      color: #000000;
      transition: all 0.3s ease;
      text-align: right;
      
    }
    form .field input:focus::placeholder {
      color: #1a75ff;
    }
    .form-inner form .pass-link {
      margin-top: 5px;
    }
    .form-inner form .signup-link {
      text-align: center;
      margin-top: 30px;
    }
    .form-inner form .pass-link a,
    .form-inner form .signup-link a {
      color: #1a75ff;
      text-decoration: none;
    }
    .form-inner form .pass-link a:hover,
    .form-inner form .signup-link a:hover {
      text-decoration: underline;
    }
    form .btn {
      height: 50px;
      width: 100%;
      border-radius: 15px;
      position: relative;
      overflow: hidden;
    }
    form .btn .btn-layer {
      height: 100%;
      width: 300%;
      position: absolute;
      left: -100%;
      background: -webkit-linear-gradient(
        right,
        #003366,
        #004080,
        #0059b3,
        #0073e6
      );
      border-radius: 15px;
      transition: all 0.4s ease;
    }
    form .btn:hover .btn-layer {
      left: 0;
    }
    form .btn input[type="submit"] {
      height: 100%;
      width: 100%;
      z-index: 1;
      position: relative;
      background: none;
      border: none;
      color: #fff;
      padding-left: 0;
      border-radius: 15px;
      font-size: 20px;
      font-weight: 500;
      cursor: pointer;
    }
    </style>
    
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
          <br><br>
        <body>

            <div class="wrappers">
                <div class="title-text">
                  <div class="title login">ثبت نام</div>
                </div>
                <div class="form-containers">
                  </div>
                  <div class="form-inner">
                  <form action="check-user.php?register" method="post">

                    <form action="#" class="login">
                      <div class="field">

                        <input type="text" placeholder="نام کاربری" name="username" id="username">
                      </div>
                      <div class="field">
                        <input type="email" placeholder="ایمیل"  name="email" id="email">
                      </div>
                      <div class="field">
                        <input type="password" placeholder="پسورد" name="password" id="password">
                      </div>
                      <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" name="login" value="ثبت نام">
                      </div>
    </form>
    </div>
    </div>
    </div>
    </body>
    </body>
    </html>
    
    
    <br><br>
    

       </body>
    </html>
    
    <?php include_once('content/partials/_footer.php') ?>
    