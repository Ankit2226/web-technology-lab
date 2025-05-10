
<?php

$mysqli = mysqli_connect("localhost", "root", "", "stud");


if (mysqli_connect_errno()) {
    printf("Connection failed: %s\n", mysqli_connect_error());
    exit();
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = mysqli_real_escape_string($mysqli, $_POST['name']);
    $mob_no = (int)$_POST['mob_no'];
    $address = mysqli_real_escape_string($mysqli, $_POST['address']);
    $feedback = mysqli_real_escape_string($mysqli, $_POST['feedback']);

    
    $sql = "INSERT INTO feedback (name, mob_no, address, feedback) VALUES ('$name', $mob_no, '$address', '$feedback')";

   
    if (mysqli_query($mysqli, $sql)) {
        echo "Data submitted successfully!";
    } else {
        echo "Error: " . mysqli_error($mysqli);
    }
}
?>