<?php require 'header.php'?>

<div class="container">
    <div class="row">
        <div class="col-12">

            <form action="form.php" method="post">
                <div class="form-group">
                    <label for="name">User name</label>
                    <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="User name">
                </div>
                <div class="form-group">
                    <label for="email1">Email address</label>
                    <input type="email" name="email" class="form-control" id="email1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="password1">Password</label>
                    <input type="password" name="password" class="form-control" id="password1" placeholder="Password">
                </div>
                <div class="form-check">
                    <input type="checkbox" name="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>

        </div>
    </div>
</div>

<?php require 'footer.php'?>


<?php

$email = $_POST['email'];
$name = $_POST['name'];
$password = $_POST['password'];
$checkbox = $_POST['checkbox'];

//if(isset($_POST['email'])) {
echo $email;
//}

//var_dump($_GET);

?>