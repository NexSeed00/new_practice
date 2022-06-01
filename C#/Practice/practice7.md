# メソッド

1. 下記の条件を満たすプログラムを作成してください。

    ```
    メソッド名：printHoge  
    処理内容：「Hoge」と出力する
    ```

    <details><summary>回答例</summary><div>
            
    ```
    public static void printHoge() {
        Debug.Log("Hoge");
    }
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
    public static void printNum(int num) {
        Debug.Log(num);
    }
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
    public static void printKuku(int num) {
        for (int i = 1; i <= 9; i++) {
            Debug.Log(num * i);
        }
    }
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
    public static void printIsEven(int num) {
        if (num % 2 == 0) {
            Debug.Log("偶数です");
        } else {
            Debug.Log("奇数です");
        }
    }
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
    printMessage("ABC", 3);
        
    // 実行結果
    ABC
    ABC
    ABC
    ```

    <details><summary>回答例</summary><div>
            
    ```
    public static void printMessage(string str, int count) {
        for (int i = 0; i < count; i++) {
            Debug.Log(str);
        }
    }
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
    public static void printMaxNum(int num1, int num2) {
        if (num1 > num2) {
            Debug.Log(num1);
        } else if (num1 < num2) {
            Debug.Log(num2);
        } else {
            Debug.Log("同じ");
        }
    }
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
    int result = getSquared(4);
    Debug.Log(result);
        
    // 実行結果
    16
    ```
        
    <details><summary>回答例</summary><div>
            
    ```
    public static int getSquared(int num) {
        return num * num;
    }
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
    string message = createSelfIntroductionText("taro");
    Debug.Log(message);
        
    // 実行結果
    私の名前はtaroです
    ```
	
    <details><summary>回答例</summary><div>
            
    ```
    public static string createSelfIntroductionText(string name) {
        string msg = "私の名前は" + name + "です";
        return msg;
    }
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
    string result = isEvenNumber(3);
    Debug.Log(result);
        
    // 実行結果
    false
    ```
	
    <details><summary>回答例</summary><div>
            
    ```
    public static string isEvenNumber(int num) {
        if (num % 2 == 0) {
            return "true";
        } else {
            return "false";
        }
    }
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
    public static string isTaro(string str) {
        if (str == "taro") {
            return "true";
        } else {
            return "false";
        }
    }
    ```
            
    </div></details>
        

    <br>
