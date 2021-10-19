$(function() {
  let ol = $("#ol");
  let addNode1 = $("<li>").text("追加された文字列");
  ol.prepend(addNode1);

  let addNode2 = $("<li>").text("さらに追加");
  ol.append(addNode2);

  $("#facebook").remove();

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

  let ul = $("#sports");

  // 1.
  let add = $("<li>").text("バスケ");
  ul.append(add);

  // 2.
  ul.prepend($("<li>").text("テニス"));

  // 3.
  $("#soccer").remove();
});
