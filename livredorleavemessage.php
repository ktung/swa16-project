<?php
 $message= $_GET["message"]." <i>".$_GET["client"]."</i><br/><br/>" ;
 $file="messages.txt"; 
 file_put_contents($file,$message,FILE_APPEND);
 //$messages=file_get_contents($file);
 //echo  $messages;
 ?>
