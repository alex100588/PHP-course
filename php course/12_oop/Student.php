<?php
require_once 'Person.php';

class Student extends Person3{
    public int $grades;

    public function __construct($grades, $name, $age)
    {
        $this->grades = $grades;
        $this->name = $name;
        $this->age = $age;
    }
}

