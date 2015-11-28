<html>
<?php
$file="messages.txt";
$messages=file_get_contents($file);
 ?>

<head>
 <script>
   function save(){
        var callback = function () {
        var show=document.getElementById("show");
	//show.innerHTML= xmlhttp.responseText;
     } ;
     var input=document.getElementById("message").value;
     var url = "http://localhost/ex6/guestbookleavemessage2.php?message="+input;
     var xmlhttp = new XMLHttpRequest();
     xmlhttp.open('GET',url, true);
     xmlhttp.onreadystatechange = callback;
     xmlhttp.send(null);
 }


 </script>

</head>
<body>
<h1>Welcome to our Guest Book, Leave us a Message PLEASEEEEEEEEEEEEEEE! </h1>
<input  id="message" >
<button onclick= 'save()' >Leave a message</button>
<h2>All the messages left by guests </h2>
<div id="show">

<script>
document.write("<?php echo htmlspecialchars($messages,ENT_NOQUOTES) ?>");
</script>

</div>
</body>
</html>
