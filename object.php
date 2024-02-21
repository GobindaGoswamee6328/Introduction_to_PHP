<!DOCTYPE html>
<html>
<body>

<?php
    class fruit
    {
              public $name;
              public $color;


              function set_name($name)
              {
                $this->name = $name;
              }

              function get_name()
              {
                return $this->name;
              }


              function set_color($color)
              {
                $this->color= $color;
              }

              function get_color()
              {
                return $this->color;
              }

            }

              $a = new fruit(); 
              $a->set_name('Apple');
              $a->set_color('Red');

              echo "Name : ". $a->get_name();
              echo "<br>";
              echo "Color : ". $a->get_color();

?>
</body>
</html>



