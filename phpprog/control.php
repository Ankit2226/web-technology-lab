<?php
echo "<h2>PHP CONTROL STATEMENSTS</h2>";

echo "<h3>if-elif-else</h3>";
$number = 10;

if ($number > 0) {
    echo "The number is positive.";
} elseif ($number < 0) {
    echo "The number is negative.";
} else {
    echo "The number is zero.";
}

echo "<br>";
echo "<hr>";

echo "<h3>switch-case</h3>";
$day = "Monday";

switch ($day) {
    case "Monday":
        echo "Start of the work week!";
        break;
    case "Friday":
        echo "Almost the weekend!";
        break;
    default:
        echo "It's just another day.";
}

echo "<br>";
echo "<hr>";


echo "<h3>for loop</h3>";

for ($i = 1; $i <= 5; $i++) {
    echo "This is iteration $i of the for loop.<br>";
}

echo "<br>";
echo "<hr>";

echo "<h3>while loop</h3>";

$count = 1;
while ($count <= 3) {
    echo "This is iteration $count of the while loop.<br>";
    $count++;
}

echo "<br>";
echo "<hr>";

echo "<h3>do-while loop</h3>";

$count = 1;
do {
    echo "This is iteration $count of the do-while loop.<br>";
    $count++;
} while ($count <= 3);

echo "<br>";
echo "<hr>";

echo "<h3>foreach loop</h3>";
$colors = ["Red", "Green", "Blue"];
foreach ($colors as $color) {
    echo "Color: $color<br>";
}

echo "<br>";
echo "<hr>";

echo "<h3>Nested loops</h3>";

for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= 2; $j++) {
        echo "Nested loop iteration: i=$i, j=$j<br>";
    }
}
echo "<br>";
echo "<hr>";

?>