<!DOCTYPE html>
<html>
<body>

<?php

echo strlen("Hello World");//Length count
echo "<br>";

echo str_word_count ("Hello World!");//Word count
echo "<br>";

echo strpos ("Hello world!","world");//Search word
echo "<br>";

echo strtoupper ("Hello World!");//upper case
echo "<br>";

echo strtolower ("Hello World!");//Lower case
echo "<br>";

$x = 'He is Beautiful!';
echo str_replace ("He","She",$x);//Replace string
echo "<br>";

echo strrev($x);//Reverse string 
echo "<br>";

?>
</body>
</html>