<?php

  session_start();
?>
<!DOCTYPE html>
<html>
    <body>

      <?php
 
      $_SESSION["fav color"] = "Blue";
      $_SESSION["fav pet"] = "Dog";
      $_SESSION["username"] = "Simanta";
      
      echo "Favourite Color is : ".$_SESSION["fav color"]."<br>";
      echo "Favourite Pet is : ".$_SESSION["fav pet"] ."<br>";  
      echo "Username is: ".$_SESSION["username"] ."<br>";


      ?>

    </body>
</html>