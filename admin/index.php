<?php
session_start();
require_once('../inc/functions.php');
if (!$_SESSION['admin']) {
    header('Location: ../');
}
?>
<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="resources/css/style.css">
    <script src="resources/js/app.js" defer></script>
    <title>Document</title>
</head>

<body>
    <div class="container">
    <header>
            <a href="../" target="_blanck" class="show-web">مشاهده وب سایت</a href="">
            <?php
            if ($_SESSION['admin']) {
                echo '<p class="text-white">' . $_SESSION['admin'] . '</p>';
            }
            ?>
            <a href="index.php?logOut" class="logout">خروج</a>
        </header>
        <main>
            <aside>
                <nav>
                    <ul>
                            
                             <li><a href="index.php?show-dashbord">خانه</a></li>
                             <li class="has-submenu"><a href="#">دسته بندی</a>
                            <ul class="submenu">
                                <li><a href="index.php?show-category">نمایش دسته بندی ها</a></li>
                                <li><a href="index.php?create-category">ایجاد دسته بندی</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu"><a href="#">محصولات</a>
                            <ul class="submenu">
                                <li><a href="index.php?show-products">نمایش محصولات</a></li>
                                <li><a href="index.php?create-product">ایجاد محصول جدید</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu"><a href="index.php?show-users">کاربران</a>
                        </li>
                        <li class="has-submenu"><a href="index.php?show-orders">لیست سفارش ها</a>
                        </li>
                    
                    </ul>
                </nav>
                </nav>
            </aside>
            <section class="main">
                <?php
                 if (isset($_GET['show-dashbord'])) {
                    include_once('pages/dashbord/index.php');
                }
                else if (isset($_GET['show-category'])) {
                    include_once('pages/categories/index.php');
                } else if (isset($_GET['create-category'])) {
                    include_once('pages/categories/create.php');
                } else if (isset($_GET['edit-category'])) {
                    include_once('pages/categories/edit.php');
                } else if (isset($_GET['show-products'])) {
                    include_once('pages/products/index.php');
                } else if (isset($_GET['create-product'])) {
                    include_once('pages/products/create.php');
                } else if (isset($_GET['edit-product'])) {
                    include_once('pages/products/edit.php');
                } else if (isset($_GET['show-details-product'])) {
                    include_once('pages/products/details.php');
                } else if (isset($_GET['show-users'])) {
                    include_once('pages/users/index.php');
                } else if (isset($_GET['show-orders'])) {
                    include_once('pages/orders/index.php');
                }
                 else if (isset($_GET['logOut'])) {
                    unset($_SESSION['admin']);
                    header('Location: ../index.php');
                } else {
                    include_once('pages/dashbord/index.php');
                }


                ?>
            </section>
        </main>
        
    </div>
</body>

</html>
        
    </div>
