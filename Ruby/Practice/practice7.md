# 再帰処理

1. 0から10までの整数の合計を求めるプログラムを再起処理を用いて作成し、実行してください。

	<details><summary>回答例</summary><div>
		
	```
    def test(num)
        if num > 10
            return 0
        else
            return test(num + 1) + num
        end
    end

    puts test(1)
	```
		
	</div></details>
	

	<br>

2. 0から10までの整数を全て引いた数を求めるプログラムを再起処理を用いて作成し、実行してください。

	<details><summary>回答例</summary><div>
		
	```
    def test(num)
        if num > 10
            return 0
        else
            return test(num + 1) - num
        end
    end

    puts test(1)
	```
		
	</div></details>

	<br>

3. 1から10までの整数を掛け合わせた数を求めるプログラムを再起処理を用いて作成し、実行してください。

	<details><summary>回答例</summary><div>
		
	```
    def test(num)
        if num > 10
            return 1
        else
            return test(num + 1) * num
        end
    end

    puts test(1)
	```
	
	</div></details>
	
	<br>

4. 【発展】第一引数で受け取った値を第二引数で受け取った値分、累乗するプログラムを再起処理を用いて作成し、実行してください。

	<details><summary>回答例</summary><div>
		
	```
    def test(num1, num2)
        if num2 == 0
            return 1
        else
            return num1 * test(num1, num2 - 1)
        end
    end

    puts test(3, 3)
	```
		
	</div></details>
	
	<br>

5. 【発展】下記の出力結果になるようなプログラムを再起処理を用いて作成し、実行してください。また、下記の数列はフィボナッチ数列といい、本講座では扱っていないのでご自身で調べながら問題に取り組んでください。
    
    出力結果

    ```
    1 1 2 3 5 8 13 21 34 55 
    ```



	<details><summary>回答例</summary><div>
		
	```
    def test(num)
        if num == 0
            return 0
        elsif num == 1
            return 1
        else
            return test(num - 1) + test(num - 2)
        end
    end

    count = 10
    for i in 1..count
        fibonacci_number = test(i)
        print fibonacci_number
        print " "
    end
	```
		
	</div></details>
	
	<br>
