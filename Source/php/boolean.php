<?php
// if文
if (true) {
  echo "条件がtrue";
}
if (false) {
  echo "条件がfalse";
}

$boolean = true;
if ($boolean){
  echo "True";
}

$condition1 = true;
$condition2 = true;

if ($condition1) {
  echo "True";
} elseif ($condition2) {
  echo "False";
} else {
  echo "True or False";
}

// switch文
$condition3 = "トイレ";
switch ($condition3) {
  case "買い物":
    echo "お米を買いに行きます";
    break;
  case "掃除機":
    echo "掃除機を掛けます";
    break;
  case "お風呂":
  case "トイレ":
    echo "お風呂とトイレを掃除します";
    break;
  default:
    echo "子供の面倒を見ます";
    break;
}
// ２択であればif文、３択であればswitch文を使うことができる

