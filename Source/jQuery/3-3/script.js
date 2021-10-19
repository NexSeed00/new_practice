$(function() {
  $("#updateTarget").on("mouseover", function() {
    $(this).text("マウスオーバーしました。")
  });

  $("#updateTarget").on("click", function() {
    $(this).text("クリックしました。")
  });

  /*
    練習問題
    1. htmlファイルにボタンを用意して、そのボタンを「マウスオーバー」したらh1タグの文字を任意の文字列に変更してください。

    2. htmlファイルにボタンを用意して、そのボタンを「クリック」したらh1タグの文字を任意の文字列に変更してください。

    3. htmlファイルにボタンを用意して、そのボタンを「ダブルクリック」したらh1タグの文字を任意の文字列に変更してください。
  */

  // 1.
  $("#practice1").on("mouseover", function() {
    $("#updateTarget").text("マウスオーバーしました。");
  });

  // 2.
  $("#practice2").on("click", function() {
    $("#updateTarget").text("クリックしました。");
  });
 
  // 3.
  $("#practice3").on("dblclick", function() {
    $("#updateTarget").text("ダブルクリックしました");
  });
});
