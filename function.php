<?php
include 'header.php';
?>

<?php

echo is_int(1);
echo is_int('asd');

print 'sd';

var_dump(is_int(1));
//Function Declaration
echo fullName('func declaration');

function fullName ($name, $optionalVariable = 'optional' ) {

//    echo 'Name is ' . $name;
    return 'Name is ' . $name . $optionalVariable;

}

fullName("Vasia");
echo '<br>';


echo '<br>';

echo fullName('Name', 'Fortochkin');
echo '<br>';
//Function Expression

//echo $fullName('FirstName', 'LastName', 'Male'); // call func here will be ERROR

$fullName = function ($name, $last, $gender = 'not sure') {
    return "{$name} , {$last}, {$gender}";
};
echo $fullName('FirstName', 'LastName', 'Male');
echo '<br>';


?>