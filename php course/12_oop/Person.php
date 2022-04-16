<?php

class Person3{
    private string $name;
    private int $age;
    public static int $counter = 0;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
        self::$counter++;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    public function setAge($age){
        $this->age = $age;
    }

    public function getAge(){
        return $this->age;
    }

    public static function getCounter(){
        return self::$counter;
    }
}

