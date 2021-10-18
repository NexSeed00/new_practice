$(function(){
  const updateText = () => {
    // .text = text関数
    $("#updateTarget").text("アメリカの主要IT企業GAFA");

    let allList = $(".update_targets");
    // $.each = 繰り返し処理を行う。第一引数には
    $.each($(allList), function(key){
      $(allList[key]).text(key + "番のliタグです。");
    });
  }
  setTimeout(updateText, 1000);

  const updateColor = () => {
    // parent関数 = 親要素の指定をする
    // css関数 = 第一引数には「何を」第二引数には「どうする」を指定してあげる
    $("#google").parent().css("background", "pink");

    let allList = $(".update_targets");
    $.each($(allList), function(key){
      $(allList[key]).css("color", "red");
    });
  }
  setTimeout(updateColor, 2000);


  let text1 = $("#text1").text();
  console.log(text1);

  let text2 = $("#text2");
  $(text2).text("変更しました");

  let text3 = $("#text3");
  $(text3).css("color", "blue");

  let text4 = $("#text4");
  $(text4).css("background", "blue");

  let text5 = $("#text5");
  $(text5).css("font-size", "50px");

  // $("#updateTarget").on("mouseover", function(){
  //   $(this).text("マウスオーバーしました")
  // });

  // $("#updateTarget").on("click", function(){
  //   $(this).text("クリックしました")
  // });

  // on関数 = addEventListerでイベント発火する
  $("#but1").on("mouseover", function(){
    $("#updateTarget").text("ボタンがマウスオーバーされました");
  });

  $("#but2").on("click", function(){
    $("#updateTarget").text("ボタンが押されました");
  });

  $("#but3").on("dblclick", function(){
    $("#updateTarget").text("ボタンがダブルクリックされました");
  });

});