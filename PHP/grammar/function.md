# 関数

1. 以下の関数を作成して実行してください。

関数名：printHoge  
処理内容：「Hoge」と出力する

<details><summary>回答例</summary><div>
		
```
function printHoge()
{
    echo "Hoge";
}

printHoge();
```
		
</div></details>
	

<br>
	
2. 以下の関数を作成して実行してください。

関数名：printNum  
引数：1つの数値  
処理内容：引数で受け取った数値を出力する

<details><summary>回答例</summary><div>
		
```
function printNum($num) 
{
    echo $num;
}
	
printNum(4);
```
		
</div></details>
	

<br>
	
3. 以下の関数を作成して実行してください。

関数名：printKuku  
引数：1つの数値  
処理内容：引数で受け取った数値の九九（1から9までかけた数）を出力する

<details><summary>回答例</summary><div>
		
```
function printKuku($num) {
    for ($i = 1; $i <= 9; $i++) {
        echo $num * $i;
	    echo '<br>';
    }
}
	
printKuku(4);
```
		
</div></details>
	

<br>
	
4. 以下の関数を作成して実行してください。

関数名：printIsEven  
引数：1つの数値  
処理内容：引数で受け取った数値が偶数の場合は「偶数です」と出力し、奇数の場合は「奇数です」と出力する

<details><summary>回答例</summary><div>
		
```
function printIsEven($num) {
    if ($num % 2 === 0) {
        echo "偶数です";
    } else {
        echo "奇数です";
    }
}
	
printIsEven(3);
```
		
</div></details>
	

<br>
	
5. 以下の関数を作成して実行してください。

関数名：printMessage  
引数1：1つの文字列  
引数2：1つの数字  
処理内容：引数で受け取った文字列を、引数で受け取った数値分繰り返し出力する
	
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
function printMessage($str, $count) {
    for ($i = 0; $i < $count; $i++) {
        echo $str;
        echo '<br>';
     }
}
	
printMessage("ABC", 3);
```
		
</div></details>
	

<br>
	
6. 以下の関数を作成して実行してください。

関数名：printMaxNum  
引数1：1つの数値  
引数2：1つの数値  
処理内容：引数で受け取った2つの数値のうち、最も大きな数値を出力する。  
数値が同じ場合は「同じと出力する」
<details><summary>回答例</summary><div>
		
```
function printMaxNum($num1, $num2) {
    if ($num1 > $num2) {
        echo $num1;
    } elseif ($num1 < $num2) {
        echo $num2;
    } else {
        echo '同じ';
    }
}
	
printMaxNum(4, 5);
```
		
</div></details>
	

<br>
	
7. 以下の関数を作成して実行してください。

関数名：getSquared  
引数1：1つの数値  
処理内容：引数で受け取った数値の2乗を計算し返す
	
例
	
```
$result = getSquared(4);
    echo $result;
	
// 実行結果
16
```
	
<details><summary>回答例</summary><div>
		
```
function getSquared($num) {
    return $num * $num;
}
	
$result = getSquared(4);
echo $result;
```
		
</div></details>
	

<br>
	
8. 以下の関数を作成して実行してください。

関数名：profile
引数1：1つの文字列  
処理内容：「私の名前は○○です」という文字の〇〇を引数で受け取った文字列にして返す
	
例
	
```
$message = profile("Taro");
echo $message;
	
// 実行結果
私の名前はTaroです
```
	
<details><summary>回答例</summary><div>
		
```
function profile($name) {
    $msg = '私の名前は' . $name . 'です';
    return $msg;

	
$message = profile("Taro");
echo $message;
```
		
</div></details>
	

<br>
	
9. 以下の関数を作成して実行してください。

関数名：isEvenNumber  
引数1：1つの数値  
処理内容：引数で渡された値が偶数の場合は true、そうでない場合は false を返す。
	
例
	
```
$result = isEvenNumber(3);
echo $result;
	
// 実行結果
bool(false)
```
	
<details><summary>回答例</summary><div>
		
```
function isEvenNumber($num) {
    if ($num % 2 == 0) {
        return true;
    } else {
	return false;
    }
}
	
$result = isEvenNumber(3);
var_dump($result);
```
		
</div></details>
	

<br>
	
10. 以下の関数を作成して実行してください。

関数名：isTaro
引数1：任意の文字列  
処理内容：引数で渡された文字列が「Taro」の場合は true、そうでない場合は false を返す。

例
	
```
$result = isTaro("Taro");
echo $result;
	
// 実行結果
bool(true)
```

	
<details><summary>回答例</summary><div>
		
```
function isTaro($str) {
    if ($str == "Taro") {
        return true;
    } else {
	return false;
    }
 }
	
$result = isTaro("Taro");
var_dump($result);
```
		
</div></details>
	

<br>
