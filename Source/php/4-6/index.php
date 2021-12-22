<?php
    // switch文について
        $condition3 = '料理';
        switch ($condition3) {
            case '買い物':
                echo 'お米を買いに行きます。';
                break;

            case '掃除機':
                echo '掃除機をかけます。';
                break;

            case '料理':
                echo '晩御飯を作ります。';
                break;

            default:
                echo '子供の面倒をみます。';
                break;
        }

        echo '<br><br>';

        /*
            練習問題
            以下の変数を作成して、各問題を解いてみましょう。
            $optional_number = 任意の数字;

            以下の条件に合うようにswitch文を作成してください。
            条件    | 出力する文字
            1      | 1です
            2      | 2です
            3      | 3です
            4      | 4です
            5      | 5です
            1~5以外 | 1~5以外です
        */
        $optional_number = 1;
        switch ($optional_number) {
            case 1:
                echo '1です';
                break;
                
            case 2:
                echo '2です';
                break;
            
            case 3:
                echo '3です';
                break;
            
            case 4:
                echo '4です';
                break;
            
            case 5:
                echo '5です';
                break;
            
            default:
                echo '1~5以外です';
        }
