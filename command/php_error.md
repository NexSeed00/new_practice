# PHPエラー問題にチャレンジしよう

## 準備
これから『PHP』単元で作成した、『お問い合わせフォーム』をもとにエラー問題に挑戦してもらいます。<br> 

- 下記URLからGit cloneを行いましょう。
```
https://github.com/NexSeed00/phpkiso_complete.git
```
- htdocs/project/phpkiso_completeとしましょう。
[![Image from Gyazo](https://i.gyazo.com/cd70e26d9ef8b8254d674376141468f0.png)](https://gyazo.com/cd70e26d9ef8b8254d674376141468f0)

- http://localhost/project/phpkiso_complete/check.php へアクセスし、下記問題をといていきましょう。

### 問題①
- index.phpからお問い合わせ内容を入力・送信しましょう
- check.phpへ遷移すると下記エラーが出るので、解決しましょう。

```
Notice: Undefined index: nickname in /Applications/XAMPP/xamppfiles/htdocs/project/phpkiso_complete/check.php on line 3
```
[![Image from Gyazo](https://i.gyazo.com/05b2623a9f3b6bba27ba21c4b7f09bb9.gif)](https://gyazo.com/05b2623a9f3b6bba27ba21c4b7f09bb9)


### 問題②
- 問題①解決後、check.phpでokボタンをクリックしましょう。
- thanks.phpへ遷移すると下記エラーが出るので、まずは1つ目のエラーであるUndifined indexを解決しましょう。

```
Notice: Undefined index: mail in /Applications/XAMPP/xamppfiles/htdocs/project/phpkiso_complete/thanks.php on line 3

Fatal error: Uncaught PDOException: SQLSTATE[HY000] [1049] Unknown database 'phpkisoo' in /Applications/XAMPP/xamppfiles/htdocs/project/phpkiso_complete/thanks.php:9 Stack trace: #0 /Applications/XAMPP/xamppfiles/htdocs/project/phpkiso_complete/thanks.php(9): PDO->__construct('mysql:dbname=ph...', 'root', '') #1 {main} thrown in /Applications/XAMPP/xamppfiles/htdocs/project/phpkiso_complete/thanks.php on line 9
```
[![Image from Gyazo](https://i.gyazo.com/d3673864ed40e81990f1f8b3bb514782.gif)](https://gyazo.com/d3673864ed40e81990f1f8b3bb514782)

### 問題③
- 問題②を解決しても下記のエラーは残り続けます。解決しましょう

```
Fatal error: Uncaught PDOException: SQLSTATE[HY000] [1049] Unknown database 'phpkisoo' in /Applications/XAMPP/xamppfiles/htdocs/project/phpkiso_complete/thanks.php:9 Stack trace: #0 /Applications/XAMPP/xamppfiles/htdocs/project/phpkiso_complete/thanks.php(9): PDO->__construct('mysql:dbname=ph...', 'root', '') #1 {main} thrown in /Applications/XAMPP/xamppfiles/htdocs/project/phpkiso_complete/thanks.php on line 9
```
[![Image from Gyazo](https://i.gyazo.com/1b6e1ec2d60a9b6a72064ecf3eb3a01c.gif)](https://gyazo.com/1b6e1ec2d60a9b6a72064ecf3eb3a01c)

### 問題④
- 問題③を解決すると今度は下記のエラーが表示されます。解決しましょう

```
Notice: Undefined variable: mail in /Applications/XAMPP/xamppfiles/htdocs/project/phpkiso_complete/thanks.php on line 27

```
[![Image from Gyazo](https://i.gyazo.com/0d970f06136c9120099a0b0f94c2c4ef.gif)](https://gyazo.com/0d970f06136c9120099a0b0f94c2c4ef)

### 問題⑤
- 問題④を解決後、入力画面に戻り、お問い合わせ内容一覧をクリックしましょう
- 下記のエラーが表示されます。解決しましょう。
- 

```
ニックネーム :
Notice: Undefined index: nickname in /Applications/XAMPP/xamppfiles/htdocs/project/phpkiso_complete/view.php on line 26
メールアドレス :
Notice: Undefined index: email in /Applications/XAMPP/xamppfiles/htdocs/project/phpkiso_complete/view.php on line 27
お問い合わせ内容 :
Notice: Undefined index: content in /Applications/XAMPP/xamppfiles/htdocs/project/phpkiso_complete/view.php on line 28

```
[![Image from Gyazo](https://i.gyazo.com/9fff6f911a308fcd72eab426f1767e3b.gif)](https://gyazo.com/9fff6f911a308fcd72eab426f1767e3b)

### 解答・解説はclassroomに添付の動画を確認してください