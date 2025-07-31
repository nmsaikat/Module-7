<?php

$fruits = ["Apple", "Banana", "Mango", "Orange", "Pineapple", "Grapes", "Strawberry", "Watermelon", "Lemon", "Papaya"];

$fruits_abc = [
    'a' => 'Apple',
    'b' => 'Banana',
    'c' => 'Cherry',
    'd' => 'Date',
    'e' => 'Elderberry'
];

$newFruits1 = array_slice($fruits, 0,3);
$newFruits2 = array_slice($fruits,3);

$newFruits = array_merge($newFruits1, $newFruits2);

print_r($newFruits1);
echo "-------------------\n";
print_r($newFruits2);
echo "-------------------\n";
print_r ($newFruits);