<?php

//create data and push to db table
function createUser($connection) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

//sql inject escape
    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);

//    encript pass
    $hashFormat = "$2y$10$";
    $salt = "iosdfsSKDMFkjsdflskdfm";
    $hashF_and_salt = $hashFormat . $salt;
    $password = crypt($password, $hashF_and_salt);
//

    $query = "INSERT INTO users(username, password) ";
    $query .= "VALUE ('$username', '$password')";

    $result = mysqli_query($connection, $query);

    if(!$result) {
        die('Query Failed' . mysqli_error());
    } else {
        echo 'created !';
    }
}

//get data from db table
function getUsers($connection) {

    $query = "SELECT * FROM users";

    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Query Failed' . mysqli_error());
    }

    return $result;
}

//update data in db table
function updateTable ($connection) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "UPDATE users SET ";
    $query .= "username = '$username', ";
    $query .= "password = '$password' ";
    $query .= "WHERE id = '$id' ";

    $result = mysqli_query($connection, $query);

    if(!$result) {
        die("QUERY FAILED") . mysqli_error($connection);
    }
}

//delete data from db table
function deleteRows ($connection) {
    $id = $_POST['id'];

    $query = "DELETE FROM users ";
    $query .= "WHERE id = '$id'";

    $result = mysqli_query($connection, $query);

    if(!$result) {
        die("QUERY FAILED") . mysqli_error();
    }
}