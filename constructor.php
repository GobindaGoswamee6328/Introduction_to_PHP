<!DOCTYPE html>
<html>
<body>

<?php

class student
{
    public $name;
    public $id;

    function __construct($name, $id)
    {
        $this->name = $name;
        $this->id = $id;
    }

    function get_name()
    {
        return $this->name;
    }

    function get_id()
    {
        return $this->id;
    }

}


$a = new student("Gobinda","21-44984-2");

echo $a->get_name();
echo "<br>";
echo $a->get_id();


?>
</body>
</html>