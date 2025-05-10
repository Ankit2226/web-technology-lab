<?php

session_start();

$_SESSION ['a'] = "Ankit";
$_SESSION ['b'] = "Bhosale";

$_SESSION['full_name'] = $_SESSION['a'] . " " . $_SESSION['b'];     

echo "variable saved";
?>