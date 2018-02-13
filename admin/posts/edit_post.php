<?php

if(isset($_GET['p_id'])){

    $the_post_id = $_GET['p_id'];

    $query = "SELECT * FROM posts";
    $select_posts_by_id = mysqli_query($connection, $query);

    while($row = mysqli_fetch_assoc($select_posts_by_id)) {
        $post_id = $row['post_id'];
        $post_author = $row['post_author'];
        $post_title = $row['post_title'];
        $post_category_id = $row['post_category_id'];
        $post_status = $row['post_status'];
        $post_image = $row['post_image'];
        $post_tags = $row['post_tags'];
        $post_comment_count = $row['post_comment_count'];
        $post_date = $row['post_date'];
        $post_content = $row['post_content'];
        $post_view_count = $row['post_view_count'];
    }
}

?>

<form enctype="multipart/form-data" action="" method="POST">
    <div class="form-group">
        <label for="post_author">post_author</label>
        <input value="<?php echo $post_author; ?>" type="text" name="post_author" class="form-control" id="post_author" placeholder="post_author">
    </div>
    <div class="form-group">
        <label for="post_title">post_title</label>
        <input value="<?php echo $post_title; ?>" type="text" name="post_title" class="form-control" id="post_title" placeholder="post_title">
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
                    <option value="<?php echo $cat_id; ?>" type="text" name="cat_title"><?php echo $cat_title; ?></option>
                <?php
            }
            ?>

        </select>

    </div>
    <div class="form-group">
        <label for="post_status">post_status</label>
        <input value="<?php echo $post_status; ?>" type="text" name="post_status" class="form-control" id="post_status" placeholder="post_status">
    </div>
    <div class="form-group">
        <img width="80" src="../media/posts_images/<?php echo $post_image;?>" alt="">
    </div>
    <div class="form-group">
        <label for="post_status">post_tags</label>
        <input value="<?php echo $post_tags; ?>" type="text" name="post_tags" class="form-control" id="post_tags" placeholder="post_tags">
    </div>
    <div class="form-group">
        <label for="post_content">post_date</label>
        <textarea name="post_content" id="post_content" rows="5"><?php echo $post_content; ?></textarea>
    </div>

    <button type="submit" class="button success" name="update_post">Save</button>
</form>


