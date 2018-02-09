<?php

include "db_connetion.php";

if(isset($_POST['add'])) {
    header('Location: '. "/practice_mysqli/todo_show.php");
    createTodoTask($todo_db_connection);
}

function createTodoTask($connection) {
    $task = $_POST['task'];
    $assigned = $_POST['assigned_to'];
    $date = $_POST['date_created'];

    $query = "INSERT INTO todo_list(task, assigned_to, date_created) ";
    $query .= "VALUE ('$task', '$assigned', '$date')";

    $result = mysqli_query($connection, $query);

    if(!$result) {
        die('Query Failed' . mysqli_error());
    } else {
        echo 'created !';
    }
}

function getTodo ($connection) {

    $query = "SELECT * FROM todo_list";

    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Query Failed' . mysqli_error());
    }

    $todo_ids = [];

    while($row = mysqli_fetch_assoc($result)) {

        print_r($row);

        $todo_ids[] = $row['id'];
    }

    return $todo_ids;
}

// not done
function updateTodo ($connection) {
    $task = $_POST['task'];
    $assigned = $_POST['assigned_to'];
    $date = $_POST['date_created'];
    $id = $_POST['id'];

    $query = "UPDATE todo_list SET ";
    $query .= "task = '$task', ";
    $query .= "assigned_to = '$assigned', ";
    $query .= "date_created = '$date' ";
    $query .= "WHERE id = '$id' ";

    $result = mysqli_query($connection, $query);

    if(!$result) {
        die("QUERY FAILED") . mysqli_error($connection);
    }
}


function deleteTodoRow ($connection) {
    $id = $_POST['id'];

    $query = "DELETE FROM todo_list ";
    $query .= "WHERE id = '$id'";

    $result = mysqli_query($connection, $query);

    if(!$result) {
        die("QUERY FAILED") . mysqli_error();
    }
}