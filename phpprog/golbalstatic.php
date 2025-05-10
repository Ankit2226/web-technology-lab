<?php

$globalVar = 10;

function useGlobalVar() {
    global $globalVar; 
    $globalVar += 5;
    echo "Global Variable Value: $globalVar<br>";
}

useGlobalVar(); 

function useStaticVar() {
    static $staticVar = 0; 
    $staticVar++;
    echo "Static Variable Value: $staticVar<br>";
}

useStaticVar(); 
useStaticVar(); 
useStaticVar(); 
?>