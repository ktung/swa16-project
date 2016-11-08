<?php 
$myfile = fopen("./config.txt", "w") or die("Unable to open file!");
$txt = "activated";
fwrite($myfile, $txt);
fclose($myfile);

header('Location: ../install.php'); 
?>
