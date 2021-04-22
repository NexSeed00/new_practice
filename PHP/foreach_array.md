# foreach文と配列

### 問題
foreach文と配列を使用して、カードを横に並びにしましょう。<br>
またカードには配列に格納された商品名が挿入されるようにプログラムを組みましょう。


### 準備
#### 下記のリンクをクリックしてzipファイルをダウンロードし、htdocsの中に移動させましょう。index.phpの中にコードを書いていきましょう。<br>
https://github.com/NexSeed00/new_practice/blob/master/PHP/foreach_array.zip?raw=true


### 正解の挙動
[![Image from Gyazo](https://i.gyazo.com/a956c9fa61df291d84e1afe1f30a0054.gif)](https://gyazo.com/a956c9fa61df291d84e1afe1f30a0054)


### 回答例
<details><summary>ソースコード</summary><div>
	
```
// PHP
<?php
   $products_names = ['春の新作', '夏の新作', '秋の新作'];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./style.css">
</head>
</head>
<body>

  <div class="container">
    <?php foreach ($products_names as $product_name) :?>
      <div class="product-box">
        <img src="./clothes.jpg" alt="" class="image">
        <p>商品名</p>
        <span><?php echo $product_name;?></span>
      </div>
    <?php endforeach; ?>
  </div>
</body>
</html>
```

```
// CSS
.container {
  display:flex;
  justify-content: space-between;
  background-color: #FAEDED;
  width: 1000px;
}

.image{
  width: 200px;
}

.product-box {
  text-align: center;
  background-color: #ffffff;
  border: solid 3px;
}
```
</div></details>

<details><summary>解説</summary><div>
基礎文法がWebシステムの構築にどうつながるかイメージが湧きづらいですよね。<br>
PHPはこのように、自動化を行うためにも使用します。<br>
HTMLではカードを複数記述して、カードを並べましたが、今回組んだコードでは配列に、新しい商品が追加されるたびに、
カードが勝手に横に増えていきますね。<br>
今回の問題でのforeach文の記述方法はコロン構文というものを使用しています。<br>
よく使用するので覚えておいてくださいね。 


</div></details>
