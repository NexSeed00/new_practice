# 制御文・条件文

1. 変数 x、y にそれぞれ任意の数値を代入し、x が y より大きい（超過）場合に、  
xはyより大きいと出力するプログラムを作成してください。

    <details><summary>回答例</summary><div>
            
    ```
    x = 10
    y = 2
        
    if x > y
        puts "xはyより大きい"
    end
    ```
            
    </div></details>
        

    <br>

2. 変数 x、y にそれぞれ任意の数値を代入し、x が y より小さい（超過）場合に、  
「xはyより小さい」という文を出力するプログラムを作成してください。

    <details><summary>回答例</summary><div>
            
    ```
    x = 10
    y = 2
        
    if x < y
        puts "xはyより小さい"
    end
    ```
            
    </div></details>

    <br>

	
3.  変数 x、y にそれぞれ任意の数値を代入し、x が ｙ 以上の場合には「xはy以上」、  
x が y より小さい（未満）場合には「xはyより小さい」と出力するプログラムを作成してください。

    <details><summary>回答例</summary><div>
            
    ```
    x = 10
    y = 20

    if x >= y
        puts "xはy以上"
    else 
        puts "xはyより小さい"
    end
    ```
            
    </div></details>
        

    <br>
	
4.  変数 x、y にそれぞれ任意の数値を代入し、x が ｙ より大きい（超過）場合には「xはyより大きい」、  
x が y より小さい（未満）場合には「xはyより小さい」、x と y が等しい場合には「xとyは等しい」と出力するプログラムを作成してください。

    <details><summary>回答例</summary><div>
            
    ```
    x = 10
    y = 10

    if x > y
        puts "xはyより大きい"
    elsif x == y
        puts "xとyは等しい"
    else
        puts "xはyより小さい"
    end
    ```
            
    </div></details>
        

    <br>
	
5. 変数xに任意の数値を代入し、それが偶数か奇数かを判定するプログラムを作成してください。   
奇数の場合は、「奇数です」、偶数の場合は「偶数です」と出力してください。

    <details><summary>回答例</summary><div>
            
    ```
    x = 10

    if x % 2 == 0
        puts "偶数です"
    else
        puts "奇数です"
    end
    ```
            
    </div></details>
        

    <br>
	
6. 変数xに任意の数値を代入し、それが3の倍数か5の倍数かを判定するプログラムを作成してください。   
3の倍数の場合は、「3の倍数です」、5の倍数の場合は「5の倍数です」、それ以外の場合は、「3と5の倍数以外です」と出力してください。

    <details><summary>回答例</summary><div>
            
    ```
    x = 4
            
    if x % 3 == 0
        puts "3の倍数です"
    elsif x % 5 == 0
        puts "5の倍数です"
    else
        puts "3と5の倍数以外です"
    end
    ```
            
    </div></details>
        

    <br>
	
7. 変数xに任意の数値を代入し、それが10以上かつ20以下かを判定するプログラムを作成してください。   
10以上かつ20以下の場合は、「10以上かつ20以下です」と出力してください。

    <details><summary>回答例</summary><div>
            
    ```
    x = 14
        
    if 10 <= x && x <= 20
        puts "10以上かつ20以下です"
    end
    ```
            
    </div></details>
        

    <br>
	
8. 変数xに任意の数値を代入し、それが100以上または10以下かを判定するプログラムを作成してください。   
100以上または10以下の場合は、「100以上または10以下です」と出力してください。

    <details><summary>回答例</summary><div>
            
    ```
    x = 111
        
    if 100 <= x || x <= 10
        puts "100以上または10以下です"
    end
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
    // if文を使った方法

    x = "cat"
        
    if x == "dog"
        puts "犬"
    elsif x == "cat"
        puts "猫"
    else
        puts "犬と猫以外"
    end

    // case文を使った方法

    x = "cat"

    case x 
    when "dog"
        puts "犬"
    when "cat"
        puts "猫"
    else
        puts "犬と猫以外"
    end
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

    x = 4

    if x == 1
        puts "January"
    elsif x == 2
        puts "February"
    elsif x == 3
        puts "March"
    elsif x == 4
        puts "April"
    elsif x == 5
        puts "May"
    elsif x == 6
        puts "June"
    elsif x == 7
        puts "July"
    elsif x == 8
        puts "August"
    elsif x == 9
        puts "September"
    elsif x == 10
        puts "October"
    elsif x == 11
        puts "November"
    elsif x == 12
        puts "December"
    else
        puts "月が存在しません"
    end

    // case文を使った方法

    x = 4

    case x
    when 1
        puts "January"
    when 2
        puts "February"
    when 3
        puts "March"
    when 4
        puts "April"
    when 5
        puts "May"
    when 6
        puts "June"
    when 7
        puts "July"
    when 8
        puts "August"
    when 9
        puts "September"
    when 10
        puts "October"
    when 11
        puts "November"
    when 12
        puts "December"
    else
        puts "月が存在しません"
    end
    ```
            
    </div></details>
        

    <br>
