<?php
    $id = $_GET['edit-category'];
    $table = 'categories';
    $cat = showOneQuery($connection,$table,$id);
?>
<form action="actions.php?update-category=<?php echo $cat['id']; ?>" method="post" class="form" enctype="multipart/form-data">
    <h2 class="text-center">ویرایش دسته بندی</h2>
    <div class="form-group">
        <label for="title">نام دسته </label>
        <input type="text" placeholder="نام دسته" id="title" name="title" value="<?php echo $cat['title']; ?>">
    </div>
    <img src="resources/images/categories/<?php echo $cat['image']; ?>" alt="" width="200" height="200">
    <div class="form-group">
        <label for="image">انتخاب عکس</label>
        <input type="file" id="image" name="image">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-green btn-lg">ویرایش</button>
    </div>
</form>