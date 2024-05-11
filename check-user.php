<?php
session_start();
require_once('inc/functions.php');

//regieter
if (isset($_GET['register']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = mysqli_query($connection , "select * from users where email = '$email' ");
    if(empty($username) || empty($password)){
        header('Location: register.php?empty');
        exit();
    }
    if (mysqli_num_rows($query) == 1) {
        header('Location: register.php?error');
        exit();
    } 
    else{
        registerUser($connection, $username , $email, $password, $role = "user");
    }
}


// login
if (isset($_GET['login']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user = loginUser($connection , $username , $email , $password);
    if($user['role'] == "user"){
        $_SESSION['user'] = $username;
        header('Location: ./');
        exit();
    }

    if($user['role'] == "admin"){
        $_SESSION['admin'] = $username;
        header('Location: admin/index.php');
        exit();
    }

    if(empty($username) || empty($password)){
        header('Location: login.php?empty');
        exit();
    }

    if(!$user){
        header('Location: login.php?error');
        exit();
    }

}

//logout

if(isset($_GET['logout-user']) && $_SERVER['REQUEST_METHOD'] == 'POST'){
    if($_SESSION['user']){
        unset($_SESSION['user']);
    }
    if($_SESSION['admin']){
        unset($_SESSION['admin']);
    }
    header('Location: ./');

}

// constact us
if (isset($_GET['cantact']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $table = 'comments';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $text = $_POST['text'];
    if(empty($name) || empty($email) || empty($text)){
        header('Location: contact-us.php?empty');
        exit();
    }
}
    addCommment($connection , $table , $name , $email , $text);
    header('Location: contact-us.php?success');
    exit();
 



?>