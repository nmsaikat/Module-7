<?php

$fruits = ["apple", "banana", "cherry", "mango", "orange"];
array_splice($fruits, 2, 2);  // index 2 থেকে 2টা কাটবে

print_r($fruits);


$fruits = ["apple", "banana", "cherry", "mango", "orange"];
array_splice($fruits, 2, 2, ["lemon", "grape"]);

print_r($fruits);

$food = array ('orange', 'banana', 'apple');

// echo count($food);

// echo sizeof($food);
$len = count ($food);

for ($i = 0; $i < $len; $i++){
    echo $food[$i] . "\n";
}