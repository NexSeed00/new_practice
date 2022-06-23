# 配列

1. 1から10の数値を格納する配列を代入するプログラムを作成してください。（配列名：array）

    <details><summary>回答例</summary><div>
            
    ```
    int[] array = {1, 2, 3, 4, 5, 6, 7, 8, 9, 10};
    ```
            
    </div></details>
        

    <br>

2. 1で作成した配列arrayの中の4という値を出力するプログラムを作成してください。

    <details><summary>回答例</summary><div>
            
    ```
    Debug.Log(array[3]);
    ```
            
    </div></details>
        

    <br>

3. アルファベットA〜Eの文字列を格納する配列を代入するプログラムを作成してください。（配列名：array）

    <details><summary>回答例</summary><div>
            
    ```
    string[] array = {"A", "B", "C", "D", "E"};
    ```
            
    </div></details>
        

    <br>

4. 3で作成した配列arrayの中のEという値を出力するプログラムを作成してください。

    <details><summary>回答例</summary><div>
            
    ```
    Debug.Log(array[4]);
    ```
            
    </div></details>
        

    <br>

	
5. 下記の表に合う配列を定義するプログラムを作成してください。
    | 配列名  | 値               |
    | ------- | ---------------- |
    | animals | dog, fox, monkey |

    <details><summary>回答例</summary><div>

    ```
    string[] animals = {"dog", "fox", "monkey"};
    ```
        
    </div></details>
        

    <br>

6. 5で作成した配列animalsの中のfoxという値をcatに変更するプログラムを作成してください。

    <details><summary>回答例</summary><div>

    ```
    animals[1] = "cat";
    ```
        
    </div></details>
        

    <br>

7. 2次元配列fruitsに下記を代入するプログラムを作成してください。
    ```
    ・0番目の要素の中の0番目の要素にapple, 1番目の要素の中に100円
    ・1番目の要素の中の0番目の要素にbanana, 1番目の要素の中に110円
    ```

    <details><summary>回答例</summary><div>
            
    ```
    string[,] fruits = 
    { 
        { "apple", "100円" }, 
        { "banana", "110円" } 
        
    };
    ```
            
    </div></details>
        

    <br>
	
8. 4で作成した配列fruits内の「banana」を出力するプログラムを作成してください。

    <details><summary>回答例</summary><div>
            
    ```
    Debug.Log(fruits[1, 0]);
    ```
            
    </div></details>
        

    <br>
	
9. 4で作成した配列fruits内の「110円」を出力するプログラムを作成してください。

    <details><summary>回答例</summary><div>
            
    ```
    Debug.Log(fruits[1, 1]);
    ```
            
    </div></details>
        

    <br>
	
10. 3次元配列membersに下記を代入するプログラムを作成してください。

    ```
    ・0番目の要素の中の0番目の要素にsuzukiとA, 1番目の要素の中に165cmと65kg
    ・1番目の要素の中の0番目の要素にtanakaとB, 1番目の要素の中に170cmと70kg
    ```

    <details><summary>回答例</summary><div>
            
    ```
    string[,,] members =
    {  
        { 
            {"suzuki", "A"}, 
            {"165cm", "65kg"} 
            
        }, 
        { 
            {"tanaka", "B"}, 
            {"170cm", "70kg"}
        } 
    };
    ```
            
    </div></details>
        

    <br>
