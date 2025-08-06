<?php

$numbers1 = [1,4,3,66,54,7,23,1,2];
$numbers2 = [88,3,21,44,3,28,1,2,7,];

$fruits1 = ["a"=>"apple", "b"=>"banana", "c"=>"lemon"];
$fruits2 = ["d"=>"pineapple", "b"=>"malta", "f"=>"grapes", "e"=>"lemon"];

$common = array_intersect($numbers1, $numbers2);
$commonf = array_intersect($fruits1, $fruits2);
print_r($common);
echo "\n";
print_r($commonf);