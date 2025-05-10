<?php
echo "<h2>ARRAYS</h2>";

echo "<h3>INDEXED ARRAY</h3>";
$fruits = ["Apple", "Banana", "Cherry"];
echo "Indexed Array:<br>";
foreach ($fruits as $index => $fruit) {
    echo "Index $index: $fruit<br>";
}

echo "<br>";
echo "<hr>";

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

echo "<h3>Multidimensional Array</h3>";

$students = [
    ["name" => "Alice", "age" => 20, "grade" => "A"],
    ["name" => "Bob", "age" => 22, "grade" => "B"],
    ["name" => "Charlie", "age" => 21, "grade" => "A"]
];
echo "Multidimensional Array:<br>";
foreach ($students as $student) {
    echo "Name: " . $student["name"] . ", Age: " . $student["age"] . ", Grade: " . $student["grade"] . "<br>";
}

echo "<br>";
echo "<hr>";

?>