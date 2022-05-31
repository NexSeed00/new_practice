# 繰り返し文

1. 「hoge」という文字を10回出力するプログラムを作成してください。

    <details><summary>回答例</summary><div>
            
    ```
    for i in range(10):
        print("hoge")
    ```
            
    </div></details>
        

    <br>
	
2. 0から9までの数字を出力するプログラムを作成してください。

    <details><summary>回答例</summary><div>
            
    ```
    for i in range(10):
        print(i)
    ```
            
    </div></details>
        

    <br>
	
3. 九九、二の段を出力するプログラムを作成してください。

    <details><summary>回答例</summary><div>
            
    ```
    for i in range(1, 9):
        print(i * 2)
    ```
            
    </div></details>
        

    <br>
	
4. 1から100までの数字の中から偶数のみを出力するプログラムを作成してください。

    <details><summary>回答例</summary><div>
            
    ```
    for i in range(1, 100):
        if i % 2 == 0:
            print(i)
    ```
            
    </div></details>
        

    <br>

5. 1から100までの数字を出力するプログラムを作成してください。  
ただし、数値が奇数の場合は「奇数です」と出力してください。

    <details><summary>回答例</summary><div>
            
    ```
    for i in range(1, 100):
        if i % 2 != 0:
            print("奇数です")
        else:
            print(i)
    ```
            
    </div></details>
        

    <br>
	
6. 1から100までの3の倍数を出力するプログラムを作成してください。  

    <details><summary>回答例</summary><div>
            
    ```
    for i in range(1, 100):
        if i % 3 == 0:
            print(i)
    ```
            
    </div></details>
        

    <br>
	
7. 1から100までの5の倍数を出力するプログラムを作成してください。  

    <details><summary>回答例</summary><div>
            
    ```
    for i in range(1, 100):
        if i % 5 == 0:
            print(i)
    ```
            
    </div></details>
        

    <br>
	
8. 1から100までの3の倍数かつ5の倍数を出力するプログラムを作成してください。  

    <details><summary>回答例</summary><div>
            
    ```
    for i in range(1, 100):
        if i % 3 == 0 and i % 5 == 0:
            print(i)
    ```
            
    </div></details>
        

    <br>
	
9. 1から100までの数字を出力するプログラムを作成してください。  
ただし、3の倍数の場合は数の代わりに｢Fizz｣と出力してください。

    <details><summary>回答例</summary><div>
            
    ```
    for i in range(1, 100):
        if i % 3 == 0:
            print("Fizz")
        else:
            print(i)
    ```
            
    </div></details>
        

    <br>
	
10. 1から100までの数字を出力するプログラムを作成してください。  
ただし、3の倍数の場合は数の代わりに｢Fizz｣、5の倍数のときは｢Buzz｣、3と5両方の倍数の場合には｢FizzBuzz｣と出力してください。

    <details><summary>回答例</summary><div>
            
    ```
    for i in range(1, 100):
        if i % 15 == 0:
            print("FizzBuzz")
        elif i % 3 == 0:
            print("Fizz")
        elif i % 5 == 0:
            print("Buzz")
        else:
            print(i)
    ```
            
    </div></details>
        

    <br>
	
