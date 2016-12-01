<?php
$file="messages.txt";
if($_GET["message"]=="delete" && $_GET["client"]=="delete")
{
 fopen($file,'w');

}else{
 $message= $_GET["message"]." <i>".$_GET["client"]."</i><br/><br/>" ;
 setcookie('client', $_GET["client"]);

 file_put_contents($file,$message,FILE_APPEND| LOCK_EX);

}
