<?php
$array1 = ["１つめの値","２つ目の値",];
var_dump($array1);

echo "<br>";

echo $array1[0];

$array1[0] = "変更しました";
echo $array1[0];

$array1[] = "3つ目の値";
var_dump($array1);

unset($array1[2]); // unset() = 要素を削除
var_dump($array1);

$count = count($array1);
echo $count;

for ($i = 0; $i < $count; $i++) {
  echo $array1[$i]." ";
}

// 連想配列

echo "<br>";
$array2 = ["name" => "ichiro", "age" => "20歳"];
echo $array2["age"];

echo "<br>";

$animals = ["dog","cat","fox"];
foreach ($animals as $animal) {
  echo $animal;
}

foreach ($animals as $animal) {
  if ($animal !== "fox") {
    echo $animal;
  }
}
