<?php

if(!$_COOKIE['user_id']) {
    setcookie('user_id', 12345, time() + 60*60*24*30, '/');
} else
   header("HTTP/1.1 302 Found");
   header ("Location: http://localhost/b.php?partnerId=".$_SERVER['HTTP_HOST']."&sync_id=".$_COOKIE['user_id']);
}

?>