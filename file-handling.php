<!DOCTYPE html>
<html>
<body>


<?php

//File Read:

$file = fopen("webdictionary.txt","r");
echo fread($file, filesize("webdictionary.txt"));
fclose($file);

?>


<?php

//File Write:

$myfile = fopen("info.txt","w");
$txt = "My name is Gobinda \n";
fwrite($myfile, $txt);
$txt = "My age is 25\n";
fwrite($myfile, $txt);
fclose($myfile);

?>


<?php

//Append Text:

$myfile = fopen("info.txt","a");
$txt = "Hello World \n";
fwrite($myfile, $txt);
$txt="Welcome \n";
fwrite($myfile, $txt);
fclose($myfile);

?>

</body>
</html>