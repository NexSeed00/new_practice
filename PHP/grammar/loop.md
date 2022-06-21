# for文・while文

1. 「hoge」という文字を10回出力するプログラムを作成してください。

<details><summary>回答例</summary><div>
		
```
for ($i = 1; $i <= 10; $i++) {
    echo 'hoge';
    echo '<br>';
}
```
		
</div></details>
	

<br>
	
2. 1から10までの数字を出力するプログラムを作成してください。

<details><summary>回答例</summary><div>
		
```
for ($i = 1; $i <= 10; $i++) {
    echo $i;
    echo '<br>';
}
```
		
</div></details>
	

<br>
	
3. 九九、二の段を表示するプログラムを作成してください。

<details><summary>回答例</summary><div>
		
```
for ($i = 1; $i < 10; $i++) {
    echo $i * 2;
    echo '<br>';
}
```
		
</div></details>
	

<br>
	
4. 1から100までの数字の中から偶数のみを出力するプログラムを作成してください。

<details><summary>回答例</summary><div>
		
```
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 === 0) {
        echo $i;
        echo '<br>';
    }
}
```
		
</div></details>
	

<br>

5. 1から100までの数字を出力するプログラムを作成してください。  
ただし、数値が奇数の場合は「奇数です」と出力してください。

<details><summary>回答例</summary><div>
		
```
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 !== 0) {
        echo '奇数です';
    } else {
        echo $i;
    }
	echo '<br>';
}
```
		
</div></details>
	

<br>
	
6. 1から100までの3の倍数を出力するプログラムを作成してください。  

<details><summary>回答例</summary><div>
		
```
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 === 0) {
	    echo $i;
	    echo '<br>';
	}
}
```
		
</div></details>
	

<br>
	
7. 1から100までの5の倍数を出力するプログラムを作成してください。  

<details><summary>回答例</summary><div>
		
```
for ($i = 1; $i <= 100; $i++) {
    if ($i % 5 === 0) {
	    echo $i;
	    echo '<br>';
	}
}
```
		
</div></details>
	

<br>
	
8. 1から100までの3の倍数かつ5の倍数を出力するプログラムを作成してください。  

<details><summary>回答例</summary><div>
		
```
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 === 0 && $i % 5 === 0) {
	    echo $i;
        echo '<br>';
    }
}
```
		
</div></details>
	

<br>
	
9. 1から100までの数字を出力するプログラムを作成してください。  
ただし、3の倍数の場合は数の代わりに｢Fizz｣と出力してください。

<details><summary>回答例</summary><div>
		
```
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 === 0) {
        echo 'Fizz';
    } else {
        echo $i;
    }
    echo '<br>';
}
```
		
</div></details>
	

<br>
	
10. 1から100までの数字を出力するプログラムを作成してください。  
ただし、3の倍数の場合は数の代わりに｢Fizz｣、5の倍数のときは｢Buzz｣、3と5両方の倍数の場合には｢FizzBuzz｣と出力してください。

<details><summary>回答例</summary><div>
		
```
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 === 0 && $i % 5 === 0) {
        echo 'FizzBuzz';
    } elseif ($i % 5 === 0) {
        echo 'Buzz';
    } elseif ($i % 3 === 0) {
        echo 'Fizz';
    } else {
        echo $i;
    }
    echo '<br>';
}
```
		
</div></details>
	

<br>
	
