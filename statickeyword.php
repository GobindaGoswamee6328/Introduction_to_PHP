<!DOCTYPE html>
<html>
<body>

<?php

function myTest()
{
     static $a=0;
     echo $a;
     $a++;

}
myTest();
echo"<br>";
myTest();
echo "<br>";
myTest();
echo "<br>";
myTest();

?>
</body>
</html>