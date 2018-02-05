<?php

if(isset($_POST['submit'])) {
    header('Location: '. $_SERVER['REQUEST_URI']);
}

require '../header.php'

?>


<?php

include "db.php";
include "crud_functions.php";

if(isset($_POST['submit'])) {
    deleteRows($connection);
}
?>

<div class="container">

    <h1 class="text-center mt-3">Delete data from db page</h1>
    <hr />

    <div class="row">
        <div class="col-sm-6">

            <form action="delete_from_db.php" method="post">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Example select</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="id">

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

                <button type="submit" name="submit" value="submit" class="btn btn-danger mt-3">DELETE data form db</button>
            </form>

        </div>
    </div>
</div>

</main>
<footer class="footer text-center">
<?php echo $connection_result; ?>
<?php require '../footer.php'; ?>