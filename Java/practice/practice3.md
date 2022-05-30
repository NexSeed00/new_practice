# 配列

1. 変数arrayを作成し、1から10の数値を保持する配列を代入してください。

    <details><summary>回答例</summary><div>
            
    ```
    int[] array = {1, 2, 3, 4, 5, 6, 7, 8, 9, 10};
    ```
            
    </div></details>
        

    <br>

2. 1で作成した配列arrayの中の4という値を出力してください。

    <details><summary>回答例</summary><div>
            
    ```
    int[] array = {1, 2, 3, 4, 5, 6, 7, 8, 9, 10};
    System.out.println(array[3]);
    ```
            
    </div></details>
        

    <br>

3. 変数arrayを作成し、アルファベットA〜Eの文字列を保持する配列を代入してください。

    <details><summary>回答例</summary><div>
            
    ```
    String[] array = {"A", "B", "C", "D", "E"};
    ```
            
    </div></details>
        

    <br>

4. 3で作成した配列arrayの中のEという値を出力してください。

    <details><summary>回答例</summary><div>
            
    ```
    System.out.println(array[4]);
    ```
            
    </div></details>
        

    <br>

	
5. 以下の表にあう配列を作成してください。   
    | 配列名  | 値               |
    | ------- | ---------------- |
    | animals | dog, fox, monkey |

    <details><summary>回答例</summary><div>

    ```
    String[] animals = {"dog", "fox", "monkey"};
    ```
        
    </div></details>
        

    <br>

6. 5で作成した配列animalsの中のfoxという値をcatに変更してください。

    <details><summary>回答例</summary><div>

    ```
    animals[1] = cat;
    ```
        
    </div></details>
        

    <br>

7. 2次元配列fruitsに下記を代入し、それぞれの値を出力してください。
    ```
    ・0番目の要素の中の0番目の要素にapple, 1番目の要素の中に100円
    ・1番目の要素の中の0番目の要素にbanana, 1番目の要素の中に120円
    ```

    <details><summary>回答例</summary><div>
            
    ```
    String[][] fruits = { { "apple", "100円" }, { "banana", "110円" } };
    ```
            
    </div></details>
        

    <br>
	
8. 4で作成した配列fruits内の「banana」を出力してください。

    <details><summary>回答例</summary><div>
            
    ```
    System.out.println(fruits[1][0]);
    ```
            
    </div></details>
        

    <br>
	
9. 4で作成した配列fruits内の「110円」を出力してください。

    <details><summary>回答例</summary><div>
            
    ```
    System.out.println(fruits[1][1]);
    ```
            
    </div></details>
        

    <br>
	
10. 3次元配列membersに下記を代入し、それぞれの値を出力してください。

    ```
    ・0番目の要素の中の0番目の要素にsuzuki, 1番目の要素の中に165cmと65kg
    ・1番目の要素の中の0番目の要素にtanaka, 1番目の要素の中に170cmと70kg
    ```

    <details><summary>回答例</summary><div>
            
    ```
    String[][][] members = { { {"suzuki"}, {"165cm", "65kg"} }, { {"tanaka"}, {"170cm", "70kg"} } };
    ```
            
    </div></details>
        

    <br>
