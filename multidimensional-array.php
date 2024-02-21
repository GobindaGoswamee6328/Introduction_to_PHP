<!DOCTYPE html>
<html>
<body>

<?php

$a = array(array("volvo",22,18), array("bmw",20,16),array("ford",30,15));

echo $a[0][0].": In stock: ".$a[0][1].", sold: ".$a[0][2].".<br>";
echo $a[1][0].": In stock: ".$a[1][1].", sold: ".$a[0][2].".<br>";
echo $a[2][0].": In stock: ".$a[2][1].", sold: ".$a[2][2].".<br>";



?>
</body>
</html>