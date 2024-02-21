<!DOCTYPE html>
<html>
<body>

<?php

$a = array("red","green","blue");
$b = array("ss"=>5,"aa"=>7,"cc"=>9);

foreach( $a as $k ) 
{
      echo "$k <br>";
}

echo "<br>";
foreach($b as $x =>$y)
{
    echo "$x : $y";
    echo "<br>";
}
?>
</body>
</html>