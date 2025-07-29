<?php

$person = array (
    'fname' => 'Hello',
    'lname' => 'World'
);

$newperson = $person;
$newperson['lname'] = 'Pluto';
print_r($person);
print_r($newperson);

// copy by value
// deep copy

function printData($person){
    $person['fname'] .= 'Changed';
    print_r($person);
}

printData($person);
print_r($person);