<!--posts list-->
<h1 class="text-center">Main content <small>text after</small></h1>
<hr>
<!---->
<?php

if(isset($_POST['submit'])){

    $search = $_POST['search'];
    $query = "SELECT * FROM posts WHERE post_tags LIKE '%$search%' AND post_status = 'published' ";

    $select_posts_query = mysqli_query($connection, $query);
    if(!$select_posts_query) {
        die("QUERY FAILED" . mysqli_error($connection));
    }

    $count = mysqli_num_rows($select_posts_query);

} else {

    $query = "SELECT * FROM posts WHERE post_status = 'published' ";
    $select_posts_query = mysqli_query($connection, $query);

}

$i = 0;
while($row = mysqli_fetch_assoc($select_posts_query)) {
    $posts[$i]['post_id'] = $row['post_id'];
    $posts[$i]['post_category_id '] = $row['post_category_id'];
    $posts[$i]['post_title'] = $row['post_title'];
    $posts[$i]['post_author'] = $row['post_author'];
    $posts[$i]['post_date'] = $row['post_date'];
    $posts[$i]['post_image'] = $row['post_image'];
    $posts[$i]['post_content'] = $row['post_content'];
    $posts[$i]['post_tags'] = $row['post_tags'];
    $posts[$i]['post_comment_count'] = $row['post_comment_count'];
    $posts[$i]['post_status'] = $row['post_status'];
    $i++;
}

$json_posts = json_encode($posts);

?>


<!--posts-->
<?php if (is_array($posts) && count($posts)): ?>

    <?php foreach ($posts as $post): ?>
    <div class="media-object stack-for-small">
        <div class="media-object-section">
            <h4><a href="?p_id=<?php echo $post['post_id']; ?>"><?php echo $post['post_title']; ?></a></h4>
            <h5><?php echo $post['post_author']; ?></h5>
            <p class="subheader"><?php echo $post['post_date']; ?></p>
        </div>

        <div class="media-object-section img-section text-center">
            <hr class="margin-bottom-1">
            <div class="thumbnail">
                <a href="?p_id=<?php echo $post['post_id']; ?>">
                    <img src="media/posts_images/<?php echo $post['post_image']; ?>">
                </a>
            </div>
            <div class="text-left">
                <p><?php echo substr($post['post_content'], 0, 100) . '...'; ?></p>
                <div class="">
                    <a href="?p_id=<?php echo $post['post_id']; ?>" class="button">Learn More <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>

<?php else: ?>
    <h1>NO result</h1>
<?php endif; ?>

<!--end posts-->
<!--psgination-->
<nav aria-label="Pagination" class="padding-top-1">
    <ul class="pagination text-center">
        <li class="pagination-previous disabled">Previous <span class="show-for-sr">page</span></li>

        <li class="pagination-next"><a href="#" aria-label="Next page">Next <span class="show-for-sr">page</span></a></li>
    </ul>
</nav>
<!--end psgination-->

<!--end posts list-->
<?php ?>