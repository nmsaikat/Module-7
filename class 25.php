<?php
$string = "Hello World";

$length = strlen($string)-1;
for($i= $length; $i>=0; $i--){
    echo $string[$i];
}

echo PHP_EOL;
