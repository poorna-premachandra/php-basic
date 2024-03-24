<?php

//Type declarations(optional)

declare(strict_types=1); //turning on strict types

function getSum(int $a, int $b): int
{
    return $a + $b;
    // return 'Hello'; //This won't compile as return type doesn't match
}

//echo getSum(1, '1'); //This won't compile as one of the input types doesn't match
echo getSum(1, 1);

echo '</br>';

function greet(string $name): void //return type is void as the function returns nothing
{
    echo 'Hello ' . $name;
}

greet('John');
