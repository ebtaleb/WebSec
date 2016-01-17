<?php

if(!$_COOKIE['user_id']) {
    setcookie('user_id', 'XYZ', time() + 60*60*24*30, '/');
} else
    echo 'user' . $_COOKIE['user_id'] . ' is known as ' . $_GET["sync_id"] . ' on ' . $_GET["partnerId"];
}

?>