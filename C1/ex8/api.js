(function(){ 
  var secret=42; 
  this.newuser= function (name,mail){ 
    this.name = name; 
    this.mail = mail;
    return this;
    } 
   )()