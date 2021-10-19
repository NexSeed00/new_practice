$(function(){
  const updateText = () => {
    // h1タグについて
    $("#updateTarget").text("アメリカの主要IT企業GAFA");

    // liタグについて
    let allList = $(".update_targets");
    $.each($(allList), function(key) {
      $(allList[key]).text(key + "番のliタグです。");
    });
  }
  setTimeout(updateText, 1000);

  const updateColor = () => {
    // id googleの親について
    $("#google").parent().css("background", "pink");

    // liタグについて
    let allList = $(".update_targets");
    $.each($(allList), function(key) {
      $(allList[key]).css("color", "red");
    });
  }
  setTimeout(updateColor, 2000);

  /*
    練習問題
    1. htmlファイルに以下のpタグを用意して、その文字を取得して、console.logで出力してください。
      <p id="text1">練習1</p>

    2. htmlファイルに以下のpタグを用意して、その文字を好きな文字列に変更してください。
      <p id="text2">練習2</p>

    3. htmlファイルに以下のpタグを用意して、その文字の色を好きな色に変更してください。
      <p id="text3">練習3</p>

    4. htmlファイルに以下のpタグを用意して、その文字の背景色を好きな色に変更してください。
      <p id="text4">練習4</p>

    5. htmlファイルに以下のpタグを用意して、その文字の大きさを好きな大きさに変更してください。
      <p id="text5">練習5</p>

  */
  
  // 1.
  let text1 = $("#text1").text();
  console.log(text1);

  // 2.
  let text2 = $("#text2");
  $(text2).text("変更しました");
  
  // 3.
  let text3 = $("#text3");
  $(text3).css("color", "blue");

  // 4.
  let text4 = $("#text4");
  $(text4).css("background", "skyblue");

  // 5.
  let text5 = $("#text5");
  $(text5).css("font-size", "50px");
});
