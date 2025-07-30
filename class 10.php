<?php

$fruits = array ('apple', 'banana', 'orange', 'plum', 'dates', 'mango');

$someFruits = array_slice($fruits, 2);
print_r($someFruits);

echo "\n";
echo "\n";

$emp = [
      [1,"Krishana","Manager",50000],
      [2,"Salman","Salesman",20000],
      [3,"Mohan","Computer Operator",12000],
      [4,"Amir","Driver",5000]
];

echo "<table border ='1px'>";
foreach($emp as list($id, $name, $designation, $salary)) {
    echo "<tr><td>$id $name $designation $salary</td></tr>";
}

echo "</table>";