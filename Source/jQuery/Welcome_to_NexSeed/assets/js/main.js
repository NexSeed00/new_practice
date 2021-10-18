$(function() {
    $("#toTop").on("click", function(){
        $("html, body").animate({scrollTop: 0}, 500);
    });

    $(".contents").hide();

    $("h2").on("mouseover", function(){
        $(this).parent().find(".contents").slideDown(500);
    });

    // その日の日付すべてを取得する
    const now = new Date();
    console.log(now);

    // 年だけを取得する
    const year = now.getFullYear();
    console.log(year);

    // html関数 = ()内にhtmlを記述することができ、&copyも正常に動作する。textではそのまま表示されてしまう
    $("footer div").html("Copyright &copy; " + year + " SeedKun Inc.");

    // ↓月や日付、時間、曜日を出力する方法
    const month = now.getMonth() +1;
    console.log(month);
    console.log(now.getDate());
    console.log(now.getHours());
    console.log(now.getDay());

    // 曜日を日本語で表示させる switch文で条件分岐
    switch (now.getDay()){
        case 5:
          console.log("金曜日");
          break;
    }
});
