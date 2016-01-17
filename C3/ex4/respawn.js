localStorage.setItem('id', 42);
console.log(document.cookie);
var test = document.cookie.replace(/(?:(?:^|.*;\s*)id\s*\=\s*([^;]*).*$)|^.*$/, "$1");
if (test == ""){
    console.log("cookie id not here");
    if (typeof(localStorage) == 'undefined' ) {
    } else {
        try {
            var x = localStorage.getItem('id');
            if (x) {
                console.log("found x");
                document.cookie = "id="+escape(x);
                console.log("cookie id set to "+x);
                var url = 'http://kingofidols.net/track?tid=' + x;
                document.write('<img src=' + url + '/>');
            }
        } catch (e) {
        }
    }
}
