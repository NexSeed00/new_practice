# 中級問題

## Q-1. 復習 - ローカルリポジトリ・リモートリポジトリを作成し、Gitの管理下に置く
### 問題 
デスクトップ上に、『sample_git』というローカルリポジトリをGithub Desktop上から作成し、下記の作業をmainブランチで行ってください。
  - VScodeでsample_gitを開き、index.htmlを作成し、下記『準備』に記載のコードを記載する
  - add, commitを行い（commitメッセージは、initial commit）を最後にpushを行う
  - リモートリポジトリをpublicリポジトリとして、ローカルリポジトリと同じ名前『sample_git』として作成する

### 準備
index.htmlに下記コードを記載してください
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
何度も繰り返し、練習しましょう。
</div></details>

#### ローカルリポジトリの作成
<img src="https://i.gyazo.com/23a27fb7e8f9c10ec152e16264f868c4.gif" alt="">

#### ローカルリポジトリをVScode開き、htmlコードを貼り付け
<img src="https://i.gyazo.com/45ef5755f1eb935bb7a591c5cd3436c3.gif" alt="">

#### add/commit
<img src="https://i.gyazo.com/378bc218a6e0d477e8ae3605fe36317b.gif" alt="">

#### pushする前のリモートリポジトリの作成、push
<img src="https://i.gyazo.com/86d4f01cd693bdf3355219e8882115c6.gif" alt="">

## Q-2. 復習 - コミットをする
### 問題 
- 準備①コードを記載し、commitメッセージに、1と記載し、pushする
- 準備②コードを記載し、commitメッセージに、2と記載し、pushする
- 準備③コードを記載し、commitメッセージに、3と記載し、pushする

### 準備①
index.htmlのbodyの中に下記コードを記載する
```
<h1>Hello World!</h1>
```

### 準備②
index.htmlのbodyの中に下記コードを記載する
```
<h2>Hello Japan!</h2>
```

### 準備③
index.htmlのbodyの中に下記コードを記載する
```
<h3>Hello Tokyo!</h3>
```

### 回答例
#### 解説

#### 準備①
<img src="https://i.gyazo.com/0813946ef08adeec8382b9c066f77a55.gif" alt="">

<img src="https://i.gyazo.com/695befaf0a21930af8663f8da20709c5.gif" alt="">

#### 準備②
<img src="https://i.gyazo.com/77b9a690268432044c0fd281eae07a8b.gif" alt="">

#### 準備③
<img src="https://i.gyazo.com/15be2f5fe11184fe1c6fed98a7fec3b7.gif" alt="">

## Q-3. コミットの取り消し①
### 問題 
commitメッセージ『3』のコミットを取り消してください。<br>
※この問題は、解くというよりは解説を見ながら、操作して理解を深めて頂いても構いません。


### 回答例
#### 解説

<details><summary>説明</summary><div>
間違ってコミットしてしまった場合や、とりあえずコミットをしてみたが、なかったことにしたいということが開発をしているとあるかと思います。<br>
VScodeで上書きして、コミットすればいいのではないかと思われる方もいるかもしれません。<br>
基本はコミットで上書きしていけば問題ありません。<br>
ですが、そのような運用でいくと、pushした際に、githubに変更履歴がアップロードされ、ときに、大事な情報であったり、隠すべき事項がインターネット上に流出してしまう可能性もあります。<br>
ですので、この問題を通して、commitの取消方法は抑えておきましょう。<br>
きっと役に立つ日がくるかと思います。

</div></details>

#### ①取り消したいコミットを右クリックし、”Revert changes in commit”をクリック
<img src="https://i.gyazo.com/b5fd8f78aac329a374fd37cc9cc464ab.gif" alt="">

#### ②『Revert3』というcommitメッセージを持ったcommitが確認できる。これをpushする。
この方法だと、3のcommitをなかったことにはできたが、結局pushしてしまい、変更履歴が残ることになる。
<img src="https://i.gyazo.com/d66b1c80dd145be8fa6c847885e5e755.gif" alt="">



## Q-3. コミットの取り消し②
### 問題 
下記準備①コードをindex.htmlに貼りつけ、commitメッセージ『4』のコミットを作り出し、pushしてください。<br>
commitメッセージ『4』のコミットを<b>変更履歴を残さず</b>取り消してください。<br>
※この問題は、解くというよりは解説を見ながら、操作して理解を深めて頂いても構いません。

### 準備①
index.htmlのbodyの中に下記コードを記載する

```
<h4>Hello Kobe!</h4>
```

### 回答例
#### 解説

<details><summary>説明</summary><div>
変更履歴を残さずに、commitを取り消す方法です。

</div></details>

#### ① commitメッセージ『4』のコミットを作り出し、pushする
<img src="https://i.gyazo.com/7595bfd71ec84b6674c559c000a950ad.gif" alt="">

#### ② "Repository"から"open in Terminal"をクリックし、ターミナルを開く
※ Windowsユーザーは、Git Bashを開きます<br>
※ この時、『sample_git』上に自分がいることを確認してください
<img src="https://i.gyazo.com/1d792a1079d033f0f71f8ff1a6f854cb.gif" alt="">

#### ③ ターミナル上でコマンドを入力する
```
// 公式
git log --oneline
```
<img src="https://i.gyazo.com/aa5f9cc1d4897153810a1d2847ecfc7d.gif" alt="">

```
// コミット取り消し
git reset --hard xxxxxxxxx

```

下記コマンドは今回のキャプチャでの例になります。<br>
今回は『4』のコミットを取り消したい、つまり、Revert 3まで戻ればよいので、git lo --onlineで出力されるcommitメッセージ『3』のコミット（463e2ba）までresetコマンドで戻る<br>

```
git reset --hard 463e2ba

```

このあと、再度コマンドで、git log --onelineと入力し、commitメッセージ『4』がきえていることを確認する<br>
また、Github Desktopでもcommitメッセージ『4』が消えていることを確認する

<img src="https://i.gyazo.com/f607c4d0f4519766207eac62b641506e.gif" alt="">

## Q-4. Git Stashの経験①

### 問題 
- Git Stashを経験するために下記準備を行ってください。

### 準備
- デスクトップ上に、『GitStash』というローカルリポジトリを作成し、下記の作業は、mainブランチで行ってください。
  - VScodeで『GitStash』ディレクトリを開き、index.htmlを作成し、下記に記載のコードを記載する
  - add, commitを行い（commitメッセージは、initial commit）を最後にpushを行う
  - リモートリポジトリをpublicリポジトリとして、ローカルリポジトリと同じ名前『GitStash』として作成する

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
何度も繰り返し、練習しましょう。
</div></details>

#### ローカルリポジトリの作成
<img src="https://i.gyazo.com/bbe234ce853c48576c1b81910d70cf0e.gif" alt="">

#### VScode起動、index.htmlにコードの記載
<img src="https://i.gyazo.com/24c6aa449981f396cced69f344634fce.gif" alt="">

#### add/commit
<img src="https://i.gyazo.com/dfedb6fa3dede634f8be4bc9c6dc23c2.gif" alt="">

#### push
<img src="https://i.gyazo.com/8b98fd42b35b8078723f40ac86bb8051.gif" alt="">

## Q-5. Git Stashの経験②

### 問題 
- Git Stashを使用し、コードをコミットせず、一時保存してください。

### 操作手順
- mainブランチ上で下記コードを記載
- Github Desktop上の『Current Branch』から新しくtestブランチを作成、ポップアップが表示されるので、『Leave my changes on main』を選択し、『testブランチ』に移動する
- VScodeを確認する
- testブランチから、mainブランチに移動する
- 『View stash』から一時保存したコードを確認し、mainブランチに反映し、VScodeを確認する
- ここでGithub flowで開発していることを想定します。本来testブランチでコードを書き進める必要があるのにも関わらず、mainブランチに間違ってコードを書き進めてしまった。このコードをtestブランチへと反映し、mainブランチではなかったことにする。ブランチ移動を行い、『Bring my changes to test』を選択する
- testブランチ上でcommitを行い、その後、mainブランチへと戻り、VScodeを確認してみる

```
<h1>Hello</h1>
```

### 回答例
#### 解説
<details><summary>解説</summary><div>
Git Stashとはコードを一時退避・一時保存しておく技術です。<br>
Github flowを用いて開発中、急に別のブランチを切って開発せざるを得なくなった場合や、ブランチを切り忘れmainブランチで作業をしてしまっている場合に、作業が中途半端過ぎてcommitはしたくないという場合に、利用します。<br>
つまり一時的にコードを退避させておくということになります。<br>
急な作業を終えた後に、一時退避させておいたコードを自分の作業ブランチに反映・復元（restore）することで作業を継続することができます。<br>
実際の開発現場では、チームで開発を行っていきます。タスクが割り振られ、そのタスクを完成させるためのブランチを切り作業をしていきますが、時に差し込みで急なタスクの依頼をうけることが多々あります。commitができればいいですが、commitするまで区切りよく開発できていない、つまりキリがよくないこともあるでしょう。その際にはGitStashを使って一時退避・一時保存しておきましょう。
</div></details>

#### index.htmlにコードの記載
<img src="https://i.gyazo.com/47ec325d9a1dce1253328ce1312a5226.gif" alt="">

#### testブランチを作成、『Leave my changes on main』を選択肢、『testブランチ』に移動
<img src="https://i.gyazo.com/15d9376af60f9cfb5e57beaba43dd898.gif" alt="">

<img src="https://i.gyazo.com/9e7f88c80a81ed035f13456f7eb653e9.gif" alt="">

#### VScodeを確認する（現在いるブランチはtestブランチ）
<img src="https://i.gyazo.com/9a5ff2ef41b91a0112a25c12e421c163.gif" alt="">

#### testブランチからmainブランチに移動する
<img src="https://i.gyazo.com/c22965dbab44198cf696ff6dcc7406f4.gif" alt="">

#### 『View stash』から一時保存したコードを確認し、mainブランチに反映し、VScodeを確認する
<img src="https://i.gyazo.com/0de06e018d5af8237168798ef74b301e.gif" alt="">

#### mainブランチからtestブランチにコードを移動する
<img src="https://i.gyazo.com/6c64975caa431c720da4bf6ba5b47a18.gif" alt="">

<img src="https://i.gyazo.com/07c2eeb10bb30e8494606c300f983e47.gif" alt="">

#### testブランチでcommit後、mainブランチに移動し、VScodeを確認する
<img src="https://i.gyazo.com/1c6098ad7db2b118c700b8f54c1e5303.gif" alt="">

<img src="https://i.gyazo.com/e51dde52cae73ff5ec28094178ac9630.gif" alt="">
