<?php
    // foreach文について
        /*
            foreach(配列名 as index番号（key） => 単数の値（value）) {
                処理;
            }
        */
        $profile = ['name' => 'ichiro', 'age' => '20歳', 'gender' => '男'];
        foreach ($profile as $key => $value) {
            echo $key.' '.$value. '<br>';
        }

        echo '<br>';

        // 配列
        $friend1 = ['name' => 'suzuki', 'age' => 20];
        $friend2 = ['name' => 'yamada', 'age' => 21];
        $friend3 = ['name' => 'otsuka', 'age' => 22];
        $friend4 = ['name' => 'tanaka', 'age' => 23];

        // 二次元配列
        $all_friends = [$friend1, $friend2, $friend3, $friend4];

        var_dump($all_friends);

        echo '<br>';

        echo $all_friends[0]['name'];

        echo '<br>';

        echo $all_friends[3]['age'];

        echo '<br>';

        /*
            練習問題
            1. for文を使って$all_friends配列の中にある、全員の名前・年齢を出力してください。
            2. foreach文を使って$all_friends配列の中にある、全員の名前・年齢を出力してください。
        */

        // 1.
        for ($i = 0; $i < count($all_friends); $i++) {
            echo $all_friends[$i]['name']; // $all_friendsのindex番号$i番目のname
            echo ' ';
            echo $all_friends[$i]['age']; // $all_friendsのindex番号$i番目のage
            echo '<br>';
        }

        echo '<br>';

        // 2.
        foreach ($all_friends as $array) {
            echo $array['name']; // $friend1~4のname
            echo ' ';
            echo $array['age']; // $friend1~4のage
            echo '<br>';
        }
