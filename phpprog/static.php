<?php

function useStaticVar() {
    static $staticVar = 0; 
    $staticVar++;
    echo "Static Variable Value: $staticVar<br>";
}

useStaticVar(); 

?>