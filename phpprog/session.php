<?php

session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php

$_SESSION["favcolor"] = "white";
$_SESSION["favanimal"] = "python";
echo "Session variables are set.";
?>

</body>
</html>