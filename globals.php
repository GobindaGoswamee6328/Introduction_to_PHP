<!DOCTYPE html>
<html>
    <body>

<?php

$a = 100;
$b = 74;


echo $GLOBALS["a"];
echo "<br>";
echo $a;
echo "<br>";

/*
function myfunction() 
{
    global $b;
    echo $b;
}
myfunction() 
*/


function myfunction2()
{
    $GLOBALS ["c"] = 200;

}
myfunction2();
echo $GLOBALS["c"];

?>
    </body>
</html>