<?php

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
  // データベースに保存する時に使用される
  function store() {
    echo $this->name.' '.$this->email;
  }

}

$user = new User('田中', 'test@gmail.com');
$user->create();
$user->store();

?>