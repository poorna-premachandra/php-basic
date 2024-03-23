<?php

function inspect($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}

//multi-dimensional array
$fruits = [['Apple', 'Red'], ['Orange', 'Orange'], ['Banana', 'Yellow']];

inspect($fruits);
echo '</br>';

//get an element
echo 'get an element';
inspect($fruits[0][0]); //Apple
echo '</br>';

//add an element
echo 'add an element';
$fruits[] = ['Grape', 'Purple'];
inspect($fruits);
echo '</br>';

//multi dimensional arrays with associative arrays
echo 'multi dimensional arrays with associative arrays';
$users = [
    ['name' => 'John', 'email' => 'john@gmail.com', 'password' => '123456'],
    ['name' => 'David', 'email' => 'david@gmail.com', 'password' => '123456'],
    ['name' => 'Mary', 'email' => 'mary@gmail.com', 'password' => '123456']
];
inspect($users);
echo '</br>';

//get an element with associative arrays
echo 'get an element with associative arrays';
inspect($users[0]['name']); //John
echo '</br>';

//add an element with associative arrays
echo 'add an element with associative arrays';
$users[] = ['name' => 'Michael', 'email' => 'michael@gmail.com', 'password' => '123456']; //1st method
array_push($users, ['name' => 'Nathan', 'email' => 'nathan@gmail.com', 'password' => '123456']); //2nd method
inspect($users);
echo '</br>';

//similarly we can use other array funtions as well such as array_pop, array_shift, unset.. etc.