
<h1> Edit user</h1>
<?php

if (isset($_GET['edit_user'])) {

        $the_user_id = $_GET['edit_user'];

        $query = "SELECT * FROM users WHERE user_id = $the_user_id ";
        $select_user_by_id = mysqli_query($connection, $query);

        while($row = mysqli_fetch_assoc($select_user_by_id)) {
            $username = $row['username'];
            $old_user_image = $row['user_image'];
            $user_firstname = $row['user_firstname'];
            $user_lastname = $row['user_lastname'];
            $user_role = $row['user_role'];
            $user_email = $row['user_email'];
            $user_password = $row['user_password'];
        }

        if(isset($_POST['edit_user'])) {

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

                $user_image = $old_user_image;
            }

            $query = "UPDATE users SET ";
            $query .= "user_password = '{$user_password}', ";
            $query .= "user_firstname = '{$user_firstname}', ";
            $query .= "user_lastname = '{$user_lastname}', ";
            $query .= "user_email = '{$user_email}', ";
            $query .= "user_image = '{$user_image}', ";
            $query .= "user_role = '{$user_role}', ";
            $query .= "username = '{$username}' ";
            $query .= "WHERE user_id = '{$the_user_id}' ";

            $update_user = mysqli_query($connection, $query);

            confirm($update_user);
        }
    }
//    ----
?>

<form enctype="multipart/form-data" action="" method="POST">
    <div class="form-group">
        <label for="username">username</label>
        <input value="<?php echo $username; ?>" type="text" name="username" class="form-control" id="username" placeholder="username">
    </div>
    <div class="form-group">
        <label for="user_image">user_image</label>
        <img width="200" src="../media/posts_images/<?php echo $old_user_image; ?>" alt="">
        <br>
        <input value="<?php echo $user_image; ?>" type="file" name="user_image" class="form-control" id="user_image" placeholder="user_image">
    </div>
    <div class="form-group">
        <label for="user_firstname">First name</label>
        <input value="<?php echo $user_firstname; ?>" type="text" name="user_firstname" class="form-control" id="user_firstname" placeholder="user_firstname">
    </div>
    <div class="form-group">
        <label for="user_lastname">user_lastname</label>
        <input value="<?php echo $user_lastname; ?>" type="text" name="user_lastname" class="form-control" id="user_lastname" placeholder="user_lastname">
    </div>
    <div class="form-group">
        <label for="user_role">User role</label>
        <select name="user_role" class="form-control" id="user_role">
            <option value="<option <?php echo $user_role; ?>" >Default role is : <?php echo $user_role; ?></option>
            <?php

                if($user_role == "admin" ) {
                    echo "<option value=\"subscriber\" type=\"text\">subscriber</option>";
                } elseif ($user_role == "subscriber" ) {
                    echo "<option value=\"admin\" type=\"text\">admin</option>";
                }

            ?>

        </select>
    </div>
    <div class="form-group">
        <label for="user_email">user_email</label>
        <input value="<?php echo $user_email; ?>" type="email" name="user_email" class="form-control" id="user_email" placeholder="user_email">
    </div>
    <div class="form-group">
        <label for="user_password">password</label>
        <input value="<?php echo$user_password;  ?>" type="password" name="user_password" class="form-control" id="user_password" placeholder="user_password">
    </div>

    <button type="submit" class="button success" name="edit_user">Save</button>
</form>