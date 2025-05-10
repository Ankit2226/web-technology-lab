<?php

$name = "Ankit";
$age = 20;
$marks = 90.92;
function sayHello(){
    global $name;
    echo "Hello, $name !";

}
 sayHello();
echo "<br>";
echo "<hr>";


?>