<section id="login">
    <div class="form-wrap" style="max-width: 500px; margin: 0 auto">
        <h1>Register</h1>
        <form role="form" action="" method="post" id="login-form" autocomplete="off">
            <div class="form-group">
                <label for="username" class="sr-only">username</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Enter Desired Username" required>
            </div>
            <div class="form-group">
                <label for="email" class="sr-only">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="somebody@example.com" required>
            </div>
            <div class="form-group">
                <label for="password" class="sr-only">Password</label>
                <input type="password" name="password" id="key" class="form-control" placeholder="Password" required>
            </div>

            <input type="submit" name="submit" id="btn-login" class="button success" value="Register">
        </form>

    </div>
</section>
<hr>

<?php
    if(isset($_POST['submit'])) {

        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if (!empty($username) && !empty($email) && !empty($password)) {

            $username = mysqli_real_escape_string($connection ,$username);
            $email = mysqli_real_escape_string($connection ,$email);
            $password = mysqli_real_escape_string($connection ,$password);

            $query = "SELECT randSalt FROM users";
            $select_randsalt_query = mysqli_query($connection, $query);

            if(!isset($select_randsalt_query)){
                die("QUERY FAILED" . mysqli_error($connection));
            }

            $row = mysqli_fetch_array($select_randsalt_query);
            $salt = $row['randSalt'];

            $password = crypt($password, $salt);

            echo "$password";
            echo strlen($salt);

//           --------------------------
            $query = "INSERT INTO users(user_password, user_email, username) ";
            $query .= "VALUES('{$password}', '{$email}', '{$username}' ) ";

            $register_new_acc = mysqli_query($connection, $query);
        }
    }
?>