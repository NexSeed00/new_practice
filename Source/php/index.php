<?php
// 4-3_変数
echo 'Hello World';
echo '<br>';
echo 'Hello World';
echo '<br>';
echo '文字を' . 'つなげます'.'<br>';
echo '<hr>';

// 変数について
  /*
    $変数名 = 値; =は右辺を左辺に代入する
      変数定義の構文
        = 代入演算子
    ＊変数名は、頭文字がアルファベットかアンダースコアである必要がある。
  */

$country_name = '大日本帝国'; // 変数定義
echo $country_name;
echo '<br>';

$country_name = 'ニッポン'; // $country_nameを上書き
echo $country_name;

echo $abc; // Notice: Undefined variable: abc
$abc = 'abc';
echo $ABC; // Notice: Undefined variable: ABC

/*
    変数の命名規則
      ローワーキャメルケース：単語の先頭を大文字にしたもの 最初の単語の先頭を小文字にする
        countryName
      スネークケース：単語をアンダースコア区切りにしたもの
        country_name
      アッパーキャメルケース：単語の先頭を大文字にしたもの 最初の単語も大文字にする（別名：パスカルケース）
        CountryName
  */
// 変数の応用（変数連結・変数に変数を代入）
$first_name = 'Taro';
$last_name = 'Yamada';
$full_name = $first_name.$last_name;
echo $full_name;
echo '<br><br>'

// 変数展開
$variable = '<h1>変数を英語でvariableという</h1>';
echo '$variable';
echo "$variable";
echo '<br>';

/*
  練習問題
  以下の変数を作成して、それぞれ出力してみましょう。
  変数    | 値
  name   | SeedKun
  age    | 20歳
  gender | 男
*/

// Answer
$name = 'SeedKun';
$age = '20歳';
$gender = '男';
echo $name.' '.$age.' '.$gender;
echo '<br>';

// 4-4_データ型について

  // 1.整数型：integer
  $weight = 50;
  var_dump($weight); // var_dump() = 変数や配列の中身を表示する関数
  echo '<br>';

  // 2.浮動小数点型：float
  $pie = 3.14;
  var_dump($pie);
  echo '<br>';

  // 四則演算
  var_dump(2 + 2);
  var_dump(2 - 2);
  var_dump(2 * 2);
  var_dump(2 / 2);
  var_dump(3 % 2);
  echo '<br>';
  $ten = 10;
  $five = 5;
  var_dump($ten * $five);

  // 3.文字列型：string
  $weight = '80';
  var_dump($weight);

  // 4.論理型：boolean
  // true false
  var_dump(true);
  var_dump(false);
  echo '<br>';

  // 5.配列型：array
  $array = ['１つめのデータ','２つめのデータ'];
  var_dump(($array));
  echo '<br><br>';

/*
  練習問題
  以下の変数を作成して、各問題を解いてみましょう。
  $a = 5
  $b = 12
  $c = 13
  $d = 20

  1.変数aと変数bと変数cを足した結果を出力してください。
  2.変数aと変数bを足した結果に変数cを掛けた結果を出力してください。
  3.変数dから変数aを引いた結果を出力してください。
  4.変数bと変数cを掛けた結果を出力してください。
  5.変数dを変数aで割った結果を出力してください。
  6.変数dを変数cで割った余りを出力してください。
*/

$a = 5;
$b = 12;
$c = 13;
$d = 20;

// 1.
echo $a + $b + $c;
echo '<br>';

// 2.
echo ($a + $b) * $c;
echo '<br>';

// 3.
echo $d - $a;
echo '<br>';

// 4.
echo $b * $c;
echo '<br>';

// 5.
echo $d / $a;
echo '<br>';

// 6.
echo $d % $c;
echo '<br>';

// 4-5_if文
