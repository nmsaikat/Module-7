<?php

$numbers = [1,2,3,4,5,6,7,8,9,10,11,12,];

function square($n){
    printf("Square of %d is %d \n", $n, $n*$n);
}

function cube($n){
    return $n*$n*$n;
}

function even($n){
    return $n%2==0;
}

// $newArray = array_map('cube', $numbers);

$newArray = array_filter($numbers, "even"); // Callback Function

print_r ($newArray);