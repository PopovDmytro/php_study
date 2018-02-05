<?php

?>

<?php require '../header.php'?>


<div class="container">
    <div class="row">
        <div class="col-12">

            <h1>TODO EDIT page</h1>
            <hr />

            <form action="functions.php" method="post">
                <div class="form-group">
                    <label for="task">Task</label>
                    <input type="text" name="task" class="form-control" id="task" placeholder="Task">
                </div>
                <div class="form-group">
                    <label for="assigned_to">Assign to</label>
                    <input type="text" name="assigned_to" class="form-control" id="assigned_to" placeholder="Assign to">
                </div>
                <div class="date_created">
                    <label for="name">Date created</label>
                    <input type="date" name="date_created" class="form-control" id="date_created" placeholder="Date created">
                </div>
                <button type="submit" name="add" class="btn btn-primary mt-3">SUBMIT</button>
                <button type="submit" name="edit" class="btn btn-success mt-3">EDIT</button>
            </form>

        </div>
    </div>
</div>


</main>
<footer class="footer text-center">
<?php require '../footer.php'; ?>