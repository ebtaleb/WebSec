<?php
 $message= $_GET["message"]."<br>" ;
 $file="messages.txt"; 
 file_put_contents($file,$message,FILE_APPEND);
 $messages=file_get_contents($file);
 echo  $messages;
 ?>
