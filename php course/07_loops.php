<?php

$counter = 0;
$counter2 = 10;

// while($counter < 10){
//     echo $counter . '<br>';
//     if($counter === 5){
//         echo $counter;
//         break;
//     }
//     $counter++;
// }

// echo '<br>';
// echo '<br>';

// while($counter2 < 10){
//     echo $counter2 . '<br>';
//     $counter2--;
// }

// do - while

// do {
//     echo $counter . '<br>';
//     $counter++;
// } while($counter <= 10);

// for

// for($i = 0; $i<$counter; $i++){
//     echo $i . '<br>';
// }

// foreach
// $fruits = ['banana', 'apple', 'orange'];
// $pets = ['dog', 'cat', 'mouse'];
// $cars = ['volvo', 'mercedes', 'audi'];

// foreach($fruits as $a){
//     echo $a . '<br>';
// }

// echo '<br>' .'<br>';

// foreach($fruits as $idx=> $a){
//     echo $idx. ' '  . $a . '<br>';
// }

// echo '<br>' .'<br>';

// foreach($pets as $pet){
//     echo $pet . '<br>';
// }

// foreach($pets as $idx => $pet){
//     echo $idx . ' ' . $pet . '<br>';
// }

// foreach($cars as $i => $car){
//     echo $i . ' ' . $car . '<br>';
// }

// Iterate Over associative array.

$person = [
    'name'=> 'Alex',
    'job' => 'developer',
    'hobbies' => ['driving', 'footbal', 'tennis']
];

foreach($person as $key => $value){
    echo $key . '<br>';
    if(is_array($value)){
        echo $key .' are ' . implode(', ' , $value). '<br>';
    }else{
        echo $key. ' is ' . $value . '<br>';
    }
}
