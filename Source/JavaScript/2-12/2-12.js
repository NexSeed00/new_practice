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
