<?php
    // 配列について
        /*
            $array1 = ['ichiro', '20歳', '男'];
            echo $array1[0]; // ichiro
            echo $array1[1]; // 20歳
            echo $array1[2]; // 男
        */

        $array = ['１つめの値','２つ目の値',];
        var_dump($array);

        echo $array[0]; // Notice: Array to string conversion

        echo '<br><br>';

        echo $array[0];

        echo '<br>';

        echo $array[1];
        echo $array[2]; // Notice: Undefined offset: 2

        echo '<br>';

        $array[0] = '1つめの値を更新しました。';
        var_dump($array);

        echo '<br>';

        $array[] = '3つ目の値';
        var_dump($array);

        echo '<br>';

        unset($array[2]); // unset() = 要素を削除
        var_dump($array);

        echo '<br>';

        $count = count($array);
        echo $count;

        for ($i = 0; $i < $count; $i++) {
            echo $array[$i].' ';
        }

        echo '<br><br>';

        /*
            練習問題
            1. 以下の変数を作成し、出力してください。
                配列名 = numbers
                値 = 1, 5, 10, 15, 20, 30

            2. 配列numbersの最後の値に35を追加し、配列全体を出力してください。

            3. 配列numbersの値1を値0に更新し、配列全体を出力してください。

            4. 配列numbersの値35を削除し、配列全体を出力してください。

            5. for文を使って、配列numbersを最初から最後の要素まで順番に出力してください。
        */
        // 1.
        $numbers = [1, 5, 10, 15, 20, 25, 30];
        var_dump($numbers);
        echo '<br>';

        // 2.
        $numbers[] = 35;
        var_dump($numbers);
        echo '<br>';

        // 3.
        $numbers[0] = 0;
        var_dump($numbers);
        echo '<br>';

        // 4.
        unset($numbers[7]);
        var_dump($numbers);
        echo '<br>';

        // 5.
        for ($i = 0; $i < count($numbers); $i++) {
            echo $numbers[$i].' ';
        }

        echo '<hr>';


        // 連想配列について
        /*
            $array2 = ['name' => 'ichiro', 'age' => '20歳', 'gender' => '男'];
            echo $array2['name'];   // ichiro
            echo $array2['age'];    // 20歳
            echo $array2['gender']; // 男
        */

        $profile = ['name' => 'ichiro', 'age' => '20歳', 'gender' => '男'];
        var_dump($profile);

        echo '<br>';

        echo $profile['name'].'<br>';
        echo $profile['age'].'<br>';
        echo $profile['gender'].'<br>';
        echo $profile['email'].'<br>';

        $profile['age'] = '21歳';
        var_dump($profile);

        echo '<br>';

        $profile['email'] = 'test@gmail.com';
        var_dump($profile);
        echo '<br>';

        unset($profile['email']);
        var_dump($profile);
