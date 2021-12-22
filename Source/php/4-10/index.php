<?php
    // 関数について
        /*
            関数とは
            決められたルールに従って、受け取った値を、別の値に変換するもの

            いつ使えば良いのか
            何度も同じ計算（処理）をしていたら、その処理を関数にしていつでも呼び出せるようにする

            引数とは
            関数が変換する前の値

            返り値とは
            関数が変換する後の値


            関数の作り方
            function 関数名(引数) {
                処理;
                return 返り値;
            }

            関数の呼び出し方
            関数名(引数);
        */

        function bigger($x, $y){ // $x,$yは引数。関数が変換する前の値。
            if ($x < $y) {
                return $y; // return = 返り値。変換した後の値。returnするとそこで関数の処理が終了する。
            }
            return $x;
        }

        echo bigger(10,2);

        function average($x, $y) {
            return ($x + $y) / 2;
        }

        echo '<br>';

        echo average(1,2);

        function sayHi() {
            echo 'Hello World<br><br>';
        }
        
        echo '<br>';

        sayHi();

        /*
            練習問題
            年齢を渡して、
            3歳以下は「あかちゃん」
            18歳以下は「こども」
            65歳未満は「大人」
            65歳以上は「高齢者」
            と出力する関数をアロー関数式で作ってください。
            出力例）echo ageToType(65); == 高齢者 が出力されること。
        */
        function ageToType($age) {
            if ($age <= 3) {
                return 'あかちゃん';
            } elseif ($age <= 18) {
                return 'こども';
            } elseif ($age < 65) {
                return '大人';
            } else {
                return '高齢者';
            }
        }

        echo ageTotype(65).'<br><br>';

        /*
            練習問題
            1~50の数字を返す関数を作ってください。
            ただし、
            3で割り切れる場合は、数字の代わりに「Fizz」
            5で割り切れる場合は、数字の代わりに「Buzz」
            3と5で割り切れる場合は、数字の代わりに「FizzBuzz」を返してください。
            出力例）echo fizzBunzz($i);
            1
            2
            Fizz
            4
            Buzz
            Fizz
            ...
            13
            14
            FizzBuzz
        */

        function fizzBazz($number) {
            switch (true) {
                case $number % 3 === 0 && $number % 5 === 0:
                    return 'FizzBuzz';
                    break;

                case $number % 3 === 0:
                    return 'Fizz';
                    break;

                case $number % 5 === 0:
                    return 'Buzz';
                    break;

                default:
                    return $number;
                    break;
            }
        }

        for ($i = 1; $i <= 50; $i++) {
            echo fizzBazz($i).' ';
        }
