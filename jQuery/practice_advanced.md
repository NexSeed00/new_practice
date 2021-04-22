# 中・上級問題

## Q-1. 要素の横幅を取得してみよう。 

## 問題
要素の横幅と縦幅を取得し、アラートにだしてみましょう。

### 準備
#### 下記コードを記載した上で、問題を解きましょう
```
// HTML
<div class="box"></div>
```

```
// CSS
.box {
  width: 200px;
  height: 200px;
  background-color: #3E2D21;
}
```

### 正解の挙動
[![Image from Gyazo](https://i.gyazo.com/bf2f9c4d6610ffaf8b77a19fc19abd13.gif)](https://gyazo.com/bf2f9c4d6610ffaf8b77a19fc19abd13)


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
  <link rel="stylesheet" href="./q1.css">
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <script src="./app.js"></script>
</head>
<body>
  <div class="box"></div>
</body>
</html>
```

```
// CSS
.box {
  width: 200px;
  height: 200px;
  background-color: #3E2D21;
}
```

```
// JS
$(function(){
  alert('横幅:' + $('.box').width() + ', 縦幅:' + $('.box').height());
});

```
</div></details>

<details><summary>解説</summary><div>
width()で横幅、height()で縦幅を取得できます。
</div></details>

## Q-2. カラーピッカーで取得した色を反映させてみよう

### 問題
カラーピッカーで取得した色を「Seed Tech School」に反映させてみましょう。

### 準備
#### 下記コードを記載した上で、問題を解きましょう
```
// HTML
<h1 id="title">Seed Tech School</h1>
<input type="color" id="color-change">
```

```
// CSS
#title{
  text-align: center;
  margin-top: 300px;
  font-size: 100px;
}
#color-change{
  display: block;
  margin: 0 auto;
  width: 100px;
}
```


### 正解の挙動
[![Image from Gyazo](https://i.gyazo.com/f2c3d2a9e59e985ee931e1815141643d.gif)](https://gyazo.com/f2c3d2a9e59e985ee931e1815141643d)


### 回答例
<details><summary>ソースコード</summary><div>

```
// HTML
<!-- jqueryの読み込み -->
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>

<h1 id="title">Seed Tech School</h1>
<input type="color" id="color-change">
```

```
// CSS
#title{
  text-align: center;
  margin-top: 300px;
  font-size: 100px;
}
#color-change{
  display: block;
  margin: 0 auto;
  width: 100px;
}
```
	
```
// JS
$(function(){
  $('#color-change').on("change", function(){
    let select_color = $(this).val();
    $('#title').css('color', select_color);
  });
});
```
</div></details>

<details><summary>解説</summary><div>
HTMLには様々な種類のinputがあるが、基本的にはどのタイプも値を取得することができます。<br>
値の取得は「.val()」を使用します。<br>
実務でも頻出のため、覚えておきましょう。
</div></details>

## Q-3. inputの値を取得する練習をしよう 

### 問題
inputタグに入力した値を取得して、自分の誕生日なら「Happy Birthday」と表示させよう。

### 準備
#### 下記コードを記載した上で、問題を解きましょう
```
// HTML
<div class="input-group">
    <h1>Happy Birthday</h1> 
  <input type="date" id="birthday" value="2020-01-29" placeholder="お誕生日">
</div>
```

```
// CSS
h1{
  text-align: center;
  font-size: 50px;
  width: 100%;
  font-weight: bold;
  color: #458fa0;
  display: none;
}
.input-group{
  width: 500px;
  margin: 300px auto 0 auto;
}
```

### 正解の挙動
[![Image from Gyazo](https://i.gyazo.com/2a5f699de0b94c6b9704ee4368eeae55.gif)](https://gyazo.com/2a5f699de0b94c6b9704ee4368eeae55)


### 回答例
<details><summary>ソースコード</summary><div>
	

```
// HTML
<!-- jqueryの読み込み -->
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>

<div class="input-group">
    <h1>Happy Birthday</h1> 
    <input type="date" id="birthday" value="2020-01-29" placeholder="お誕生日">
</div>
```

```
// CSS
h1{
  text-align: center;
  font-size: 50px;
  width: 100%;
  font-weight: bold;
  color: #458fa0;
  display: none;
}
.input-group{
  width: 500px;
  margin: 300px auto 0 auto;
}
```

```
// JS
$(function(){
  const birthday = '2013-01-29'; //ここはご自分の誕生日にする
  $('#birthday').on("change", function(){
    if( $(this).val() == birthday){
      $('h1').fadeIn();
    }
  });
});
```
</div></details>

<details><summary>解説</summary><div>
$('#birthday').on("change", function(){} → この記述でinputの値に変更があった場合の検知ができます。
検知後、「$(this).val()」で値を取得して判別しましょう。
</div></details>

## Q-4. 配列の一番最後を削除してみよう

### 問題
- 配列 array を定義
- 1,2,3,4 を代入
- 1番後ろの4を削除してアラートに表示


### 正解の挙動
[![Image from Gyazo](https://i.gyazo.com/2968ce3cb412b63f448750f1e5fc8eaa.gif)](https://gyazo.com/2968ce3cb412b63f448750f1e5fc8eaa)


### 回答例
<details><summary>ソースコード</summary><div>
	
```
// JS
let array = [1,2,3,4];
array.pop();
alert(array);
```
</div></details>

<details><summary>解説</summary><div>
pop()を使用すると配列の最後の要素を削除することができます。<br>
配列の一番最後を削除するというのは、実務でもよく使用します。<br>
これはJavaScript特有のものではありません。プログラミングでよくあるパターンであり、他の言語でも同じ様に配列の最後を削除する技術はあります。
</div></details>

## Q-5. 最大値を取得してみよう

### 問題
- array を定義
- [35,80,512,578,90] を代入
- 最大値をアラートに表示


### 正解の挙動
[[![Image from Gyazo](https://i.gyazo.com/b132288ce044fbc0cceee42b9f314d06.gif)](https://gyazo.com/b132288ce044fbc0cceee42b9f314d06)


### 回答例
<details><summary>ソースコード</summary><div>
	
```
// JS
const array = [35,80,512,578,90];
alert(Math.max(...array));
```
</div></details>

<details><summary>解説</summary><div>
配列の最大値を求めるには、Math.maxを使います。<br>
書き方が特殊ですが、現段階では覚えてしまいましょう
</div></details>

## Q-6. 要素をコピーしよう

### 問題
『コピーする』をクリックしたらulの中の最後に複製したliをコピーしてみましょう。

### 準備
#### 下記コードを記載した上で、問題を解きましょう
```
// HTML
<div class="clone">コピーする</div>
<ul>
    <li>コピーされたもの</li>
</ul>
```


### 正解の挙動
[![Image from Gyazo](https://i.gyazo.com/fbe6f2822075454882e2c4b1c83c2e4d.gif)](https://gyazo.com/fbe6f2822075454882e2c4b1c83c2e4d)


### 回答例
<details><summary>ソースコード</summary><div>
	
```
// HTML

<!-- jqueryの読み込み -->
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<div class="clone">コピーする</div>
  <ul>
      <li>コピーされたもの</li>
</ul>

```
```
// JS
$(function(){
  $('.clone').on('click', function(){
   let li_clone = $('li').eq(0).clone();
   $('ul').append(li_clone);
  });
 });
```

</div></details>

<details><summary>解説</summary><div>
コピーするにはclone()を使用します。
</div></details>

## Q-7. 横スクロール値を取得しよう

### 問題
.x-scrollの横スクロール値を.scroll-valに表示させてみましょう。

### 準備
#### 下記コードを記載した上で、問題を解きましょう
```
// HTML
<div class="scroll-val">0</div>
<div class="x-scroll">SeedTechSchooleedTechSchooleedTechSchooleedTechSchooleedTechSchooleedTechSchooleedTechSchooleedTechSchooleedTechSchooleedTechSchooleedTechSchooleedTechSchooleedTechSchool</div>

```

```
// CSS
.x-scroll{
  width: 200px;
  padding: 30px 30px;
  background-color: gray;
  overflow-x:scroll;
  white-space: nowrap;
}
```

### 正解の挙動
[![Image from Gyazo](https://i.gyazo.com/6f388ddce525c7e6433b5d28963199ac.gif)](https://gyazo.com/6f388ddce525c7e6433b5d28963199ac)


### 回答例
<details><summary>ソースコード</summary><div>
	
```
// HTML
<!-- jqueryの読み込み -->
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>

<div class="scroll-val">0</div>
<div class="x-scroll">SeedTechSchooleedTechSchooleedTechSchooleedTechSchooleedTechSchooleedTechSchooleedTechSchooleedTechSchooleedTechSchooleedTechSchooleedTechSchooleedTechSchooleedTechSchool
</div>
```

```
// CSS
.x-scroll{
  width: 500px;
  padding: 30px 30px;
  background-color: gray;
  overflow-x:scroll;
  white-space: nowrap;
}
```

```
// JS
$(function(){
  $('.x-scroll').on('scroll', function(){
   let scroll_val = $(this).scrollLeft();
   $('.scroll-val').text(scroll_val);
  });
 });
```
</div></details>

<details><summary>解説</summary><div>
横スクロールの値はscrollLeft()で取得します。scrollTop()は縦のスクロールが取れます。<br>
縦と横の両方取得でき、『あるスクロール値になれば...ポップアップを表示する』などで実務ではよく使用します 。<br>
縦でも横でも値をとれるようにしておきましょう。
</div></details>

## Q-8. 要素内の最後に要素を追加してみよう

### 問題
『追加』をclickしたら、.valの最後にinputの値が追加されるようにしてみましょう。

### 準備
#### 下記コードを記載した上で、問題を解きましょう
```
// HTML
<div class="val"></div>
<input type="text">
<div class="add">追加</div>
```

### 正解の挙動
[![Image from Gyazo](https://i.gyazo.com/78fe7b59013b413f409edeefd77cc1ad.gif)](https://gyazo.com/78fe7b59013b413f409edeefd77cc1ad)


### 回答例
<details><summary>ソースコード</summary><div>
	
```
// HTML
<!-- jqueryの読み込み -->
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>

<div class="val"></div>
<input type="text">
<div class="add">追加</div>
```

```
// JS
$(function(){
  $('.add').on('click', function(){
   $('.val').append($('input').val());
  });
 });
```
</div></details>

<details><summary>解説</summary><div>
 $('input').val()) の表記、非常に頻出の記載方法です。覚えてしまって損はないでしょう。<br>
 append()で要素の最後に追加することができます。

</div></details>

## Q-9. ダブルクリック時の処理をしろう

### 問題
.doubleをダブルclickしたら、アラートに "ダブルクリックされました" と出力しましょう。
jQueryを使用しよう。

### 準備
#### 下記コードを記載した上で、問題を解きましょう
```
// HTML
<div class="double">ダブルクリック</div>
```

### 正解の挙動
[![Image from Gyazo](https://i.gyazo.com/d6b3efc790a5c167860408446154ff3f.gif)](https://gyazo.com/d6b3efc790a5c167860408446154ff3f)


### 回答例
<details><summary>ソースコード</summary><div>
	
```
// HTML
<!-- jqueryの読み込み -->
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>

<div class="double">ダブルクリック</div>
```

```
// JS
$(function(){
  $('.double').on('dblclick', function(){
   alert("ダブルクリックされました");
  });
});
```
</div></details>

<details><summary>解説</summary><div>
こちらのダブルクリックイベントもよく使用する技術です。
</div></details>

## Q-10. key upの仕組みをしろう

### 問題
inputに値を入力して、keyをUPした時に .valに値を表示しよう。<br>

※keyとはkeyboardのことをさします。

### 準備
#### 下記コードを記載した上で、問題を解きましょう
```
// HTML
<div class="val"></div>
<input type="text">
```

### 正解の挙動
[![Image from Gyazo](https://i.gyazo.com/b99474293f53ebfc379f4e8b83c27f71.gif)](https://gyazo.com/b99474293f53ebfc379f4e8b83c27f71)


### 回答例
<details><summary>ソースコード</summary><div>
	
```
// HTML
<!-- jqueryの読み込み -->
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>

<div class="val"></div>
<input type="text">
```

```
// JS
$(function(){
  $('input').on('keyup', function(){
   $('.val').text($(this).val());
  });
});
```
</div></details>

<details><summary>解説</summary><div>
お問い合わせフォームの入力欄などでよく使用される技術です。<br>
リアルタイムでの入力を可能にします。
</div></details>

