<?php require '../header.php' ?>

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
<hr>

<!--Inheritance--><!--construct-->
<?php

class Plane extends Car { //key word extends

    public function __construct($valMulti) {

        echo $this->wheels = 10 * $valMulti;

    }

    var $wheels = 20;

}

$newMech = new Plane(1);
$newOne = new Plane(4);
$newTwo = new Plane(2);

echo $newMech->wheels;

if(class_exists("Plane")) {

}

?>
<hr>
<!--Data Access--><!--Static Data-->
<?php

class DataAccess { //key word extends


    public $forAll = "available for all";
    protected $safe = "available for this class and all children";
    private $hide = "only available for this class";
    var $ordinaryVariable = "";

    public function __construct() {
        echo $this->hide;
    }

    function showProperty () {
        echo $this->safe;
    }

//    static data can be using without creating instance of class
    static $varStatic = "static variable ::";

    static function fooStatic () {
        echo DataAccess::$varStatic;
    }

}

class Semi extends DataAccess {

    function showProperty() {

    }

}

$newTest = new DataAccess();
$newTest->showProperty();
$newTestSecond = new Semi();
$newTestSecond->showProperty();
//static
echo '<hr />';
echo DataAccess::$varStatic;


?>

<hr />
<h5>exercise</h5>
<?php
class Dog {

    var $color = 'black';
    private $eye = 2;
    protected $weight = "10kg";
    public $name = "Woof woof";

    function showAll () {
        echo $this->color, $this->eye, $this->weight, $this->name;
    }

}

$rotweiller = new Dog();

$rotweiller->showAll();


?>



</main>
<footer class="footer text-center">
    <?php require '../footer.php'; ?>
