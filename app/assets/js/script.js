var oldlog = console.log;
console.log = function(x){oldlog(x);return ""};
console.log("Hello");

