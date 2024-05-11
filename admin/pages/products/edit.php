<?php
    $id = $_GET['edit-product'];
    $table = 'products';
    $product = showOneQuery($connection,$table,$id);
?>
<form action="actions.php?update-product=<?php echo $product['id']; ?>" method="post" class="form" enctype="multipart/form-data">
    <h2 class="text-center">ویرایش محصول</h2>
    <div class="form-group">
        <label for="name">نام محصول </label>
        <input type="text" placeholder="نام محصول" id="name" name="name" value="<?php echo $product['name'] ?>">
    </div>
    <div class="form-group">
        <label for="category">انتخاب دسته</label>
        <select id="category" name="cat_id">
            <?php
            $categories = showQuery($connection , 'categories');
            if(mysqli_num_rows($categories) > 0){
                while($cat = mysqli_fetch_array($categories)){
                    if($product['cat_id'] ==  $cat['id']){
                        echo '<option selected value="'.$cat['id'].'">'.$cat['title'].'</option>';
                    }
                    else{
                        echo '<option value="'.$cat['id'].'">'.$cat['title'].'</option>';
                    }
                }
            }
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="summray">توضیح کوتاه</label>
        <input type="text" placeholder="توضیح کوتاه" id="summray" name="summray" value="<?php echo $product['summray'] ?>">
    </div>
    <div class="form-group">
        <label for="description">توضیح کامل </label>
        <textarea type="text" placeholder="توضیح کامل" id="description" name="description" rows="4" cols="30"><?php echo $product['description'] ?></textarea>
    </div>
    <div class="form-group">
        <label for="price">قیمت محصول</label>
        <input type="text" placeholder="قیمت محصول" id="price" name="price" value="<?php echo $product['price'] ?>">
    </div>
    <img src="resources/images/products/<?php echo $product['image'] ?>" alt="" width="200" height="200">
    <div class="form-group">
        <label for="image">انتخاب عکس</label>
        <input type="file" id="image" name="image">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-green btn-lg">ویرایش</button>
    </div>
</form>

