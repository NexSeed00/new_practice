<?php
    // for文について
        /*
            for (初期化処理; 繰り返し条件式; 更新処理) {
                処理;
            }

            1. 初期化処理 = 繰り返し処理が始まる前に一度だけ読み込まれる。
            2. 繰り返し条件式 条件がtrueなら3へ進む。条件がfalseなら処理終了。
            3. 処理実行
            4. 更新処理 = 処理が終わるごとに読まれる処理。
        */
    for ($i = 0; $i <= 10; $i++) {
        echo $i.' ';
    }

    echo '<br><br>';

    for ($i = 10; $i >= 0; $i--) {
        echo $i.' ';
    }
    echo '<br><br>';

    $times = 5;
    for ($i = 0; $i <= $times; $i++) {
        echo $i.' ';
    }

    // 1~100までの数字を足していって、合計が1000を超えるときの数字を出力してください。

    echo '<br><br>';

    $amount = 0;
    for ($i = 1; $i <= 100; $i++) {
        $amount += $i;

        if ($amount > 1000) {
            echo '合計値が1000を超えるのは'. $i .'の時、＄amountは'.$amount.'です。';
            break;
        }
    }

    // 1~30までの数字で、３の倍数以外を出力してください。

    echo '<br><br>';

    for ($i = 1; $i <= 30; $i++){
        if ($i % 3 === 0){
            continue;
        }
        echo $i.' ';
    }

    /*
        for ($i =1; $i > 0; $i++) {
            echo $i;
        }
    */

    echo '<br><br>';

    /*
        練習問題
        1. 1から100まで出力するプログラムを書いてください。

        2. 1から100まで出力するプログラムを書いてください。
           ただし、50を出力したらbreakを使って、処理を中断するようにしてください。
           （1から50まで出力するようにしてください。）

        3. 1から100までの奇数のみ出力するプログラムを書いてください。
    */
    // 1.
    for ($i = 1; $i <= 100; $i++) {
        echo $i.' ';
    }
    echo '<br><br>';
    // 2.
    for ($i = 1; $i <= 100; $i++) {
        if ($i > 50) {
            break;
        }
        echo $i.' ';
    }
    echo '<br><br>';
    // 3.
    for ($i = 0; $i <= 100; $i++) {
        if ($i % 2 === 0) {
            continue;
        }
        echo $i.' ';
    }
