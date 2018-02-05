<?php require 'header.php'?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center pt-2 pb-2">Home page</h1>
            <hr />
        </div>
    </div>
</div>


<h3>
    <?php
        $pass = 1234;
        $salt = 'asdasvzvzkmfgldfg123sf';

        $hashFormatTest = "$2y$10$";

        $crypt_result = crypt($pass, $salt . $hashFormatTest );

        echo  $crypt_result;

    ?>
</h3>

</main>
<footer class="footer text-center">
<?php require 'footer.php'; ?>