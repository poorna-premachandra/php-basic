<?php

//An arrays can have elements of multiple data types
//Arrays have dynamic sizing (Does not have to set an initial size when initializing)

//There are 2 methods to define an array

//1.
$names = array('John', 'Jack', 'Jill');

//2.
$numbers = [1, 2, 3, 4, 5];

//Accessing array values
echo $names[0];
echo '</br>';

//Printout all elements for debugging purpose
// var_dump($names);

inspect($names);

// inspect($numbers);

function inspect($value)
{
    echo '<pre>'; //Format the output nicely
    var_dump($value);
    echo '</pre>';
    // die();  //Will not show anything(any output) after this function 
}


//print_r($names); // Also printsout all the elements in the array

//echo $names; This gives an 'array to string conversion' error.


//Appending an element to an array
$numbers[] = 100; //Since we don't know how many elements in the array we can just use $numbers[]
inspect($numbers);

//Updating an element of an array
$numbers[0] = 200;
inspect($numbers);

//Deleting an element of an array
unset($numbers[0]); //Array index will be deleted too. 
inspect($numbers);

//To re-index, we can use 'array_values' function
$numbers = array_values($numbers);
inspect($numbers);


//Array functions
$id = [20, 10, 50, 40, 30];

//1.counting array elemets
echo 'count is '  . count($id);
echo '</br></br>';

//2.sort - manipulate the existing array. can sort string arrays as well.
echo 'array is sorted';
sort($id);
inspect($id);
echo '</br>';

//3.reverse sort
echo 'array is reverse sorted';
rsort($id);
inspect($id);
echo '</br>';

//4.Appending to an array
echo '80 is appended</br>';
array_push($id, 80);
inspect($id);
echo '</br>';

//5.Remove an element from the end of an array
echo 'last element of the array(80) is removed</br>';
array_pop($id);
inspect($id);
echo '</br>';

//6.Shifting to Left(This will also removes the first element of the array)
echo 'array elements are shifted to left</br>';
array_shift($id);
inspect($id);
echo '</br>';

//7.Prepending to an array
echo 'prepending 53 to the array by unshifting</br>';
array_unshift($id, 53);
inspect($id);
echo '</br>';

//8.Array slicing
echo 'slicing the array from 2nd index</br>';
$id2 = array_slice($id, 2, 3);
inspect($id2);
echo '</br>';

//9.Replace a sub-array in the original array 
echo 'slice the array from 1st index and replace next two elements</br>';
array_splice($id, 1, 2, [149, 150]);
inspect($id);
echo '</br>';

//10.Array sum
echo 'Sum of ids: ' . array_sum($id);
echo '</br></br>';

//11.Searching for an element in an array
echo '149 is at index ' . array_search(149, $id);
echo '</br></br>';

//12.Checking whether an element exists in an array
echo '149 exists ' . in_array(149, $id); //Outputs '1'. This is actually a boolean.
echo '</br>';
echo '171 exists ' . in_array(171, $id); //Outputs nothing
echo '</br></br>';

//13.Convert string into an array
$tags = "tech,code,programming";
echo 'convert "' . $tags . '" string into an array</br>';
$tagsArr = explode(',', $tags);
inspect($tagsArr);
echo '</br>';

//14.Convert array to a string
echo 'convert array to a string</br>';
$tagsArrString  = implode(', ', $id);
inspect($tagsArrString);
echo '</br>';
