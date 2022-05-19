<?php

// Create array
$fruits = ['banana', 'apple', 'orange'];

// Print the whole array
echo '<pre>';
var_dump($fruits);
echo '</pre>';


// Get element by index
echo $fruits[0] . '<br>';
echo $fruits[1] . '<br>';
echo $fruits[2] . '<br>';

// Set element by index
$fruits[0] = 'Peach';
echo $fruits[0] . '<br>';
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Check if array has element at index 2
isset($fruits[2]);

// Append element
$fruits[] = 'Mango';
$fruits[] = 'Grapes';
var_dump($fruits);
echo '<br>';

// Print the length of the array
echo 'Number of fruits is ' . count($fruits) . '<br>';

// Add element at the end of the array
array_push($fruits, 'Choco', 22);
var_dump($fruits);
echo '<br>';

// Remove element from the end of the array
array_pop($fruits);
var_dump($fruits);
echo '<br>';

// Add element at the beginning of the array
array_unshift($fruits, 'Banana');
var_dump($fruits);
echo '<br>';

// Remove element from the beginning of the array
array_shift($fruits);
var_dump($fruits);
echo '<br>';

// Split the string into an array
$string = 'banana, apple, peach';
echo '<pre>';
var_dump(explode(',', $string));
echo '</pre>';

$cars = 'bmw, audi, volvo';

var_dump(explode(',', $cars));

$nums = '2,3,4,5,6';

var_dump(explode(',', $nums));
echo '<br>';

// Combine array elements into string

echo implode('&', $fruits);
echo '<br>';

// Check if element exist in the array

echo '<pre>';
    var_dump(in_array('apple', $fruits));
echo '</pre>';

// Search element index in the array
echo array_search('Mango', $fruits);

// Merge two arrays
$vegetables = ['potatoes', 'cucumber'];

var_dump(array_merge($fruits, $vegetables));
echo '<br>';
var_dump([...$fruits, ...$vegetables]);
echo '<br>';

// Sorting of array (Reverse order also)

sort($fruits);
var_dump($fruits);
echo '<br>';


// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array

$person = [
    'name' => 'Alex',
    'surname' => 'Gabriel',
    'age' => 22,
    'hobbies' => ['tennis', 'video games']
];

print_r($person);


// Get element by key
echo $person['name'] . '<br>';
echo $person['age'] . '<br>';
echo $person['hobbies'][1];

// Set element by key
$person['car'] = 'Porsche';
$person['pet'] = 'Dog';
$person['job'] = 'Web developer';

print_r($person);

// Null coalescing assignment operator. Since PHP 7.4
if(isset($person['car'])){
    echo 'Person car is ' . $person['car'];
}else{
    echo 'Not defined';
}

$person['adress'] ??= 'Unknown';

print_r($person);

// Print the keys of the array
print_r(array_keys($person));

// Print the values of the array

print_r(array_values($person));

// Sorting associative arrays by values, by keys
ksort($person);
print_r($person);

asort($person);
print_r($person);

// Two dimensional arrays

$todos = [
    ['title' => 'Todo title 1', 'completed' => true],
    ['title' => 'Todo title 2', 'completed' => false],
    ['shopping' => 'monday'],
    ['run' => 'thusday'],
];

print_r($todos);




// arrays
$programmingLanguages0 = ['PHP', 'Java', 'Python'];

echo count($programmingLanguages0);

$programmingLanguages0[] = 'Javascript';
$programmingLanguages0[] = 'React';
echo '<br>';

array_push($programmingLanguages0, 'Kothlin', 'Java');
array_unshift($programmingLanguages0, 'Laravel', 'PHP');

echo count($programmingLanguages0);

print_r($programmingLanguages0);

echo array_pop($programmingLanguages0);
echo array_shift($programmingLanguages0);


                    // associative arrays

$programmingLanguages = [
    'php' => 8.0,
    'python' => '3.9'
];

echo $programmingLanguages['php'];
echo $programmingLanguages['python'];

$programmingLanguages['go'] = '1.15';
$programmingLanguages['Javascript'] = 'ecmaScript, es6';
$programmingLanguages['Java'] = 'Version 5';
print_r($programmingLanguages);

$programmingLanguages2 = [
    'php' => [
        'creator' => 'Rasmus',
        'extension'=> '.php',
        'versions' =>[
            ['version1' => 8, 'realeaseDate' => 'nov'],
            ['version2' => 7.4, 'realeaseDate' => 'dec'],
        ],
    ],
];

print_r($programmingLanguages2);


echo $programmingLanguages2['php']['creator'];

echo $programmingLanguages2['php']['versions'][0]['realeaseDate'];
echo $programmingLanguages2['php']['versions'][1]['realeaseDate'];


?>


