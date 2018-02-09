<?php
session_start();

?>

<?php require '../header.php' ?>

<h1 class="text-center"> Session </h1>
<hr>

<?php

echo $_SESSION['greeting'];

print_r($_SESSION);

?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <?php
                $x = "test";
                $y = date(DATE_ATOM);
            ?>
            <a href="session1.php?myTestQuery=<?php echo $x; ?>&secondGet=<?php echo $y; ?>">set query</a>
        </div>
    </div>
</div>


<?php echo $_GET["myTestQuery"]; ?>
<hr>
<?php echo $_GET["secondGet"]; ?>