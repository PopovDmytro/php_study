<?php
//echo gettype('word');
//echo (int) "23";
//echo +"23";
?>
<hr />
<?php
//$x = 25;
//$x = round(pow( sin($x), 2), 5);
//echo $x;
?>
<hr />
<?php
//$s = 'loginNames with length more than 10';
//if($s !== '') {
//      echo strlen($s) . '<br>', substr($s, 0, 3) . '<br>';
//}
//if (strlen($s) > 10) {
//      $searchCharsArr = ['a', 'g'];
//      $s = substr($s, 0, 10);
//      $s = str_replace($searchCharsArr, ' ', $s);
//      echo $s;
//}
?>
<hr />
<?php

/*$string = '<div class="refnamediv">
            <h1>htmlspecialchars</h1>
            <p>(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">htmlspecialchars</span> - <span class="dc-title">Lorem ipsum.</span></p>
        </div>';

echo '<br /> with html = ' . strlen($string);

$string = strip_tags($string);

echo '<br /> without html = ' . strlen($string);

echo '<br />';

var_dump($string);*/

/*
 * =====================================
 * TODO XSS and SQL inject what is it ?
 * =====================================
 * */

?>

<?php

$a = 25;
$b = 70;
$c = 100;

echo ($a > 20) && ($a < $b) || ($c === 100) ? "Ok" : "not OK" , '<br />';

echo ($a > 26) || ($a == 25) && ($c === 100) && ($b === 70) ? "Ok" : "not OK" ;

/*ARRAY*/

$arr[] = "some text 1";
$arr[] = "some text 2";

$date = [
        "day" => 17,
        "month" => "april",
        "year" => "2017"
];

$keys = array_keys($date);
$count = 0;

foreach ($date as $elem) {

    echo  " $keys[$count] : \" $elem \" <br />";
    $count++;

}

/* ARRAY FUNCTIONS

usort();
is_array();
implode();
array_fill();
array_filter();
count();
rsort();
sort();
*/


//var_dump($arr);

define( "NAME_SPACE", "something" );


?>


