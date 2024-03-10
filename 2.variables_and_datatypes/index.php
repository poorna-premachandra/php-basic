<?php

/*
Variables should,
    1.Prefixed with a $ sign
    2.Must start with a letter or underscore. Cannot start with a number.
    3.Can include letters, numbers and underscore.
    4.Case sensitive.($Name and $name are not the same)
*/

$title = 'Learn PHP Variables';

echo $title;
echo '</br>';

/*
Data types in PHP are,

String, Integer, Float, Boolean, Array, Object, Null, Resource

*/

// var_dump($name); -> gives info about a variable such as type and value
// echo getType($name2); -> also gives info about a variable type


//String
$name = 'Jack';
$name2 = "John";

var_dump($name);
echo '</br>';

//Integer
$age = 31;
$negative_number = -10;
var_dump($age);
var_dump($negative_number);
echo '</br>';

//Float
$rating = 4.5;
var_dump($rating);
echo '</br>';

//Boolean
$isReady = true;
var_dump($isReady);
echo '</br>';

//Array
$friends = ['Alice', 'Bob', 'Carl'];
var_dump($friends);
echo '</br>';

//Object
$person = new stdClass();
var_dump($person);
echo '</br>';

//Null
$middle_name = null;
var_dump($middle_name);
echo '</br>';

//Resource (E.g.- file)
$file = fopen('sample.txt', 'r');
var_dump($file);
echo '</br>';
