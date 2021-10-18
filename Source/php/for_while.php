<?php
// for文について
for ($i = 0; $i <= 10; $i++) {
  echo $i." ";
}
// 0 1 2 3 4 5 6 7 8 9 10と出力
echo "<br>";

for ($i = 10; $i >= 0; $i--) {
  echo $i." ";
}
echo "<br>";

// 1~100までの数字を足していって、合計が１０００を超える時の数字を出力する。
$amount = 0;
for ($i = 1; $i <= 100; $i++) {
  $amount += $i;
  if ($amount > 1000) {
    echo "合計値が1000を超えるのは". $i ."の時、＄amountは".$amount."です";
    break;
  }
}


// 1~30までの数字で、３の倍数以外を出力してください
echo "<br>";

for ($i = 1; $i <= 30; $i++){
  if($i % 3 === 0){
    continue; // 途中で処理をskipする
  }
  echo $i." ";
}

$count = 0;
while ($count <= 10) {
  echo $count." ";
  $count++;
}
echo "<br>";
$count = 10;
while ($count >= 0){
  echo $count." ";
  $count--;
}

echo "<br>";
$count = 0;
$limit = 5;
while ($count <= $limit){
  echo $count." ";
  $count++;
}

echo "<br>";
$count = 1;
while ($count <= 100) {
  if ($count > 50){
    break;
  }
  echo $count." ";
  $count++;
}

echo "<br>";
$count = 1;
while ($count <= 100) {
  if ($count % 2 === 0) {
    $count++;
    continue;
  }
  echo $count." ";
  $count++;
}