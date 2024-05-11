<?php include_once('content/partials/_header.php') ?>

    <br>
    <style>
/* main */

main{
    margin: 50px 0;
}

main.main{
    margin: 0;
}


main h1{
    margin-bottom: 30px;
    text-align: center;
}

main .products-cat{
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 30px;
    direction:rtl;
}


main .products-cat .cart{
    display: flex;
    height: 300px;
    border: 1px solid #273c46;
    border-radius: 10px;
}

main .products-cat .cart a{
    display: flex;
    flex-direction: column;
    justify-content: space-evenly;
}

main .products-cat .cart h3{
    text-align: center;
}

main .products-cat .cart img{
    display: inline-block;
    width: 250px;
    height: 80%;
    object-fit: contain;
    border-radius: 10px;
}


/* categories Page */
.categories{
     display: flex;
     flex-wrap: wrap;
     row-gap: 20px;
     column-gap:15px;
     direction:rtl;
 
 }
 
 .categories .cart{
     display: flex;
     flex-direction: column;
     background-color:#fff0f5;
     border: 3px solid #000;
     padding: 10px 20px;
     height: 450px;
     width: 24%;
     border-radius: 15px;
     color:#000000;
     gap: 15px;
 
 }
 
 .categories .cart .img{
     height: 50%;
 }
 
 .categories .cart .img img{
     width: 100%;
     height: 100%;
     border-radius: 5px;
 }
 
 .categories .cart .title{
     position: relative;
     text-align:right;
 
 }
 
 .categories .cart .title::after{
     position: absolute;
     content: '';
     background-color: #000;
     height: 1px;
     width: 100%;
     left: 0;
     bottom:-7px;
 }
 
 .categories .cart .price{
     text-align:right;
 }
 
 .categories .cart .show-details{
     background-color: #dda0dd;
     border-radius: 5px;
     text-align: center;
     width: 100%;
     cursor: pointer;
     margin-top:50px;
 }
 
 .categories .cart .show-details a{
     color: #000;
     display: inline-block;
     padding: 5px 6px;
     width: 100%;
  }
 
 
  /* product details page */
 
  .product-show{
     display: flex;
     flex-direction: column;
  }
 
  .product-show .product-info{
     display: flex;
     justify-content: space-between;
     gap: 10px;
     align-items: center;
  }
 
  .product-show .product-info .product-img{
     width: 45%;
  }
 
  .product-show .product-info .product-img img{
     width: 100%;
  }
 
  .product-show .product-info .product-order{
     width: 45%;
     display: flex;
     flex-direction: column;
     gap: 30px;
  }
 
  .product-show .product-info .product-order .product-details{
     display: flex;
     flex-direction: column;
     gap: 30px;
  }
 
  .product-show .product-info .product-order .product-details .product-details-container{
     display: flex;
     justify-content: space-between;
  }
 
  .product-show .product-info .product-order .product-details .title{
     width: 30%;
  }
 
  .product-show .product-info .product-order .product-details .value{
     width: 60%;
     color: #333;
     font-size: 20px;
  }
 
  .product-show .product-info .product-order form input[type=submit]{
     border: 1px solid  #06b995;
     background-color: #06b995;
     color: #f3f3f3;
     padding: 10px 20px;
     border-radius: 10px;
     font-size: 18px;
     cursor: pointer;
     transition: all .3s;
  }
 
  .product-show .product-info .product-order form input[type=submit]:disabled{
     background-color: #ccdbd8;
     color: #273c46;
     cursor: auto;
  }
 
  .product-show .product-info .product-order form input[type=submit]:disabled:hover{
     background-color: #ccdbd8;
     color: #273c46;
  }
 
  .product-show .product-info .product-order form input[type=submit]:hover{
     background-color: #fff;
     color: #273c46;
  }
 
  .product-show .product-desc{
     border: 1px solid #ccdbd8;
     border-radius: 10px;
     padding: 10px 20px;
     margin-top: 20px;
     display: flex;
     flex-direction: column;
     gap: 20px;
  }
 
  .product-show .product-desc h3{
     border-bottom: 1px dashed #f3f3f3;
     padding-bottom: 10px;
     width: 12%;
  }
 
  .product-show .product-desc p{
     line-height: 2;
  }
 
 
  /* table in cart page*/
 
 
 
  .table {
     width: 80%;
     border-collapse: collapse;
     margin: 20px auto 50px auto;
 }
 
 .table caption {
     margin-bottom: 20px;
     font-size: 20px;
     font-weight: bold;
 }
 
 .table tr {
     border-bottom: 1px solid #273c46;
     transition: all .3s;
     text-align: center;
 }
 
 .table tr:hover {
     background-color: #ccdbd8;
 }
 
 .table td {
     padding: 10px;
 }
 
 .table img {
     object-fit: contain;
 }
 
 .pay-btn{
     border: 1px solid #000;
     cursor: pointer;
     padding: 9px 12px;
     border-radius: 10px;
     background-color: #249801;
     color:#000;
     font-size: 18px;
     transition: all .3s;
 
 }
 
 .pay-btn:disabled{
     cursor: unset;
     background-color:#f3f3f3;
     color: #333;
     border: unset;
     
 }
 
 .pay-btn:hover{
     background-color: #ffffff;
     color: #000;
 }
 
 .pay-btn:disabled:hover{
     background-color: #fff;
     color: #333;
 }
 
 .plus-quantity , .minus-quantity , .delete-all{
     padding: 5px 8px;
     cursor: pointer;
     color: #f3f3f3;
     font-size: 18px;
     border-radius: 8px;
 }
 
 .plus-quantity{
     border: 1px solid  rgb(51, 170, 101);
     background-color:  rgb(51, 170, 101);
 }
 
 .minus-quantity {
     border: 1px solid #f8c611;
     background-color:#f8c611;
 }
 
 .delete-all{
     border: 1px solid rgb(199, 42, 42);;
     background-color: rgb(199, 42, 42);
 }
 

/* search products page */

.search-product{
    text-align: center;
    margin-bottom: 50px;
}

.search-product input[type=text]{
position: absolute;
    top: 50%;
    left: 50px;
    right: 0;
    width: 550px;
    padding: 35px;
    margin: -83px auto 0 auto;
    background-color: #ff7575;
    border-radius: 20px;
    box-shadow: 0 10px 40px #ff7c7c, 0 0 0 20px #ffffffeb;
    transform: scale(0.6);
    margin-left:250px;
    font-size:20px;

    
}
 .search-product input[type=submit]
{
    padding: 5px 15px;
    border-radius: 10px;
    border: 1px solid #273c46;
    font-size: 18px;
    margin-top: 80px;
    margin-left:300px;
    
}

.search-product input[type=text]::placeholder{
    font-size: 30px;
    color:#000;
    text-align:right;
}


.search-product input:focus{
    outline-color: #dda0dd;
}

.search-product input[type=submit]{
    background-color: #ff7575;
    color: #000;
    border: 1px solid#000;
    transition: all .3s;
    
}

.search-product input[type=submit]:hover{
    background-color: #fff;
    color: #000;
    cursor: pointer;
}

.search-title{
    font-size: 30px;
    margin-bottom: 50px;
    background-color: #f3f3f3;
    color:rgb(184, 120, 184);
    width: 25%;
    padding: 5px 10px;
    text-align: center;
    border-radius: 10px;
    direction:rtl;
}
input[type="text"]::placeholder {
    color: #e16868;
}


</style>
<main>
    <form action="search.php" class="search-product" method="post">
        <input type="text" placeholder="جستجو" name="search_text">
        <input type="submit" value="جستجو کن" name="search">
    </form>
    <section class="categories">
        <?php
        if (isset($_POST['search'])) {
            if(isset($_POST['search_text'])){
            $name = $_POST['search_text'];
            if(!empty($_POST['search_text'])){
            $table = 'products';
            $products = searchProduct($connection, $table, $name);
            if (mysqli_num_rows($products) > 0) {
                while ($product = mysqli_fetch_array($products)) { ?>
                    <div class="cart">
                    <div class="img">
                        <img src="admin/resources/images/products/<?php echo $product['image'] ?>" alt="">
                    </div>
                    <div class="title"><?php echo $product['name'] ?></div>
                    <p class="price"><?php echo number_format($product['price']) ?> تومان</p>
                    <div class="show-details">
                        
                    </div>
        
                    <form class="add-to-cart" action="cart.php" method="post">
                    <input type="hidden" name="product_id" value="<?php echo $product['id'];?>">
                    <?php
                    if(!isset($_SESSION['user'])){
                        echo '<input type="submit" value="اضافه کردن به سبد خرید" name="submit" disabled>';
                    }
                    else{
                        echo '<input type="submit" value="اضافه کردن به سبد خرید" name="submit">';
                    }
                    ?>
                </form>
                </div>
        <?php }
            } else {
                echo '<div class="alert-danger">متأسفم! هیچ محصولی با مشخصات فوق یافت نشد </div>';
            }
        }
        else{
            echo '<div class="alert-danger">لطفا کادر جستجو را پرکنید</div>';
        }
        }
    }
        ?>
    </section>
</main>
<br><br>
<?php include_once('content/partials/_footer.php') ?>