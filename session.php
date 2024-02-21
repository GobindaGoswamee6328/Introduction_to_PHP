<?php

  session_start();
?>

<!DOCTYPE html>
<html>
<body>

<?php

$_SESSION["fav color"] = "Blue";
$_SESSION["fav pet"] = "Dog";
$_SESSION["username"] = "Simanta";
echo "Hello World!!";
?>
</body>
</html>



