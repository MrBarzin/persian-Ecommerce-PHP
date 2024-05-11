<form action="actions.php?add-product" method="post" class="form" enctype="multipart/form-data">
    <h2 class="text-center">افزودن محصول جدید</h2>
    <div class="form-group">
        <label for="name">نام محصول </label>
        <input type="text" placeholder="نام محصول" id="name" name="name">
    </div>
    <div class="form-group">
        <label for="category">انتخاب دسته</label>
        <select id="category" name="cat_id">
            <?php
            $categories = showQuery($connection , 'categories');
            if(mysqli_num_rows($categories) > 0){
                while($cat = mysqli_fetch_array($categories)){
                    echo '<option value="'.$cat['id'].'">'.$cat['title'].'</option>';
                }
            }
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="summray">توضیح کوتاه</label>
        <input type="text" placeholder="توضیح کوتاه" id="summray" name="summray">
    </div>
    <div class="form-group">
        <label for="description">توضیح کامل </label>
        <textarea type="text" placeholder="توضیح کامل" id="description" name="description"></textarea>
    </div>
    <div class="form-group">
        <label for="price">قیمت محصول</label>
        <input type="text" placeholder="قیمت محصول" id="price" name="price">
    </div>
    <div class="form-group">
        <label for="image">انتخاب عکس</label>
        <input type="file" id="image" name="image">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-green btn-lg">ثبت</button>
    </div>
</form>