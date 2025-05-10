<?php

class car {
   
    public $name;
    public $model;
   

    
    public function __construct($name, $model) {
        $this->name = $name;
        $this->model = $model; 
       
    }

    
    public function displayInfo() {
        echo "Name: " . $this->name . "<br>";
        echo "model: " . $this->model . "<br>";
        
    }
}


$car1 = new car("XUV700", 2025);


$car1->displayInfo();
?>