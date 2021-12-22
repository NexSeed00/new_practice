<?php
  // データベースに接続
  $dsn = 'mysql:dbname=phpkiso;host=localhost';
  $user = 'root';
  $password = '';
  $dbh = new PDO($dsn, $user, $password);
  $dbh -> query('SET NAMES UTF8MB4');
    
  $sql = 'SELECT * FROM survey';
  $stmt = $dbh->prepare($sql);
  $stmt->execute();
  $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
  // var_dump($records);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>一覧画面</title>
</head>
<body>
  <h1>お問い合わせ情報一覧</h1>
  <hr>
  <?php foreach ($records as $record): ?>
    <p>ニックネーム：<?php echo $record['nickname']; ?></p>
    <p>メールアドレス：<?php echo $record['email']; ?></p>
    <p>お問い合わせ内容：<?php echo $record['content']; ?></p>
  <hr>
  <?php endforeach ?>
  <a href="./index.php">入力画面に戻る</a>
</body>
</html>
