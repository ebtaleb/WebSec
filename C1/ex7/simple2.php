<?php 
if (!empty($_POST['token'])) {
    if (hash_equals($_POST['token'], $_SESSION['token'])) {
        echo "Here is the answer from the server";
    } else {
        echo "Toekn invalid"
    }
}

 ?>
