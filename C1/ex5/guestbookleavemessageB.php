<?php
 // or even remove them with a regexp
 $input = htmlspecialchars($_GET["message"], ENT_QUOTES)
 $message= $input."<br>" ;
 $file="messages.txt"; 
 file_put_contents($file,$message,FILE_APPEND);
 $messages=file_get_contents($file);
 echo  $messages;
 ?>