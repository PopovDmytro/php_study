<?php require '../header.php'?>
<?php

include "db.php";
include "crud_functions.php";

?>

<div class="container">

    <h1 class="text-center mt-3"> GET login page</h1>
    <hr />

    <div class="row">
        <div class="col-sm-6">
            <pre>
        <?php

        $users_ids = [];

        $result = getUsers($connection);

        while($row = mysqli_fetch_assoc($result)) {//            mysqli_fetch_row()

            print_r($row);

            $users_ids[] = $row['id'];
        }

//            print_r($users_ids);

        ?>

            </pre>
        </div>
    </div>
</div>

</main>
<footer class="footer text-center">
<?php echo $connection_result; ?>
<?php require '../footer.php'; ?>


