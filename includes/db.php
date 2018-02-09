<?php

$db = [
    "host" => 'localhost',
    "user" => 'root',
    "password" => '',
    "name" => 'cms'
];

foreach ($db as $key => $value) {
    define(strtoupper("db_$key"), $value);
}

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

?>