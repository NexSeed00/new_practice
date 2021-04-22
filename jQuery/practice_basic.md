# 初級問題

## Q. ウィンドウサイズを変数に入れ、アラートを出してみよう。 

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

### 解説
ウィンドウの横幅も取得できるということは、高さも取得ということになります。
画面を縮めてリロードをするとアラートに出る数値が変化します。
