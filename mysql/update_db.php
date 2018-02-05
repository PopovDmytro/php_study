<?php require '../header.php'?>

<?php

include "db.php";
include "crud_functions.php";

if(isset($_POST['submit'])) {
    updateTable($connection);
}
?>

<div class="container">

    <h1 class="text-center mt-3">UPDATE USER page</h1>
    <hr />

    <div class="row">
        <div class="col-sm-6">

            <form action="update_db.php" method="post">
                <div class="form-group">
                    <label for="username">User name</label>
                    <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp" placeholder="User name">
                </div>
                <div class="form-group">
                    <label for="password1">Password</label>
                    <input type="password" name="password" class="form-control" id="password1" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="id_select">Example select</label>
                    <select class="form-control" id="id_select" name="id">

                        <?php

                        $result = getUsers($connection);

                        $users_ids = [];

                        while($row = mysqli_fetch_assoc($result)) {//            mysqli_fetch_row()

                            $id = $row['id'];

                            $users_ids[] = $row['id'];

                            echo "<option value=" . $id . "> user id: " . $id ."</option>";
                        }

                        ?>

                    </select>
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