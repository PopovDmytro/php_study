<?php

function get_all_posts($connection) {
    $query = "SELECT * FROM posts";
    $select_posts = mysqli_query($connection, $query);

    while($row = mysqli_fetch_assoc($select_posts)) {
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

        $tr = "<tr>";
        $tr .= "<td>{$post_id}</td>";
        $tr .= "<td>{$post_author}</td>";
        $tr .= "<td>{$post_title}</td>";
        $tr .= "<td>{$post_category_id}</td>";
        $tr .= "<td>{$post_status}</td>";
        $tr .= "<td><img src='../media/posts_images/{$post_image}' style='max-width: 100px' alt=''></td>";
        $tr .= "<td>{$post_tags}</td>";
        $tr .= "<td>{$post_comment_count}</td>";
        $tr .= "<td>{$post_date}</td>";
        $tr .= "<td><a href='posts.php?source=edit_post&p_id={$post_id}'>edit</a></td>";
        $tr .= "<td><a href='posts.php?delete={$post_id}'>delete</a></td>";
//                                        $tr .= "<td><a href='categories.php?delete={}'>Delete</a></td>";
//                                        $tr .= "<td><a href='categories.php?edit={}'>Edit</a></td>";
        $tr .= "</tr>";
        echo $tr;
    }
}

//delete post
if(isset($_GET['delete'])) {

    $the_post_id = $_GET['delete'];
    $query = "DELETE FROM posts WHERE post_id = {$the_post_id} ";
    $delete_query = mysqli_query($connection, $query);

    confirm($delete_query);
}

?>

<table>
    <thead>
    <tr>
        <th>Id</th>
        <th>Author</th>
        <th>Title</th>
        <th>Category</th>
        <th>Status</th>
        <th>Image</th>
        <th>Tags</th>
        <th>Comments</th>
        <th>Date</th>
    </tr>
    </thead>
    <tbody>

    <?php get_all_posts($connection); ?>

    </tbody>
</table>
