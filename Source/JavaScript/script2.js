const updateText = () => {
  // h1について
  // console.log(document.querySelector("h1"));
  // document.querySelector("#updateTarget").textContent = "アメリカの主要IT企業GAFA";
  // querySelectorは処理速度が遅いので、できる限りgetElementByIdを使う
  document.getElementById("updateTarget").textContent = "アメリカの主要IT企業GAFA";

  // listについて
  document.querySelectorAll("li")[1].textContent = "アマゾン";
  var allList = document.querySelectorAll("ol > li");
  console.log(allList.length); // allListの要素数
  console.log(document.getElementById("updateTarget").textContent.length);

  allList = document.getElementsByTagName("li");
  allList = document.getElementsByClassName("update_targets");

  for (var i = 0; i < allList.length; i++){
    allList[i].textContent = i + "番のallListタグです";
  }
}
// updateText();
setTimeout(updateText, 1000);

const updateColor = () => {
  // .styleでCSSを変更することができる
  document.getElementById("google").parentElement.style.background = "pink";

  var allList = document.getElementById("ol").children;
  for (var i = 0; i < allList.length; i++){
    allList[i].style.color = "red"
  }
}

setTimeout(updateColor, 2000);

// 練習問題
const practiceText = () => {
  console.log(document.getElementById("text1").textContent);
  document.getElementById("text2").textContent = "実践2";
  document.getElementById("text3").style.color = "blue";
  document.getElementById("text4").style.background = "aqua";
  document.getElementById("text5").style.fontSize = "20px";
}
setTimeout(practiceText, 1000);

document.getElementById("updateTarget").addEventListener("mouseover", function() {
  this.textContent = "マウスオーバー";
});

document.getElementById("updateTarget").addEventListener("click", function() {
  this.textContent = "クリック";
});

// 練習問題
document.getElementById("btn").addEventListener("mouseover", () => {
  document.getElementById("updateTarget").textContent="ボタンがマウスオーバーされました";
});
document.getElementById("btn").addEventListener("click", () => {
  document.getElementById("updateTarget").textContent="ボタンがクリックされました";
});
document.getElementById("btn").addEventListener("dblclick", () => {
  document.getElementById("updateTarget").textContent="ボタンがダブルクリックされました";
});


var addNode1 = document.createElement("li");
addNode1.textContent = "追加された文字列";

var ol = document.getElementById("ol");
ol.insertBefore(addNode1, ol.firstChild); // 最初に追加する

var addNode2 = document.createElement("li");
addNode2.textContent = "さらに追加";

ol.appendChild(addNode2); // 一番最後に追加する

var facebook = document.getElementById("facebook");
facebook.remove();

var apple = document.getElementById("apple");
ol.removeChild(apple);

// 練習問題
var ul = document.getElementById("sports");

var add1 = document.createElement("li");
add1.textContent = "バスケ";
ul.insertBefore(add1, ul.lastChild);

var add2 = document.createElement("li");
add2.textContent = "テニス";
ul.insertBefore(add2, ul.firstChild);

document.getElementById("soccer").remove();
