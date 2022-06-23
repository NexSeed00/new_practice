# データ型・四則演算

1. 下記の条件を満たす変数を定義するプログラムを作成してください。

	| 変数名 | データ型 | 値 |
	| ------- | ------ | ----- |
	| x | byte | 120 |


	<details><summary>回答例</summary><div>
		
	```
	byte x = 120;
	```

	</div></details>

	<br>

2. 下記の条件を満たす変数を定義するプログラムを作成してください。

	| 変数名 | データ型 | 値 |
	| ------- | ------ | ----- |
	| x | float | 1.56 | 


	<details><summary>回答例</summary><div>
		
	```
	float x = 1.56f;
	```
		
	</div></details>
	
	<br>

3. 下記の条件を満たす変数を定義するプログラムを作成してください。

	| 変数名 | データ型 | 値 |
	| ------- | ------ | ----- |
	| x | char | a | 


	<details><summary>回答例</summary><div>
		
	```
	char x = 'a';
	```
		
	</div></details>

	<br>



4. 変数 x、y に数値 10、2 を代入し、x、yの和を計算し、結果を出力するプログラムを作成してください。

	<details><summary>回答例</summary><div>
			
	```
	int x = 10;
	int y = 2;
	System.out.println(x + y);
	```
			
	</div></details>
		
	<br>
	
5. 変数 x、y に数値 10、2 を代入し、x、yの差を計算し、結果を出力するプログラムを作成してください。

	<details><summary>回答例</summary><div>
		
	```
	int x = 10;
	int y = 2;
	System.out.println(x - y);
	```
		
	</div></details>
	
	<br>
	
6. 変数 x、y に数値 10、2 を代入し、x、yの積を計算し、結果を出力するプログラムを作成してください。

	<details><summary>回答例</summary><div>
		
	```
	int x = 10;
	int y = 2;
	System.out.println(x * y);
	```
		
	</div></details>
	
	<br>
	
7. 変数 x、y に数値 10、2 を代入し、x、yの商を計算し、結果を出力するプログラムを作成してください。

	<details><summary>回答例</summary><div>
		
	```
	int x = 10;
	int y = 2;
	System.out.println(x / y);
	```
		
	</div></details>
	
	<br>
	
8. 変数 x、y に数値 10、3 を代入し、x、yの余りを計算し、結果を出力するプログラムを作成してください。

	<details><summary>回答例</summary><div>
		
	```
	int x = 10;
	int y = 3;
	System.out.println(x % y);
	```
		
	</div></details>
	
	<br>
	
9. 変数 x、y に数値 11、13 を代入し、その積を変数 z に代入して z の値を出力するプログラムを作成してください。

	<details><summary>回答例</summary><div>
		
	```
	int x = 11;
	int y = 13;
	int z = x * y;
	System.out.println(z);
	```
		
	</div></details>
	
	<br>
	
10. 変数 x に任意の数値を代入し、x を 1 乗、2 乗、3 乗した結果を出力するプログラムを作成してください。

	<details><summary>回答例</summary><div>
		
	```
	int x = 2;
	System.out.println(x);
	System.out.println(x * x);
	System.out.println(x * x * x);

    // 下記の方法でも表示することができます。
  	System.out.println((int) Math.pow(x, 1));
	System.out.println((int) Math.pow(x, 2));
   	System.out.println((int) Math.pow(x, 3));
	```
		
	</div></details>
	
	<br>
