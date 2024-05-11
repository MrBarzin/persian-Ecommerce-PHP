<table class="table">
    <caption>جدول دسته بندی ها</caption>
    <thead class="text-center">
        <tr>
            <td>ردیف</td>
            <td>عنوان دسته</td>
            <td>عکس</td>
            <td colspan="2">عملیات</td>
        </tr>
    </thead>
    <tbody class="text-center">
        <?php
        if(isset($_GET['add'])){
            echo '<p class="text-green">دسته بندی با موفقیت ایجاد شد</p>';
        }
        if(isset($_GET['update'])){
            echo '<p class="text-green">دسته بندی با موفقیت ویرایش شد</p>';
        }
      
        if(isset($_GET['del'])){
            echo '<p class="text-green">دسته بندی با موفقیت حذف شد</p>';
        }
      
       
        if(isset($_GET['add-empty'])){
            echo '<p>لطفاً همه ی فیلدها را پر کنید</p>';
        }
        $cat_query = showQuery($connection, 'categories');
        $i = 1;
        if (mysqli_num_rows($cat_query) > 0) {
            while ($cat_row = mysqli_fetch_array($cat_query)) { ?>
                <tr>
                    <td><?php echo $i++ ?></td>
                    <td><?php echo $cat_row['title'] ?></td>
                    <td><img src="resources/images/categories/<?php echo $cat_row['image'] ?>" alt="" width="100" height="100"></td>
                    <td><a href="index.php?edit-category=<?php echo $cat_row['id'] ?>" class="text-green">ویرایش</a></td>
                    <td><a href="actions.php?delete-category=<?php echo $cat_row['id'] ?>" class="text-danger">حذف</a></td>
                </tr>
        <?php }
        } else {
            echo '<div>هیچ رکوردی در جدول ثبت نشده است</div>';
        } ?>
    </tbody>

</table>
