<!DOCTYPE html>
<html>
<body>

<?php

$a = "<h1>Hello WorldÆØÅ!</h1>";

$newstr=filter_var( $a, FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
echo $newstr;




?>
</body>
</html>



