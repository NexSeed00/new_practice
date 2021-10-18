<?php
/*
 foreach(配列名 as index番号(key) => 単数の値(value)) {
  処理
}
連想配列と組み合わせて使う
*/

$profile = ["name" => "taro", "age" => "20歳", "gender" => "男"];
foreach ($profile as $key => $value) {
  echo $key." ".$value. "<br>";
}

$friend1 = ["name" => "suzuki", "age" => 20];
$friend2 = ["name" => "endo", "age" => 21];
$friend3 = ["name" => "yamada", "age" => 22];
$friend4 = ["name" => "otsuka", "age" => 23];
$friend5 = ["name" => "tanaka", "age" => 24];

$all_friends = [$friend1,$friend2,$friend3,$friend4,$friend5];
var_dump($all_friends);

echo $all_friends[0]["name"];
echo $all_friends[4]["age"];

for ($i = 0; $i < count($all_friends); $i++) {
  echo $all_friends[$i]["name"];
  echo " ";
  echo $all_friends[$i]["age"];
  echo "<br>";
}

foreach ($all_friends as $array) {
  echo $array["name"];
  echo " ";
  echo $array["age"];
  echo "<br>";
}
