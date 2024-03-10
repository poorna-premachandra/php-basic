<?php
/* 
Two types of type casting.
    1. Implicit (AKA Type Juggling)
    2. Explicit
*/

$number1 = 5;
$number2 = 7;
$number3 = '10';

$fruit = 'apple';

$bool1 = true;
$bool2 = false;

$null = null;


//Implicit Conversions
$result = $number1 + $number2;
var_dump($result); //int
echo '</br>';

$result = $number1 + $number3; //We get a int here(string to int)
var_dump($result);
echo '</br>';

$result = $number3 + $number3; //We get a int here(string to int)
var_dump($result);
echo '</br>';

$result = $number1 . $number2; //We get a string here(int to string)
var_dump($result);
echo '</br>';

//$result = $number1 + $fruit; //Error

$result = $number3 + $bool1; //We get a int here(bool to int). Boolean true will be equal to integer 1 here.
var_dump($result);
echo '</br>';

$result = $number3 + $bool2; //We get a int here(bool to int). Boolean false will be equal to integer 0 here.
var_dump($result);
echo '</br>';

$result = $number3 + $null; //We get a int here(null to int). NULL will be equal to integer 0 here.
var_dump($result);
echo '</br>';



//Explicit Conversions
$result = (string)$number1; //We get a string here
var_dump($result);
echo '</br>';

$result = (int)$number3; //We get a int here
var_dump($result);
echo '</br>';

$result = (bool)$number2; //We get a bool here. If the number is not 0, we get true. It the number is 0, we get false.
var_dump($result);
echo '</br>';
