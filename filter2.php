<!DOCTYPE html>
<html>
<body>

<?php

$b = "abc@gmail.com";

if(!filter_var($b,FILTER_VALIDATE_EMAIL)=== false)
{
    echo "This email is valid!";
}
else
{
    echo "This email is invalid!";
}


?>
</body>
</html>



