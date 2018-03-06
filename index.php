<?php

/* PRINTING */

/* Variables */
$braincells = 5;
$iq = 48.57;
$name = 'Kevin';
$clever = false;
$head = null;

/* Constants */
define ("HUMAN", "Kevin");
define ("LEGS", "2");
define ("AWAKE", false);

echo HUMAN . ' has ' . $braincells . ' braincells';
print HUMAN . '\'s IQ is ' . $iq . '\n';

$number = 9;
$str = "Beijing";
printf("There are %u million bicycles in %s.",$number,$str) ;

$intelligence = sprintf($name);
echo $intelligence;

echo 'Single quotes don\'t allow variable interpolation, so this variable, $name, won\'t expand';
echo "Double quotes allow variable interpolation, so this variable, $name, shows the value.";

/* Line break */
echo nl2br("One line.\nAnother line.");

/* Variable that won\'t work  invalid */
//$3number = 3;

/***************************/

/* if / elseif */

$a = 2;
$b = 3;

if ($a == $b) {
    echo '$a equals $b';
} elseif ($a != $b) {
    echo '$a doesn\'t equal $b!';
} else {
    echo 'Doesn\t compute!';
}


/***************************/

/* SWITCH */

$i = 1;

switch($i) {
    case 0:
        echo 'hi';
        break;
    case 1:
        echo 'yo';
        break;
    case 2:
        echo 'ciao';
        break;
    default:
        echo 'hello';
}

$a = 2;
$b = 3;

switch(TRUE) {
    case $a == $b:
        echo 'hi';
        break;
    case $a >= 1:
        echo 'yo';
        break;
    default:
        echo 'hello';
}

/***************************/

/* Ternary Operator */

$a = 2;
$b = 3;

$foo = ($a == $b) ? 'hi' : 'bye';

echo $foo;


/***************************/

/* Arrays */

$array = ["foo", "bar", "hello", "world"];

/* One way to push */
array_push($array, "baz");

/* Another way to push */
$array[] = "banana";

/* How to add a key/value pair to an associative array.
   If 'fruit' is already a key in the array, banana will be assigned to it.
   If not, it will create a key / value pair (fruit => banana */
$array['fruit'] = "banana";

echo $array[6];

/***************************/

/* Loops - foreach */

$daysOfTheWeek = ['Mon', 'Tues', 'Weds', 'Thurs', 'Fri'];

foreach ($daysOfTheWeek as $day) {
    echo $day . '<br>';
}

foreach ($daysOfTheWeek as $key=>$value) {
    echo $key . ' ' . $value . '<br>';
}

foreach ($daysOfTheWeek as $key=>$value) {
    $daysOfTheWeek[$key] = $value . "hello";
}

var_dump($daysOfTheWeek);
echo '<br>';
print_r($daysOfTheWeek);


//indexed array
$daysOfTheWeek = ['Mon', 'tues', 'weds', 'thurs', 'fri', 'sat', 'sun'];

//associative array
$personalDetails = ['name' => 'John Doe', 'age'=> 21, 'sex' => 'male'];

foreach ($daysOfTheWeek as $day) {
    echo $day . '<br>';
}

foreach ($personalDetails as $key=>$value) {
    echo $personalDetails[$key] = $value . 'someText' . '<br>';
}

/* Loops - for */

//for (variable declaration/starting point; end point/condition; increment) {
//    // do code
//}

for ($i=0; $i<10; $i++) {
    echo $i . '<br>';
}

//From this array [1,2,3,4,5,6,7,8] add 9 & 10 to it using 2 different methods,
$numbers = [1,2,3,4,5,6,7,8];
array_push($numbers, 9, 10);
//print_r($numbers);

$numbers[] = 9;
$numbers[] = 10;
//print_r($numbers);

//Randomise the contents of the array using an array function
shuffle($numbers);
print_r($numbers);

//Iterate through this array and output odd values
foreach ($numbers as $num) {
    if($num % 2 != 0) {
        echo $num . '<br>';
    }
}

/***************************/

/* Functions */

function foo1($param1) {
    if ($param1< 5) {
        return $param1 . ' less than 5';
    } else {
        return $param1 . ' more than 5';
    }
}

$bar = 6;
$baz = foo1($bar);
echo $baz;


function foo2($a) {
    return $a + 1;
}

function bar($param1, $param2) {
    $x = foo1($param1);
    return $x * $param2;
}

$var1 = 6;
$var2 = 4;

echo bar($var1, $var2);

function multiplyTwoNumberTogether($num1, $num2) {
    return $num1 * $num2;
}

/* Exercise */
/* Doc block - cmd + n, then choose function */

/**
 * Takes a number, multiplies it by itself and adds second parameter. Then returns the value.
 *
 * @param $num1 int first number to be multiplied
 * @param $num2 int second number to be multiplied
 *
 * @return int First parameter multiplied by itself and added to second parameter
*/
function multiplyAdd($num1, $num2 = 0) {
    return $num2 += ($num1 *= $num1);
}
echo '<br>' . multiplyAdd(5);


?>





































