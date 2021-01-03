$(function(){
//トップスクロールボタン//
$('#top-link-btn').click(function(){
  $('html, body').animate({
      'scrollTop':0 } ,
      300 )
});
//スマホ時　エリア検索//
if (window.matchMedia( "(max-width: 480px)" ).matches) {
  $('.cat-item-1 i').click(function(){
    var $answer = $(this).next('ul');

    if ($answer.hasClass('open')) {
       $answer.removeClass('open');
       $answer.slideUp('slow');

    }else {
      $answer.addClass('open');
      $answer.slideDown('slow');
    }
  });
};


//PC時　エリア検索//
$('.cat-item-1').hover(
    function(){
        $(this).find('.children').show();
    },
    function(){
        $(this).find('.children').hide();
      });

//スマホ時　ヘッダーメニュー//
$('#menu-icon').click(function(){
  var $answer = $('#menu-icon').find('.header-menu');

  if ($answer.hasClass('open')) {
     $answer.removeClass('open');
     $answer.slideUp();

  }else {
    $answer.addClass('open');
    $answer.slideDown();
  }
});

//slick　スライダー//
$('#slider').slick({
    autoplay:true,
    autoplaySpeed:5000,
    dots:true,
});

});
