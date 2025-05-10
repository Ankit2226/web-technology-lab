<!DOCTYPE html>
<html>
<head>
    <title>PHP Form Example</title>
</head>
<body>
    
    <form method="post" action="">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <input type="submit" value="Submit">
    </form>

    <?php
    // PHP Code to Process Form Data
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['name']); // Sanitize input
        $email = htmlspecialchars($_POST['email']); // Sanitize input

        echo "<h3>Form Data Submitted:</h3>";
        echo "Name: $name<br>";
        echo "Email: $email<br>";
    }
    ?>
</body>
</html>