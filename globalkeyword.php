<!DOCTYPE html>
<html>
<body>

<?php
$x = 5;
$y = 10;
$z = 5;

function myTest() 
{
    global $x,$y,$z;

    $z = $x + $y + $z;

}
myTest();
echo $z;

?>
</body>
</html>