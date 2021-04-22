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
