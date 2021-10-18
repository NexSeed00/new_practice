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
