/**
 * Taking the fact the code below is running in the global object of the browser, 
 * what would console.log() print ?
 */

console.log(this);

/* 
 * What would console.log() print ?
 */
(function() {
   var a = b = 5;
})();

console.log(b);