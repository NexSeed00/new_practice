# メソッド

1. 以下のメソッドを作成して、作成したメソッドを実行してください。

    ```
    ファイル名：Practice.java
    メソッド名：printHoge  
    処理内容：「Hoge」と出力する
    ```

    <details><summary>回答例</summary><div>
            
    ```
    // ファイル内のコード
    public class Practice {
        public static void main(String[] args) {
            printHoge();
        }

        public static printHoge() {
            System.out.println("Hoge");
        }

    }

    // コマンドライン操作
    $ javac Practice.java
    $ java Practice

    // 出力
    Hoge
    ```
            
    </div></details>
        

    <br>
	
2. 以下のメソッドを作成して、作成したメソッドを実行してください。

    ```
    ファイル名：Practice.java
    メソッド名：printNum  
    引数：1つの数値  
    処理内容：引数で受け取った数値を出力する
    ```

    <details><summary>回答例</summary><div>
            
    ```
    // ファイル内のコード
    public class Practice {
        public static void main(String[] args) {
            printNum(4);
        }

        public static printNum(int num) {
            System.out.println(num);
        }

    }

    // コマンドライン操作
    $ javac Practice.java
    $ java Practice

    // 出力
    4
    ```
            
    </div></details>
        

    <br>
	
3. 以下のメソッドを作成して、作成したメソッドを実行してください。

    ```
    ファイル名：Practice.java
    メソッド名：printKuku  
    引数：1つの数値  
    処理内容：引数で受け取った数値の九九（1から9までかけた数）を出力する
    ```

    <details><summary>回答例</summary><div>
            
    ```
    // ファイル内のコード
    public class Practice {
        public static void main(String[] args) {
            printKuku(4);
        }

        public static printKuku(int num) {
            for (int i = 1; i <= 9; i++) {
                System.out.println(num * i);
            }
        }

    }

    // コマンドライン操作
    $ javac Practice.java
    $ java Practice

    // 出力
    4
    8
    12
    16
    20
    24
    28
    32
    36
    ```
            
    </div></details>
        

    <br>
	
4. 以下のメソッドを作成して、作成したメソッドを実行してください。

    ```
    ファイル名：Practice.java
    メソッド名：printIsEven  
    引数：1つの数値  
    処理内容：引数で受け取った数値が偶数の場合は「偶数です」と出力し、奇数の場合は「奇数です」と出力する
    ```

    <details><summary>回答例</summary><div>
            
    ```
    // ファイル内のコード
    public class Practice {
        public static void main(String[] args) {
            printIsEven(3);
        }

        public static printIsEven(int num) {
            if (int num % 2 == 0) {
                System.out.println("偶数です");
            } else {
                System.out.println("奇数です");
            }
        }

    }

    // コマンドライン操作
    $ javac Practice.java
    $ java Practice

    // 出力
    奇数です
    ```
            
    </div></details>
        
    <br>
	
5. 以下のメソッドを作成して、作成したメソッドを実行してください。

    ```
    ファイル名：Practice.java
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
    // ファイル内のコード
    public class Practice {
        public static void main(String[] args) {
            printMessage("ABC", 3);
        }

        public static printMessage(String str, int count) {
            for (int i = 0; i < count; i++) {
                System.out.println(str);
            }
        }

    }

    // コマンドライン操作
    $ javac Practice.java
    $ java Practice

    // 出力
    ABC
    ABC
    ABC
    ```
            
    </div></details>
        

    <br>
	
6. 以下のメソッドを作成して、作成したメソッドを実行してください。

    ```
    ファイル名：Practice.java
    メソッド名：printMaxNum  
    引数1：1つの数値  
    引数2：1つの数値  
    処理内容：引数で受け取った2つの数値のうち、最も大きな数値を出力する。  
    数値が同じ場合は、「同じと出力する」
    ```

    <details><summary>回答例</summary><div>
            
    ```
    // ファイル内のコード
    public class Practice {
        public static void main(String[] args) {
            printMaxNum(4, 5);
        }

        public static printMaxNum(int num1, int num2) {
            if (num1 > num2) {
                System.out.println(num1);
            } elseif (num1 < num2) {
                System.out.println(num2);
            } else {
                System.out.println('同じ');
            }
        }

    }

    // コマンドライン操作
    $ javac Practice.java
    $ java Practice

    // 出力
    5
    ```
            
    </div></details>
        

    <br>
	
7. 以下のメソッドを作成して、作成したメソッドを実行してください。

    ```
    ファイル名：Practice.java
    メソッド名：getSquared  
    引数1：1つの数値  
    処理内容：引数で受け取った数値の2乗を計算し返す
    ```
	
    例
	
    ```
    result = getSquared(4);
    System.out.println(result);
        
    // 実行結果
    16
    ```
        
    <details><summary>回答例</summary><div>
            
    ```
    // ファイル内のコード
    public class Practice {
        public static void main(String[] args) {
            result = get Squared(4);
            System.out.println(result);
        }

        public static int getSquared(int num) {
            return num * num;
        }
    }

    // コマンドライン操作
    $ javac Practice.java
    $ java Practice

    // 出力
    16
    ```
            
    </div></details>
        

    <br>
	
8. 以下のメソッドを作成して、作成したメソッドを実行してください。

    ```
    ファイル名：Practice.java
    メソッド名：createSelfIntroductionText  
    引数1：1つの文字列  
    処理内容：「私の名前は○○です」という文字の〇〇を引数で受け取った文字列にし返す
    ```
	
    例
        
    ```
    message = createSelfIntroductionText("taro");
    System.out.println(message);
        
    // 実行結果
    私の名前はtaroです
    ```
	
    <details><summary>回答例</summary><div>
            
    ```
    // ファイル内のコード
    public class Practice {
        public static void main(String[] args) {
            message = createSelfIntroductionText("taro");
            System.out.println(message);
        }

        public static String createSelfIntroductionText(String name) {
            msg = '私の名前は' + name + 'です';
            return msg;
        }
    }

    // コマンドライン操作
    $ javac Practice.java
    $ java Practice

    // 出力
    私の名前はtaroです
    ```
            
    </div></details>
        
    <br>
	
9. 以下のメソッドを作成して、作成したメソッドを実行してください。

    ```
    ファイル名：Practice.java
    メソッド名：isEvenNumber  
    引数1：1つの数値  
    処理内容：引数で渡された値が偶数の場合は true、そうでない場合は false を返す。
    ```
	
    例
        
    ```
    result = isEvenNumber(3);
    System.out.println(result);
        
    // 実行結果
    false
    ```
	
    <details><summary>回答例</summary><div>
            
    ```
    // ファイル内のコード
    public class Practice {
        public static void main(String[] args) {
            result = isEvenNumber(3);
            System.out.println(result);
        }

        public static boolean isEvenNumber(int num) {
            if (num % 2 == 0) {
                return true;
            } else {
                return false;
            }
        }
    }

    // コマンドライン操作
    $ javac Practice.java
    $ java Practice

    // 出力
    false
    ```
            
    </div></details>
        

    <br>
	
10. 以下のメソッドを作成して、作成したメソッドを実行してください。

    ```
    ファイル名：Practice.java
    メソッド名：isTaro  
    引数1：任意の文字列  
    処理内容：引数で渡された文字列が「taro」の場合は true、そうでない場合は false を返す。
    ```
	
    <details><summary>回答例</summary><div>
            
    ```
    // ファイル内のコード
    public class Practice {
        public static void main(String[] args) {
            result = isTaro("taro");
            System.out.println(result);
        }

        public static boolean isTaro(String str) {
            if (str == "taro") {
                return true;
            } else {
                return false;
            }
        }
    }

    // コマンドライン操作
    $ javac Practice.java
    $ java Practice

    // 出力
    true
    ```
            
    </div></details>
        

    <br>
