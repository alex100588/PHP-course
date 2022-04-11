<?php

// Declaring numbers
$a = 2;
$b = 3;
$c = 1.2;

// Arithmetic operations
echo $a + $b . '<br>';
echo $a + $b * $c . '<br>';
echo $a - $c . '<br>';
echo $a % $b . '<br>';

// Assignment with math operators

// $a += $b; echo $a.'<br>'; // $a = 9
// $a -= $b; echo $a.'<br>'; // $a = 1
// $a *= $b; echo $a.'<br>'; // $a = 20
// $a /= $b; echo $a.'<br>'; // $a = 1.25
// $a %= $b; echo $a.'<br>'; // $a = 1

// Increment operator
$a++;
echo $a.'<br>';
++$a;
echo $a;
echo '<br>';

// Decrement operator
echo $a-- . '<br>';
echo --$a . '<br>';

// Number checking functions
echo is_float(1.22);
echo is_double(2.22);

// Conversion
$strNumber = '12.44';
var_dump($strNumber);

$number = (int)$strNumber;
var_dump($number);

$integ = (int)$strNumber;
var_dump($integ);

$num = 22;
$strConvert = (string)$num;
var_dump($strConvert);
echo '<br>';

// Number functions
echo abs(-15) . '<br>';
echo pow(2,3) . '<br>';
echo sqrt(16) . '<br>';
echo max(2,4,5,8,7) . '<br>';
echo min(2,4, 1, 22) . '<br>';
echo round(2.49) . '<br>';
echo round(2.55) . '<br>';
echo floor(2.6) . '<br>';
echo ceil(2.4) . '<br>';

// Formatting numbers
$number2 = 324234.432432;
echo number_format($number2, 3); //2 is the number of digits after the decimal separator
echo '<br>';
echo number_format($number2, 1); 

// https://www.php.net/manual/en/ref.math.php
