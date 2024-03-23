<?php

$age = 19;

//If statement
if ($age >= 21) {
    echo 'You are old enough to drink';
}

echo '</br>';

//If-Else statment
if ($age >= 21) {
    echo 'You are old enough to drink';
} else {
    echo 'You are not old enough to drink';
}

echo '</br>';

//Nested if statements
if ($age >= 21) {
    echo 'You are old enough to drink';
} else {
    if ($age >= 18) {
        echo 'You are old enough to vote';
    } else {
        echo 'You are not old enough to drink or vote';
    }
}

echo '</br>';

//If-Else-If statement
if ($age >= 21) {
    echo 'You are old enough to drink';
} else if ($age >= 18) {
    echo 'You are old enough to vote';
} else {
    echo 'You are not old enough to drink or vote';
}

echo '</br></br>';


/*

Comparison Operators
==          Equal to
!=          Not equal to
<>          Not equal to
===         Identical to
!==         Not identical to
<           Less than
>           Greater than
<=          Less than or equal to
>=          Greater than or equal to

Logical Operators
and         True if both are true
&&          True if both are true
or          True if either is true
||          True if either is true
xor         True if only one is true
!           True if it is not true

*/

$x = 10;
$y = '10';

echo 'Comparison using == </br>';
var_dump($x == $y); //true. because values are equal.

echo '</br>';

echo 'Comparison using === </br>';
var_dump($x === $y); //false. because types of values are not equal.

echo '</br></br>';

//Conditionals in loops

$number = 1;

while ($number <= 10) {
    if ($number % 2 == 0) {
        echo $number . ' is even </br>';
    } else {
        echo $number . ' is odd </br>';
    }
    $number++;
}

echo '</br></br>';

//Breaking out of loop
for ($i = 0; $i <= 10; $i++) {
    if ($i == 5) {
        break;
    }
    echo $i . '</br>'; //prints from 0 to 4
}

echo '</br></br>';

//Skip and continue
for ($i = 0; $i <= 10; $i++) {
    if ($i == 5) {
        continue;
    }
    echo $i . '</br>'; //prints from 0 to 10 excluding 5
}

echo '</br></br>';

//Conditionals inside a for-each loop
$studentGrades = array(
    'John' => 75,
    'Jack' => 88,
    'Jill' => 72,
    'Mary' => 82
);

foreach ($studentGrades as $name => $grade) {
    if ($grade >= 80) {
        echo $name . ' has an excellant grade </br>';
    }
}

echo '</br></br>';

//Switch statement
$dayOfWeek = date('l');

switch ($dayOfWeek) {
    case 'Monday':
        echo 'Today is Monday';
        break;
    case 'Tuesday':
        echo 'Today is Tuesday';
        break;
    default:
        echo 'Today is not Monday or Tuesday';
}


echo '</br></br>';

//Ternary Operator
$number = 12;

$result =  $number > 10 ?  "$number is greater than 10" :  "$number is less than 10";
echo $result;

echo '</br></br>';

//Null Coalescing Operator
$favColor = 'red';
// $color = isset($favColor) ? $favColor : 'blue';   This can be written as follows
$color = $favColor ?? 'blue';

$secondFavColor = 'green';
$color = $favColor ?? $secondFavColor ?? 'blue';

echo $color;
