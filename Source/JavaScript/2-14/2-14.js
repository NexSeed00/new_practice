// 2-14 let, var, constの違い
/* 
        再宣言  再代入  ホイスティング
  var     ◯      ◯     undefined　
  let     ×      ◯       error
  const   ×      ×       error
*/

var varMessage = "Hello";
console.log(varMessage);
var varMessage = "こんにちは";
console.log(varMessage);

var varNumber = 100;
console.log(varNumber);
varNumber = 200;
console.log(varNumber);

// let letMessage = "Hello";
// let letMessage = "こんにちは"; // Uncaught SyntaxError: Identifier 'letMessage' has already been declared

let letNumber = 100;
console.log(letNumber);
letNumber = 200;
console.log(letNumber);

// const constMessage = "Hello";
// const constMessage = "こんにちは"; // Uncaught SyntaxError: Identifier 'constMessage' has already been declared

// const constNumber = 100;
// constNumber = 200; // Uncaught TypeError: Assigment to constant variable.
