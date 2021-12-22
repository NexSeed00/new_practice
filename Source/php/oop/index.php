<?php
/*
    練習問題
    1. 「User」というクラスを作成してください。

    2. Userクラスに、privateのアクセス修飾子で「$name」と「$email」というプロパティを作成してください
*/

/*
    練習問題
    3. Userクラスに、「コンストラクタ」を作成してください。

    4. コンストラクタに引数を持たせて、$nameと$emailというプロパティに代入してください。
*/

class User {
  private $name;
  private $email;

  function __construct($condition1, $condition2) {
    $this->name = $condition1;
    $this->email = $condition2;
  }

  function create() {
    echo '新規登録ページ<br>';
  }

  function store() {
    echo $this->name.' '.$this->email;
  }
}

$user = new User('田中', 'test@gmail.com');
$user->create();
$user->store();
