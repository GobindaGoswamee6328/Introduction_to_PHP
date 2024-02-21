<!DOCTYPE html>
<html>
<body>

<?php

$a = array("BMW","Volvo","Toyota");
var_dump($a);



echo "<br>";
echo $a[0];
echo "<br>";
echo $a[1];
echo "<br>";
echo $a[2];
echo "<br>";

//change value

$a[2] = "Ford";
var_dump($a);
echo "<br>";


foreach($a as $x)
{
    echo "$x <br>";
}

//Push
echo "<br>";
array_push($a, "toyota");
var_dump($a);

//Remove
echo "<br>";
unset($a[0],$a[2]);
var_dump($a);
?>
</body>
</html>