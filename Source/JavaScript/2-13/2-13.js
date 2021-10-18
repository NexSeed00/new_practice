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
