<?php
function bigger($x,$y){ // $x,$yは引数、関数が変換する前の値
  if ($x < $y) {
    return $y; // return = 返り値、変換した後の値、returnするとそこで関数の処理が終了する
  }
  return $x;
}
echo bigger(10,2);

function average($x,$y) {
  return ($x + $y) / 2;
}

echo average(1,2);

// 1つの関数は長くても２０行程度までにする

function sayHi() {
  echo "Hello World";
}
sayHi();

function fizzBazz($num) {
  switch (true) {
    case $num % 15 === 0:
      return "FizzBuzz";
      break;
    case $num % 3 === 0:
      return "Fizz";
      break;
    case $num % 5 === 0:
      return "Buzz";
      break;
    default:
      return $num;
      break;
  }
}

for ($i = 1; $i <= 50; $i++) {
  echo fizzBazz($i)." ";
}