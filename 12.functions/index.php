<?php

//Function names should start with a letter or underscore and they cannot start with a number.

function sayHello()
{
    echo 'Hello World!</br>';
}

sayHello();
sayHello();

//Function with a return value
function sayGoodbye()
{
    return 'Goodbye!</br>';
}

$goodbye =  sayGoodbye();
echo $goodbye;

//Function that takes params
function add($a = 1, $b = 1) //default values are defined
{
    return $a + $b;
}

echo add(4, 7);
echo '</br>';

echo add(); //This is possible because we have defined default values for function params
echo '</br>';


//Defining a function that takes infinite params
function addAll(...$numbers)
{
    $total = 0;
    foreach ($numbers as $number) {
        $total += $number;
    }
    return $total;
}

echo addAll(1, 2, 3, 4, 5, 6, 7, 9, 10);
echo '</br>';

//Scoping

//Global scope
$name = 'Alice';

function greet()
{
    //Local scope

    // echo 'Hello ' . $name;   //This won't compile. $name defined in global scope is not visible from here!

    global $name; //We have to define it as global to access it 
    $name = 'Bob';
    echo 'Hello ' . $name; //Now this compiles
}

echo $name; //Alice
echo '</br>';
greet(); //Hello Bob
echo '</br>';
echo $name; // Bob
echo '</br>';
//We can see from the above example that using global inside a function and changing the variable will change the original value of the variable as well.
//Therefore it is best to provide any variables a function needs via its parameters.(Do not use global)


//Constants 
//1.Using 'define'
define('APP_NAME', 'My App');
define('APP_VERSION', '1.0.0');

echo APP_NAME, APP_VERSION;
echo '</br>';

//2.Using 'const'
const DB_NAME = 'mydb';
const DB_HOST = 'localhost';

echo DB_NAME, DB_HOST;
echo '</br>';

function run()
{
    echo APP_NAME, APP_VERSION; //Constants can be accessed inside functions(Local scope)
    echo DB_NAME, DB_HOST;
}

run();

echo '</br>';

//Anonymous functions

$square = function ($number) { //No name for the function
    return $number * $number;
}; //with anonymous functions we have to put a ';' after }

$result = $square(5);

echo $result; //25
echo '</br>';


//Closures - 1st usecase of anonymous functions
function createCounter()
{
    $count = 0;
    $counter = function () use (&$count) { //making anonymous function to have access to $count variable
        return ++$count;
    };
    return $counter;
}

$counter = createCounter();

echo $counter() . '</br>'; //1
echo $counter() . '</br>'; //2
echo $counter() . '</br>'; //3
echo $counter() . '</br>'; //4


//Callback functions - 2nd usecase of anonymous functions

//callback function example
$numbers = [1, 2, 3, 4, 5];
$squareAnonymousFunction = function ($number) {
    return $number * $number;
};
$squaredNumbers = array_map($squareAnonymousFunction, $numbers);

print_r($squaredNumbers);
echo '</br>';

//Writing our own callback function
function applyCallback($callback, $value)
{
    return $callback($value);
}

$double = function ($number) {
    return $number * 2;
};

$result = applyCallback($double, 5);
echo $result . '</br>';

//Arrow functions - 3rd usecase of anonymous functions
// function addition($a, $b)
// {
//     return $a + $b;
// }

//Let's convert above function to an arrow function
$addition = fn ($a, $b) => $a + $b; //this should be a one liner
echo $addition(1, 2);
echo '</br>';

//arrow functions can be passed into functions as callback funtions
$squaredNumbers = array_map(fn ($number) =>  $number * $number, $numbers);
