<?php include_once('content/partials/_header.php');

if (isset($_GET['id'])) {
    $cat_id = $_GET['id'];
    $table = 'categories';
    $category = showOneQuery($connection, $table, $cat_id);
}


?>
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
 
 </style>
 <br><br><br>
<main>
    <h1 style="text-align:center; ">محصولات دسته <span class="text-danger"><?php echo $category['title'] ?></span></h1>
    <section class="categories">
        <?php
        $table = 'products';
        $products = showQueryWithCondition($connection, $table, $cat_id);
        if (mysqli_num_rows($products) > 0) {
            while ($product = mysqli_fetch_assoc($products)) { ?>
                <div class="cart">
                    <div class="img">
                        <img src="admin/resources/images/products/<?php echo $product['image'] ?>" alt="">
                    </div>
                    <div class="title"><?php echo $product['name'] ?></div>
                    <p class="price"><?php echo number_format($product['price']) ?> تومان</p>
                    <div class="show-details">
                        <a href="product-details.php?id=<?php echo $product['id'] ?>">مشاهده جزئیات</a>
                    </div>
                </div>
        <?php
            }
        } else {
            echo 'هیچ محصولی وجود ندارد';
        }
        ?>

    </section>
</main>
<br><br>
<?php include_once('content/partials/_footer.php') ?>