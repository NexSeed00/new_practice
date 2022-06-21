# 初級問題

## Q-1. ウィンドウサイズを変数に入れ、アラートを出してみよう。 

### 正解の挙動
<img src="https://i.gyazo.com/850131b606a81f36a761838fd9714e36.gif" alt="">

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

## Q-2. 変数を引いてみよう。 

### 問題
変数num1に5を代入、変数num2に8を代入し、二つの変数を引いた数をアラートに表示してください。


### 正解の挙動
<img src="https://i.gyazo.com/15ddb634da9fe2c0a13705572b21287e.gif" alt="">

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
変数には整数が入っているのでそのまま引くことができます。
変数をたくさん作って足したり引いたりしてみましょう。
</div></details>

## Q-3. 文字列をたしてみよう。 

### 問題
変数 text1に"リンゴ・グレープ"を代入、変数 text2に "バナナ" を代入し、二つの変数を足した数をアラートに表示してください。<br>
ただし条件があり、"グレープ" という文字列は取り除いてください。


### 正解の挙動
<img src="https://i.gyazo.com/08649dda81f6fcd8c0563fb457f5f353.gif" alt="">

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
分からないことでも調べて実装する力はエンジニアとしてデビューする上でも必要になってくる技術になるので、
今のうちに挑む力を身に着けておきましょう。
</div></details>

## Q-4. 5秒経過後にアラートを出力しよう 

### 問題
リロードしてから5秒後に、アラートを表示させてください。


### 正解の挙動
<img src="https://i.gyazo.com/8cb4234e239f9680ab2c35be1b2608be.gif" alt="">

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
数秒経過後というのは、setTimeoutを使用します。<br>
5秒を表しているのが、5000という表記です。<br>
数字を変えて色々試してみましょう。</div></details>

## Q-5. 配列から値を取得しよう 

### 問題
変数fruitsに配列を代入してください。
代入する果物は "リンゴ"、"グレープ"、"バナナ"　の3つで、代入ができたら、 "グレープ" をアラートに表示させてください。


### 正解の挙動
<img src="https://i.gyazo.com/4cb60791cca08ece363dc8405df3f4d9.gif" alt="">

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
実務でも配列の取り出し方はとても大事になってきます。<br>
早い段階で慣れていきましょう。
</div></details>

## Q-6. タグの数を取得しよう 

### 問題
jQueryを使用してliタグの数を取得しアラートに表示してください。<br>

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

### 正解の挙動
<img src="https://i.gyazo.com/414a2c128e75f3cd62cb3f0960babe45.gif" alt="">

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
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
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
// JS
$(function(){
  alert('liタグの数は' + $('li').length + '個です！');
});
```
</div></details>

<details><summary>解説</summary><div>
数を取得するには「length」プロパティを使用します。<br>
基本的にはどのプログラミング言語でも数を取得するプロパティやメソッドが用意されています。<br>
lengthというのを覚えている必要はなく、【数を取得する】技術があるというのを知っておくことが大事です。
</div></details>

## Q-7. クラスのつけ剥がしをしよう

### 問題
jQueryを使用してCSSクラスのつけ剥がしを行ってください。

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

### 正解の挙動
<img src="https://i.gyazo.com/688fbbe01bf85fe5f44e3c1b2cd815fa.gif" alt="">

### 回答例
<details><summary>ソースコード</summary><div>
	
```
// HTML
<!-- jqueryの読み込み -->
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>

<p>クリックしたら文字を黒色→青色→黒色に変更しましょう</p>
```

```
// CSS
p.is-active {
  color:blue;
}
```

```
// JS
$(function() {
  $('p').click(function() {
    $(this).toggleClass('is-active');
  });
})
```
</div></details>

<details><summary>解説</summary><div>
classのつけ剥がしには、toggleClass()メソッドを使用します。<br>
クリックイベントなどで毎回クラスをつけたりはがしたりするのに最適なメソッドで、実務ではよく使われる技術になります。<br>
例えば、アコーディオンなどやハンバーガメーニューの実装時に使用します。
</div></details>

## Q-8. 要素の先頭に子要素を追加しよう

### 問題
jQueryを使用して文頭に文字要素を追加してください。

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

### 正解の挙動
<img src="https://i.gyazo.com/1309ab8e2061cfcc08fb9cd5ac25cfb1.gif" alt="">

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
// JS
$(function() {
  $('.target').prepend('<p>テキスト1</p>');
})
```
</div></details>

<details><summary>解説</summary><div>
親要素の下の子要素先頭に追加する際にはprevend()を使用します。
</div></details>

## Q-9. 要素の最後に子要素を追加しよう

### 問題
jQueryを使用して文末に文字要素を追加してください。

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

### 正解の挙動
<img src="https://i.gyazo.com/d23c80609af40251ed3e3d4708269fda.gif" alt="">

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
// JS
$(function() {
  $('.target').append('<p>テキスト6</p>');
})
```
</div></details>

<details><summary>解説</summary><div>
親要素の下の子要素末に追加する際にはappend()を使用します。
</div></details>

## Q-10. 要素を表示しよう

### 問題
jQueryを使用してクリックした際に文字を表示させてください。

### 準備
#### 下記コードを記載した上で、問題を解きましょう
```
// HTML
<div class="trigger" style="margin-bottom: 30px;">クリック</div>
<div class="target" style="display: none;">学習がんばれ〜〜〜</div>
```

### 正解の挙動
<img src="https://i.gyazo.com/9aa4a9efaac60a1f1d3d81b591f7a582.gif" alt="">

### 回答例
<details><summary>ソースコード</summary><div>
	
```
// HTML
<!-- jqueryの読み込み -->
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>

<div class="trigger" style="margin-bottom: 30px;">クリック</div>
<div class="target" style="display: none;">学習がんばれ〜〜〜</div>
```

```
// JS
$(function() {
  $('.trigger').click(function() {
    $('.target').show();
  });
})
```
</div></details>

<details><summary>解説</summary><div>
クリックされる前にはcssでdisplay:none;を当てておき、クリックされたら、show()をつかって表示します。<br>
こちらも実務で良く使われるものになります。
</div></details>

## Q-11. 要素を削除しよう

### 問題
jQueryを使用してクリックした際に文字を削除してください。

### 準備
#### 下記コードを記載した上で、問題を解きましょう
```
// HTML
<div class="trigger" style="margin-bottom: 30px;">クリック</div>
<div class="target">少しだけ学習さぼってしまおうかな〜〜〜</div>
```

### 正解の挙動
<img src="https://i.gyazo.com/81bbe74d64329745c928c425a927cba4.gif" alt="">

### 回答例
<details><summary>ソースコード</summary><div>
	
```
// HTML
<!-- jqueryの読み込み -->
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>

<div class="trigger" style="margin-bottom: 30px;">クリック</div>
<div class="target">少しだけ学習さぼってしまおうかな〜〜〜</div>
```

```
// JS
$(function() {
  $('.trigger').click(function() {
    $('.target').hide();
  });
})
```
</div></details>

<details><summary>解説</summary><div>
クリックされた後に、要素を消すdisplay;noneを付与するためには、hide()を使用します。
</div></details>

## Q-12. 要素をフェードインさせてみよう

### 問題
jQueryを使用してクリックしたら文字をフェードインで出現させてください。

### 準備
#### 下記コードを記載した上で、問題を解きましょう
```
// HTML
<div class="trigger" style="margin-bottom: 30px;">クリックしてください</div>
<div class="target" style="display: none;">プログラミングが楽しくなってきた！！</div>
```

### 正解の挙動
<img src="https://i.gyazo.com/e9e5ba47cd49220cb98c316f5dc003af.gif" alt="">

### 回答例
<details><summary>ソースコード</summary><div>
	
```
// HTML
<!-- jqueryの読み込み -->
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>

<div class="trigger" style="margin-bottom: 30px;">クリックしてください</div>
<div class="target" style="display: none;">プログラミングが楽しくなってきた！！</div>
```

```
// JS
$(function() {
  $('.trigger').click(function() {
    $('.target').fadeIn("2500");
  });
})
```
</div></details>

<details><summary>解説</summary><div>
display:noneが付与されている要素のフェードインは、fadeIn()を使用します。<br>
fadeInメソッドにはオプションがあります。<br>
例）fadeIn("2500"); fadeIn("normal"); fadeIn("slow"); <br>
引数を操作します<br>
<br>
1000 = 1秒 のスピードになります。
2500 = 2.5秒
</div></details>

## Q-13. 要素をフェードアウトさせてみよう

### 問題
jQueryを使用してクリックしたら文字をフェードアウトさせてください。

### 準備
#### 下記コードを記載した上で、問題を解きましょう
```
// HTML
<div class="trigger" style="margin-bottom: 30px;">クリックしてください</div>
<div class="target">明日から本気だそう</div>
```

### 正解の挙動
<img src="https://i.gyazo.com/026c22b46f19d40d0b917393e9f48d32.gif" alt="">

### 回答例
<details><summary>ソースコード</summary><div>
	
```
// HTML
<!-- jqueryの読み込み -->
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>

<div class="trigger" style="margin-bottom: 30px;">クリックしてください</div>
<div class="target">明日から本気だそう</div>
```

```
// JS
$(function() {
  $('.trigger').click(function() {
    $('.target').fadeOut("slow");
  });
})
```
</div></details>

<details><summary>解説</summary><div>
要素のフェードアウトは、fadeOut()を使用します。<br>
fadeOut()にもfadeIn()と同様にオプションがあります。
</div></details>
