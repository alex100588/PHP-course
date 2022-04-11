<?php

// Create simple string
$name = 'Alexandru';
$string = 'Hello Alex';
$string2 = "Hello Oana";
$string3 = "Hello $name";

echo $string . '<br>' . $string2 . '<br>';
echo $string3;
echo '<br>';

// String concatenation
echo 'hello '. 'world ' . 'with PHP';
echo '<br>';
echo 'hello '. 'world ' . "with $name";
echo '<br>';

// String functions
$string = "      Hello World         ";
echo $string;

echo strlen($string) . '<br>';
echo 'hello';
echo trim($string) . '<br>';
echo ltrim($string) . '<br>';
echo rtrim($string) . '<br>';
echo str_word_count($string) . '<br>';
echo strrev($string) . '<br>';
echo strtoupper($string) . '<br>';
echo strtolower($string) . '<br>';
echo ucfirst('hello') . '<br>';
echo lcfirst('HELLO') . '<br>';
echo ucwords('hello all') . '<br>';
echo substr($string, 8) . '<br>';
echo str_replace('World', 'hy', $string) . '<br>';
echo str_ireplace('world', 'hy', $string) . '<br>';
echo str_repeat('hi ',3) . '<br>';

// Multiline text and line breaks
$longText = "
    Hello, my name is Alex
    I am 25 years old
    I love my daughter
";
echo $longText . '<br>';
echo nl2br($longText). '<br>';

// Multiline text and reserve html tags
$longText = "
  Hello, my name is <b>Zura</b>
  I am <b>27</b>,
  I love my daughter
";

echo $longText . '<br>';
echo nl2br($longText). '<br>';
echo htmlentities($longText). '<br>';
echo nl2br(htmlentities($longText)). '<br>';

// https://www.php.net/manual/en/ref.strings.php
