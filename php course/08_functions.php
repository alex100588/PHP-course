<?php

// Function which prints "Hello I am Zura"
function hello(){
    echo "Hello I am Zura" . '<br>';
}
hello();
hello();

// Function with argument

function hy($name){
    echo "My name is $name" . '<br>';
}

echo hy('Alex');
echo hy('Dori');
echo hy('Paula');


// Create sum of two functions

function sum($a,$b){
    return $a + $b . '<br>';
}
echo sum(2,5);
echo sum(22, 45);
echo sum(28, 56);

// Create function to sum all numbers using ...$nums
// function totals(...$values){
//     $totals = 0;
//     foreach($values as $n){
//         $totals += $n;
//     }
//     return $totals . '<br>';
// }

// echo totals(2,45,6,7,57);
// echo totals(2,45,6,7,57,33,445,65);
// Arrow functions

function totals(...$nums){
    return array_reduce($nums, fn($acc, $val)=>$acc + $val) .'<br>';
}

echo totals(2,3,4);
echo totals(2,45,6,7,57);
echo totals(2,45,6,7,57,33,445,65);
