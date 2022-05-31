# メソッド

1. 下記の条件を満たすプログラムを作成してください。

    ```
    メソッド名：printHoge  
    処理内容：「Hoge」と出力する
    ```

    <details><summary>回答例</summary><div>
            
    ```
    def printHoge():
       print("Hoge")

    printHoge()
    ```
            
    </div></details>
        

    <br>
	
2. 下記の条件を満たすプログラムを作成してください。

    ```
    メソッド名：printNum  
    引数：1つの数値  
    処理内容：引数で受け取った数値を出力する
    ```

    <details><summary>回答例</summary><div>
            
    ```
    def printNum(num):
        print(num)

    printNum(4)
    ```
            
    </div></details>
        

    <br>
	
3. 下記の条件を満たすプログラムを作成してください。

    ```
    メソッド名：printKuku  
    引数：1つの数値  
    処理内容：引数で受け取った数値の九九（1から9までかけた数）を出力する
    ```

    <details><summary>回答例</summary><div>
            
    ```
    def printKuku(num):
        for i in range(1, 10):
            print(num * i)

    printKuku(4)
    ```
            
    </div></details>
        

    <br>
	
4. 下記の条件を満たすプログラムを作成してください。

    ```
    メソッド名：printIsEven  
    引数：1つの数値  
    処理内容：引数で受け取った数値が偶数の場合は「偶数です」と出力し、奇数の場合は「奇数です」と出力する
    ```

    <details><summary>回答例</summary><div>
            
    ```
    def printIsEven(num):
        if num % 2 == 0:
            print("偶数です")
        else:
            print("奇数です")

    printIsEven(3);
    ```
            
    </div></details>
        
    <br>
	
5. 下記の条件を満たすプログラムを作成してください。

    ```
    メソッド名：printMessage  
    引数1：1つの文字列  
    引数2：1つの数字  
    処理内容：引数で受け取った文字列を、引数で受け取った数値分繰り返し出力する
    ```
	
    例
        
    ```
    printMessage("ABC", 3)
        
    // 実行結果
    ABC
    ABC
    ABC
    ```

    <details><summary>回答例</summary><div>
            
    ```
    def printMessage(str, count):
        for i in range(0, count):
            print(str)

    printMessage("ABC", 3)
    ```
            
    </div></details>
        

    <br>
	
6. 下記の条件を満たすプログラムを作成してください。

    ```
    メソッド名：printMaxNum  
    引数1：1つの数値  
    引数2：1つの数値  
    処理内容：引数で受け取った2つの数値のうち、最も大きな数値を出力する。  
    数値が同じ場合は、「同じと出力する」
    ```

    <details><summary>回答例</summary><div>
            
    ```
    def printMaxNum(num1, num2):
        if num1 > num2:
            print(num1)
        elif num1 < num2:
            print(num2)
        else:
            print("同じ")

    printMaxNum(4, 5)
    ```
            
    </div></details>
        

    <br>
	
7. 下記の条件を満たすプログラムを作成してください。

    ```
    メソッド名：getSquared  
    引数1：1つの数値  
    処理内容：引数で受け取った数値の2乗を計算し返す
    ```
	
    例
	
    ```
    result = getSquared(4)
    print(result)
        
    // 実行結果
    16
    ```
        
    <details><summary>回答例</summary><div>
            
    ```
    def getSquared(num):
        return num * num

    result = getSquared(4)
    print(result)
    ```
            
    </div></details>
        

    <br>
	
8. 下記の条件を満たすプログラムを作成してください。

    ```
    メソッド名：createSelfIntroductionText  
    引数1：1つの文字列  
    処理内容：「私の名前は○○です」という文字の〇〇を引数で受け取った文字列にし返す
    ```
	
    例
        
    ```
    message = createSelfIntroductionText("taro")
    print(message)
        
    // 実行結果
    私の名前はtaroです
    ```
	
    <details><summary>回答例</summary><div>
            
    ```
    def createSelfIntroductionText(name):
        msg = "私の名前は" + name + "です"
        return msg

    message = createSelfIntroductionText("taro")
    print(message)
    ```
            
    </div></details>
        
    <br>
	
9. 下記の条件を満たすプログラムを作成してください。

    ```
    メソッド名：isEvenNumber  
    引数1：1つの数値  
    処理内容：引数で渡された値が偶数の場合は true、そうでない場合は false を返す。
    ```
	
    例
        
    ```
    result = isEvenNumber(3)
    print(result)
        
    // 実行結果
    false
    ```
	
    <details><summary>回答例</summary><div>
            
    ```
    def isEvenNumber(num):
        if (num % 2 == 0):
            return "true"
        else:
            return "false"

    result = isEvenNumber(3)
    print(result)
    ```
            
    </div></details>
        

    <br>
	
10. 下記の条件を満たすプログラムを作成してください。

    ```
    メソッド名：isTaro  
    引数1：任意の文字列  
    処理内容：引数で渡された文字列が「taro」の場合は true、そうでない場合は false を返す。
    ```
	
    <details><summary>回答例</summary><div>
            
    ```
    def isTaro(str):
        if str == "taro":
            return "true"
        else:
            return "false"

    result = isTaro("taro");
    print(result)
    ```
            
    </div></details>
        

    <br>
