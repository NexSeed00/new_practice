$(function () {
    // 配列・連想配列を取り出す練習の仕方 
    // var test1 = [{"a":["A","B"],"c":{"D":"F"}}];
    // console.log();//"aを出す"

    // 検索ボタンをクリックされた時に実行
    $("#serch_btn").click(function () {
        // 入力された値を取得
        var zipcode = $('#zipcode').val();
        // urlを設定
        var url = "https://zipcloud.ibsnet.co.jp/api/search";
        // 送るデータを成形する
        var param = { zipcode: zipcode };
        // サーバーと通信(Ajax)
        // $.ajax().success().error().complete();←古い書き方
        $.ajax({
            type: "GET", //POST
            cache: false,
            data: param,
            url: url,
            dataType: "jsonp"
        })
        .done(function (res) {
            if (res.status != 200) {
                // 通信には成功。APIの結果がエラー
                // エラー内容を表示
                $('#zip_result').html(res.message);
            } else {
                console.log(res);
                // APIの結果が正常
                // console.log(res.results[0]['address3']);
                //住所を表示
                let html = '';
                for (let i = 0; i < res.results.length; i++) {
                    const result = res.results[i];//ただの連想配列
                    html += '<h2>住所'+(i+1)+'</h2>';
                    html += '<div>都道府県コード:' + result.prefcode + '</div>';// += は　html = html + ○○　の意味
                    html += '<div>都道府県:' + result.address1 + '</div>';
                    html += '<div>市区町村:' + result.address2 + '</div>';
                    html += '<div>町域:' + result.address3 + '</div>';
                    html += '<div>都道府県(カナ):' + result.kana1 + '</div>';
                    html += '<div>市区町村(カナ):' + result.kana2 + '</div>';
                    html += '<div>町域(カナ):' + result.kana3 + '</div>';
                }
                $('#zip_result').html(html);
            }

        })
        .fail(function (error) {
            console.log(error);
            $('#zip_result').html("<p>通信エラーです。時間をおいてお試しください</p>");
        });
    // .always(function(){});


    });
});