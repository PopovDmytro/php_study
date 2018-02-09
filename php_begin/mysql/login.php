<?php require '../header.php' ?>

<?php
    include "db.php";
    include "crud_functions.php";

    if(isset($_POST['submit'])) {
        createUser($connection);
    }
?>

<div class="container">

    <h1 class="text-center mt-3">LOGIN page (create and add data to db)</h1>
    <hr />

    <div class="row">
        <div class="col-sm-6">

            <form action="login.php" method="post">
                <div class="form-group">
                    <label for="username">User name</label>
                    <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp" placeholder="User name">
                </div>
                <div class="form-group">
                    <label for="password1">Password</label>
                    <input type="password" name="password" class="form-control" id="password1" placeholder="Password">
                </div>
                <button type="submit" name="submit" value="submit" class="btn btn-primary mt-3">Submit</button>
            </form>

        </div>
    </div>
</div>

</main>
<footer class="footer text-center">
<?php echo $connection_result; ?>
<?php require '../footer.php'; ?>