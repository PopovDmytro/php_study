<ol>
    <li><a href="/strings.php">strings</a></li>
    <li><a href="/array.php">array</a></li>
    <li><a href="/function.php">function</a></li>
</ol>
<hr>

<?php

$isTrue = 0;

if($isTrue) {
    echo '<p>' . 'it is true' . '</p>';
} else {
    echo '<p>' . 'it is false' . '</p>';
}

if ( $isTrue === 1 ) {
    echo '<p>' . 'One' . '</p>';
} elseif ( $isTrue === 2 ) {
    echo '<p>' . 'two' . '</p>';
} else {
    echo '<p>' . 'else number' . '</p>';
}

$dayOfWeek = 1;

$daysIfWeek = [
        1 => 'Monday',
        2 => 'Tuesday',
        3 => 'Wednesday',
        4 => 'Thursday',
        5 => 'Friday'
];

//if(in_array($dayOfWeek, array_keys($daysOfWeek))) {
//    echo $daysOfWeek[$dayOfWeek];
//}

if(false) {
    return;
}


$count = 1;

//While and Do While
do  {
    $count++;
    echo $count . '<br />';
} while($count < 10);

if ($count) {
    echo '<script src=""></script>';
}

$x = 1;
if ($x === 1) {
    echo (float) '12.3e' . '<br />';
    echo (int) '12.3e' . '<br />';
}

//Switch
$weather = 'cloudy';
$color = null;
switch (true) {
    case $weather === 'sunny' :
        $color = 'blue';
        break;

    case $weather === 'cloudy' :
        $color = 'grey';
        break;

    default : $color = 'white';
}
echo $color;
//

$percentage = number_format((7 / 30) * 100, 2);
echo "You are percentage {$percentage}% <br>";

$row = 5;

if($row % 2 === 0) {
    echo " even <br>";
} else {
    echo " odd <br>";
}

$a = 5;

echo $a ** 2; // php 5.6 does not work **

//For
echo '<br />';
for ($x = 1; $x <= 10; $x++ ) {
    echo '<a href="?page=' . $x .'">' . $x . '</a> ';
}

$pageCount = ceil(210 / 25);
$floor = floor(210 / 25);
echo $pageCount , '<br>', $floor;

$arrNames = ['alex', 'bili', 'dale'];

for($i = 0; $i < count($arrNames); $i++) {
    echo $arrNames[$i];
}

echo rand(1, 7); //rounded two numbers
echo '<br />';

//For Each loop
foreach($arrNames as $name){
    echo $name;
}
echo '<br />';

$topics = [
    [
    'id' => 1,
    'title' => 'This best way !',
    'posts' => [
        ['body' => 'lorem lorem 1'],
        ['body' => 'lorem lorem 2']
    ]
],
    [
        'id' => 2,
        'title' => 'This best way Too !!!',
        'posts' => [
            ['body' => 'lorem lorem 23'],
            ['body' => 'lorem lorem 777'],
            ['body' => 'lorem lorem lorem lorem']
        ]
    ],
    [
        'id' => 3,
        'title' => 'Third best way Too !!!',
        'posts' => [
            ['body' => 'lorem lorem 3'],
        ]
    ]
];

foreach($topics as $topic){

    if($topic['id'] === 2) {
        continue; // skip element and continue loop
    }

    echo  '<h1>' . $topic['title'] . '</h1>';

    foreach ($topic['posts'] as $post) {
        echo '<p>' . $post['body'] . '</p>';

        break 2;
    }

//    break; // breaking loop

}

echo '<br />';

//debuging

echo  '<pre>' , var_dump($topics) , '</pre>';
echo '<br />';
echo  '<pre>' , print_r($topics) , '</pre>';


?>


