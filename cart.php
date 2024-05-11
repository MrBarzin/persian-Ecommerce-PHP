<?php include_once('content/partials/_header.php');
if (!isset($_SESSION['user']) && !isset($_SESSION['admin'])) {
}
?>
<br><br><br><br>
<style>
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
    }
    
    
    main .products-cat .cart{
        display: flex;
        height: 400px;
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
        width: 200px;
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
    text-align: left;
}

.categories .cart .show-details{
    background-color: #ff5400;
    border-radius: 5px;
    text-align: center;
    width: 50%;
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


 .table tr:nth-child(even){background-color: #dcdcdc;}
 .table {
    width: 80%;
    border-collapse: collapse;
    margin: 20px auto 50px auto;
    direction:rtl;
}
.table thead {
    background-color: #dda0dd;
    
}
.table td,th{
    border-bottom: 1px solid #273c46;
}
.table caption {
    margin-bottom: 20px;
    font-size: 20px;
    font-weight: bold;
}

.table tr {
    border: 1px solid #273c46;
    transition: all .3s;
    text-align: center;
    color:#000;
    font-size:18px;
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
    color:#fff;
    font-size: 18px;
    transition: all .3s;
}

.pay-btn:disabled{
    cursor: unset;
    background-color:#f3f3f3;
    color: #333;
    border: unset;
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
    height: 35px;
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
<main>
    <table class="table">
        <thead>
            <tr>
                <th>نام محصول</th>
                <th>تصویر</th>
                <th>قیمت</th>
                <th>تعداد</th>
                <th>قیمت کل</th>
                <th colspan="3">عملیات</th>
            </tr>
        </thead>
        <tbody>
            <?php

            if (isset($_POST['product_id'])) {
                $product_id = $_POST['product_id'];
                $table = 'products';
                $row = showOneQuery($connection, $table, $product_id);

                if (isset($_SESSION['cart_' . $row['id']])) {
                    $cart = $_SESSION['cart_' . $row['id']];
                    $_SESSION['cart_' . $row['id']] = [
                        'id' => $row['id'],
                        'name' => $cart['name'],
                        'price' => $cart['price'] + $row['price'],
                        'image' => $cart['image'],
                        'quantity' => $cart['quantity'] + 1
                    ];
                } else {
                    $_SESSION['cart_' . $row['id']] = [
                        'id' => $row['id'],
                        'name' => $row['name'],
                        'price' => $row['price'],
                        'image' => $row['image'],
                        'quantity' => 1
                    ];
                }
            } else if (isset($_GET['remove-cart'])) {
                unset($_SESSION['cart_' . $_GET['remove-cart']]);
            } else if (isset($_GET['minus'])) {
                $cart = ($_SESSION['cart_' . $_GET['minus']]);
                $product_id = $cart['id'];
                $table = 'products';
                $row = showOneQuery($connection, $table, $product_id);
                if ($cart['quantity'] > 1) {
                    $_SESSION['cart_' . $_GET['minus']] = [
                        'id' => $cart['id'],
                        'name' => $cart['name'],
                        'price' => $row['price'] * ($cart['quantity'] - 1),
                        'image' => $cart['image'],
                        'quantity' => $cart['quantity'] - 1,
                    ];
                } else {
                    unset($_SESSION['cart_' . $_GET['minus']]);
                }
            } 


            $session = $_SESSION;
            $cart = [];
            foreach ($session as $key => $value) {
                if (substr($key, 0, 5) == 'cart_') {
                    $cart[$key] = $value;
                }
            }


            foreach ($cart as $item) { ?>
                <tr>
                    <td><?php echo $item['name'] ?></td>
                    <td><img src="admin/resources/images/products/<?php echo $item['image'] ?>" alt="" width="100" height="100"></td>
                    <td><?php echo number_format($item['price'] / $item['quantity']) ?></td>
                    <td><?php echo $item['quantity'] ?></td>
                    <td><?php echo number_format($item['price']) ?></td> 
                    <td><a href="?remove-cart=<?php echo $item['id'] ?>" class="delete-all">حذف</a></td>
                    <td><form action="" method="post">
                    <input type="submit" class="plus-quantity" value="افزایش">
                    <input type="hidden" name="product_id" value="<?php echo $item['id']; ?>">
                </form></td>
                    <td><a href="?minus=<?php echo $item['id'] ?>" class="minus-quantity">کاهش</a></td>
                </tr>
            <?php } ?>


        </tbody>

    </table>
    <?php
        $price = array_column($cart , 'price');
        $total_price = array_sum($price);
        $product_name = implode('-' , array_column($cart , 'name'));
        $product_id = implode('-' , array_column($cart , 'id'));
    ?>
    <form action="pay.php" method="post" >
        <input type="hidden" name="total_price" value="<?php echo $total_price ?>">
        <input type="hidden" name="username" value="<?php echo $_SESSION['user']; ?>">
        <input type="hidden" name="product_name" value="<?php echo $product_name; ?>">
        <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
        <?php if(empty($product_id)){
            echo '<input type="submit" class="pay-btn" name="pay" value="خرید" disabled>';
        }
        else{
            echo '<input type="submit" class="pay-btn" name="pay" value="خرید">';
        }
        ?>
    </form>

</main>
<br><br>
<?php include_once('content/partials/_footer.php') ?>