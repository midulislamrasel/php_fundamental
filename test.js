// var s = "Good 100%";
// var pattern = /\D/g;
// var output = s.match(pattern);
// // document.write(output);
// console.log(output);

// var text = "This is a text";
// console.log(text.charAt(text.length - 1));

// var BidA = 33;
// var BidB = "24";
// console.log(Math.max(BidA, BidB));

// var total = new Function("item", "tax", "return item+=tax");
// console.log("Your bill is $" + total(14.43, 06));

// let str = "Cricket is Proud";
// console.log(str.substring(4, 7));

// for (i = 0; i < 4; i++) {
//   console.log(i + "Go " + "<br>");
// }
// console.log(i++);

// var counter = 50;
// while (counter > 15) {
//   counter -= 5;
//   console.log(counter + "Go" + "<br>");
// }
// console.log(counter);
// console.log("<br>");
// x = 0 / 2;
// y = 2 / 0;
// c = 0 / 0;
// console.log(x);
// console.log(y);
// console.log(c);

// var alpha = 3 << 2;
// console.log(alpha);

// var a = 9;
// var b = 4;
// var c = a > b;
// var d = "Your stock is worth " + c * 20 + " thousand dollars.";
// console.log(d);

// var wrong = 6 == 5;
// console.log(wrong);

// // var posNum = 30;
// var negNum = -50;
// var outcome = Math.abs(negNum);
// console.log(outcome);

// var stringNum = "4";
// var stringNum2 = "20";
// var mulEm = stringNum * stringNum2;
// console.log(mulEm);

// var alpha = "Apples";
// var beta = alpha + "Oranges";
// // var gamma = Math.sqrt(beta);
// var delta = 200 / beta;
// console.log(delta);

// var alpha = 0xdead;
// console.log(alpha);
// var beta = 0xbeef;
// console.log(beta);
// var gamma = alpha + beta;
// console.log(gamma);

// var elStringo = "15.95";
// var laStringa = "32 on sale";
// var newval = parseFloat(elStringo);
// console.log(newval);
// var hotval = parseInt(laStringa);
// console.log(hotval);
// console.log("Your total is:$" + (newval + hotval));

// // prompt;

// x = 3 * "15";
// console.log(x);

// var a = 10,
//   b = "20pcs";
// var c = a * b;
// console.log(c);

// arr = new Array(1, 2, 3);
// console.log(arr);

// // x = 10;
// // y = myStr(x, 2);
// // console.log(y);

// function retval() {
//   var a = 20;
//   return a;
// }

// console.log(retval() + 30);

let total = 1;
for (let i = 2; i <= 4; i++) {
  if (i % 2 == 0) {
    total += i;
  }
}
document.write(total);
