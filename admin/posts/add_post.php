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

    $is_uploaded_file = move_uploaded_file($post_image_temp,"../media/posts_images/$post_image");

    if(!$is_uploaded_file) {
        echo $_FILES['post_image']['error'];
    }

    $query = "INSERT INTO posts(post_category_id, post_title, post_author, post_date, post_image, post_content, post_tags, post_comment_count, post_status) ";
    $query .= "VALUES('{$post_category_id}', '{$post_title}', '{$post_author}', now(), '{$post_image}', '{$post_content}', '{$post_tags}', '{$post_comment_count}', '{$post_status}' ) ";

    $post_add_query = mysqli_query($connection, $query);

    confirm($post_add_query);

    echo "post was added  <a href='posts.php?source='>view all posts</a>";
}

?>

<form enctype="multipart/form-data" action="" method="POST">
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
        <select name="post_category_id" class="form-control" id="post_category_id">

            <?php
            //            if(isset($_GET['p_id'])){

            $cat_id = $_GET['p_id'];

            echo $cat_id;

            $query = "SELECT * FROM categories";
            $select_categories = mysqli_query($connection, $query);

            confirm($select_categories);

            while ($row = mysqli_fetch_assoc($select_categories)) {
                $cat_id = $row['cat_id'];
                $cat_title = $row['cat_title'];

                ?>
                <option value="<?php echo $cat_id; ?>" type="text"><?php echo $cat_title; ?></option>
                <?php
            }
            ?>

        </select>
    </div>
    <div class="form-group">
        <label for="post_status">post_status</label>
        <select name="post_status" id="post_status">
            <option value="draft">draft</option>
            <option value="published">published</option>
        </select>
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
        <textarea name="post_content" id="post_content" rows="5">type your content here</textarea>
    </div>

    <button type="submit" class="button success" name="create_post">Save</button>
</form>