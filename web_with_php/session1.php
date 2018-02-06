<?php
session_start();

?>

<?php require '../header.php' ?>

<h1 class="text-center"> Session </h1>
<hr>

<?php

echo $_SESSION['greeting'];

?>

