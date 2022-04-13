<?php

$age = 20;
$salary = 300000;

// Sample if
if($age === 20){
    echo 1 . '<br>';
}

// Without circle braces
if($age === 20) echo 1 . '<br>';

// Sample if-else
if($age > 20){
    echo 1 . '<br>';
}else{
    echo 2 . '<br>';
}

// Difference between == and ===
if($age == 20){
    echo 1 . '<br>';
}

if($age === '20'){
    echo 2 . '<br>';
}else{
    echo 'Different tipes' . '<br>';
}

// if AND
if($age >= 20 && $salary === 300000){
    echo 'true' . '<br>';
}else{
    echo 'false' . '<br>';
}

// if OR
if($age > 20 || $salary === 300000){
    echo 'true' . '<br>';
}else{
    echo 'false' . '<br>';
}

// Ternary if
echo $age > 20 ? 'Young' :  'old' . '<br>';
echo $salary > 2000 ? 'Big salary' : 'Poor salary' . '<br>';

// Null coalescing operator

$myName = $name ?? 'Alex';
echo $myName . '<br>';

$myAge = $age ?? 22;
echo $myAge . '<br>';

$myPet = $pet ?? 'Dog';
echo $myPet . '<br>';

// switch

$userRole = 'admin';

switch($userRole){
    case 'admin':
        echo 'Admin';
        break;
    case 'user':
        echo 'user';
        break;
    case 'editor':
        echo 'Editor';
        break;
    default: 
        echo 'Not assigned';
}


