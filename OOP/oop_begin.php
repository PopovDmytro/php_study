<?php require '../header.php'?>

<h1 class="text-center">OOP</h1>

<?php

class Car {

    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;

    function moveWheels($wheelsAmount) {

//        echo "<hr>wheels move";

        $this->wheels = $wheelsAmount;

    }

}

class Tractor {

}

if (class_exists("Car", "moveWheel")) {
    echo "it is exist method !";
} else {
    echo "no class Car !";
}

$newCar = new Car();

$newCar->moveWheels(4);

$newCar->doors = 5;

echo $newCar->doors . '<hr>';

$bmw = new Car();

$bmw->moveWheels(50);
echo $bmw->wheels;

?>

</main>
<footer class="footer text-center">
    <?php require '../footer.php'; ?>
