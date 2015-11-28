<?php
if (!isset($_SERVER['PHP_AUTH_USER'])) {
     header('WWW-Authenticate: Basic');
     header('HTTP/1.0 401 Unauthorized');
     echo 'Authentication canceled';
    exit;
} else {
    // First check if $_SERVER['PHP_AUTH_PW'] is OK
    echo "<p>Bonjour, {$_SERVER['PHP_AUTH_USER']}, you are logged in.</p>";
 }
?> 