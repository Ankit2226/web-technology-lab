<?php
echo "<h3>ASSOCIATIVE ARRAY</h3>";

$person = [
    "name" => "John",
    "age" => 30,
    "city" => "New York"
];
echo "Associative Array:<br>";
foreach ($person as $key => $value) {
    echo "$key: $value<br>";
}

echo "<br>";
echo "<hr>";


?>