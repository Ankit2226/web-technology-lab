<?php

class Person {
  
    public $name;
    public $age;

  
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age; 
    }

  
    public function displayInfo() {
        echo "Name: " . $this->name . "<br>";
        echo "Age: " . $this->age . "<br>";
    }
}


$person1 = new Person("John Doe", 25);

$person1->displayInfo();
?>