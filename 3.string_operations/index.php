<?php

$firstName = 'John';
$lastName = 'Doe';

$fullName = $firstName . ' ' . $lastName;

echo $fullName;
echo '</br>';

//String concatanation using . operator if using single quote strings.
echo  'My name with single quote is ' . $fullName . '</br>';

//String interpolation if using double quote strings. No need for string concatanation.
echo  "My name with double quote is $fullName </br>";

//Escaping with \
echo 'My name is \'Bob\'</br>';



//String functions

$helloString = 'Hello world';

//length of string - strlen()
echo strlen($helloString);
echo '</br>';

//word count - str_word_count()
echo str_word_count($helloString);
echo '</br>';

//string position - strpos()
echo strpos($helloString, 'World');
echo '</br>';

//Get specific character by index
echo $helloString[4];
echo '</br>';

//substring - substr()
echo substr($helloString, 6, 3); // Gives 3 characters starting from index of 6th character
echo '</br>';

//string replace - str_replace()
echo str_replace('World', 'Universe', $helloString);
echo '</br>';

//string lower - strtolower()
echo strtolower($helloString);
echo '</br>';

//string upper - strtoupper()
echo strtoupper($helloString);
echo '</br>';

//string upper for first character of each word - ucwords()
echo ucwords($helloString);
echo '</br>';

//string trim - trim()
echo trim('   Hello  ');
echo '</br>';
