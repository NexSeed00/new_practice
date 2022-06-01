# 再帰処理

1. 0から10までの整数の合計を求めるプログラムを再起処理を用いて作成してください。

	<details><summary>回答例</summary><div>
		
	```
    public class Practice {
        public static void main(String[] args) {
            System.out.println(test(1));
        }

        public static int test(int num) {
            if (num > 10) {
                return 0;
            } else {
                return test(num + 1) + num;
            }
        }
    }

    // コマンドライン操作
    $ javac Practice.java
    $ java Practice

    // 出力
    55
	```
		
	</div></details>
	

	<br>

2. 0から10までの整数を全て引いた数を求めるプログラムを再起処理を用いて作成してください。

	<details><summary>回答例</summary><div>
		
	```
    public class Practice {
        public static void main(String[] args) {
            System.out.println(test(1));
        }

        public static int test(int num) {
            if (num > 10) {
                return 0;
            } else {
                return test(num + 1) - num;
            }
        }
    }

    // コマンドライン操作
    $ javac Practice.java
    $ java Practice

    // 出力
    -55
	```
		
	</div></details>

	<br>

3. 1から10までの整数を掛け合わせた数を求めるプログラムを再起処理を用いて作成してください。

	<details><summary>回答例</summary><div>
		
	```
    public class Practice {
        public static void main(String[] args) {
            System.out.println(test(1));
        }

        public static int test(int num) {
            if (num > 10) {
                return 1;
            } else {
                return test(num + 1) * num;
            }
        }
    }

    // コマンドライン操作
    $ javac Practice.java
    $ java Practice

    // 出力
    3628800
	```
	
	</div></details>
	
	<br>

4. 【発展】第一引数で受け取った値を第二引数で受け取った値分、累乗するプログラムを再起処理を用いて作成してください。

	<details><summary>回答例</summary><div>
		
	```
    public class Practice {
        public static void main(String args[]){
            int num1 = 3;
            int num2 = 3;
            System.out.println(test(num1, num2));
        }
        public static int test(int num1, int num2){
            if (num2 == 0) {
                return 1;
            } else {
                return num1 * test(num1, num2 - 1);
            }
        }
    }

    // コマンドライン操作
    $ javac Practice.java
    $ java Practice

    // 出力
    27
	```
		
	</div></details>
	
	<br>

5. 【発展】下記の出力結果になるようなプログラムを再起処理を用いて作成してください。また、下記の数列はフィボナッチ数列といい、本講座では扱っていないのでご自身で調べながら問題に取り組んでください。
    
    出力結果

    ```
    1 1 2 3 5 8 13 21 34 55 
    ```



	<details><summary>回答例</summary><div>
		
	```
    public class Practice {
        public static void main(String[] args) {
            int count = 10;
            for (int i = 1; i <= count; i++) {
                int fibonacciNumber = test(i);
                System.out.print(fibonacciNumber + " ");
            }
        }

        public static int test(int num) {
            if (num == 0)
                return 0;
            else if (num == 1)
                return 1;
            else
                return test(num - 1) + test(num - 2);
        }
    }

    // コマンドライン操作
    $ javac Practice.java
    $ java Practice

    // 出力
    1 1 2 3 5 8 13 21 34 55 
	```
		
	</div></details>
	
	<br>
