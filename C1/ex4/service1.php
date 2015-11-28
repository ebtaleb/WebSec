<html>
<script src="gadget.js"></script>
<body>
<?php
setcookie("Cookie1", 20, time()+604800);
//unset($_COOKIE['Cookie2']);
?>
</body>
Cookie 1 set to 20
<button onclick="delete_cookie('Cookie1')">Click here to delete Cookie1</button>
</html>
