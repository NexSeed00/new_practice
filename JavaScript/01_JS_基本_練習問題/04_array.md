# 配列

1. 定数arrayを作成し、1から10の数値を格納する配列を代入してください。

	<details><summary>回答例</summary><div>
		
	```
	const array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
	```
		
	</div></details>
	

	<br>
	
2. 定数arrayを作成し、アルファベットA〜Eの文字列を格納する配列を代入してください。

	<details><summary>回答例</summary><div>
		
	```
	const array = ['A', 'B', 'C', 'D', 'E'];
	```
		
	</div></details>
	

	<br>
	
3. 以下の表に合う配列を作成してください。   
	
	| 配列名  | 値               |
	| ------- | ---------------- |
	| animals | dog, fox, monkey |

	<details><summary>回答例</summary><div>
			
		const animals = ['dog', 'fox', 'monkey'];

	</div></details>
		<br>
		
4. 33で作成した配列animalsに「elephant」を追加してください。  

	<details><summary>回答例</summary><div>
		
	```
	animals.push('elephant');
	```
		
	</div></details>
	

	<br>
	
5. 33で作成した配列animals内の「dog」を「cat」に更新してください。  

	<details><summary>回答例</summary><div>
		
	```
	animals[0] = 'cat';
	```
		
	</div></details>
	

	<br>
	
6. 33で作成した配列animals内の「fox」を削除してください。  

	<details><summary>回答例</summary><div>
		
	```
	animals.splice(1, 1);
	```
		
	</div></details>
	

	<br>
	
7. 33で作成した配列animalsの中身を全て出力してください。  

	<details><summary>回答例</summary><div>
		
	```
	for (animal of animals) {
	    console.log(animal);
	}
	```
		
	</div></details>
	

	<br>
	
8. 33で作成した配列animalsの中身を全て出力してください。  
ただし、「fox」は出力しないでください。  

	<details><summary>回答例</summary><div>
		
	```
	for (animal of animals) {
	    if (animal != 'fox') {
	        console.log(animal);
	    }
	}
	```
		
	</div></details>
	

	<br>

9. 自分で好きな配列を作成してください。

10. 39で作成した配列の中身を全て出力してください。
