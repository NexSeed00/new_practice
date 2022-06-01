# 関数

1. 下記の条件を満たすプログラムを作成してください。

    ```
    関数名：print_hoge  
    処理内容：「Hoge」と出力する
    ```

    <details><summary>回答例</summary><div>
            
    ```
    def print_hoge
        puts "Hoge"
    end

    print_hoge
    ```
            
    </div></details>
        

    <br>
	
2. 下記の条件を満たすプログラムを作成してください。

    ```
    関数名：print_num  
    引数：1つの数値  
    処理内容：引数で受け取った数値を出力する
    ```

    <details><summary>回答例</summary><div>
            
    ```
    def print_num(num)
        puts num
    end

    print_num(4)
    ```
            
    </div></details>
        

    <br>
	
3. 下記の条件を満たすプログラムを作成してください。

    ```
    関数名：print_kuku  
    引数：1つの数値  
    処理内容：引数で受け取った数値の九九（1から9までかけた数）を出力する
    ```

    <details><summary>回答例</summary><div>
            
    ```
    def print_kuku(num)
        for i in 1..9
            puts num * i
        end
    end

    print_kuku(4)
    ```
            
    </div></details>
        

    <br>
	
4. 下記の条件を満たすプログラムを作成してください。

    ```
    関数名：print_is_even  
    引数：1つの数値  
    処理内容：引数で受け取った数値が偶数の場合は「偶数です」と出力し、奇数の場合は「奇数です」と出力する
    ```

    <details><summary>回答例</summary><div>
            
    ```
    def print_is_even(num)
        if num % 2 == 0
            puts "偶数です"
        else
            puts "奇数です"
        end
    end
    
    print_is_even(3)
    ```
            
    </div></details>
        
    <br>
	
5. 下記の条件を満たすプログラムを作成してください。

    ```
    関数名：print_message  
    引数1：1つの文字列  
    引数2：1つの数字  
    処理内容：引数で受け取った文字列を、引数で受け取った数値分繰り返し出力する
    ```
	
    例
        
    ```
    print_message("ABC", 3);
        
    // 実行結果
    ABC
    ABC
    ABC
    ```

    <details><summary>回答例</summary><div>
            
    ```
    def print_message(str, count)
        for i in 1..count
            puts str
        end
    end

    print_message("ABC", 3)
    ```
            
    </div></details>
        

    <br>
	
6. 下記の条件を満たすプログラムを作成してください。

    ```
    関数名：print_max_num  
    引数1：1つの数値  
    引数2：1つの数値  
    処理内容：引数で受け取った2つの数値のうち、最も大きな数値を出力する。  
    数値が同じ場合は、「同じと出力する」
    ```

    <details><summary>回答例</summary><div>
            
    ```
    def print_max_num(num1, num2)
        if num1 > num2
            puts num1
        elsif num1 < num2
            puts num2
        else
            puts "同じ"
        end
    end

    print_max_num(4, 5)
    ```
            
    </div></details>
        

    <br>
	
7. 下記の条件を満たすプログラムを作成してください。

    ```
    関数名：get_squared  
    引数1：1つの数値  
    処理内容：引数で受け取った数値の2乗を計算し返す
    ```
	
    例
	
    ```
    result = get_squared(4)
    puts result
        
    // 実行結果
    16
    ```
        
    <details><summary>回答例</summary><div>
            
    ```
    def get_squared(num)
        return num * num
    end

    result = get_squared(4)
    puts result
    ```
            
    </div></details>
        

    <br>
	
8. 下記の条件を満たすプログラムを作成してください。

    ```
    関数名：create_self_introduction_text  
    引数1：1つの文字列  
    処理内容：「私の名前は○○です」という文字の〇〇を引数で受け取った文字列にし返す
    ```
	
    例
        
    ```
    message = create_self_introduction_text("taro")
    puts message
        
    // 実行結果
    私の名前はtaroです
    ```
	
    <details><summary>回答例</summary><div>
            
    ```
    def create_self_introduction_text(name)
        msg = "私の名前は" + name + "です"
        return msg
    end

    message = create_self_introduction_text("taro")
    puts message
    ```
            
    </div></details>
        
    <br>
	
9. 下記の条件を満たすプログラムを作成してください。

    ```
    関数名：is_even_number  
    引数1：1つの数値  
    処理内容：引数で渡された値が偶数の場合は true、そうでない場合は false を返す。
    ```
	
    例
        
    ```
    result = is_even_number(3)
    puts result
        
    // 実行結果
    false
    ```
	
    <details><summary>回答例</summary><div>
            
    ```
    def is_even_number(num)
        if num % 2 == 0
            return "true"
        else
            return "false"
        end
    end

    result = is_even_number(3)
    puts result
    ```
            
    </div></details>
        

    <br>
	
10. 下記の条件を満たすプログラムを作成してください。

    ```
    関数名：is_taro  
    引数1：任意の文字列  
    処理内容：引数で渡された文字列が「taro」の場合は true、そうでない場合は false を返す。
    ```
	
    <details><summary>回答例</summary><div>
            
    ```
    def is_taro(str)
        if str == "taro"
            return "true"
        else
            return "false"
        end
    end

    result = is_taro("taro")
    puts result
    ```
            
    </div></details>
        

    <br>
