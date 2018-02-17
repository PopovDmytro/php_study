<?php

function get_all_users($connection) {
    $query = "SELECT * FROM users ";
    $select_users = mysqli_query($connection, $query);

    while($row = mysqli_fetch_assoc($select_users)) {
        $user_id = $row['user_id'];
        $username = $row['username'];
        $user_firstname = $row['user_firstname'];
        $user_lastname = $row['user_lastname'];
        $user_email = $row['user_email'];
        $user_image = $row['user_image'];
        $user_role = $row['user_role'];


        $tr = "<tr>";

     /*   $query = "select * FROM posts WHERE post_id = $comment_post_id ";
        $select_post_id_query = mysqli_query($connection, $query);

        while($row = mysqli_fetch_assoc($select_post_id_query)){
            $post_id = $row['post_id'];
            $post_title = $row['post_title'];

            $tr .= "<td><a href='../?p_id={$post_id}'>{$post_title}</a></td>";
        }*/

        $tr .= "<td>{$user_id}</td>";
        $tr .= "<td><img width='60px' src='../media/posts_images/{$user_image}' alt=''> {$username}</td>";
        $tr .= "<td>{$user_firstname}</td>";
        $tr .= "<td>{$user_lastname}</td>";
        $tr .= "<td>{$user_email}</td>";
        $tr .= "<td>{$user_role}</td>";
        $tr .= "<td>".
            "<a href='?change_to_subscriber={$user_id}' style='color:#2a92a5;padding:10px'>S</a>".
            "<a href='?change_to_admin={$user_id}' style='color:#2a92a5;padding:10px'>A</a>".
            "<a href='users.php?source=edit_user&edit_user={$user_id}' style='color:#2a92a5;padding:10px'>✎</a>".
            "<a href='?delete_user={$user_id}' style='color:red;padding:10px' >✕</a>".
            "</td>";
        $tr .= "</tr>";
        echo $tr;

//        <a href='?source={$comment_id}' style='color:#2a92a5;padding:10px'>✎</a>
    }
}

//delete post
if(isset($_GET['delete_user'])) {

    $the_user_id = $_GET['delete_user'];
    $query = "DELETE FROM users WHERE user_id = {$the_user_id} ";
    $delete_user_query = mysqli_query($connection, $query);

    confirm($delete_user_query);
}
//change status status approved/ unapproved
if(isset($_GET['change_to_subscriber'])) {

    $the_user_id = $_GET['change_to_subscriber'];
    $query = "UPDATE users SET user_role = 'subscriber' WHERE user_id = {$the_user_id} ";
    $to_subscriber_query = mysqli_query($connection, $query);

    confirm($to_subscriber_query);
}

if(isset($_GET['change_to_admin'])) {

    $the_user_id = $_GET['change_to_admin'];
    $query = "UPDATE users SET user_role = 'admin' WHERE user_id = {$the_user_id} ";
    $to_admin_query = mysqli_query($connection, $query);

    confirm($to_admin_query);
}

?>

<table>
    <thead>
    <tr style="font-size: 12px">
        <th>Id</th>
        <th>User name</th>
        <th>First name</th>
        <th>Last name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>

    <?php get_all_users($connection); ?>

    </tbody>
</table>
