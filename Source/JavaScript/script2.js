// 2-11 DOM操作（Nodeを取得・ブラウザ表示を変更）
const updateText = () => {
  // h1について
  // console.log(document.querySelector("h1"));
  // document.querySelector("h1").textContent = "アメリカの主要IT企業GAFA";
  // document.querySelector("#updateTarget").textContent = "アメリカの主要IT企業GAFA";
  document.getElementById("updateTarget").textContent = "アメリカ主要IT企業GAFA";

  // listについて
  console.log(document.querySelectorAll("li"));

  document.querySelectorAll("li")[1].textContent = "アマゾン";
  1
  var allList = document.querySelectorAll("ol > li");
  console.log(allList.length); // allListの要素数
  console.log(document.getElementById("updateTarget").textContent.length);

  allList = document.getElementsByTagName("li");
  allList = document.getElementsByClassName("update_targets");

  for (var i = 0; i < allList.length; i++) {
    allList[i].textContent = i + "番のallListタグです";
  }
}
// updateText();
setTimeout(updateText, 1000);

const updateColor = () => {
  document.getElementById("google").parentElement.style.background = "pink";

  var allList = document.getElementById("ol").children;
  for (var i = 0; i < allList.length; i++) {
    allList[i].style.color = "red"
  }
}

setTimeout(updateColor, 2000);

/* 
  練習問題
  1. htmlファイルに以下のpタグを用意して、その文字を取得して、console.logで出力してください
    <p id="text1">練習1</p>

  2. htmlファイルに以下のpタグを用意して、その文字を好きな文字列に変更してください。
    <p id="text2">練習2</p>

  3. htmlファイルに以下のpタグを用意して、その文字の色を好きな色に変更してください。
    <p id="text3">練習3</p>

  4. htmlファイルに以下のpタグを用意して、その文字の背景色を好きな色に変更してください。
    <p id="text4">練習4</p>

  5.htmlファイルに以下のpタグを用意して、その文字の大きさを好きな大きさに変更してください。
    <p id="text5">練習5</p>
*/
// 1.
var text1 = document.getElementById("text1");
console.log(text1.textContent);

// 2.
var text2 = document.getElementById("text2");
text2.textContent = "変更しました"

// 3.
var text3 = document.getElementById("text3");
text3.style.color = "blue";

// 4.
var text4 = document.getElementById("text4");
text4.style.background = "skyblue"

// 5.
var text5 = document.getElementById("text5");
text5.style.fontSize = "50px";


// 2-12 DOM操作（イベント登録・実行）
document.getElementById("updateTarget").addEventListener("mouseover", function () {
  this.textContent = "マウスオーバー";
});

document.getElementById("updateTarget").addEventListener("click", function () {
  this.textContent = "クリック";
});

/* 
  練習問題
  1. htmlファイルにボタンを用意して、そのボタンを「マウスオーバー」したらh1タグの文字を任意の文字列に変更してください。

  2. htmlファイルにボタンを用意して、そのボタンを「クリック」したらh1タグの文字を任意の文字列に変更してください。

  3. htmlファイルにボタンを用意して。そのボタンを「ダブルクリック」したらh1タグの文字を任意の文字列に変更してください。
*/
// 1.
document.getElementById("practice1").addEventListener("mouseover", () => {
  document.getElementById("updateTarget").textContent = "練習1";
});

// 2.
document.getElementById("practice2").addEventListener("click", () => {
  document.getElementById("updateTarget").textContent = "練習2";
});

// 3.
document.getElementById("practice3").addEventListener("dbclick", () => {
  document.getElementById("updateTarget").textContent = "練習3";
});


// 2-13 DOM操作（Node追加・削除）
var addNode1 = document.createElement("li");
addNode1.textContent = "追加された文字列"

var ol = document.getElementById("ol");
ol.insertBefore(addNode1, ol.firstChild);

var addNode2 = document.createElement("li");
addNode2.textContent = "さらに追加";

ol.appendChild(addNode2);

var facebook = document.getElementById("facebook");
facebook.remove();

var apple = document.getElementById("apple");
ol.removeChild(apple);

/*
  練習問題
  まずhtmlファイルに以下のulタグを用意してください。
  <ul id="sports">
    <li>野球</li>
    <li>サッカー</li>
  </ul>

  1. 「バスケ」をリストの最後に追加してください。

  2. 「テニス」をリストの最初に追加してください。

  3. 「サッカー」をリストから削除してください。
*/
var ul = document.getElementById("sports");
// 1.
var add1 = document.createElement("li");
add1.textContent = "バスケ";
ul.insertBefore(add1, ul.lastChild);

// 2.
var add2 = document.createElement("li");
add2.textContent = "テニス";
ul.insertBefore(add2, ul.firstChild);

// 3.
document.getElementById("soccer").remove();


// 2-14 let, var, constの違い
/* 
        再宣言  再代入  ホイスティング
  var     ◯      ◯     undefined　
  let     ×      ◯       error
  const   ×      ×       error
*/

var varMessage = "Hello";
console.log(varMessage);
var varMessage = "こんにちは";
console.log(varMessage);

var varNumber = 100;
console.log(varNumber);
varNumber = 200;
console.log(varNumber);

// let letMessage = "Hello";
// let letMessage = "こんにちは"; // Uncaught SyntaxError: Identifier 'letMessage' has already been declared

let letNumber = 100;
console.log(letNumber);
letNumber = 200;
console.log(letNumber);

// const constMessage = "Hello";
// const constMessage = "こんにちは"; // Uncaught SyntaxError: Identifier 'constMessage' has already been declared

// const constNumber = 100;
// constNumber = 200; // Uncaught TypeError: Assigment to constant variable.
