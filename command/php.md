# PHPをターミナル・Git Bash上から実行してみよう

## Q-1.ターミナル・Git Bash上でHello Worldを出力してみよう

### 問題 
- htdocsフォルダ上に、『project』フォルダを作成し、その中に、『php』フォルダを作成してください。
- VScodeで『php』フォルダを開き、index.phpを作成してください。
- Hello Worldと出力させるプログラムを記載してください。
- ターミナル・Git Bashを立ち上げ、cd コマンドを使用して、phpフォルダに移動してください。
- phpコマンドを使用し、index.phpを実行してください。

### 回答例
#### 解説
<details><summary>解説</summary><div>
今までの学習では、phpコードの実行結果をブラウザを利用して確認していました。<br>
`php 実行したファイル名`とコマンド入力することで、そのファイルに記載のコードをターミナル・Git Bash上から確認することができます<br>
今回はHello Worldと出力されれば成功です。<br>
またターミナル・Git BashはVScodeからも開けます。<br>
VScodeで開くターミナル・Git Bashは、VScodeで開いているディレクトリにいる状態からコマンド入力ができるので、とても便利です。<br>
</div></details>

#### index.phpにコードを記載
<img src="https://i.gyazo.com/ba0c9e17319a773489bd1bc61e5ccf10.png" alt="">

#### phpフォルダに移動
<img src="https://i.gyazo.com/d7699cec49e1ececf602a35464d02b89.gif" alt="">

#### phpコマンドの実行
<img src="https://i.gyazo.com/e43b933140e531f2387b3943b7d3ce92.gif" alt="">

#### VS CODEでのターミナルの開き方
<img src="https://i.gyazo.com/80cc826408f04d698a76f110803ac832.gif" alt="">

## Q-2.Hello Worldの出力の後、改行してみよう

### 問題 
Hello Worldの出力の後、改行してください。

### 回答例
#### 解説
<details><summary>解説</summary><div>
ブラウザで出力する場合は、htmlタグを使って改行できるため、brタグを使用してきました。<br>
ターミナル・Git Bash上ではbrタグで改行は利用できません。<br>
改行する際には、\nを使用しますが、ここで注意点があります。<br>
ダブルコーテーションを使用する必要があります。

```
// 答え
 echo 'Hello World' . "\n";
```
</div></details>
<img src="https://i.gyazo.com/53f09ad165eeb5ab56c59df167015ac0.gif" alt="">

## Q-3.標準入力を経験してみよう

### 問題 
- 『標準入力』について調べてください。
- 『php』フォルダ内にinput.phpを作成してください。
- ユーザーが任意の数値を入力した時、その数字が出力されるプログラムを作成してください。<br>
※数値の出力後は改行させること。

### 準備
下記のコードをinput.phpに記載してください。
```
// input.php
echo '数値を入力してください' . "\n";

```

### 回答例
#### 解説
<details><summary>解説</summary><div>
phpでの標準入力は、fgets(STDIN)を使用し、任意のデータを取得できます。<br>
rtrim()は取得したデータを整形する関数です。<br>
数値を入力すると、入力したデータが、表示されるプログラムを今回は作成しました。

```
// 答え
  echo '数値を入力してください' . "\n";
  $n = rtrim(fgets(STDIN));
  echo $n . "\n"; 
```
</div></details>
<img src="https://i.gyazo.com/edbe8fd4caad41cb7679d8440b127be8.gif" alt="">

## Q-3.日付計算プログラムを作成してみよう①

### 問題 
- 『php』フォルダ内にdate.phpを作成してください。
- ユーザーが任意の日付を入力した時、その日付から7日後の日付が出力されるプログラムを作成してください。<br>
※日付の出力後は改行させること。
※日付の入力は下記で統一すること。

```
1992-11-08
2021-01-29
```

### 準備
下記のコードをdate.phpに記載してください。
```
// input.php
echo '日付を入力してください' . "\n";

```

### 回答例
#### 解説
<details><summary>解説</summary><div>
date()、strtotime（）を使用します。<br>

```
// 答え
 echo '日付を入力してください' . "\n";
 $n = rtrim(fgets(STDIN));
 echo date("Y-m-d",strtotime($n . "+7 day")) . "\n";
```
</div></details>
<img src="(https://i.gyazo.com/f0b83b9e1160d9d961a37cecbbd998a7.gif" alt="">

## Q-4.日付計算プログラムを作成してみよう②

### 問題 
- 『php』フォルダ内にgraduate.phpを作成しましょう。
- プログラミングの学習開始日を入力し、学習終了日を出力させるプログラムを作成しましょう。

※日付の出力後は改行させること。
※日付の入力は下記で統一すること

```
1992-11-08
2021-01-29
```

```
期待する結果

学習終了日は、2021-12-31です。

```

### 準備
下記のコードをdate.phpに記載しましょう。
```
// input.php
echo '学習開始日を入力してください' . "\n";

```

### 回答例
#### 解説
<details><summary>解説</summary><div>
date()、strtotime（）を使用します。<br>
12週間で学習をおえる場合の回答例になります。weekで計算していますが、monthなども利用できます。

```
// 答え
 echo '学習開始日を入力してください' . "\n";
 $n = rtrim(fgets(STDIN));
 echo '学習終了日は' . date("Y-m-d",strtotime($n . "+12 week")) . 'です。' . "\n";
```
</div></details>
<img src="https://i.gyazo.com/8b167c8a4b5b67696a54cb7e31b91c61.gif" alt="">

## Q-5.生徒名簿プログラムを作成してみよう

### 問題 
- 『php』フォルダ内にarray.phpを作成してください。
- ユーザーに任意で、生徒名簿に登録させたい人数の数値を入力させてください。
- 上記で入力した数値の数だけ、生徒を名簿に登録することができます。
- ユーザーには、【生徒名 年齢】を入力させます。
- 出力結果として、『生徒名は年齢歳の生徒です』と出力させるプログラムを作成してください。

入力と出力例
```
登録したい生徒の人数を入力してください
3 → ユーザーに入力してもらう値

3人の生徒を登録できます
名前 年齢を記入して下さい
田中 20 →ユーザーに入力してもらう値

田中は20歳の生徒です
.
.
（もう2名登録）

```


### 回答例
#### 解説
<details><summary>解説</summary><div>
スペースを含む入力データは、explode()を使用して、配列に格納したあとに、取り出し使用していきます。<br>

```
// 答え
  echo '登録したい生徒の人数を入力して下さい' . "\n";
    $n = rtrim(fgets(STDIN));

    echo $n . '人の生徒を登録できます' . "\n";

    for($i=0; $i < $n; $i++){
        echo '名前 年齢' . 'を記入して下さい' . "\n";
        $a = rtrim(fgets(STDIN));
        $b = explode(" ", $a);

        $name = $b[0];
        $num = $b[1];

        echo $name . 'は' . $num . '歳の生徒です' . "\n";
    }
```
</div></details>
<img src="https://i.gyazo.com/816e3aa4dddd72d740fd5a1ebe856e97.gif" alt="">

<img src="https://i.gyazo.com/bda3bcf0e59fa0b414b4791794b9b7e9.gif" alt="">

<img src="https://i.gyazo.com/bda3bcf0e59fa0b414b4791794b9b7e9.gif" alt="">

# おわりに
標準入力を学び、最後は複雑なロジックを考える練習をしてもらいました。<br>
問題を解くために、誘導が記載されておりますが、実際の開発となると誘導がなくなります。<br>
顧客の叶えたい実装をヒヤリングし、日本語で理解して、頭の中でプログラミング言語に変換し、プログラムを書いていきます。<br>
しかし、いきなりそういったことを出来るようにはなりません。今回解いてもらった問題のように、日本語からプログラムを書いていく練習を繰り返していくしかありません。<br>
こういった問題のことをアルゴリズム問題と言ったりします。<br>

