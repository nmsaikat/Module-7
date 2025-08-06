<?php
$fruits = ["Apple", "Banana", "Mango", "Orange", "Pineapple", "Grapes", "Strawberry", "Watermelon", "Lemon", "Papaya"];
$numbers = [11,2,33,4,5,77,8,10];

if(in_array(33,$numbers)){
    echo "33 is found \n";
}

$offset = array_search(33,$numbers);
echo $offset;