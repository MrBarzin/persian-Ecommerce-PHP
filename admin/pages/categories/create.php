<form action="actions.php?add_category" method="post" class="form" enctype="multipart/form-data">
    <h2 class="text-center">افزودن دسته بندی</h2>
    <div class="form-group">
        <label for="title">نام دسته </label>
        <input type="text" placeholder="نام دسته" id="title" name="title">
    </div>
    <div class="form-group">
        <label for="image">انتخاب عکس</label>
        <input type="file" id="image" name="image">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-green btn-lg">ثبت</button>
    </div>
</form>