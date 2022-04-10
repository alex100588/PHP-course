<?php

// What is a variable

// Variable types
$name = 'Alex';
$age = 22;



// Declare variables
$isMale = true;
$height = 1.72;
$salary = null;

// Print the variables. Explain what is concatenation
echo $name . '<br>';
echo $age .'<br>';
echo $isMale .'<br>';
echo $height . '<br>';
echo $salary . '<br>';
echo 'My name is ' . $name . ' and I have' .$age . ' yearls old .';
echo "$name is $age years old";
echo '<br>';

// Print types of the variables
echo gettype($name) . '<br>';
echo gettype($age). '<br>';
echo gettype($height). '<br>';
echo gettype($salary). '<br>';

// Print the whole variable
var_dump($height, $age, $isMale, $salary, $height);
echo '<br>';

// Change the value of the variable
$name = false;

// Print type of the variable
echo var_dump($name);

// Variable checking functions
is_string($name);
is_int($age);
is_double($salary);
is_bool($height);

// Check if variable is defined
isset($name);
isset($adress);

// Constants
echo SORT_ASC . '<br>';
echo PHP_INT_MAX . '<br>';
