<?php
echo "<h3>Multidimensional Array</h3>";

$students = [
    ["name" => "Ankit", "age" => 20, "grade" => "A"],
    ["name" => "vikrant", "age" => 22, "grade" => "B"],
    ["name" => "harsh", "age" => 21, "grade" => "A"]
];
echo "Multidimensional Array:<br>";
foreach ($students as $student) {
    echo "Name: " . $student["name"] . ", Age: " . $student["age"] . ", Grade: " . $student["grade"] . "<br>";
}

echo "<br>";
echo "<hr>";

?>