<?php

$testName = "exerciseCookie";
$testValue = "some string for exercise study";
$testExpiration = time() + (60 * 60 * 24 * 7 * 20);

//set cookie
//setcookie($testName, $testValue . "new value", $testExpiration);
//read cookie
//echo $_COOKIE[$testName] . "<br>";
//update cookie delete cookie
unset($_COOKIE[$testName]);
$res = setcookie($testName, '', time() - 3600);


?>

<?php
$name = "SomeName";
$value = 100;
$expiration = time() + (60*60*24*7);
//setcookie($name, $value, $expiration);
?>

<?php require '../header.php' ?>

<h1 class="text-center"> COOKIES </h1>
<hr>

<?php

//$_COOKIE

if(isset($_COOKIE['SomeName'])) {
    $someOne = $_COOKIE['SomeName'];
    echo  $someOne;

    print_r($_COOKIE);
} else {
//    $someOne = "";
    echo "no cookies";
}




?>


<hr>

