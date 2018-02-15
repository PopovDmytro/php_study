<?php


    if (isset($_GET['category'])) {

        $post_category = $_GET['category'];

        $query = "SELECT * FROM posts WHERE post_category_id = $post_category AND post_status = 'published'";
        $select_all_posts_query = mysqli_query($connection, $query);

    }

    while($row = mysqli_fetch_assoc($select_all_posts_query)) {
        $post_id= $row['post_id'];
        $post_category_id = $row['post_category_id'];
        $post_title= $row['post_title'];
        $post_author= $row['post_author'];
        $post_date= $row['post_date'];
        $post_image= $row['post_image'];
        $post_content= $row['post_content'];
        $post_tags= $row['post_tags'];
        $post_comment_count= $row['post_comment_count'];
        $post_status= $row['post_status'];

        ?>


        <h1 class="page-header">
            <?php  ?>

        </h1>

        <!-- First Blog Post -->
        <h4><a href="?p_id=<?php echo $post_id; ?>"><?php echo $post_title; ?></a></h4>
        <p class="lead">
            by <a href="/index.php"><?php echo $post_author ?></a>
        </p>
        <p><span class="glyphicon glyphicon-time"></span> <?php echo $post_date ?></p>
        <hr>

        <img class="img-responsive" src="media/posts_images/<?php echo $post_image;?>" alt="">
        <hr>
        <p><?php echo substr($post_content, 0 , 100 )?></p>
        <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

        <hr>


        <?php


    }

?>



