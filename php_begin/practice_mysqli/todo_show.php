<?php require '../header.php' ?>

<?php
include "db_connetion.php";
include "functions.php";

?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>TODO SHOW page</h1>
            <hr />

            <pre>
            <?php getTodo($todo_db_connection); ?>
            </pre>

        </div>
    </div>
</div>


</main>
<footer class="footer text-center">
<?php require '../footer.php'; ?>