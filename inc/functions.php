<?php
require_once('db.php');

function showQuery($connection, $table)
{
    return mysqli_query($connection, "select * from $table");
}

function showQueryWithCondition($connection, $table , $cat_id){
    return mysqli_query($connection, "select * from $table where cat_id = $cat_id");
}

function deletQuery($connection, $table, $id)
{
    return mysqli_query($connection, "delete from $table where id = $id ");
}

function showOneQuery($connection, $table, $id)
{
    $query = mysqli_query($connection, "select * from $table where id = $id ");
    if (mysqli_num_rows($query) == 1) {
        return mysqli_fetch_assoc($query);
    }
}


// users function 

function registerUser($connection, $username, $email , $password, $role = "user")
{
    $query = mysqli_query($connection, "insert into users (username , email , password , role) values ('$username', '$email' , '$password' , '$role')");
    header('Location: login.php');
    exit();
    return $query;
}

function loginUser($connection , $username , $email , $password) {
    $query = mysqli_query($connection , "select * from users where username = '$username' and email = '$email' and password = '$password' ");
    if (mysqli_num_rows($query) == 1) {
        return mysqli_fetch_assoc($query);
    } 
}


//  category functions

function addCategory($connection, $table, $title, $image_name)
{
    return mysqli_query($connection, "insert into $table (title , image) values ('$title' , '$image_name') ");
}

function updateCategory($connection, $table, $title, $image, $id)
{
    return mysqli_query($connection, "update $table set title ='$title', image = '$image' where id = $id ");
}


// products functions

function addProduct($connection, $table, $name, $summray, $description, $price, $image, $cat_id)
{
    return mysqli_query($connection, "insert into $table (name , summray , description , price , image , cat_id) values ('$name' , '$summray' , '$description' , '$price' , '$image' , '$cat_id') ");
}

function updateProduct($connection, $table, $name, $summray, $description,$price, $image, $cat_id, $id)
{
    return mysqli_query($connection, "update $table set name ='$name', summray = '$summray' , description = '$description' ,price='$price', image = '$image' , cat_id = '$cat_id'  where id = $id ");
}

// orders functions
function addOreder($connection , $table , $product_name , $price , $username ){
    return mysqli_query($connection , "insert into $table (product_name , price , username) values ('$product_name' , '$price' , '$username')");
}


// search function

function searchProduct($connection , $table , $name){
    return mysqli_query($connection , "select * from $table where name like '%$name%'");
}


// add comments

function addCommment($connection , $table , $name , $email , $text){
    return mysqli_query($connection , "insert into $table (name , email , text) values('$name', '$email' , '$text')");
}

?>