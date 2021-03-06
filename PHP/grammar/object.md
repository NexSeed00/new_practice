# 連想配列

1. 以下のような連想配列を作成してください。  

	変数名: alphabet
	
 | キー | 値  |
 | ---- | --- |
 | a    | A   |
 | b    | B   |
 | c    | C   |
 | d    | D   |


<details><summary>回答例</summary><div>
		
```
$alphabet = [
    'a' => 'A',
    'b' => 'B',
    'c' => 'C',
    'd' => 'D',
];
```
		
</div></details>
	

<br>
	
2. 1で作成した連想配列に以下の値を追加してください。  
	
 | キー | 値  |
 | ---- | --- |
 | e    | E   |

<details><summary>回答例</summary><div>
		
```
$alphabet['e'] = 'E';
```
		
</div></details>
	

<br>
	
	
3. 1で作成した連想配列の以下の値を更新してください。  
	
 | キー | 値  |
 | ---- | --- |
 | a    | AAA |

<details><summary>回答例</summary><div>
		
```
$alphabet['a'] = 'AAA';
```
		
</div></details>
	

<br>
	
4. 1で作成した連想配列の以下の値を削除してください。  
	
 | キー | 値  |
 | ---- | --- |
 | b    | B   |

<details><summary>回答例</summary><div>
		
```
unset($alphabet['b']);
var_dump($alphabet);
```
		
</div></details>
	

<br>
	
5. 1で作成した連想配列のキーを全て出力してください。 

<details><summary>回答例</summary><div>
		
```
foreach ($alphabet as $key => $value) {
    echo $key;
    echo '<br>';
}
```
		
</div></details>
	

<br>
	

	
6. 1で作成した連想配列の値を全て出力してください。   

<details><summary>回答例</summary><div>
		
```
foreach ($alphabet as $value) {
    echo $value;
    echo '<br>';
}
```
		
</div></details>
	

<br>
	
7. 1で作成した連想配列のキーと値を全て出力してください。   

```
// 出力例
a: AAA
b: B
c: C
d: D
e: E
```

<details><summary>回答例</summary><div>
		
```
foreach ($alphabet as $key => $value) {
    echo $key . ': ' . $value;
    echo '<br>';
}
```
		
</div></details>
	

<br>
	
8. 1で作成した連想配列のキーと値を全て出力してください。   
ただし、キーが「c」の場合出力しないでください。

<details><summary>回答例</summary><div>
		
```
foreach ($alphabet as $key => $value) {
    if ($key !== 'c') {
        echo $key . ': ' . $value;
        echo '<br>';
    }
}
```
		
</div></details>
	

<br>

9. 1で作成した連想配列のキーと値を全て出力してください。   
ただし、値が「B」の場合出力しないでください。

<details><summary>回答例</summary><div>
		
```
foreach ($alphabet as $key => $value) {
    if ($value !== 'B') {
        echo $key . ': ' . $value;
        echo '<br>';
    }
}
```
		
</div></details>
	

<br>
	
10. 1で作成した連想配列のキーと値を全て出力してください。   
ただし、キーが「b」の場合または値が「C」の場合は出力しないでください。

<details><summary>回答例</summary><div>
		
```
foreach ($alphabet as $key => $value) {
    if ($key !== 'b' || $value !== 'C') {
        echo $key . ': ' . $value;
        echo '<br>';
    }
}
```
		
</div></details>
	

<br>
