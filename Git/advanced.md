# 中級問題

## Q-1. 復習 - ローカルリポジトリ・リモートリポジトリを作成し、Gitの管理下においてみよう
### 問題 
- デスクトップ上に、『sample_git』というローカルリポジトリをGithub Desktop上から作成してみましょう。
- 下記の作業は、mainブランチで行っていきましょう。
- vs codeでsample_gitを開き、index.htmlを作成し、下記『準備』に記載のコードを記載しましょう。
- add, commitを行い（commitメッセージは、initial commit）を最後にpushを行いましょう。
- リモートリポジトリをpublicリポジトリとして、ローカルリポジトリと同じ名前『sample_git』として作成しましょう。

### 準備
index.htmlに下記コードを記載しましょう
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


### 回答例
#### 解説
<details><summary>解説</summary><div>
git基本操作の復習です。<br>
何度も繰り返し、練習していきましょう。
</div></details>

#### ローカルリポジトリの作成
[![Image from Gyazo](https://i.gyazo.com/23a27fb7e8f9c10ec152e16264f868c4.gif)](https://gyazo.com/23a27fb7e8f9c10ec152e16264f868c4)

#### ローカルリポジトリをvs code開き、htmlコードを貼り付け
[![Image from Gyazo](https://i.gyazo.com/45ef5755f1eb935bb7a591c5cd3436c3.gif)](https://gyazo.com/45ef5755f1eb935bb7a591c5cd3436c3)

#### add/commit
[![Image from Gyazo](https://i.gyazo.com/378bc218a6e0d477e8ae3605fe36317b.gif)](https://gyazo.com/378bc218a6e0d477e8ae3605fe36317b)

#### pushする前のリモートリポジトリの作成、push
[![Image from Gyazo](https://i.gyazo.com/86d4f01cd693bdf3355219e8882115c6.gif)](https://gyazo.com/86d4f01cd693bdf3355219e8882115c6)


## Q-2. 復習 - コミットをしていこう
### 問題 
- 準備①コードを記載し、commitメッセージに、1と記載し、pushしましょう。
- 準備②コードを記載し、commitメッセージに、2と記載し、pushしましょう。
- 準備③コードを記載し、commitメッセージに、3と記載し、pushしましょう。

### 準備①
index.htmlのbodyの中に下記コードを記載しましょう
```
<h1>Hello World!</h1>
```

### 準備②
index.htmlのbodyの中に下記コードを記載しましょう
```
<h2>Hello Japan!</h2>
```

### 準備③
index.htmlのbodyの中に下記コードを記載しましょう
```
<h3>Hello Tokyo!</h3>
```

### 回答例
#### 解説

#### 準備①
[![Image from Gyazo](https://i.gyazo.com/0813946ef08adeec8382b9c066f77a55.gif)](https://gyazo.com/0813946ef08adeec8382b9c066f77a55)

[![Image from Gyazo](https://i.gyazo.com/695befaf0a21930af8663f8da20709c5.gif)](https://gyazo.com/695befaf0a21930af8663f8da20709c5)


#### 準備②
[![Image from Gyazo](https://i.gyazo.com/77b9a690268432044c0fd281eae07a8b.gif)](https://gyazo.com/77b9a690268432044c0fd281eae07a8b)

#### 準備③
[![Image from Gyazo](https://i.gyazo.com/15be2f5fe11184fe1c6fed98a7fec3b7.gif)](https://gyazo.com/15be2f5fe11184fe1c6fed98a7fec3b7)


## Q-3. コミットの取り消しをしてみよう①
### 問題 
commitメッセージ『3』のコミットを取り消してみましょう。<br>
※この問題は、解くというよりは解説を見ながら、操作して理解を深めて頂いても構いません。


### 回答例
#### 解説

<details><summary>説明</summary><div>
間違ってコミットしてしまった場合や、とりあえずコミットをしてみたが、なかったことにしたいということが開発をしているとあるでしょう。<br>
vs codeで上書きして、コミットすればいいのではないかと思われる方もいるかもしれません。<br>
基本はコミットで上書きしていけばよいです。<br>
ですが、そのような運用でいくと、pushした際に、githubに変更履歴がアップロードされ、ときに、大事な情報であったり、隠すべき事項がインターネット上に流出してしまう可能性もあります。<br>
ですので、この問題を通して、commitの取消方法は抑えておきましょう。<br>
きっと役に立つ日がくるでしょう。

</div></details>

#### ①取り消したいコミットを右クリックし、”Revert changes in commit”をクリック
[![Image from Gyazo](https://i.gyazo.com/b5fd8f78aac329a374fd37cc9cc464ab.gif)](https://gyazo.com/b5fd8f78aac329a374fd37cc9cc464ab)

#### ②『Revert3』というcommitメッセージを持ったcommitが確認できる。これをpushする。
この方法だと、3のcommitをなかったことにはできたが、結局pushしてしまい、変更履歴がのこることになる。
[![Image from Gyazo](https://i.gyazo.com/d66b1c80dd145be8fa6c847885e5e755.gif)](https://gyazo.com/d66b1c80dd145be8fa6c847885e5e755)

#### ③『Revert3』というcommitメッセージを持ったcommitが確認できる。これをpushする。
この方法だと、3のcommitをなかったことにはできたが、結局pushしてしまい、変更履歴がのこることになる。
[![Image from Gyazo](https://i.gyazo.com/d66b1c80dd145be8fa6c847885e5e755.gif)](https://gyazo.com/d66b1c80dd145be8fa6c847885e5e755)

## Q-3. コミットの取り消しをしてみよう②
### 問題 
下記準備①コードをindex.htmlにはりつけ、commitメッセージ『4』のコミットをつくりだし、pushしましょう。<br>
commitメッセージ『4』のコミットを<b>変更履歴を残さず</b>取り消しましょう。<br>
※この問題は、解くというよりは解説を見ながら、操作して理解を深めて頂いても構いません。

### 準備①
index.htmlのbodyの中に下記コードを記載しましょう

```
<h4>Hello Kobe!</h4>
```

### 回答例
#### 解説

<details><summary>説明</summary><div>
変更履歴を残さずに、commitを取り消す方法です。

</div></details>

#### ① commitメッセージ『4』のコミットを作り出し、pushする
[![Image from Gyazo](https://i.gyazo.com/7595bfd71ec84b6674c559c000a950ad.gif)](https://gyazo.com/7595bfd71ec84b6674c559c000a950ad)


#### ② "Repository"から"open in Terminal"をクリックし、ターミナルを開く
※ Windowsユーザーは、Git Bashをひらきます<br>
※ この時、『sample_git』上に自分がいることを確認しましょう
[![Image from Gyazo](https://i.gyazo.com/1d792a1079d033f0f71f8ff1a6f854cb.gif)](https://gyazo.com/1d792a1079d033f0f71f8ff1a6f854cb)

#### ③ ターミナル上でコマンドを入力する
```
// 公式
git log --oneline
```
[![Image from Gyazo](https://i.gyazo.com/aa5f9cc1d4897153810a1d2847ecfc7d.gif)](https://gyazo.com/aa5f9cc1d4897153810a1d2847ecfc7d)


```
// コミット取り消し
git reset --hard xxxxxxxxx

```

下記コマンドは今回のキャプチャでの例になります。<br>
今回は『4』のコミットを取り消したい、つまり、Revert 3まで戻ればよいので、git lo --onlineで出力されるcommitメッセージ『3』のコミット（463e2ba）までresetコマンドでもどる<br>

```
git reset --hard 463e2ba

```

このあと、再度コマンドで、git log --onelineと入力し、commitメッセージ『4』がきえていることを確認する<br>
また、Github Desktopでもcommitメッセージ『4』がきえていることを確認する

[![Image from Gyazo](https://i.gyazo.com/f607c4d0f4519766207eac62b641506e.gif)](https://gyazo.com/f607c4d0f4519766207eac62b641506e)