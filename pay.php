<?php
session_start();
require_once('inc/functions.php');
if(isset($_POST['pay'])){
    
    $table = 'orders';
    $product_name = $_POST['product_name'];
    $price = $_POST['total_price'];
    $username = $_POST['username'];
    addOreder($connection , $table , $product_name , $price , $username );

    $product_ids = $_POST['product_id'];
    $explode = explode('-' , $product_ids);
    foreach($explode as $id){
        unset($_SESSION['cart_'.$id]);
    }

    header('Location: ./');
    exit();
}

?>