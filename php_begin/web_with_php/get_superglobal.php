<?php require '../header.php' ?>

<h1 class="text-center"> $GET </h1>
<hr>

<?php
$id = 10;

echo $_POST['name'];

?>

<a href="get_superglobal.php?id=<?php echo $id; ?>">200</a>

<form action="get_superglobal.php" method="post">
    <input type="text" name="name" />

    <button type="submit">Submit</button>

</form>

<?php

print_r($_GET);

print_r($_POST);

?>

<p id="test"></p>

<script>

    var l = window.location;
    console.log(window.location);
    document.getElementById('test').innerHTML = l;

</script>
