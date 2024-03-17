<?php

function inspect($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}

//key can be a string or a number
//value can be anything

$user = [
    'name' => 'John',
    'email' => 'john@gmail.com',
    'password' => '123456',
    'hobbies' => ['Tennis', 'Cricket']
];

inspect($user);


echo 'Name of the user is ' . $user['name'];
echo '</br>';

// echo 'Age of the user is ' . $user['age']; //We get the error 'Undefined array key "age"'

echo 'A hobby of the user is ' . $user['hobbies'][0];
echo '</br></br>';

echo 'Setting the address</br>';
$user['address'] = '123 Main St';
inspect($user);

echo 'Removing the address</br>';
unset($user['address']);
inspect($user);
