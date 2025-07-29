<?php

$name = "NM Saikat";

if(isset($name)){
    echo "Name is set";
}else{
    echo "Not set";
}

echo "\n";

if(empty($name)){
    echo "Name is empty";
}else{
    echo "Not empty";
}