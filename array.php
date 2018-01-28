<?php
include 'header.php';
?>

<?php

$names = 'alex';

$arr = array(1,2,3);
$arrLiteral = ['a', 'b', 'c'];
$namedArr = [
    'one'=> 1,
    2 => 'second',
    'third' => [1,2,3],
    $names => 'key is variable'
];

$namedArrSecond = [
  [
      'username' => 'john',
      'email' => 'com@com.com'
  ],
  [
      'username' => 'bili',
      'email' => 'address@com.com'
  ]
];


$arr[1] = 'name';

var_dump($arr);
echo '<br />';
var_dump($namedArr);
echo '<br />';
var_dump($namedArrSecond);
echo '<br />';

echo $arrLiteral[0];
echo '<br />';
echo $namedArr['third'][0];
echo '<br />';
echo $namedArrSecond[0]['username'];

echo '<pre>', var_dump($namedArrSecond), '</pre>';

foreach ( $namedArrSecond as $user ) {
    echo $user['username'] . '<br>';
}

?>