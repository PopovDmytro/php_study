<!-- Page Content -->


<?php

if (isset($_GET['p_id'])) {

    $the_post_id = $_GET['p_id'];

    $query = "SELECT * FROM posts WHERE post_id = $the_post_id ";
    $select_posts = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_posts)) {
        $post_id = $row['post_id'];
        $post_category_id = $row['post_category_id'];
        $post_title = $row['post_title'];
        $post_author = $row['post_author'];
        $post_date = $row['post_date'];
        $post_image = $row['post_image'];
        $post_content = $row['post_content'];
        $post_tags = $row['post_tags'];
        $post_comment_count = $row['post_comment_count'];
        $post_status = $row['post_status'];
        ?>

        <h1 class="page-header">Posts</h1>

        <!-- First Blog Post -->
        <h2>
            <a href="#"><?php echo $post_title; ?></a>
        </h2>
        <p class="lead">
            by <a href="index.php"><?php echo $post_author; ?></a>
        </p>
        <p><span class="glyphicon glyphicon-time"></span> <?php echo $post_date; ?></p>
        <hr>
        <img class="img-responsive" src="media/posts_images/<?php echo $post_image; ?>" alt="">
        <hr>
        <p><?php echo $post_content; ?></p>


        <hr>

        <?php
    }
}
?>

<hr>

<!-- Comments Form -->
<div class="well">

    <?php
    if(isset($_POST['create_comment'])) {
        $the_post_id = $_GET['p_id'];

        $comment_author = $_POST['comment_author'];
        $comment_email = $_POST['comment_email'];
        $comment_content = $_POST['comment_content'];

        $query = "INSERT INTO comments (comment_post_id, comment_author, comment_email, comment_content, comment_status, comment_date) ";
        $query .= "VALUES('{$the_post_id}', '{$comment_author}', '{$comment_email}', '{$comment_content}', 'unapproved', now()) ";

        $comment_add_query = mysqli_query($connection, $query);

        confirm($comment_add_query);

        $query = "UPDATE posts SET post_comment_count = post_comment_count + 1 ";
        $query .= "WHERE post_id = $the_post_id ";

        $update_comment_count = mysqli_query($connection, $query);

    }
    ?>

    <h4>Leave a Comment:</h4>
    <form action="" method="post" role="form">

        <div class="form-group">
            <label for="Author">Author</label>
            <input type="text" name="comment_author" class="form-control">
        </div>

        <div class="form-group">
            <label for="Author">Email</label>
            <input type="email" name="comment_email" class="form-control">
        </div>

        <div class="form-group">
            <label for="comment">Your Comment</label>
            <textarea name="comment_content" class="form-control" rows="3"></textarea>
        </div>
        <button type="submit" name="create_comment" class="btn btn-primary">Submit</button>
    </form>
</div>

<hr>

<h2>comments</h2>
<?php

$query = "SELECT * FROM comments WHERE comment_post_id = {$the_post_id} ";
$query .= "AND comment_status = 'approved' ";
$query .= "ORDER BY comment_id DESC ";
$select_post_comments_query = mysqli_query($connection, $query);

confirm($select_post_comments_query);

while($row = mysqli_fetch_assoc($select_post_comments_query)) {
    $comment_author = $row['comment_author'];
    $comment_content = $row['comment_content'];
    $comment_date = $row['comment_date'];

    echo '<hr>';
    echo "<h3>$comment_author <small> $comment_date</small></h3>";
    echo '<hr>';
    echo "<h6>$comment_content</h6>";
    echo '<hr>';

}

?>