<!DOCTYPE HTML>
<html>  
<body>


<form action="<?php echo(htmlspecialchars($_SERVER["PHP_SELF"])); ?>" method="POST">
    <label>NAME :</label>
    <input type="text" name="name"><br><br>

    <label>E-Mail:</label>
    <input type="text" name="email"><br><br>

    <input type="submit">
</form>

<p>
    <?php 
     echo("Your Name : ".$_POST["name"]."<br>");
     echo("Your mail : ".$_POST["email"]."<br>");
    ?>
</p>


</body>
</html>