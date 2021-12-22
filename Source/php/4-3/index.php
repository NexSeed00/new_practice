<?php
    // コメントの書き方
    /*
        コメントの書き方
        複数行
    */
    
    echo 'Hello World';
    echo '<br>';
    echo 'Hello World';
    echo '<br>';
    echo '文字を'.'つなげます'.'<br>';
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
    echo '<br><br>';

    // 変数展開
    $variable = '<h1>変数を英語でvariableというよ</h1>';
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

    $name = 'SeedKun';
    $age = '20歳';
    $gender = '男';
    echo $name.' '.$age.' '.$gender;
