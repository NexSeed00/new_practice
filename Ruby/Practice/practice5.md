# 繰り返し文

1. 「hoge」という文字を10回出力するプログラムを作成してください。

    <details><summary>回答例</summary><div>
            
    ```
    for i in 1..10
        puts "hoge"
    end
    ```
            
    </div></details>
        

    <br>
	
2. 1から10までの数字を出力するプログラムを作成してください。

    <details><summary>回答例</summary><div>
            
    ```
    for i in 1..10
        puts i
    end
    ```
            
    </div></details>
        

    <br>
		
4. 1から100までの数字の中から偶数のみを出力するプログラムを作成してください。

    <details><summary>回答例</summary><div>
            
    ```
    for i in 1..100
        if i % 2 == 0
            puts i
        end
    end
    ```
            
    </div></details>
        

    <br>

5. 1から100までの数字を出力するプログラムを作成してください。  
ただし、数値が奇数の場合は「奇数です」と出力してください。

    <details><summary>回答例</summary><div>
            
    ```
    for i in 1..100
        if i % 2 != 0
            puts "奇数です"
        else 
            puts i
        end
    end
    ```
            
    </div></details>
        

    <br>
	
6. 1から100までの3の倍数を出力するプログラムを作成してください。  

    <details><summary>回答例</summary><div>
            
    ```
    for i in 1..100
        if i % 3 == 0
            puts i
        end
    end
    ```
            
    </div></details>
        

    <br>
	
7. 1から100までの5の倍数を出力するプログラムを作成してください。  

    <details><summary>回答例</summary><div>
            
    ```
    for i in 1..100
        if i % 5 == 0
            puts i
        end
    end
    ```
            
    </div></details>
        

    <br>
	
8. 1から100までの3の倍数かつ5の倍数を出力するプログラムを作成してください。  

    <details><summary>回答例</summary><div>
            
    ```
    for i in 1..100
        if i % 3 == 0 && i % 5 == 0
            puts i
        end
    end
    ```
            
    </div></details>
        

    <br>
	
9. 1から100までの数字を出力するプログラムを作成してください。  
ただし、3の倍数の場合は数の代わりに｢Fizz｣と出力してください。

    <details><summary>回答例</summary><div>
            
    ```
    for i in 1..100
        if i % 3 === 0
            puts "Fizz"
        else
            puts i
        end
    end
    ```
            
    </div></details>
        

    <br>
	
10. 1から100までの数字を出力するプログラムを作成してください。  
ただし、3の倍数の場合は数の代わりに｢Fizz｣、5の倍数のときは｢Buzz｣、3と5両方の倍数の場合には｢FizzBuzz｣と出力してください。

    <details><summary>回答例</summary><div>
            
    ```
    for i in 1..100
        if i % 3 == 0 && i % 5 == 0
            puts "FizzBuzz"
        elsif i % 5 == 0
            puts "Buzz"
        elsif i % 3 == 0
            puts "Fizz"
        else
            puts i
        end
    end
    ```
            
    </div></details>
        

    <br>
	
10. 【発展】下記の配列を用意し、それぞれの要素の値をfor文を使って出力するプログラムを作成してください。

    | 配列名  | 値               |
    | ------- | ---------------- |
    | animals | dog, fox, monkey |


    <details><summary>回答例</summary><div>
            
    ```
    animals = [ "dog", "fox", "monkey" ]

    for animal in animals
        puts animal 
    end
    ```
            
    </div></details>
        

    <br>

