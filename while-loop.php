<!DOCTYPE html>
<html>
<body>

<?php

 $a = 5;
 $b = 1;
 $c = 10;

 while( $a < 10) 
 {
    echo $a;
    $a++;
    
 }

 echo "<br>";
 while( $b < 10)
 {
    if ( $b == 5) break;
    echo $b;
    $b++;
 }

 echo "<br>";
 while( $c < 100)
 {
    $c+= 10;
    echo "$c <br>";
    
 }

?>
</body>
</html>