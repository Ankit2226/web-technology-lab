<?php

$globalVar = 10;

function useGlobalVar() {
    global $globalVar; 
    $globalVar += 5;
    echo "Global Variable Value: $globalVar<br>";
}

useGlobalVar(); 

?>