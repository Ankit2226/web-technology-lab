<?php

class Person {
   
    public $name;

    public function __construct($name) {
        $this->name = $name;
   
    }

    public function displayInfo() {
        echo "Name: " . $this->name . "<br>";
     
    }
}

$person1 = new Person("Ankit");
$person2 = new Person("Jyotiraditya");
$person3 = new Person("vikrant");
$person4 = new Person("harsh");


$person1->displayInfo();
$person2->displayInfo();
$person3->displayInfo();
$person4->displayInfo();



?>