# ロジック・アルゴリズム問題

## Q-1. 文字列の一部を取り出してみよう

### 問題
文字列「SeedTech」から「Tech」だけを取りだしてみましょう<br>

### 準備
#### 下記コードを記載した上で、問題を解きましょう
```
$school = 'SeedTech';
```

### 正解の挙動
[![Image from Gyazo](https://i.gyazo.com/94e4f6bd1914f96ef22a97e6e0601a6f.png)](https://gyazo.com/94e4f6bd1914f96ef22a97e6e0601a6f)


### 回答例
<details><summary>ソースコード</summary><div>
	
```
$school = 'SeedTech';
echo mb_substr($school, 4, 8);
```
</div></details>

<details><summary>解説</summary><div>
文字列を取り出す方法は下記の2通りあります。<br>
- mb_substr()
- substr() <br>
日本語を使う場合、mb_substrを使うと文字化けが起こりません。<br>

- 第一引数：対象の文字列 ($school)
- 第二引数：開始位置 (0)
- 第三引数：取り出す個数 (2)
</div></details>

## Q-2. 文字列を置き換えてみよう

### 問題
文字列「SoodTech」を正しく「SeedTech」に置き換えよう

### 準備
#### 下記コードを記載した上で、問題を解きましょう
```
$school = 'SoodTech';
```

### 正解の挙動
[![Image from Gyazo](https://i.gyazo.com/c38c77e5fb860ff6d3d7303530498f6c.png)](https://gyazo.com/c38c77e5fb860ff6d3d7303530498f6c)


### 回答例
<details><summary>ソースコード</summary><div>
	
```
$school = 'SoodTech';
echo str_replace('Sood', 'Seed', $school);
```
</div></details>

<details><summary>解説</summary><div>
文字列の置き換えには、str_replace()を使用します。<br>
実務でも頻出です。
</div></details>

## Q-3. プログラム実行後、待機させよう

### 問題
プログラム実行後、2秒待機してから現在時刻を表示してみましょう

### 正解の挙動
[![Image from Gyazo](https://i.gyazo.com/bee99d621a5a2bd213772540aadf93ba.gif)](https://gyazo.com/bee99d621a5a2bd213772540aadf93ba)


### 回答例
<details><summary>ソースコード</summary><div>
	
```
date_default_timezone_set('Asia/Tokyo');
sleep(2);
echo date("Y-m-d H:i:s");
```
</div></details>

<details><summary>解説</summary><div>
待機させるには、sleep()を使用します。<br>
何か遅延させた後に行いたい処理がある場合に使用しましょう<br>
</div></details>

## Q-4. 数値判定を行おう

### 問題
数値のみを取り出して表示してみましょう

### 準備
#### 下記コードを記載した上で、問題を解きましょう
```
$list = [10, -500, 30, "1000", "1B", 0.8, [9], "5,000", 2021];
```

### 正解の挙動
[![Image from Gyazo](https://i.gyazo.com/3d682f0a490fab0a42efbbf7a94797bc.png)](https://gyazo.com/3d682f0a490fab0a42efbbf7a94797bc)


### 回答例
<details><summary>ソースコード</summary><div>
	
```
$list = [10, -500, 30, "1000", "1B", 0.8, [9], "5,000", 2021];
foreach ($list as $item) {
    if (is_numeric($item)) {
        echo $item."<br>\n";
    }
}
```
</div></details>

<details><summary>解説</summary><div>
数値判定には、is_numeric()を使用します。<br>
『配列の中身を1つ1つ取り出して並べる』ときたらforeachは鉄板ですね<br>
</div></details>

## Q-5. 最大値を求めよう

### 問題
数値のみを取り出して表示してみましょう

### 準備
#### 下記コードを記載した上で、問題を解きましょう
```
$list = [100, 1000, 550];
```

### 正解の挙動
[![Image from Gyazo](https://i.gyazo.com/1bbf3b67ba1d895a7a4d4d9d3d8eded3.png)](https://gyazo.com/1bbf3b67ba1d895a7a4d4d9d3d8eded3)


### 回答例
<details><summary>ソースコード</summary><div>
	
```
$list = [100, 1000, 550];
echo max($list);
```
</div></details>

<details><summary>解説</summary><div>
max()で最大値を取り出すこともできる<br>
逆に最小値はmin()でとりだすことができる<br>
</div></details>

## Q-6. 配列の中身を逆転させよう

### 問題
配列の中身を逆転させて1つ1つ取り出し、表示してみましょう

### 準備
#### 下記コードを記載した上で、問題を解きましょう
```
$list = ['a', 'b', 'c', 'd'];
```

### 正解の挙動
[![Image from Gyazo](https://i.gyazo.com/053649defac51a91043a7c38143803ee.png)](https://gyazo.com/053649defac51a91043a7c38143803ee)


### 回答例
<details><summary>ソースコード</summary><div>
	
```
$list = ['a', 'b', 'c', 'd'];
$list = array_reverse($list);
foreach ($list as $item) {
    echo "$item<br>";
}
```
</div></details>

<details><summary>解説</summary><div>
array_reverse()で配列の中身を逆転することができます。<br>
『配列の中身を1つ1つ取り出して並べる』ときたらforeachは鉄板ですね<br>
</div></details>

## Q-7. 文字列を分解しよう

### 問題
文字列を5文字でわけて改行し、出力してみましょう

### 準備
#### 下記コードを記載した上で、問題を解きましょう
```
$word = "ABCDEFGHIJKLMNOPQRST";
```

### 正解の挙動
[![Image from Gyazo](https://i.gyazo.com/f18ad603555bdb1bd35ed9d14e8ec925.png)](https://gyazo.com/f18ad603555bdb1bd35ed9d14e8ec925)


### 回答例
<details><summary>ソースコード</summary><div>
	
```
$word = "ABCDEFGHIJKLMNOPQRST";
$words = str_split($word, 5);
foreach ($words as $word) {
    echo $word."<br>\n";
}
```
</div></details>

<details><summary>解説</summary><div>
str_split()で指定した文字数で文字列を配列に格納できます。<br>
『配列の中身を1つ1つ取り出して並べる』ときたらforeachは鉄板ですね<br>
もう慣れてきましたかね(*^^*)
</div></details>

## Q-8. うるう年を取り出してみよう

### 問題
配列に格納している年からうるう年のみを抽出してみましょう。

### 準備
#### 下記コードを記載した上で、問題を解きましょう
```
$years = [1800, 2000, 2020, 2040];
```

### 正解の挙動
[![Image from Gyazo](https://i.gyazo.com/5345c20435259991111941689ee294b3.png)](https://gyazo.com/5345c20435259991111941689ee294b3)


### 回答例
<details><summary>ソースコード</summary><div>
	
```
$years = [1900, 2000, 2020, 2022];

foreach ($years as $year) {
  if (year($year)) {
      echo $year."<br>";
  }
}

function year($year) {
  return checkdate(2, 29, $year);
}
```
</div></details>

<details><summary>解説</summary><div>
checkdate()を使用して2月29日が存在する年なのかを判別しています<br>
</div></details>

## Q-9. クラスをつくろう

### 問題
下記から考えて、期待する出力結果になるようなクラスを定義してみよう

### 準備
#### 下記コードを記載した上で、問題を解きましょう
```
$php = new PHP('PHP', 'をマスターしよう');
$php->call();
```

### 正解の挙動
[![Image from Gyazo](https://i.gyazo.com/2052e297fd8785d12690f49299dd9aba.png)](https://gyazo.com/2052e297fd8785d12690f49299dd9aba)


### 回答例
<details><summary>ソースコード</summary><div>
	
```
class PHP {
    public $name;
    public $sentence;
    public function __construct($name, $sentence){
      $this->name = $name;
      $this->sentence = $sentence;
    }
    public function call(){
      echo $this->name . $this->sentence;
    }
  }

$php = new PHP('PHP', 'をマスターしよう');
$php->call();
```
</div></details>

<details><summary>解説</summary><div>
オブジェクト指向は慣れですよ<br>
この先ずっと付き合っていく技術になります<br>
まずは書き方を覚えましょう<br>
オブジェクト指向で分厚い1冊の本が出版されるぐらい奥が深い技術になります<br>
すべてを理解しようとしなくて良いです。<br>
まずはざっくり理解し、書き方を覚え、オブジェクト指向でかかれたコードを読めるようになりましょう
</div></details>

## Q-10. リダイレクトをしろう

### 問題
ページを開いたら（もしくはリロード）したら、https://seedtech.co.jp/ にリダイレクトされるようにコードを記載してみましょう。

### 正解の挙動
[![Image from Gyazo](https://i.gyazo.com/0a44638cbeaa93a63c3a38f05a47b983.gif)](https://gyazo.com/0a44638cbeaa93a63c3a38f05a47b983)


### 回答例
<details><summary>ソースコード</summary><div>
	
```
$url = "https://seedtech.co.jp/";
header("Location: $url");
exit;
```
</div></details>

<details><summary>解説</summary><div>
リダイレクトという言葉はよく使用するので、覚えておきましょう。<br>
リダイレクト処理を記述しても以降のプログラムはそのまま実行されるのでリダイレクト以降の処理が不要であればexitで終了し負荷を軽減しましょう。<br>
</div></details>

## Q-11. 参照渡しと値渡し

### 問題
値渡しと参照渡しについて調べてみよう<br>
その後、下記コードを出力し、理解を深めましょう

### 準備
#### 下記コードを記載した上で、問題を解きましょう

#### 値渡し
```
$a = 5;
$b = $a;  
$a = 10;  
echo $b;

// 5が出力されます
```

#### 参照渡し
```
$a = 5;
$b =& $a;  
$a = 10;   
echo $b;

// 10が出力されます
```

### 正解の挙動
[![Image from Gyazo](https://i.gyazo.com/2a8d1da35d7bf54f28c5e27814629857.png)](https://gyazo.com/2a8d1da35d7bf54f28c5e27814629857)


### 回答例
<details><summary>ソースコード</summary><div>
	
```
$a = 5;
$b = $a;  
$a = 10;  
echo $b;

echo '<br>';

$a = 5;
$b =& $a;  
$a = 10;   
echo $b;
```
</div></details>

<details><summary>解説</summary><div>
「値渡し」とは、変数に代入した値の"コピー"を渡します。<br>
「参照渡し」とは、変数に代入した値の”参照先”を渡します。<br>
</div></details>
