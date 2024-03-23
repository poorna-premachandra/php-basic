<?php

//basic for loop
echo 'basic for loop';
echo '</br>';
for ($i = 0; $i < 10; $i++) {
    echo $i . '<br />';
}
?>

<!-- for loop example in a web page -->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>PHP loops</title>
</head>

<body>
    <div>
        <ul>
            <!-- We can write the for loop as below making the code much cleaner -->
            <?php for ($i = 0; $i < 10; $i++) : ?> <!-- starting the loop -->
                <li>Number: <?= $i ?></li>
            <?php endfor; ?> <!-- endiing the loop -->
        </ul>
    </div>
</body>

</html>


<?php

//basic while loop
echo 'basic while loop';
echo '</br>';
$i = 0;
while ($i < 10) {
    echo $i . '</br>';
    $i++;
}


//basic do-while loop
echo 'basic do-while loop';
echo '</br>';
$i = 0;
do {
    echo $i . '</br>';
    $i++;
} while ($i < 10);


//nested for loop
echo 'nested for loop';
echo '</br>';
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 5; $j++) {
        echo $i . '-' . $j . '</br>';
    }
}


//nested while loop
echo 'nested while loop';
echo '</br>';
$i = 0;
while ($i < 5) {
    $j = 0;
    while ($j < 5) {
        echo $i . '-' . $j . '</br>';
        $j++;
    }
    $i++;
}

$names = ['John Doe', 'Mathew Thomas', 'Jose Ramirez', 'Mary Jane'];

$users = [
    ['name' => 'John', 'email' => 'john@gmail.com', 'password' => '123456'],
    ['name' => 'David', 'email' => 'david@gmail.com', 'password' => '123456'],
    ['name' => 'Mary', 'email' => 'mary@gmail.com', 'password' => '123456']
];

//looping through an array using for loop
echo 'looping through an array using for loop';
echo '</br>';

for ($i = 0; $i < count($names); $i++) {
    echo $names[$i] . '</br>';
}

echo '</br>';

//looping through an array using for-each loop
echo 'looping through an array using for-each loop';
echo '</br>';

foreach ($names as $name) {
    echo $name . '</br>';
}

echo '</br>';

//looping through an array using for-each loop returning both index and value
echo 'looping through an array using for-each loop';
echo '</br>';

foreach ($names as $index => $name) { //Here, we are able to extract indexes and values together
    echo $index . ':', $name . '</br>';
}

echo '</br>';

//looping through an array using for-each loop with associative arrays
echo 'looping through an array using for-each loop with associative arrays';
echo '</br>';

foreach ($users as $user) {
    echo $user['name'] . ' : ', $user['email'] . '</br>';
}

echo '</br>';

//getting key names and values from associative arrays
echo 'getting key names and values from associative arrays';
echo '</br>';

foreach ($users as $user) {
    foreach ($user as $key => $value) {
        echo $key . ' : ', $value . '</br>';
    }
}

?>