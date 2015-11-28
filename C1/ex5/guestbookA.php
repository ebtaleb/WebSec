<html>
<?php
$file="messages.txt";
$messages=file_get_contents($file);
 ?>

<head>
<script>

function encodehtml(in) {
    var lt = /</g,
        gt = />/g,
        ap = /'/g,
        ic = /"/g;
    return in.toString().replace(lt, "&lt;").replace(gt, "&gt;").replace(ap, "&#39;").replace(ic, "&#34;");
}

function save(){
    var callback = function () {
        var show=document.getElementById("show");
        show.innerHTML= xmlhttp.responseText;
    } ;

    var input=document.getElementById("message").value;
    var url = "http://localhost/ex5/guestbookleavemessage.php?message=" + encodehtml(input);
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open('GET',url, true);
    xmlhttp.onreadystatechange = callback;
    xmlhttp.send(null);
 }


 </script>

</head>
<body>
<h1>Welcome to our Guest Book, Leave us a Message! </h1>
<input  id="message" >
<button onclick= 'save()' >Leave a message</button>
<h2>All the messages left by guests </h2>
<div id="show"><?php echo $messages?> </div>
</body>
</html>
