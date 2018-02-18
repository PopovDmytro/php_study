
<h1> ADD user</h1>
<?php

if(isset($_POST['create_user'])) {


    $username = $_POST['username'];

    $user_image = $_FILES['user_image']['name'];
    $user_image_temp = $_FILES['user_image']['tmp_name'];

    $user_firstname = $_POST['user_firstname'];
    $user_lastname = $_POST['user_lastname'];
    $user_role = $_POST['user_role'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];

    $is_uploaded_file = move_uploaded_file($user_image_temp,"../media/posts_images/$user_image");

    if(!$is_uploaded_file) {
        echo $_FILES['post_image']['error'];
    }

    $query = "INSERT INTO users(user_password, user_firstname, user_lastname, user_email, user_image, user_role, username) ";
    $query .= "VALUES('{$user_password}', '{$user_firstname}', '{$user_lastname}', '{$user_email}', '{$user_image}', '{$user_role}', '{$username}' ) ";

    $user_add_query = mysqli_query($connection, $query);

    confirm($user_add_query);

    echo "User created <a href='users.php'>View all users</a>";

//    header("Location: /admin/users.php?source=add_user");
}

?>

<form enctype="multipart/form-data" action="" method="POST">
    <div class="form-group">
        <label for="username">username</label>
        <input type="text" name="username" class="form-control" id="username" placeholder="username">
    </div>
    <div class="form-group">
        <label for="user_image">user_image</label>
        <input type="file" name="user_image" class="form-control" id="user_image" placeholder="user_image">
    </div>
    <div class="form-group">
        <label for="user_firstname">First name</label>
        <input type="text" name="user_firstname" class="form-control" id="user_firstname" placeholder="user_firstname">
    </div>
    <div class="form-group">
        <label for="user_lastname">user_lastname</label>
        <input type="text" name="user_lastname" class="form-control" id="user_lastname" placeholder="user_lastname">
    </div>
    <div class="form-group">
        <label for="user_role">User role</label>
        <select name="user_role" class="form-control" id="user_role">
            <option value="Admin" type="text">Admin</option>
            <option value="subscriber" type="text">subscriber</option>
        </select>
    </div>
    <div class="form-group">
        <label for="user_email">user_email</label>
        <input type="email" name="user_email" class="form-control" id="user_email" placeholder="user_email">
    </div>
    <div class="form-group">
        <label for="user_password">password</label>
        <input type="password" name="user_password" class="form-control" id="user_password" placeholder="user_password">
    </div>

    <button type="submit" class="button success" name="create_user">Save</button>
</form>