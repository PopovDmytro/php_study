<?php

if(isset($_POST['create_post'])) {

    $post_author = $_POST['post_author'];
    $post_title = $_POST['post_title'];
    $post_category_id = $_POST['post_category_id'];

    $post_image = $_FILES['post_image']['name'];
    $post_image_temp = $_FILES['post_image']['tmp_name'];

    $post_tags = $_POST['post_tags'];
    $post_date = date('d-m-y');
    $post_content = $_POST['post_content'];

    move_uploaded_file($post_image_temp, "$post_image");

}

?>

<form action="" method="post">
    <div class="form-group">
        <label for="post_author">post_author</label>
        <input type="text" name="post_author" class="form-control" id="post_author" placeholder="post_author">
    </div>
    <div class="form-group">
        <label for="post_title">post_title</label>
        <input type="text" name="post_title" class="form-control" id="post_title" placeholder="post_title">
    </div>
    <div class="form-group">
        <label for="post_category_id">post_category</label>
        <input type="text" name="post_category_id" class="form-control" id="post_category_id" placeholder="post_category_id">
    </div>
    <div class="form-group">
        <label for="post_status">post_status</label>
        <input type="text" name="post_status" class="form-control" id="post_status" placeholder="post_status">
    </div>
    <div class="form-group">
        <label for="post_image">post_image</label>
        <input type="file" name="post_image" class="form-control" id="post_image" placeholder="post_image">
    </div>
    <div class="form-group">
        <label for="post_status">post_tags</label>
        <input type="text" name="post_tags" class="form-control" id="post_tags" placeholder="post_tags">
    </div>
    <div class="form-group">
        <label for="post_content">post_date</label>
        <textarea name="post_content" id="post_content" rows="5">
        </textarea>
    </div>

    <button type="submit" class="button success" name="create_post">Save</button>
</form>