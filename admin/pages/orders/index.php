<table class="table">
    <caption>لیست سفارش ها</caption>
    <thead class="text-center">
        <tr>
            <td>ردیف</td>
            <td>نام کاربری سفارش دهنده</td>
            <td>نام محصولات</td>
            <td>قیمت پرداختی</td>
            <td>عملیات</td>
        </tr>
    </thead>
    <tbody class="text-center">
        <?php
          if(isset($_GET['del'])){
            echo '<p class="text-green">سفارش مورد نظر با موفقیت حذف شد</p>';
        }
        $orders = showQuery($connection, 'orders');
        $i = 1;
        if (mysqli_num_rows($orders) > 0) {
            while ($order = mysqli_fetch_array($orders)) { ?>
                <tr>
                    <td><?php echo $i++ ?></td>
                    <td><?php echo $order['username'] ?></td>
                    <td><?php echo $order['product_name'] ?></td>
                    <td class="text-danger"><?php echo number_format($order['price']) ?></td>
                    <td><a href="actions.php?delete-orders=<?php echo $order['id'] ?>" class="text-danger">حذف</a></td>
                </tr>
        <?php }
        } else {
            echo '<div>هیچ رکوردی در جدول ثبت نشده است</div>';
        } ?>
    </tbody>
</table>