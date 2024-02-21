<!DOCTYPE html>
<html>
<body>

<?php
    $favfruit = "mango";

    switch ($favfruit) 
    {
    case "jackfruit":
        echo "My favourite fruit is jackfruit!";
        break;
    
    case "mango":
        echo "My favourite fruit is mango!";
        break;

    case "banana":
        echo "My favourite fruit is banana!";
        break;
    
    default:
        echo "My favourite fruit is neither jackfruit,mango nor banana!";
    }


?>
</body>
</html>