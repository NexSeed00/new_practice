<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お問い合せ</title>
</head>
<body>
  <h1>お問合せ情報入力</h1>

  <form method="POST" action="./check.php">
    <div>
      ニックネーム<br>
      <input type="text" name="nickname" value="">
    </div>
    <div>
      メールアドレス<br>
      <input type="email" name="email" value="">
    </div>
    <div>
      お問い合せ内容<br>
      <textarea name="content" cols="30" rows="10"></textarea>
    </div>
    <input type="submit" value="送信">
  </form>
  <h2>管理者用メニュー</h2>
  <ul>
    <li><a href="./view.php">お問合せ内容一覧</a></li>
  </ul>
</body>
</html>
