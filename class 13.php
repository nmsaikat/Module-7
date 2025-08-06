<?php

$fruits = ["Apple", "Banana", "Mango", "Orange", "Pineapple", "Grapes", "Strawberry", "Watermelon", "Lemon", "Papaya"];
$numbers = [11,2,33,4,5,77,8,10];
arsort($numbers);
print_r($numbers);
echo "\n";
foreach($numbers as $number){
    echo $number. "\n";
}