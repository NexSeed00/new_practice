<?php
// 変数について
$country_name = "日本";
echo $country_name;
echo "<br>";
$country_name = "にほん";
echo $country_name;
echo "<br>";

$abc = "abc";
echo "$country_name $abc";

$first_name = "Taro";
$last_name = "Endo";
$full_name = $first_name.$last_name;
echo $full_name;

$variable = "<h1>変数を英語でvariableという</h1>";
echo '$variable';
echo "<br>";

// 練習問題
$name = "SeedKun";
$age = "20歳";
$gender = "男";
echo $name." ".$age." ".$gender;
echo "<br>";

// データ型
/* 
1.整数型：integer
2.浮動小数点型：float
3.文字列型：string
4.論理型：boolean
5.配列型：array
*/
// 1.
$weight = 50;
var_dump($weight); // var_dump()変数や配列の中身を表示する関数
echo "<br>";
// 2.
$pie = 3.14;
var_dump($pie);
echo "<br>";
// 四則演算
var_dump(2 + 2);
var_dump(2 - 2);
var_dump(2 * 2);
var_dump(2 / 2);
var_dump(3 % 2);
echo "<br>";
$ten = 10;
$five = 5;
var_dump($ten * $five);
// 3.
$weight = "80";
var_dump($weight);
// 4.論理型＝true or false
var_dump(true);
var_dump(false);
echo "<br>";
// 5.
$array = ["１つめのデータ","２つめのデータ"];
var_dump(($array));
echo "<br>";

