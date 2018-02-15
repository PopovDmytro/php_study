<?php

function get_all_comments($connection) {
    $query = "SELECT * FROM comments";
    $select_posts = mysqli_query($connection, $query);

    while($row = mysqli_fetch_assoc($select_posts)) {
        $comment_id = $row['comment_id'];
        $comment_post_id = $row['comment_post_id'];
        $comment_author = $row['comment_author'];
        $comment_email = $row['comment_email'];
        $comment_content = $row['comment_content'];
        $comment_status = $row['comment_status'];
        $comment_date = $row['comment_date'];



        $tr = "<tr>";
        $tr .= "<td>{$comment_id}</td>";

        $query = "select * FROM posts WHERE post_id = $comment_post_id ";
        $select_post_id_query = mysqli_query($connection, $query);

        while($row = mysqli_fetch_assoc($select_post_id_query)){
            $post_id = $row['post_id'];
            $post_title = $row['post_title'];

            $tr .= "<td><a href='../?p_id={$post_id}'>{$post_title}</a></td>";
        }

        $tr .= "<td>{$comment_author}</td>";
        $tr .= "<td>{$comment_content}</td>";
        $tr .= "<td>{$comment_email}</td>";
        $tr .= "<td>{$comment_status}</td>";
        $tr .= "<td>{$comment_date}</td>";
        $tr .= "<td><a href='?approved={$comment_id}' style='padding:10px'>&#x1F44D</a><a href='?unapproved={$comment_id}' style='padding:10px'>&#x1F44E</a></td>";
        $tr .= "<td><a href='?delete={$comment_id}' style='color:red;padding:10px' >✕</a></td>";
        $tr .= "</tr>";
        echo $tr;

//        <a href='?source={$comment_id}' style='color:#2a92a5;padding:10px'>✎</a>
    }
}

//delete post
if(isset($_GET['delete'])) {

    $the_comment_id = $_GET['delete'];
    $query = "DELETE FROM comments WHERE comment_id = {$the_comment_id} ";
    $delete_query = mysqli_query($connection, $query);

    confirm($delete_query);
}
//change status status approved/ unapproved
if(isset($_GET['unapproved'])) {

    $the_comment_id = $_GET['unapproved'];
    $query = "UPDATE comments SET comment_status = 'unapproved' WHERE comment_id = {$the_comment_id} ";
    $unapprove_comment_query = mysqli_query($connection, $query);

    confirm($unapprove_comment_query);
}

if(isset($_GET['approved'])) {

    $the_comment_id = $_GET['approved'];
    $query = "UPDATE comments SET comment_status = 'approved' WHERE comment_id = {$the_comment_id} ";
    $unapprove_comment_query = mysqli_query($connection, $query);

    confirm($unapprove_comment_query);
}

?>

<table>
    <thead>
    <tr style="font-size: 12px">
        <th>Id</th>
        <th>In Response to</th>
        <th>Author</th>
        <th>Content</th>
        <th>Email</th>
        <th>Status</th>
        <th>Date</th>
        <th>Approve<br />Unapproved</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>

    <?php get_all_comments($connection); ?>

    </tbody>
</table>
