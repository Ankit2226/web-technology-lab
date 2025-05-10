<?php
session_start();

print_r($_SESSION);
echo "variables are";

echo "first name " . $_SESSION['a'];
echo "last name " . $_SESSION['b'];

?>
