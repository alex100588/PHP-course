<?php

// What is class and instance
// class Person{
//     public $name;
//     public $surname;
//     public $age;

    
// }

// $person = new Person();
// $person->name = 'Alex';
// $person->age =22;
// $person->surname = 'Gabriel';

// echo '<pre>';
// var_dump($person);
// echo '<pre>';

// echo $person->name . '<br>';
// echo $person->age . '<br>';
// echo $person->surname . '<br>';
// //Another class

// class Pet{
//     public $cat;
//     public $dog;
//     public $fish;

//     public function __construct($cat, $dog, $fish)
//     {
//         $this->cat = $cat;
//         $this->dog = $dog;
//         $this->fish = $fish;
//     }

// }

// $myPet = new Pet('British', 'Spaniel', 22);

// echo '<pre>';
// var_dump($myPet);
// echo '</pre>';


// class Person2{
//     private $name;
//     public $surname;
//     private $age;

//     public function __construct($name, $surname, $age)
//     {
//         $this->name = $name;
//         $this->age = $age;
//         $this->surname = $surname;
//     }

//     public function setName($name){
//         $this->name = $name;
//     }

//     public function getName(){
//         return $this->name;
//     }

//     public function setAge($age){
//         $this->age = $age;
//     }

//     public function getAge(){
//         return $this->age;
//     }
    
// }
// $alex = new Person2('Alex', 'Gabriel', 23);
// $alex->setAge(44);

// echo '<pre>';
// var_dump($alex);
// echo '</pre>';
// echo $alex->getAge();

// $p = new Person2('','','');
// $p->setAge(22);
// $p->setName('Anca');

// echo '<pre>';
// var_dump($p);
// echo '</pre>';

// echo $p->getAge() . '<br>';
// echo $p->getName() . '<br>';

////////////////////////
//Get the class from separate file
use function PHPSTORM_META\type;

require_once 'Person.php';
require_once 'Student.php';

// $adriana = new Person3('', 0);
// $alexa = new Person3('', 0);
// $oana = new Person3('', 0);

// $adriana->setName('Adriana');
// $adriana->setAge(30);

// print_r($adriana);
// echo $adriana->getName();
// echo $adriana->getAge();

// echo Person3::$counter;

$andrei = new Student(10, 'Andrei', 22);

print_r($andrei);
echo gettype($andrei->grades);
