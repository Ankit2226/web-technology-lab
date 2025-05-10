<?php

$name = "Ankit";
$age = 20;
$marks = 90.92;
function sayHello($age = 20){
    global $name;
   
    echo "Hello, $name !";
    echo "Hello my age is , $age !";
}
 sayHello(22);

echo "<br>";
echo "<hr>";


?>