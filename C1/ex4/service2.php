<html>
<script src="gadget.js"></script>
<body>
<?php
setcookie("Cookie2", 30, time()+604800);
setcookie("Cookie1", 30, time()-604800);
unset($_COOKIE['Cookie1']);
?>
</body>
Cookie 2 set
Cookie 1 unset
</html>

