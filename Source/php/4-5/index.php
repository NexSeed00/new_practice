<?php
    // if文について
        if (true) {
            echo '条件がtrueだからお米を買いに行きます<br>';
        }
        if (false) {
            echo '条件がfalseだからお米を買いに行きません<br>';
        }
        
        /*
            論理演算子について
            trueはそのままtrue、falseはそのままfalseを表しますが、!はその逆の意味を表します。
            !true つまり false
            !false つまり true
        */
        $boolean = true;
        if ($boolean) {
            echo '条件がtrueだからお米を買いに行きます<br>';
        }

        if (!$boolean) {
            echo '条件がfalseだからお米を買いに行きません<br>';
        }

        /*
            if (boolean型の値（条件）) {
                条件がtrueのとき実行する
            } elseif (上とは違う条件) {
                条件がtrueのとき実行する
            } else {
                どの条件にも満たない場合の処理
            }
        */
        $condition1 = false;
        $condition2 = false;
        if ($condition1) {
            echo '差し支えないので、お米を買いに行きます<br><br>';
        } elseif ($condition2) {
            echo '差し支えるので、掃除機をかけます。<br><br>';
        } else {
            echo 'どちらも差し支えるので、子供の面倒をみます<br><br>';
        }

        /*
            比較演算子について
            算数で使っていた、xはyより小さい、xはyより大きいなどの比較演算子をPHPでも使うことができます。
            x == y     xとyの値が等しい（非推奨）
            x === y    xとyの値もデータ型も等しい
            x != y     xとyの値が等しくない（非推奨）
            x !== y    xとyの値もデータ型も等しくない
            x < y      xはyより小さい
            x <= y     xはy以下
            x > y      xはyより大きい
            x >= y     xはy以上
        */
        $number = 10;
        $string = '10';
        if ($number == $string) {
            echo '$numberと$stringは等しい？<br>';
        }

        if ($number === $string) {
            echo '$numberと$stringは等しい？<br>';
        } else {
            echo '$numberと$stringは等しくない<br>';
        }

        echo '<br>';

        /*
            論理積と論理和について
            複雑な条件を満たす場合のみ実行したい処理がある場合、論理積や論理和を使います。
            論理積 = && = aの条件がtrueかつbの条件がtrue
            論理和 = || = aの条件がtrueまたはbの条件がtrue
        */
        $sato_height = 160;
        $tanaka_height = 170;
        if ($sato_height < $tanaka_height && $tanaka_height < 180) {
            echo '1つめの条件がtrue かつ 2つめの条件がtrueだから実行します。<br>';
        }

        if ($sato_height < $tanaka_height && $tanaka_height < 160) {
            echo '1つめの条件がtrue かつ 2つめの条件がfalseだから無視します。<br>';
        }

        if ($sato_height < $tanaka_height || $tanaka_height < 160) {
            echo '1つめの条件がtrueだから実行します。<br>';
        }

        if ($sato_height > $tanaka_height || $tanaka_height < 160) {
            echo 'いずれの条件もfalseだから無視します。<br>';
        }

        echo '<br>';

        /*
            練習問題
            以下の変数を作成して、各問題を解いてみましょう。
            $ichiro = 23;
            $jiro = 20;
            $saburo = 17;
            $shiro = 9;

            1. 一郎が20歳以上か判定するif文を作成してください。
                条件が真（true）の場合は、「20歳以上です」と出力してください。

            2. 二郎が20歳か判定するif文を作成してください。
                条件が真（true）の場合は、「20歳です」と出力してください。

            3. 三郎が20歳以下かつ、四郎が20歳以下か判定するif文を作成してください。
                条件が真（true）の場合は、「2人とも20歳以下です」と出力してください。

            4. 四郎が5歳以上か判定するif文を作成してください。
                条件が真（true）の場合は、「5歳以上です」と出力してください。
                また、条件が偽（false）の場合は、「5歳未満です」と出力してください。
        */
        $ichiro = 23;
        $jiro = 20;
        $saburo = 17;
        $shiro = 9;
        // 1.
        if ($ichiro >= 20) {
            echo '20歳以上です<br>';
        }
        // 2.
        if ($jiro === 20) {
            echo '20歳です<br>';
        }
        // 3.
        if ($saburo <= 20 && $shiro <= 20) {
            echo '2人とも20歳以下です<br>';
        }
        // 4.
        if ($shiro >= 5) {
            echo '5歳以上です';
        } else {
            echo '5歳未満です';
        }
