<?php

$string = "Quick brown jumps over the lazy dog";

$offset = strpos($string, "Quick");

if($offset){
    echo "\nWord was found\n";
}else{
    echo "\nWord was not found\n";
}

