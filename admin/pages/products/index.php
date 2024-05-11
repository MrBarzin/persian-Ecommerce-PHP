<table class="table">
    <caption>جدول محصولات</caption>
    <thead class="text-center">
        <tr>
            <td>ردیف</td>
            <td>نام محصول</td>
            <td>دسته محصول</td>
            <td>قیمت محصول</td>
            <td>عکس محصول</td>
            <td colspan="3">عملیات</td>
        </tr>
    </thead>
    <tbody class="text-center">
        <?php
        if (isset($_GET['add'])) {
            echo '<p class="text-green">محصول جدید با موفقیت ایجاد شد</p>';
        }
        if (isset($_GET['update'])) {
            echo '<p class="text-green">محصول مورد نظر با موفقیت ویرایش شد</p>';
        }
        if (isset($_GET['del'])) {
            echo '<p class="text-green">محصول مورد نظر با موفقیت حذف شد</p>';
        }
        if(isset($_GET['add-empty'])){
            echo '<p>لطفاً همه ی فیلدها را پر کنید</p>';
        }
        $products = showQuery($connection, 'products');
        $i = 1;
        if (mysqli_num_rows($products) > 0) {
            while ($product = mysqli_fetch_array($products)) { ?>
                <tr>
                    <td><?php echo $i++ ?></td>
                    <td><?php echo $product['name'] ?></td>
                    <td>
                        <?php
                        $table = 'categories';
                        $id = $product['cat_id'];
                        $cat = showOneQuery($connection, $table, $id);
                        echo $cat['title'];
                        ?>
                    </td>
                    <td><?php echo number_format($product['price']) ?></td>
                    <td><img src="resources/images/products/<?php echo $product['image'] ?>" alt="" width="100" height="100"></td>
                    <td><a href="index.php?edit-product=<?php echo $product['id'] ?>" class="text-green">ویرایش</a></td>
                    <td><a href="actions.php?delete-product=<?php echo $product['id'] ?>" class="text-danger">حذف</a></td>
                </tr>
        <?php }
        } else {
            echo '<div>هیچ رکوردی در جدول ثبت نشده است</div>';
        } ?>
    </tbody>

</table>