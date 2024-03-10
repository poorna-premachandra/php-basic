<?php

$num1 = 50;
$num2 = 10;
$num3 = 8;

//Addition
echo $num1 + $num2;
echo '</br>';

//Substraction
echo $num1 - $num2;
echo '</br>';

//Multiplication
echo $num1 * $num2;
echo '</br>';

//Division
echo $num1 / $num2;
echo '</br>';

//Modulo(remainder of a division)
echo $num2 % $num3;
echo '</br>';

//Assignment Operator
$num4 = 13;
// $num4 = $num4 + 8; We can write this as follows
$num4 += 8;


//Built-in PHP funtions

//rand() - generate a random number
$num5 = rand();
echo $num5;
echo '</br>';

$num6 = rand(1, 10); //random number between 1 to 10
echo $num6;
echo '</br>';

//round()
echo round(46.5);
echo '</br>';

//ceil()
echo ceil(32.2);
echo '</br>';

//floor()
echo floor(32.8);
echo '</br>';

//sqrt()
echo sqrt(16);
echo '</br>';

//abs() - absolute
echo abs(-18);
echo '</br>';

//max
echo max(1, 2, 3, 50);
echo '</br>';
echo max([1, 2, 3, 70]);
echo '</br>';

//min
echo min(1, 2, 3, 50);
echo '</br>';
echo min([7, 4, 11, 70]);
echo '</br>';

//Format a number
echo number_format(123456.436234, 2, '.', ','); //outputs 123,456.44