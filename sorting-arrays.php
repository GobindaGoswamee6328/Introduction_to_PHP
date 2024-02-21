<!DOCTYPE html>
<html>
<body>

<?php

$a = array(3,4,7,8,9,6);
sort($a);

$b = count($a);
for ($i = 0; $i < $b; $i++)
{
    echo $a[$i];
    echo "<br>";
}

echo "<br>";

//Rsort=> Big value to small value

$b = array(3,4,7,8,9,6);
rsort($b);

$c= count($b);
for ($j = 0; $j < $c; $j++)
{
    echo $b[$j];
    echo "<br>";
}


?>
</body>
</html>