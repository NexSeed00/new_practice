$(function() {
  let ol = $("#ol");
  // <li>で追加しないと、すべてのliを取得してしまうので、全てが[追加された文字]に変わってしまう。
  let addNode1 = $("<li>").text("追加された文字列");
  ol.prepend(addNode1);

  let addNode2 = $("<li>").text("さらに追加");
  ol.append(addNode2);

  $("#facebook").remove();

  let ul = $("#sports");
  let basketball = $("<li>").text("バスケットボール");
  ul.append(basketball);

  let tennis = $("<li>").text("テニス");
  ul.append(tennis);

  $("#soccer").remove();
});

// prepend = 前に追加
// append = 後ろに追加
// remove = 削除

