/* 
 * According to the following code, how do you fix the code so that console.log()
 * prints Aurelio De Rosa
 */

var fullname = 'John Doe';
var obj = {
   fullname: 'Colin Ihrig',
   prop: {
      fullname: 'Aurelio De Rosa',
      getFullname: function() {
         return this.fullname;
      }
   }
};

var test = obj.prop.getFullname;

console.log(test());// Need to be fixed