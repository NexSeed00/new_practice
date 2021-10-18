$(function(){
  $('#q1-btn').on('click', function(){
    $(this).addClass('large-btn');
  });

  $('#q2-btn').on('mouseover', function(){
    $(this).css('opacity', 0.5);
  });

  $('q3-btn')
    .on('mouseover', function(){
      $(this).css('opacity', 0.5);
    })
    .on('mouseover', function(){
      $(this).css('opacity', 1)
    });
  
  $('#q4-btn').on('click', function(){
    $('p').text('これに変更');
  });

  $('#q5-btn').on('click',function(){
    let li = $('<li>');
    li.text('ぶどう');
    li.addClass('grape');
    $('.apple').before(li);
  });

  $('#q6-btn').on('click', function(){
    let span = $('<span>');
    span.text('追加');
    span.addClass('red');
    $('.q6-text').append(span);
  });

  // $('#q7-btn').on('click',function(){
  //   $(this).toggleClass('on');
  // });

  $(function(){
    $('#q7-btn').click(function(){
      $(this).toggleClass('on')
    })
  });

  $('#q8-btn').on('click',function(){
    $(this).siblings().slideToggle();
  });

  $('#q9-btn').on('click',function(){
    $('body,html').animate({scrollTop:0},500);
  });

  $('.q10-show-btn').on('click', function(){
    $('.q10-target').fadeIn(1000);
  });

  $('.q10-hide-btn').on('click', function(){
    $('.q10-target').fadeOut(2000);
  });

  $(window).on('scroll', function(){
    let q11 = $('#q11').offset().top;
    let wh = $(window).height();
    if (q11 <= $(window).scrollTop() + wh) {
      $('.q11-target').removeClass('hide');
    } else {
      $('.q11-target').addClass('hide');
    }
  });

  $('#q12-btn').on('click', function(){
    $('.q12-target').toggleClass('hide');
  });
});