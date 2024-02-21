<!DOCTYPE html>
<html>
<body>

<?php

$a = 100;  

if(!filter_var($a,FILTER_VALIDATE_INT)=== false)
{
    echo "String is valid";
}
else
{
    echo "String is not valid";
}

?>
</body>
</html>



