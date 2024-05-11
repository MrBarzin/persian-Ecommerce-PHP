<?php include_once('content/partials/_header.php') ?>

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
    height: 400px;
    width: 400px;
    border: 3px solid #0000ff;
    border-radius: 400px;
    
}

main .products-cat .cart a{
    display: flex;
    flex-direction: column;
    justify-content: space-evenly;
}

main .products-cat .cart h3{
    text-align: right;
    margin-right:170px;
}

main .products-cat .cart img{
    display: inline-block;
    width: 300px;
    height: 80%;
    margin-right:50px;
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

<main>
    <h1>دسته بندی ها</h1>
    <section class="products-cat">
        <?php
        $categories = showQuery($connection, 'categories');
        if (mysqli_num_rows($categories) > 0) {
            while ($category = mysqli_fetch_array($categories)) { ?>
                <div class="cart">
                    <a href="categories.php?id=<?php echo $category['id'] ?>">
                        <img src="admin/resources/images/categories/<?php echo $category['image'] ?>" alt="">
                        <h3><?php echo $category['title'] ?></h3>

                    </a>
                </div>
        <?php
            }
        } ?>

    </section>
</main>
<?php include_once('content/partials/_footer.php') ?>
