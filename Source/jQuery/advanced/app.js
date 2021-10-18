// Q1
$(function(){
  alert('横幅:' + $('.box').width() + ', 縦幅:' + $('.box').height());
});


// Q2
$(function(){
  $('#color-change').on("change", function(){
    let select_color = $(this).val();
    $('#title').css('color', select_color);
  });
});

// Q3
$(function(){
  const birthday = '2013-01-29'; //ここはご自分の誕生日にする
  $('#birthday').on("change", function(){
    if( $(this).val() == birthday){
      $('h1').fadeIn();
    }
  });
});

// Q4
// let array = [1,2,3,4];
// array.pop();
// alert(array);

// Q5
// const array = [35,80,512,578,90];
// alert(Math.max(...array));

// Q6
// $(function(){
//   $('.clone').on('click', function(){
//    let li_clone = $('li').eq(0).clone();
//    $('ul').append(li_clone);
//   });
//  });

// Q7
// $(function(){
//   $('.x-scroll').on('scroll', function(){
//    let scroll_val = $(this).scrollLeft();
//    $('.scroll-val').text(scroll_val);
//   });
//  });

// Q8
// $(function(){
//   $('.add').on('click', function(){
//    $('.val').append($('input').val());
//   });
//  });

//Q9
// $(function(){
//   $('.double').on('dblclick', function(){
//    alert("ダブルクリックされました");
//   });
//  });

// Q10
// $(function(){
//   $('input').on('keyup', function(){
//    $('.val').text($(this).val());
//   });
//  });