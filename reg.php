<!DOCTYPE html>
<html>
<body>

<?php

$a = "Hello World";
$b = "/hello/i";
echo preg_match($b,$a);
Echo "<br>";


$c = "The rain in SPAIN falls mainly on the plains";
$d = "/ain/i";
echo preg_match_all($d,$c);

?>
</body>
</html>