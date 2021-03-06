# 制御文・条件文

1. 変数 x、y にそれぞれ任意の数値を代入し、x が y より大きい（超過）場合に、  
「xはyより大きい」という文を出力するプログラムを作成してください。

    <details><summary>回答例</summary><div>
            
    ```
    int x = 10;
    int y = 2;
        
    if (x > y) {
        System.out.println("xはyより大きい");
    }
    ```
            
    </div></details>
        

    <br>

2. 変数 x、y にそれぞれ任意の数値を代入し、x が y より小さい（超過）場合に、  
「xはyより小さい」という文を出力するプログラムを作成してください。

    <details><summary>回答例</summary><div>
            
    ```
    int x = 2;
    int y = 10;
        
    if (x < y) {
        System.out.println("xはyより小さい");
    }
    ```
            
    </div></details>

    <br>

	
3.  変数 x、y にそれぞれ任意の数値を代入し、x が ｙ 以上の場合には「xはy以上」、  
x が y より小さい（未満）場合には「xはyより小さい」と出力するプログラムを作成してください。

    <details><summary>回答例</summary><div>
            
    ```
    int x = 10;
    int y = 20;

    if (x >= y) {
        System.out.println("xはy以上");
    } else {
        System.out.println("xはyより小さい");
    }
    ```
            
    </div></details>
        

    <br>
	
4.  変数 x、y にそれぞれ任意の数値を代入し、x が ｙ より大きい（超過）場合には「xはyより大きい」、  
x が y より小さい（未満）場合には「xはyより小さい」、x と y が等しい場合には「xとyは等しい」と出力するプログラムを作成してください。

    <details><summary>回答例</summary><div>
            
    ```
    int x = 10;
    int y = 10;

    if (x > y) {
        System.out.println("xはyより大きい");
    } else if (x == y) {
        System.out.println("xとyは等しい");
    } else {
        System.out.println("xはyより小さい");
    }
    ```
            
    </div></details>
        

    <br>
	
5. 変数xに任意の数値を代入し、それが偶数か奇数かを判定するプログラムを作成してください。   
ただし、奇数の場合は、「奇数です」、偶数の場合は「偶数です」と出力してください。

    <details><summary>回答例</summary><div>
            
    ```
    int x = 10;

    if (x % 2 == 0) {
        System.out.println("偶数です");
    } else {
        System.out.println("奇数です");
    }
    ```
            
    </div></details>
        

    <br>
	
6. 変数xに任意の数値を代入し、それが3の倍数か5の倍数かを判定するプログラムを作成してください。   
ただし、3の倍数の場合は「3の倍数です」、5の倍数の場合は「5の倍数です」、3と5の倍数の場合は「3と5の倍数です」、それ以外の場合は「3と5の倍数以外です」と出力してください。

    <details><summary>回答例</summary><div>
            
    ```
    int x = 30;
            
    if (x % 3 == 0 && x % 5 == 0) {
        System.out.println("3と5の倍数です");
    } else if (x % 3 == 0) {
        System.out.println("3の倍数です");
    } else if (x % 5 == 0) {
        System.out.println("5の倍数です");
    } else {
        System.out.println("3と5の倍数以外です");
    }
    ```
            
    </div></details>
        

    <br>
	
7. 変数xに任意の数値を代入し、それが10以上かつ20以下かを判定するプログラムを作成してください。   
ただし、10以上かつ20以下の場合は、「10以上かつ20以下です」と出力してください。

    <details><summary>回答例</summary><div>
            
    ```
    int x = 14;
        
    if (10 <= x && x <= 20) {
        System.out.println("10以上かつ20以下です");
    }
    ```
            
    </div></details>
        

    <br>
	
8. 変数xに任意の数値を代入し、それが100以上または10以下かを判定するプログラムを作成してください。   
ただし、100以上または10以下の場合は、「100以上または10以下です」と出力してください。

    <details><summary>回答例</summary><div>
            
    ```
    int x = 111;
        
    if (100 <= x || x <= 10) {
        System.out.println("100以上または10以下です");
    }
    ```
            
    </div></details>
        

    <br>
	
9. 変数xに「dog」または「cat」を代入し、以下の表通り出力するプログラムを作成してください。   

    | xの値    | 出力内容 |
    | -------- | -------- |
    | dog       | 犬     |
    | cat       | 猫   |
    | 上記以外 | ???      |

    <details><summary>回答例</summary><div>
            
    ```
    // if文を使った方法

    String x = "dog";
        
    if (x == "犬") {
        System.out.println("male");
    } else if (x == "cat") {
        System.out.println("猫");
    } else {
        System.out.println("???");
    }

    // switch文を使った方法(動画内では解説していませんが、気になる方は調べてみると良いでしょう)

    String x = "dog";

    switch (x) {
        case "dog":
            System.out.println("犬");
            break;
        case "cat":
            System.out.println("猫");
            break;
        default:
            System.out.println("???");
            break;
    }
    ```
            
    </div></details>
        

    <br>
	
10. 変数xに任意の月の数値（1〜12）を代入し、その月を英語で出力するプログラムを作成してください。   

    | 月       | 出力内容         |
    | -------- | ---------------- |
    | 1        | January          |
    | 2        | February         |
    | 3        | March            |
    | 4        | April            |
    | 5        | May              |
    | 6        | June             |
    | 7        | July             |
    | 8        | August           |
    | 9        | September        |
    | 10       | October          |
    | 11       | November         |
    | 12       | December         |
    | 上記以外 | 月が存在しません |

    <details><summary>回答例</summary><div>
            
    ```
    // if文を使った方法

    int x = 4;

    if (x == 1) {
        System.out.println("January");
    } else if (x == 2) {
        System.out.println("February");
    } else if (x == 3) {
        System.out.println("March");
    } else if (x == 4) {
        System.out.println("April");
    } else if (x == 5) {
        System.out.println("May");
    } else if (x == 6) {
        System.out.println("June");
    } else if (x == 7) {
        System.out.println("July");
    } else if (x == 8) {
        System.out.println("August");
    } else if (x == 9) {
        System.out.println("September");
    } else if (x == 10) {
        System.out.println("October");
    } else if (x == 11) {
        System.out.println("November");
    } else if (x == 12) {
        System.out.println("December");
    } else {
        System.out.println("月が存在しません");
    }

    // switch文を使った方法(動画内では解説していませんが、気になる方は調べてみると良いでしょう)

    int x = 4;

    switch (x) {
        case 1:
            System.out.println("January");
            break;
        case 2:
            System.out.println("February");
            break;
        case 3:
            System.out.println("March");
            break;
        case 4:
            System.out.println("April");
            break;
        case 5:
            System.out.println("May");
            break;
        case 6:
            System.out.println("June");
            break;
        case 7:
            System.out.println("July");
            break;
        case 8:
            System.out.println("August");
            break;
        case 9:
            System.out.println("September");
            break;
        case 10:
            System.out.println("October");
            break;
        case 11:
            System.out.println("November");
            break;
        case 12:
            System.out.println("December");
            break;
        default:
            System.out.println("月が存在しません");
            break;
        }
    ```
            
    </div></details>
        

    <br>
