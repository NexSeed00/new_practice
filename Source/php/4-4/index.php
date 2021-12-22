<?php
    // 1.整数型
    $weight = 50;
    var_dump($weight); // var_dump() = 変数や配列の中身を表示する関数
    echo '<br>';

    // 2.浮動小数点型
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

    // 3.文字列型
    $weight = '80';
    var_dump($weight);

    // 4.論理型
    // true false
    var_dump(true);
    var_dump(false);
    echo '<br>';

    // 5.配列型
    $array = ['１つめのデータ','２つめのデータ'];
    var_dump($array);
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
