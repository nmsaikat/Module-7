<?php
$student = array (
    'fname' => 'NM',
    'lname' => 'Saikat',
    'age' => '24',
    'Class' => '12',
    'section' => 'A',
);

print_r($student);

echo $student['fname']. " ". $student['lname']. "\n";

printf("%s %s \n", $student['fname'], $student['lname']);