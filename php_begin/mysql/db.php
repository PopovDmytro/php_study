<?php
$connection = mysqli_connect('localhost', 'root', '', 'db_login');

if($connection) {
    $connection_result = "we are connected";
} else {
    die("DB connection failed");
}

$connection_result = '<p class="mb-0 p-1" style="color: limegreen; position: absolute; bottom: 100%; right: 0; border: 1px solid limegreen;">' . $connection_result . ' </p>';