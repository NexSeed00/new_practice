# 初級問題

## Q-1.ローカルリポジトリを作成しよう 
### 問題 
デスクトップ上に、『sample』というローカルリポジトリをGithub Desktop上から作成してみましょう。


### 回答例
#### 解説
[![Image from Gyazo](https://i.gyazo.com/696ecd9d0e14b9cc3fc59512996a6b6a.gif)](https://gyazo.com/696ecd9d0e14b9cc3fc59512996a6b6a)

## Q-2. コード書き加えてみよう

### 問題 
Q-1で作成したsampleフォルダをVisual Studio Codeを開き、index.htmlを作成後、HTML雛形をコードに書き込みましょう。

### 回答例
#### 解説
[![Image from Gyazo](https://i.gyazo.com/696ecd9d0e14b9cc3fc59512996a6b6a.gif)](https://gyazo.com/696ecd9d0e14b9cc3fc59512996a6b6a)

## Q-3. add/commitをしてみよう

### 問題 
Github Desktopから、index.htmlをadd（選択）し、『initial commit』というコミットメッセージを書いて、commit（保存）してみましょう。

### 回答例
#### 解説
[![Image from Gyazo](https://i.gyazo.com/d286fd5e28bf3bf5eed66d769424d2e0.gif)](https://gyazo.com/d286fd5e28bf3bf5eed66d769424d2e0)

## Q-4. pushしてみよう

### 問題 
リモートリポジトリ（Github上のリポジトリ）を、『sample』と命名し、ローカルからリモートへ成果物をpushしましょう。

### 回答例
#### 解説
[![Image from Gyazo](https://i.gyazo.com/252be59c1b4851f5f8dd79fa0f39beb0.gif)](https://gyazo.com/252be59c1b4851f5f8dd79fa0f39beb0)

## Q-5. ファイルがアップロードできているのか確認しよう

### 問題 
Githubにアクセスし、pushした内容が反映されているか確認してみましょう

### 回答例
#### 解説
[![Image from Gyazo](https://i.gyazo.com/21e5982d0a3fd0fb918067ed37e0eb93.gif)](https://gyazo.com/21e5982d0a3fd0fb918067ed37e0eb93)

## Q-6. Github flowを練習しよう①

### 問題 
create-headerブランチを作成し、下記のコードを記載してみましょう。（style.cssはファイルを新規作成すること）<br>
その後、コミットメッセージを『Add : header』としてコミットまで行いましょう。

### 準備
```
// HTML
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./style.css">
</head>
<body>
  <header>
    <div class="header-left">
    </div>
    <div class="header-right">
        <ul class="nav">
            <li><a href="#programming">Programming</a></li>
            <li><a href="#english">English</a></li>
        </ul>
    </div>
  </header>
</body>
</html>
```
```
// CSS
header {
  display: flex;
  justify-content: space-between; 
  align-items: center;  
  background-color: rgb(6, 39, 66);
  padding: 14px 40px;
}
.nav {
  display: flex;
}
.nav > li > a {
  color: white;
  font-size: 20px;
  margin-left: 20px;
  text-decoration: none;
}
```

### 回答例
#### 解説
[![Image from Gyazo](https://i.gyazo.com/a72fd841e4c7589c399b3438324c2a18.gif)](https://gyazo.com/a72fd841e4c7589c399b3438324c2a18)

## Q-7. Github flowを練習しよう②

### 問題 
create-headerブランチをpushしてみましょう。<br>
続けてPull Requestを作成してみてましょう。<br>
Pull Requestには下記の文言を記入してみましょう<br>

### 準備
この#や-で見出し化、リスト化する記述は、マークダウン記法というものである。<br>
Notionというアプリ、Evernoteというアプリ、それからQiitaとあらゆる箇所で用いられている記法なので、覚えておいて損はないですよ。
```
# What
- headerを作成しました。

# Why
- headerを作成することにより、サーバーサイドのログイン機能も実装できるようになるため。
```

### 回答例
#### 解説
[![Image from Gyazo](https://i.gyazo.com/94b08ce9ac228f8128f8f48fac96ae40.gif)](https://gyazo.com/94b08ce9ac228f8128f8f48fac96ae40) <br>

[![Image from Gyazo](https://i.gyazo.com/8a4f16234abbce744189bcb211bae20c.gif)](https://gyazo.com/8a4f16234abbce744189bcb211bae20c) <br>

[![Image from Gyazo](https://i.gyazo.com/368db9ae9dea044a83c9b040498643c6.gif)](https://gyazo.com/368db9ae9dea044a83c9b040498643c6)

## Q-8. Github flowを練習しよう③

### 問題 
create-headerブランチをmergeしてみましょう。

### 回答例
#### 解説
[![Image from Gyazo](https://i.gyazo.com/a2bade8a3be9cc4c4351da8722c05432.gif)](https://gyazo.com/a2bade8a3be9cc4c4351da8722c05432)

#### 補足
個人開発であればGithub flowを用いて開発する必要はありません。<br>
しかしチーム開発、つまり実務では、Github flowを当たり前にように使用していきます。（実務で個人開発を行うことは稀です）<br>
Github上のmainブランチに直接、add/commit/pushしていくのではなく、ブランチをきり、そのブランチ上で開発していきます。（mainブランチのコピーのため、コードがぐちゃぐちゃになってしまった場合捨てることができる）<br>
そして、mainブランチにmergeする前に、Pull request（チームメンバーへ自分のコードが正しいのか正しいのかをお伺いする手紙）を提出して、チームメンバーでレビューする。そしてmainブランチが汚れないように開発する。<br>
これがGithub flowです。

## Q-9. Github flowを練習しよう④

### 問題 
Github Desktop上で、create-headerブランチからmainブランチへと使用するブランチを切り替え、pull（Github上のmainブランチ）してみましょう。<br>
またその後、create-footerブランチを作成し、『footerを作成する』という次の作業に取り書かれる準備をした状態にしておきましょう。

### 回答例
#### 解説
[![Image from Gyazo](https://i.gyazo.com/612fda44b94b77513fb3b3b9b5ceeeba.gif)](https://gyazo.com/612fda44b94b77513fb3b3b9b5ceeeba) <br>

[![Image from Gyazo](https://i.gyazo.com/8b60e89efad69e2ecc30097546311e72.gif)](https://gyazo.com/8b60e89efad69e2ecc30097546311e72) <br>

[![Image from Gyazo](https://i.gyazo.com/cb95ddf430d8df03d75012ed1cef0e6a.gif)](https://gyazo.com/cb95ddf430d8df03d75012ed1cef0e6a)

<details><summary>補足</summary><div>
Github flowを練習しよう①~④の流れは、使いこなせるように、何回も練習していきましょう。<br>
個人開発では用いる必要はないとQ-8で説明しましたが、実際に開発現場では複数人で開発するため、必須スキルともいえます。<br>
是非個人開発でも、意識的にGithub flowを使用するようにし、使い方になれてほしいです。<br>
開発会社からすれば、求職者の『コードのスキルが現状高くない』としても、Github flowを使用できる人材であれば、開発タスクに、joinさせることができます。<br>
逆に扱えないと、Github flowを勉強しておいてねとなってしまい、開発会社にはいったとしても実務経験をつめるのが遅くなってしまいますね。<br>
</div></details>