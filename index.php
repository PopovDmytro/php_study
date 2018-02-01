<?php

$number = 10;

switch ($number) {
    case 100:
        echo "it is 34";
        break;
    case 37:
        echo "it is 37";
        break;
    case 5:
        echo "it is 5";
        break;
    case 10:
        echo "it is 10";
        break;
    case 12:
        echo "it is 12";
        break;
    default:
        echo $number . " not equal to any of case";
}


$items = [
    [
        "name" => "first",
        "email" => "com@com.com"
    ],
    [
        "name" => "lorem 2",
        "email" => "2com@com.com"
    ],
    [
        "name" => "lorem 3",
        "email" => "3com@com.com"
    ]
];

foreach ($items as $item) {
    echo $item['name'] . " and email is " . $item['email'] . '<br>';
}


$variable = 10;

function foo_global () {

    global $variable;

    return $variable + 100;
}

function foo_static () {

    static $itemVar;
    echo $itemVar;
    $itemVar++;

}

function foo_example ($vat) {

    var_dump(func_get_args());

    return $vat++;
}

foo_example(0,1,2,3);

echo '<hr>';

define('FIRST_CONSTANT', 'constant value');
echo FIRST_CONSTANT;

echo '<hr>';

rand(1, 2);
ceil(1.7);
floor(1.7);
round(1.2501002310, 5);
//
strlen("hello world");
strtoupper("to upper case");
//
$arr = [123,1,2,3,4,5,6,7];

var_dump( in_array(7, $arr), max($arr));
echo '<br>';
sort($arr);
var_dump($arr);





?>


