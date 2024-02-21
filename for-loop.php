<!DOCTYPE html>
<html>
<body>

<?php
 $a = 1;

 for ($a = 0; $a < 100; $a+=10) 
 {
    if ($a == 30) continue;
    {
        echo " The number is : $a <br>";
    }
 }

?>
</body>
</html>