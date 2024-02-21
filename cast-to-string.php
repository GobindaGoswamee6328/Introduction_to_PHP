<!DOCTYPE html>
<html>
<body>

<?php
$a = 5;
$b = 3.14; 
$c = "Hello";
$d = true;
$e = Null;

$a = (string) $a;
$b = (string) $b;
$c = (string) $c;
$d = (string) $d;
$e = (string) $e;

echo var_dump($a, "<br>",$b,"<br>", $c,"<br>", $d,"<br>", $e);

?>
</body>
</html>