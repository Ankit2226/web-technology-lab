<?php

class Person {
   
    public $name;
    public $age;
    public $gender;

    
    public function __construct($name, $age,$gender) {
        $this->name = $name;
        $this->age = $age; 
        $this->gender=$gender;
    }

    
    public function displayInfo() {
        echo "Name: " . $this->name . "<br>";
        echo "Age: " . $this->age . "<br>";
        echo "Gender: " . $this->gender . "<br>";
    }
}


$person1 = new Person("Ankit", 25, "male");


$person1->displayInfo();
?>