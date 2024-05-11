<?php
session_start();
require_once('../inc/db.php');
require_once('../inc/functions.php');

///////////////////// categories //////////////


// add category
if (isset($_GET['add_category']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    if(empty($_FILES['image']['name']) || empty($title)){
        header('Location: index.php?show-category&add-empty');
        exit();
    }
    $image = $_FILES['image']['name'];
    $image_name = time() . '-' . $image;
    $tmp_path = $_FILES['image']['tmp_name'];
    $image_path = 'resources/images/categories/' . $image_name;
    move_uploaded_file($tmp_path, $image_path);
    $table = 'categories';
    addCategory($connection, $table, $title, $image_name);
    header('Location: index.php?show-category&add');
    exit();
}


// delete category

if(isset($_GET['delete-category'])){
    $id = $_GET['delete-category'];
    $table = 'categories';
    $result = showOneQuery($connection, $table, $id);
    unlink('resources/images/categories/' . $result['image']);
    deletQuery($connection, $table, $id);
    header('Location: index.php?show-category&del');
    exit();
}

//  update category
if (isset($_GET['update-category']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_GET['update-category'];
    $table = 'categories';
    $title = $_POST['title'];
    $image = $_FILES['image']['name'];
    $result = showOneQuery($connection, $table, $id);
    $image_main = $result['image'];
    if (empty($image)) {
        $image_name = $image_main;
    } else {
        $image_name = $image . '-new';
        $image_name = time() . '-' . $image;
        unlink('resources/images/categories/' . $image_main);
        $image_name = time() . '-' . $image;
        $tmp_path = $_FILES['image']['tmp_name'];
        $image_path = 'resources/images/categories/' . $image_name;
        move_uploaded_file($tmp_path, $image_path);
    }
    updateCategory($connection, $table, $title, $image_name, $id);
    header('Location: index.php?show-category&update');
    exit();
}


////////////////////////// products //////////////////////// 


// add product
if (isset($_GET['add-product']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $summray = $_POST['summray'];
    $description = $_POST['description'];
    print_r($description);
    $price = $_POST['price'];
    $cat_id = $_POST['cat_id'];
    $image = $_FILES['image']['name'];
    $image_name = time() . '-' . $image;
    $tmp_path = $_FILES['image']['tmp_name'];
    $image_path = 'resources/images/products/' . $image_name;
    move_uploaded_file($tmp_path, $image_path);
    $table = 'products';
    addProduct($connection, $table, $name, $summray, $description, $price, $image_name, $cat_id);
    header('Location: index.php?show-products&add');
    exit();
}

// delete product
if (isset($_GET['delete-product'])) {
    $id = $_GET['delete-product'];
    $table = 'products';
    $result = showOneQuery($connection, $table, $id);
    unlink('resources/images/products/' . $result['image']);
    deletQuery($connection, $table, $id);
    header('Location: index.php?show-products&del');
    exit();
}


// update product
if (isset($_GET['update-product']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_GET['update-product'];
    $table = 'products';
    $name = $_POST['name'];
    $summray = $_POST['summray'];
    $description = $_POST['description'];
    $price=$_POST['price'];
    $cat_id = $_POST['cat_id'];
    $image = $_FILES['image']['name'];
   
   
    $result = showOneQuery($connection, $table, $id);
    $image_main = $result['image'];
    if (empty($image)) {
        $image_name = $image_main;
    } else {
        $image_name = $image . '-new';
        $image_name = time() . '-' . $image;
        unlink('resources/images/products/' . $image_main);
        $image_name = time() . '-' . $image;
        $tmp_path = $_FILES['image']['tmp_name'];
        $image_path = 'resources/images/products/' . $image_name;
        move_uploaded_file($tmp_path, $image_path);
    }
    updateProduct($connection, $table, $name, $summray, $description,$price, $image_name, $cat_id, $id);
    header('Location: index.php?show-products&update');
    exit();
}

// delete user
if(isset($_GET['delete-user'])){
    $id=$_GET['delete-user'];
    $table = 'users';
    $result = showOneQuery($connection, $table, $id);
    deletQuery($connection, $table, $id);
    header('Location: index.php?show-users&del');
    exit();
}



// delete orders
if (isset($_GET['delete-orders'])) {
    $id = $_GET['delete-orders'];
    $table = 'orders';
    $result = showOneQuery($connection, $table, $id);
    deletQuery($connection, $table, $id);
    header('Location: index.php?show-orders&del');
    exit();
}

