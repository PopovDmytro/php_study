<?php
//test_db
//todo_list -> id, task, assigned_to, date_created

$todo_db_connection = mysqli_connect('localhost', 'root', '','test_db' );

if($todo_db_connection) {
    $todo_connect_result = "we are connected";
} else {
    die("DB connection failed");
}







