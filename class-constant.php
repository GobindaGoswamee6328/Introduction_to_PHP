<!DOCTYPE html>
<html>
<body>

<?php

class fruits
{

    public function myclass()
    {
        return __CLASS__;

    } 
}

$a = new fruits();
echo $a->myclass();

?>
</body>
</html>