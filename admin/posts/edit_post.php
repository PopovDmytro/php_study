<?php

if(isset($_GET['p_id'])){

    $the_post_id = $_GET['p_id'];

    $query = "SELECT * FROM posts WHERE post_id = $the_post_id";
    $select_posts_by_id = mysqli_query($connection, $query);

    while($row = mysqli_fetch_assoc($select_posts_by_id)) {
        $post_id = $row['post_id'];
        $post_author = $row['post_author'];
        $post_title = $row['post_title'];
        $post_category_id = $row['post_category_id'];
        $post_status = $row['post_status'];
        $post_image_old = $row['post_image'];
        $post_tags = $row['post_tags'];
        $post_comment_count = $row['post_comment_count'];
        $post_date = $row['post_date'];
        $post_content = $row['post_content'];
        $post_view_count = $row['post_view_count'];
    }

    if(isset($_POST['update_post'])) {
        $post_author = $_POST['post_author'];
        $post_title = $_POST['post_title'];
        $post_category_id = $_POST['post_category_id'];
        $post_status = $_POST['post_status'];
        $post_tags = $_POST['post_tags'];
        $post_content = $_POST['post_content'];

        $post_image = $_FILES['post_image']['name'];
        $post_image_temp = $_FILES['post_image']['tmp_name'];
        $is_uploaded_file = move_uploaded_file($post_image_temp,"../media/posts_images/$post_image");

        if(!$is_uploaded_file) {
            echo $_FILES['post_image']['error'];

            $post_image = $post_image_old;
        }


        $query = "UPDATE posts SET ";
        $query .= "post_title = '{$post_title}', ";
        $query .= "post_category_id = '{$post_category_id}', ";
        $query .= "post_date = now(), ";
        $query .= "post_author = '{$post_author}', ";
        $query .= "post_status = '{$post_status}', ";
        $query .= "post_tags = '{$post_tags}', ";
        $query .= "post_content = '{$post_content}', ";
        $query .= "post_image = '{$post_image}' ";
        $query .= "WHERE post_id = '{$the_post_id}' ";

        $update_post = mysqli_query($connection, $query);

        confirm($update_post);
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
                $cat_id = $_GET['p_id'];

                $query = "SELECT * FROM categories";
                $select_categories = mysqli_query($connection, $query);

                confirm($select_categories);

                while ($row = mysqli_fetch_assoc($select_categories)) {
                    $cat_id = $row['cat_id'];
                    $cat_title = $row['cat_title'];

                    ?>
                    <option value="<?php echo $cat_id; ?>" <?php if($cat_id === $post_category_id){echo "selected";} ?> type="text"><?php echo $cat_title; ?></option>
                <?php
                }
            ?>

        </select>

    </div>
    <div class="form-group">
        <label for="post_status">post_status</label>
        <select name="post_status" id="post_status">
            <option value="<?php echo $post_status; ?>"><?php echo $post_status; ?></option>

            <?php
            if ($post_status === 'published') {
                echo "<option value='draft'>draft</option>";
            } else {
                echo "<option value='published'>published</option>";
            }

            ?>

        </select>

    </div>
    <div class="form-group">
        <img width="80" src="../media/posts_images/<?php echo $post_image_old;?>" alt="">
        <input type="file" name="post_image" class="form-control" id="post_image" placeholder="post_image">
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


