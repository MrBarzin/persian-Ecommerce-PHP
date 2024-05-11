<table class="table">
    <caption>جدول کاربران</caption>
    <thead class="text-center">
        <tr>
            <td>ردیف</td>
            <td>نام کاربری</td>
            <td>نقش</td>
            <td>عملیات</td>
        </tr>
    </thead>
    <tbody class="text-center">
        <?php
        if(isset($_GET['del'])){
            echo '<p class="text-green">کاربر موردنظر با موفقیت حذف شد</p>';
        }
        $users = showQuery($connection, 'users');
        $i = 1;
        if (mysqli_num_rows($users) > 0) {
            while ($user = mysqli_fetch_array($users)) { ?>
                <tr>
                    <td><?php echo $i++ ?></td>
                    <td><?php echo $user['username'] ?></td>
                    <td><?php echo $user['role'] ?></td>
                    <td><a href="actions.php?delete-user=<?php echo $user['id'] ?>" class="text-danger">حذف</a></td>
                </tr>
        <?php }
        } else {
            echo '<div>هیچ رکوردی در جدول ثبت نشده است</div>';
        } ?>
    </tbody>

</table>