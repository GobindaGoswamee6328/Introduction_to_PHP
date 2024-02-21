<!DOCTYPE html>
<html>
<body>

<?php

function callback($a)
{
    return strlen("$a");
}


$b = ["ss","ab","cc","dd"];
$c = array_map("callback",$b);
print_r($c);

?>
</body>
</html>



