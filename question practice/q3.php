<?php
    // Create an array
    $fruits = array("apple", "banana", "orange", "grape", "mango");

    // Traverse the array using a for loop
    for ($i = 0; $i < count($fruits); $i++) {
        echo $fruits[$i]. "\n";
    }

    // Traverse the array using a foreach loop
    foreach ($fruits as $fruit) {
        echo $fruit. "\n";
    }
?>