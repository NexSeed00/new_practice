# 連想配列

1. 以下のような連想配列を作成してください。  

	定数名: alphabets
	
 | キー | 値  |
 | ---- | --- |
 | a    | A   |
 | b    | B   |
 | c    | C   |
 | d    | D   |

  <details><summary>回答例</summary><div>
		
	const alphabets = {
		'a': 'A',
		'b': 'B',
		'c': 'C',
		'd': 'D'
	};
		
  </div></details>
	

  <br>
	
2. 41で作成した連想配列に以下の値を追加してください。  
	
 | キー | 値  |
 | ---- | --- |
 | e    | E   |

  <details><summary>回答例</summary><div>
		
	alphabets['e'] = 'E';
		
  </div></details>
	

  <br>
	
	
3. 41で作成した連想配列の以下の値を更新してください。  
	
 | キー | 値  |
 | ---- | --- |
 | a    | AAA |

  <details><summary>回答例</summary><div>
		
	alphabets['a'] = 'AAA';
		
  </div></details>
	

  <br>
	
4. 41で作成した連想配列の以下の値を削除してください。  
	
	| キー | 値  |
	| ---- | --- |
	| b    | B   |

	<details><summary>回答例</summary><div>
			
		delete alphabets['b'];
			
	</div></details>
		

	<br>
	
5. 41で作成した連想配列のキーを全て出力してください。 

	<details><summary>回答例</summary><div>
		
		for (let key in alphabets) {
			console.log(key);
		}
		
	</div></details>
	

	<br>
	

	
6. 41で作成した連想配列の値を全て出力してください。   

	<details><summary>回答例</summary><div>
		
		for (let key in alphabets) {
			console.log(alphabets[key]);
		}
		
	</div></details>
	

	<br>
	
7. 41で作成した連想配列のキーと値を全て出力してください。   

	<details><summary>回答例</summary><div>
		
		for (let key in alphabets) {
			console.log(key + ':' + alphabets[key]);
		}
		
	</div></details>
	

	<br>
	
8. 41で作成した連想配列のキーと値を全て出力してください。   
ただし、キーが「c」の場合出力しないでください。

	<details><summary>回答例</summary><div>
		
		for (let key in alphabets) {
			if (key != 'c') {
				console.log(key + ':' + alphabets[key]);
			}
		}
		
	</div></details>
	

	<br>

9. 41で作成した連想配列のキーと値を全て出力してください。   
ただし、値が「B」の場合出力しないでください。

	<details><summary>回答例</summary><div>
		
		for (let key in alphabets) {
			if (alphabets[key] != 'B') {
				console.log(key + ':' + alphabets[key]);
			}
		}
		
	</div></details>
	

	<br>
	
10. 41で作成した連想配列のキーと値を全て出力してください。   
ただし、キーが「b」の場合と値が「C」の場合は出力しないでください。

	<details><summary>回答例</summary><div>
		
	for (let key in alphabets) {
	    if (key != 'b' && alphabets[key] != 'C') {
	        console.log(key + ':' + alphabets[key]);
	    }
	}
		
	</div></details>
	

	<br>
