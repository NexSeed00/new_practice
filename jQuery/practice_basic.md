# 初級問題

## Q-1. ウィンドウサイズを変数に入れ、アラートを出してみよう。 

### 正解後の挙動
[![Image from Gyazo](https://i.gyazo.com/850131b606a81f36a761838fd9714e36.gif)](https://gyazo.com/850131b606a81f36a761838fd9714e36)


### 回答例
<details><summary>ソースコード</summary><div>
	
```
// JS
const win_width = window.innerWidth;
alert(win_width);
```
</div></details>

<details><summary>解説</summary><div>
ウィンドウの横幅も取得できるということは、高さも取得ということになります。
画面を縮めてリロードをするとアラートに出る数値が変化します。
</div></details>

## Q-2. 変数をひいてみよう。 

### 問題
変数num1に5を代入。<br>
変数num2に8を代入しふたつの変数をひいてアラートに出しましょう。


### 正解後の挙動
[![Image from Gyazo](https://i.gyazo.com/15ddb634da9fe2c0a13705572b21287e.gif)](https://gyazo.com/15ddb634da9fe2c0a13705572b21287e)


### 回答例
<details><summary>ソースコード</summary><div>
	
```
// JS
let num1 = 5;
let num2 = 8;
alert(num2 - num1);
```
</div></details>

<details><summary>解説</summary><div>
変数には整数が入っているのでそのままひくことができる。
変数をたくさん作って足したり引いたりして見ましょう。
</div></details>

## Q-3. 文字列をたしてみよう。 

### 問題
変数 text1に"リンゴ・グレープ"を代入。<br>
変数 text2に "バナナ" を代入。<br>
ふたつの変数を足して、アラートに出しましょう。<br>
ただし条件があり、"グレープ" と言う文字列は取り除きましょう。


### 正解後の挙動
[![Image from Gyazo](https://i.gyazo.com/08649dda81f6fcd8c0563fb457f5f353.gif)](https://gyazo.com/08649dda81f6fcd8c0563fb457f5f353)


### 回答例
<details><summary>ソースコード</summary><div>
	
```
// JS
let text1 = 'リンゴ・グレープ';
let text2 = 'バナナ';
let my_fruits = (text1 + text2).replace('グレープ', '');

alert(my_fruits);
```
</div></details>

<details><summary>解説</summary><div>
実践では今回のような、「特定の文字列を取り除く」条件などはよくあります。<br>
わからないことでもググって実装する力はエンジニアとしてデビューする上でも必要になってくる技術になるので、
今のうちに挑む力を身に着けておきましょう。
</div></details>

## Q-4. 文字列をたしてみよう。 

### 問題
変数 text1に"リンゴ・グレープ"を代入。<br>
変数 text2に "バナナ" を代入。<br>
ふたつの変数を足して、アラートに出しましょう。<br>
ただし条件があり、"グレープ" と言う文字列は取り除きましょう。


### 正解後の挙動
[![Image from Gyazo](https://i.gyazo.com/08649dda81f6fcd8c0563fb457f5f353.gif)](https://gyazo.com/08649dda81f6fcd8c0563fb457f5f353)


### 回答例
<details><summary>ソースコード</summary><div>
	
```
// JS
let text1 = 'リンゴ・グレープ';
let text2 = 'バナナ';
let my_fruits = (text1 + text2).replace('グレープ', '');

alert(my_fruits);
```
</div></details>

<details><summary>解説</summary><div>
実践では今回のような、「特定の文字列を取り除く」条件などはよくあります。<br>
わからないことでもググって実装する力はエンジニアとしてデビューする上でも必要になってくる技術になるので、
今のうちに挑む力を身に着けておきましょう。
</div></details>

## Q-5. 5秒経過後にアラートを出力しよう 

### 問題
リロードしてから5秒後に、アラートを出力してみましょう


### 正解後の挙動
[![Image from Gyazo](https://i.gyazo.com/8cb4234e239f9680ab2c35be1b2608be.gif)](https://gyazo.com/8cb4234e239f9680ab2c35be1b2608be)


### 回答例
<details><summary>ソースコード</summary><div>
	
```
// JS
setTimeout(function() {
 alert('5秒経過');
}, 5000);
```
</div></details>

<details><summary>解説</summary><div>
数秒経過後というのは、setTimeoutを使用します<br>
5秒を表しているのが、5000という表記です。<br>
数字をかえて色々試してみましょう。
</div></details>

## Q-6. 配列から値を取得しよう 

### 問題
変数fruitsに配列を代入しよう
代入する果物は "リンゴ"、"グレープ"、"バナナ"　の3つ
代入ができたら、 "グレープ" をアラートに出して見よう。


### 正解後の挙動
[![Image from Gyazo](https://i.gyazo.com/4cb60791cca08ece363dc8405df3f4d9.gif)](https://gyazo.com/4cb60791cca08ece363dc8405df3f4d9)


### 回答例
<details><summary>ソースコード</summary><div>
	
```
// JS
const fruits = ["リンゴ", "グレープ", "バナナ"];
alert(fruits[1]);
```
</div></details>

<details><summary>解説</summary><div>
プログラミングでは0番目から数えるのが一般的です。<br>
今回はグレープを出力したいので、1番目ということになります。<br>
実務でも配列のの取り出し方はとても大事になってきます。<br>
早い段階で慣れていきましょう。
</div></details>

## Q-7. タグの数を取得しよう 

### 問題
liタグの数を取得してアラートに出して見よう。<br>
jQueryを使用しよう。

### 準備
#### 下記コードを記載した上で、問題を解きましょう
```
// HTML
<ul class="list">
    <li>リンゴ</li>
    <li>オレンジ</li>
    <li>グレープ</li>
    <li>マンゴー</li>
    <li>パイナップル</li>
</ul>
```

```
// CSS
ul{
  margin: 0 auto 0 auto;
  display: flex;
  list-style: none;
  color: #ffffff;
}
li{
  height: 100px;
  width: 100px;
  background-color: #3E2D21;
  margin-right: 10px;
}
```

### 正解後の挙動
[![Image from Gyazo](https://i.gyazo.com/414a2c128e75f3cd62cb3f0960babe45.gif)](https://gyazo.com/414a2c128e75f3cd62cb3f0960babe45)


### 回答例
<details><summary>ソースコード</summary><div>
	
```
// HTML

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./q6.css">
  <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="crossorigin="anonymous"></script>
  <script src="./app.js"></script>
</head>
<body>
  <ul class="list">
    <li>リンゴ</li>
    <li>オレンジ</li>
    <li>グレープ</li>
    <li>マンゴー</li>
    <li>パイナップル</li>
  </ul>
</body>
</html>
```

```
// CSS
ul{
  margin: 0 auto 0 auto;
  display: flex;
  list-style: none;
  color: #ffffff;
}
li{
  height: 100px;
  width: 100px;
  background-color: #3E2D21;
  margin-right: 10px;
}
```

```
JS
$(function(){
  alert('liタグの数は' + $('li').length + '個です！');
});
```
</div></details>

<details><summary>解説</summary><div>
数を取得するには「length」プロパティを使用します。<br>
基本的にはどのプログラミング言語でも数を取得するプロパティやメソッドが用意されている。<br>
lengthというのを覚えている必要はなくて、【数を取得する】技術があるというのを知っておくことが大事です。<br>
ググれるようになることが大切です！全ての知識を覚えきるのは難しいですからね。
</div></details>

## Q-7. クラスのつけ剥がしをしよう

### 問題
CSSクラスのつけはがしをしてみましょう<br>
jQueryを使用しよう。

### 準備
#### 下記コードを記載した上で、問題を解きましょう
```
// HTML
<p>クリックしたら文字を黒色→青色→黒色に変更しましょう</p>
```

```
// CSS
p.is-active {
    color: blue;
}
```

### 正解後の挙動
[![Image from Gyazo](https://i.gyazo.com/688fbbe01bf85fe5f44e3c1b2cd815fa.gif)](https://gyazo.com/688fbbe01bf85fe5f44e3c1b2cd815fa)


### 回答例
<details><summary>ソースコード</summary><div>
	
```
// HTML
<!-- jqueryの読み込み -->
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="crossorigin="anonymous"></script>

<p>クリックしたら文字を黒色→青色→黒色に変更しましょう</p>
```

```
// CSS
p.is-active {
  color:blue;
}
```

```
JS
$(function() {
  $('p').click(function() {
    $(this).toggleClass('is-active');
  });
})
```
</div></details>

<details><summary>解説</summary><div>
classのつけはがしには、toggleClass()メソッドを使用します。<br>
クリックイベントなどで毎回クラスをつけたりはがしたりするのに最適なメソッドです。<br>
実務頻出技術です！！<br>
アコーディオンなどやハンバーガメーニューの実装時に使用します
</div></details>

## Q-7. 要素の先頭に子要素を追加しよう

### 問題
文頭に文字要素を追加してみましょう<br>
jQueryを使用しよう。

### 準備
#### 下記コードを記載した上で、問題を解きましょう
```
// HTML
<div class="target">
    <p>テキスト2</p>
    <p>テキスト3</p>
    <p>テキスト4</p>
    <p>テキスト5</p>
    <p>テキスト6</p>
</div>
```

### 正解後の挙動
[![Image from Gyazo](https://i.gyazo.com/1309ab8e2061cfcc08fb9cd5ac25cfb1.gif)](https://gyazo.com/1309ab8e2061cfcc08fb9cd5ac25cfb1)


### 回答例
<details><summary>ソースコード</summary><div>
	
```
// HTML
<!-- jqueryの読み込み -->
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>

<div class="target">
    <p>テキスト2</p>
    <p>テキスト3</p>
    <p>テキスト4</p>
    <p>テキスト5</p>
    <p>テキスト6</p>
</div>
```

```
JS
$(function() {
  $('.target').prepend('<p>テキスト1</p>');
})
```
</div></details>

<details><summary>解説</summary><div>
親要素の下の子要素先頭に追加する際にはprevend()を使用します。
</div></details>

## Q-8. 要素の最後に子要素を追加しよう

### 問題
文末に文字要素を追加してみましょう<br>
jQueryを使用しよう。

### 準備
#### 下記コードを記載した上で、問題を解きましょう
```
// HTML
<div class="target">
    <p>テキスト1</p>
    <p>テキスト2</p>
    <p>テキスト3</p>
    <p>テキスト4</p>
    <p>テキスト5</p>
</div>
```

### 正解後の挙動
[![Image from Gyazo](https://i.gyazo.com/d23c80609af40251ed3e3d4708269fda.gif)](https://gyazo.com/d23c80609af40251ed3e3d4708269fda)


### 回答例
<details><summary>ソースコード</summary><div>
	
```
// HTML
<!-- jqueryの読み込み -->
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>

<div class="target">
    <p>テキスト1</p>
    <p>テキスト2</p>
    <p>テキスト3</p>
    <p>テキスト4</p>
    <p>テキスト5</p>
</div>
```

```
JS
$(function() {
  $('.target').append('<p>テキスト6</p>');
})
```
</div></details>

<details><summary>解説</summary><div>
親要素の下の子要素末に追加する際にはappend()を使用します。
</div></details>

## Q-9. 要素を表示しよう

### 問題
クリックした際に文字を表示させてみましょう。<br>
jQueryを使用しよう。

### 準備
#### 下記コードを記載した上で、問題を解きましょう
```
// HTML
<div class="trigger" style="margin-bottom: 30px;">クリック</div>
<div class="target" style="display: none;">学習がんばれ〜〜〜</div>
```

### 正解後の挙動
[![Image from Gyazo](https://i.gyazo.com/d23c80609af40251ed3e3d4708269fda.gif)](https://gyazo.com/d23c80609af40251ed3e3d4708269fda)


### 回答例
<details><summary>ソースコード</summary><div>
	
```
// HTML
<!-- jqueryの読み込み -->
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>

<div class="target">
    <p>テキスト1</p>
    <p>テキスト2</p>
    <p>テキスト3</p>
    <p>テキスト4</p>
    <p>テキスト5</p>
</div>
```

```
JS
$(function() {
  $('.target').append('<p>テキスト6</p>');
})
```
</div></details>

<details><summary>解説</summary><div>
親要素の下の子要素末に追加する際にはappend()を使用します。
</div></details>