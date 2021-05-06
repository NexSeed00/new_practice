# Netlifyの使い方

Netlifyは、GitHubのレポジトリと連携して、HTML・CSS・JavaScript・jQueryで作成されたアプリやウェブサイトをネット上で公開するサービスです。<br>
この解説はGitHubにレポジトリ作成までされている前提で進みます。<br>
まだできていない方は、ネット上にアップロードしたい成果物をGithubにアップロードしましょう。<br>
1_HTMLで作成したWelcome_NexSeedを使って、ネット上に成果物を公開する手順を学ぶのもよいでしょう。

## 手順

1. Netlifyの登録
2. NetlifyとGitHubの連携
3. レポジトリの選択・公開

### 1. Netlifyの登録

以下のリンクからNetlifyに飛んでください。

https://www.netlify.com/

右上の「Sign up」をクリックします。


[![Image from Gyazo](https://i.gyazo.com/81995b3394607427d8138007926bb025.png)](https://gyazo.com/81995b3394607427d8138007926bb025)

GitHubをクリックします。

![](img/netlify_1.png)

GitHubのユーザーネームとパスワードを入力し、「Sign in」をクリックします。

![](img/netlify_2.png)

GitHubのアカウントと紐づいているメールアドレス宛にメールが届きます。
６桁の数字をコピーしましょう。

![](img/netlify_4.png)

コピーした数字を入力し、「Verify」をクリックします。

![](img/netlify_3.png)

「Authorize Netlify」をクリックすると、Netlifyのユーザーページに入れます。

![](img/netlify_5.png)

<br><br>

### 2. NetlifyとGitHubの連携

「New site from Git」をクリックします。

![](img/netlify_6.png)

「GitHub」をクリック。

![](img/netlify_7.png)

「Authorize Netlify by Netlify」をクリック

![](img/netlify_8.png)

「All repositories」にチェックが入っていることを確認して、「Install」をクリックします。

![](img/netlify_9.png)

これでNetlifyとGitHubの連携ができました。

<br><br>

### 3. レポジトリの選択・公開

GitHubにあるレポジトリの一覧が表示されています。

![](img/netlify_10.png)

表示されていない場合は、検索をかけましょう。

![](img/netlify_11.png)

公開したいレポジトリをクリックすると以下の画面になります。<br>
ここの設定はいじらなくて大丈夫です。<br>
１番下の「Deploy site」をクリックします。

![](img/netlify_12.png)

ユーザーページに自動的に戻ります。
デプロイが完了すると赤い枠の箇所にリンクが表示されます。

![](img/netlify_13.png)

リンクをクリックして、ウェブサイトを確認しましょう。

<br>

説明は以上です。<br>
これまでに作成したオリジナルWebサイト（HTML・CSS・JavaScript・jQueryで作成されたもの）を公開してみましょう。<br>
これで、知人にも自分の作ったサイトを見せることができるようになりました。<br>
Wantedlyや履歴書などにもURLを記載し、就職活動や副業案件時に、ポートフォリオとして、持っていきましょう。<br>
お疲れ様でした！<br>
※PHPで作成したサイト・アプリはNetlifyとは別のサービスで公開します。（9_デプロイで学ぶHerokuを使用します。）<br>
