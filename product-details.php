<?php include_once('content/partials/_header.php');

if(isset($_GET['id'])){
    $pro_id = $_GET['id'];
    $table = 'products';
    $product = showOneQuery($connection, $table, $pro_id);
}

if(!$product){
    header('Location: index.php');
}
?>
<br><br><br>
<style>
 


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
     border: 3px solid #ff5400;
     padding: 10px 20px;
     height: 450px;
     width: 24%;
     border-radius: 10px;
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
     background-color: #ccdbd8;
     height: 1px;
     width: 100%;
     left: 0;
     bottom:-7px;
 }
 
 .categories .cart .price{
     text-align:right;
 }
 
 .categories .cart .show-details{
     background-color: #ff5400;
     border-radius: 5px;
     text-align: center;
     width: 60%;
     cursor: pointer;
 }
 
 .categories .cart .show-details a{
     color: #ff5400;
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
     direction:rtl;
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
     border: 1px solid  #000;
     background-color: #da70d6;
     color: #000;
     padding: 10px 20px;
     border-radius: 10px;
     font-size: 18px;
     cursor: pointer;
     transition: all .3s;
  }
 
  .product-show .product-info .product-order form input[type=submit]:disabled{
     background-color: #da70d6;
     color: #000;
     cursor: auto;
  }
 
  .product-show .product-info .product-order form input[type=submit]:disabled:hover{
     background-color: #dda0dd;
     color: #273c46;
  }
 
  .product-show .product-info .product-order form input[type=submit]:hover{
     background-color: #ee82ee;
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
     text-align:right;
     color:#000;
  }
 
  .product-show .product-desc h3{
     border-bottom: 1px dashed #f3f3f3;
     padding-bottom: 10px;
     width: 12%;

  }
 
  .product-show .product-desc p{
     line-height: 2;
     font-size:20px;
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
 
 </style>
 <br><br><br>

<main>

    <seciton class="product-show">
        <div class="product-info">
            <div class="product-img">
                <img src="admin/resources/images/products/<?php echo $product['image'] ?>" alt="">
            </div>
            <div class="product-order">
                <div class="product-details">
                    <div class="product-details-container"><p class="title" style="color:#000;font-size:20px;">نام محصول:</p><p class="value"><?php echo $product['name'] ?></p></div>
                    <div class="product-details-container"><p class="title" style="color:#000;font-size:20px;">قیمت محصول:</p><p class="value"><?php echo number_format($product['price']) ?> تومان</p></div>
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
        </div>
        <div class="product-desc">
            <h3 style="text-align:right;  margin-left:1120px;direction:rtl; font-size:20px;">توضیحات محصول:</h3>
            <p>
            <?php echo $product['description'];?>
            </p>
        </div>
    </seciton>
</main>
<br><br><br>

<?php include_once('content/partials/_footer.php') ?>
