# 制御文

1. 変数 x、y にそれぞれ任意の数値を代入し、x が y より大きい（超過）場合に、  
「xはyより大きい」という文を出力するプログラムを作成してください。

    <details><summary>回答例</summary><div>
            
    ```
    x = 10
    y = 2

    if x > y:
        print("xはyより大きい")
    ```
            
    </div></details>
        

    <br>

2. 変数 x、y にそれぞれ任意の数値を代入し、x が y より小さい（未満）場合に、  
「xはyより小さい」という文を出力するプログラムを作成してください。

    <details><summary>回答例</summary><div>
            
    ```
    x = 2
    y = 10

    if x < y:
        print("xはyより小さい")
    ```
            
    </div></details>

    <br>

	
3.  変数 x、y にそれぞれ任意の数値を代入し、x が ｙ 以上の場合には「xはy以上」、  
x が y より小さい（未満）場合には「xはyより小さい」と出力するプログラムを作成してください。

    <details><summary>回答例</summary><div>
            
    ```
    x = 10
    y = 20

    if x >= y:
        print("xはy以上")
    else:
        print("xはyより小さい")
    ```
            
    </div></details>
        

    <br>
	
4.  変数 x、y にそれぞれ任意の数値を代入し、x が ｙ より大きい（超過）場合には「xはyより大きい」、  
x が y より小さい（未満）場合には「xはyより小さい」、x と y が等しい場合には「xとyは等しい」と出力するプログラムを作成してください。

    <details><summary>回答例</summary><div>
            
    ```
    x = 10
    y = 10

    if x > y:
        print("xはyより大きい")
    elif x == y:
        print("xとyは等しい")
    else:
        print("xはyより小さい")
    ```
            
    </div></details>
        

    <br>
	
5. 変数xに任意の数値を代入し、それが偶数か奇数かを判定するプログラムを作成してください。   
ただし、奇数の場合は、「奇数です」、偶数の場合は「偶数です」と出力してください。

    <details><summary>回答例</summary><div>
            
    ```
    x = 10
    
    if x % 2 == 0:
        print("偶数です")
    else:
        print("奇数です")
    ```
            
    </div></details>
        

    <br>
	
6. 変数xに任意の数値を代入し、それが3の倍数か5の倍数かを判定するプログラムを作成してください。   
ただし、3の倍数の場合は「3の倍数です」、5の倍数の場合は「5の倍数です」、それ以外の場合は「3と5の倍数以外です」と出力してください。

    <details><summary>回答例</summary><div>
            
    ```
    x = 4

    if x % 3 == 0:
        print("3の倍数です")
    elif x % 5 == 0:
        print("5の倍数です")
    else:
        print("3と5の倍数以外です")
    ```
            
    </div></details>
        

    <br>
	
7. 変数xに任意の数値を代入し、それが10以上かつ20以下かを判定するプログラムを作成してください。   
ただし、10以上かつ20以下の場合は、「10以上かつ20以下です」と出力してください。

    <details><summary>回答例</summary><div>
            
    ```
    x = 14
    
    if 10 <= x and x <= 20:
        print("10以上かつ20以下です")
    ```
            
    </div></details>
        

    <br>
	
8. 【発展】変数xに任意の数値を代入し、それが100以上または10以下かを判定するプログラムを作成してください。   
ただし、100以上または10以下の場合は、「100以上または10以下です」と出力してください。

    <details><summary>回答例</summary><div>
            
    ```
    x = 111

    if 100 <= x or x <= 10:
        print("100以上または10以下です")
    ```
            
    </div></details>
        

    <br>
	
9. 変数xに「dog」または「cat」を代入し、以下の表通り出力するプログラムを作成してください。   

    | xの値    | 出力内容 |
    | -------- | -------- |
    | dog       | 犬     |
    | cat       | 猫   |
    | 上記以外 | 犬と猫以外      |

    <details><summary>回答例</summary><div>
            
    ```
    x = "cat"

    if x == "dog":
        print("犬")
    elif x == "cat":
        print("猫")
    else:
        print("犬と猫以外")
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
    x = 4

    if x == 1:
        print("January")
    elif x == 2:
        print("February")
    elif x == 3:
        print("March")
    elif x == 4:
        print("April")
    elif x == 5:
        print("May")
    elif x == 6:
        print("June")
    elif x == 7:
        print("July")
    elif x == 8:
        print("August")
    elif x == 9:
        print("September")
    elif x == 10:
        print("October")
    elif x == 11:
        print("November")
    elif x == 12:
        print("December")
    else:
        print("月が存在しません")
    ```
            
    </div></details>
        

    <br>
