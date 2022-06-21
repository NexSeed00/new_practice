# コマンド操作を練習しよう
Macユーザーはターミナル、WindowsユーザーはGit Bashを利用してください。

## Q-1.ディレクトリの移動をしてみよう①
### 問題 
デスクトップへとディレクトリの移動を行ってください。

### 回答例
<details><summary>解説</summary><div>

```
cd Desktop
```

</div></details>

<img src="https://i.gyazo.com/ca38be21d158209ad8d2bdbc84a4be49.gif" alt="">

## Q-2. ディレクトリの移動をしてみよう②

### 問題 
ホームディレクトリへと移動してください。

### 回答例
<details><summary>解説</summary><div>

```
cd ~
```

</div></details>

<img src="https://i.gyazo.com/dde6967c99b63db30f91454aa2bfaa63.gif" alt="">

## Q-3. 現在のディレクトリを表示をしてみよう

### 問題 
pwdコマンドを使用し、ホームディレクトリを表示してください。

### 回答例
<details><summary>解説</summary><div>

```
pwd
```

```
// 実行結果
/Users/ユーザー名
```
つまりホームディレクトリと呼ばれるディレクトリは、Usersディレクトリの中にあるユーザー名ディレクトリを指していることが分かります。<br>

~ = /Users/ユーザー名

</div></details>

<img src="https://i.gyazo.com/5d2d5877a5fe4988a8cf871960ee2d14.gif" alt="">

## Q-4. ディレクトリの移動をしてみよう③

### 問題 
ルートディレクトリへと移動してください。

### 回答例
<details><summary>解説</summary><div>

```
cd /
```

</div></details>

<img src="https://i.gyazo.com/87850a5b5589283c02fb24dd5e289410.gif" alt="">

## Q-5. 現在のディレクトリを表示をしてみよう

### 問題 
pwdコマンドを使用し、ルートディレクトリを表示してください。

### 回答例
<details><summary>解説</summary><div>

```
pwd
```

```
// 実行結果
/
```

ルートディレクト = / であることがわかる。

ここまでで、出てきたルートディレクトリ、ホームディレクトリの関係性を整理すると下記のようになります。<br>
/ → ルートディレクトリ（PCの大元のディレクトリ）<br>
/Users/ユーザー名 → ホームディレクトリ <br>

PCの中身というのは階層構造になっており、１番上流にあるディレクトリが、ルートディレクトリであり、ルートディレクトリの中のUsersディレクトリのユーザー名ディレクトリがホームディレクトリということが分かります。<br>

ターミナル・Git Bashを開くと、毎回、~（ホームディレクトリ）にいる状態からコマンド操作を開始するようになっています。<br>

ホームディレクトリは、/Users/ユーザー名と表記されず、簡単に~の記号で表示されるのがデフォルトになります。
<br>

</div></details>

<img src="https://i.gyazo.com/df11ed169c79bf413b9639fdf2f17262.gif" alt="">

## Q-6. ディレクトリ内のファイル・フォルダを表示してみよう

### 問題 
現在、ルートディレクトリ（/）にいる状態です。<br>
この状態から、ディレクトリ内にあるファイルやフォルダを表示するコマンドを打ち込んでください。

### 回答例
<details><summary>解説</summary><div>

ls コマンドを使用することで、ディレクトリ内のファイル、フォルダの表示することが出来ます。<br>
今回はルートディレクトリにあるフォルダやファイルを表示していることになります。<br>
Usersディレクトリが、ルートディレクトリの中にあることが分かります。

```
ls
```

また、lsコマンドにオプションを追加することで、下記のことが出来るようになります。
- -aオプションで隠しファイルも表示<br>
- -laオプションでファイルの権限などの詳細も表示<br>

```
ls -a
ls -la
```

</div></details>

<img src="https://i.gyazo.com/65b74212e92ca60fc70c674e1377e623.gif" alt="">

<img src="https://i.gyazo.com/b8b4577e193ba223a01d7a852fdb4b56.gif" alt="">

<img src="https://i.gyazo.com/49470a9de3aae53c5bd29262159b3fc5.gif" alt="">

## Q-7. ディレクトリの移動をしてみよう④

### 問題 
現在ルートディレクトリ（/）にいる状態です。<br>
この状態から、デスクトップディレクトリに移動してください。

### 回答例
<details><summary>解説</summary><div>
いろいろな移動方法があります。

```
回答①
cd ~/Desktop

回答②
cd Users/ユーザー名/Desktop
```

~ = Users/ユーザー名 であるので、結局同じことをしています。

</div></details>

<img src="https://i.gyazo.com/790d0ddded0345e11f6bda584abf1c0b.gif" alt="">


<img src="https://i.gyazo.com/a278aae25e9d032635078b77d4321334.gif" alt="">

## Q-8. ディレクトリを作成しよう

### 問題 
現在デスクトップディレクトリにいます。<br>
この状態で、デスクトップディレクトリに、『Unix』ディレクトリを作成してください。

### 回答例
<details><summary>解説</summary><div>

ディレクトリに作成には、mkdirコマンドを使用します。

```
mkdit Unix
```

</div></details>

<img src="https://i.gyazo.com/05990e621387cc31cd1b144870538a25.gif" alt="">

## Q-9. ファイルを作成してみましょう

### 問題 
現在デスクトップディレクトリにいます。<br>
この状態で、デスクトップディレクトリ作成したUnixフォルダの中に、『test』ディレクトリを作成し、さらにその中に、
index.htmlを作成してください。

### 回答例
<details><summary>解説</summary><div>

ディレクトリに作成には、mkdirコマンドを使用します。

```
mkdit Unix/test
touch Unix/test/index.html
```

</div></details>

<img src="https://i.gyazo.com/3fb9f3eb5abb315bdf774712418cc519.gif" alt="">

<img src="https://i.gyazo.com/985cd713a324aaecd874d39437d67d81.gif" alt="">


## Q-10. Q-9で作成したファイルが作成できているか確認しよう

### 問題 
Q-9を解いている時、本当にファイルが作成できているのか、心配になった方もいるかと思います。<br>
今までの学習の知識を使用して、『ディレクトリに中身を表示』するコマンドを使用し、testフォルダの中身を確認してください。

### 回答例
<details><summary>解説</summary><div>

lsコマンドを使用します。

```
ls Unix/test
```

</div></details>

<img src="https://i.gyazo.com/763fe96aa5db01b0f4e6b7736b09718d.gif" alt="">

## Q-11. ファイルの中身を表示してみよう

### 準備
VScodeで、デスクトップ上に作成したUnixディレクトリの中のtestディレクトリを開き、index.htmlに下記のコードを記載しておきましょう。

```
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
</body>
</html>

```

### 問題 
現在デスクトップディレクトリにいます。<br>
この状態で、準備で用意したindex.htmlを、コマンド操作で、ターミナル・Git Bash上に表示してください。


### 回答例
<details><summary>解説</summary><div>

ファイルの中身を全て表示するには、catコマンドを使用します。

```
cat Unix/test/index.html
```

</div></details>

<img src="https://i.gyazo.com/c900e10cdd70d1a459047a7436794533.gif" alt="">

## Q-12. ファイルを削除してみよう

### 問題 
現在デスクトップディレクトリにいます。<br>
この状態で、デスクトップディレクトリのUnixディレクトリの中に作成したtestディレクトリから、index.htmlを削除してください。<br>
また削除できたらコマンド操作で、本当にファイルが作成できているのかを確認してください。


### 回答例
<details><summary>解説</summary><div>

ファイルの削除は、rmコマンドを使用します。

```
rm Unix/test/index.html
ls Unix/test
```

</div></details>

<img src="https://i.gyazo.com/ef0ce90332b6d2878456dbb08c14ce6b.gif" alt="">

<img src="https://i.gyazo.com/f6be9d5842575f62650ca49070c6d95b.gif" alt="">

## Q-12. フォルダを削除してみよう

### 問題 
現在デスクトップディレクトリにいます。<br>
この状態で、デスクトップディレクトリのUnixディレクトリの中に作成したtestディレクトリを削除してください。


### 回答例
<details><summary>解説</summary><div>

フォルダの削除は、rmコマンドに-rfオプションを付与してを使用します。

```
rm -rf Unix/test
```

</div></details>

<img src="https://i.gyazo.com/c7fb80a11f5eb2e480eb02b48425c46c.gif" alt="">
