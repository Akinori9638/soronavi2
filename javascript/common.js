function header() {
  var html = "" ;

  html += '<header >' ;
  html += '<div class="header-left">' ;
  html += '<a href="/"><i class="fas fa-coffee"></i>ソロナビ</a>' ;
  html += '</div>'  ;
  html += '<div class="header-right">'  ;
  html += '<a href="/about.html">about</a>' ;
  html += '<a href="/contact.html">contact</a>'  ;
  html += '</div>'  ;
  //header レスポンシブ時//
  html += '<div id="menu-icon">' ;
  html += '<span class="fa fa-bars"></span>';
  html += '<div class="header-menu">' ;
  html += '<a href="/about.html">about</a>';
  html += '</br>' ;
  html += '<a href="/contact.html">contact</a>';
  html += '</div>' ;
  html += '</div>';
  html += '</header>';

document.write(html);
};


function footer() {
  var html = "" ;

  html +='<footer>' ;
  //ページ内トップへ行くボタン//
  html +='<div id="top-link">' ;
  html +='<a href="#" id="top-link-btn">TOP</a>' ;
  html +='</div>' ;

  //各種リンク//
  html +='<div id="footer-menu">' ;
  html +='<div >' ;
  html +='<a href="/" class=home-link><i class="fa fa-home fa-lg"></i> HOME</a>' ;
  html +='</div>' ;
  html +='<nav>' ;
  html +='<div class="page-links">' ;
  html +='<a href="/about.html">about</a>' ;
  html +='<a href="/contact.html">contact</a>' ;
  html +='</div>' ;
  html +='</nav>' ;
  html +='<p class="copyright">一人でも入りやすいお店検索サイト　<i class="fas fa-coffee"></i>ソロナビ</p>' ;
  html +='</div>' ;
  html +='</footer>' ;

  document.write(html);
} ;

function sidevar() {
  var html = "" ;

  html += '<div id="side-var">' ;
  //　ジャンル検索 //
  html += '<div id="types" class="widget widget_categories"><h4 class="widgettitle">ジャンルから探す</h4>' ;
  html += '<ul class="parents">' ;

  var types = ["うどん","定食","ラーメン","焼肉","しゃぶしゃぶ","お好み焼き"];
  types.forEach((type) => {
    html += '<li class="cat-item-1"><a href="/results/results.php? name='+ type +' ">' + type + '</a></li>' ;
  });

  html += '</ul>' ;
  html += '</div>' ;

  //エリア検索//
  html += '<div id="categories" class="widget widget_categories"><h4 class="widgettitle">エリアから探す</h4>' ;
  html += '<ul class="parents">' ;

    //神奈川//
  html += '<li class="cat-item-1"><a href="/results/results3.php? name=神奈川">神奈川</a>' ;
  html += '<i class="fas fa-angle-down"></i>' ;
  html += '<ul class="children">' ;

  var areas = ["川崎"];
  areas.forEach((area) => {
  html += '<li class="cat-item-2"><a href="/results/results2.php? name='+ area +' ">' + area + '</a></li>' ;
  });

  html += '</ul>' ;
  html += '</li>' ;

    //東京//
  html += '<li class="cat-item-1"><a href="/results/results3.php? name=東京">東京</a>' ;
  html += '<i class="fas fa-angle-down"></i>' ;
  html += '<ul class="children">' ;

  var areas = ["赤坂","綾瀬","池袋","品川","新宿","水道橋","世田谷"];
  areas.forEach((area) => {
  html += '<li class="cat-item-2"><a href="/results/results2.php? name='+ area +' ">' + area + '</a></li>' ;
  });

  html += '</ul>' ;
  html += '</li>' ;

    //大阪//
  html += '<li class="cat-item-1"><a href="/results/results3.php? name=大阪">大阪</a>' ;
  html += '<i class="fas fa-angle-down"></i>' ;
  html += '<ul class="children">' ;

  var areas = ["梅田"];
  areas.forEach((area) => {
  html += '<li class="cat-item-2"><a href="/results/results2.php? name='+ area +' ">' + area + '</a></li>' ;
  });

  html += '</ul>' ;
  html += '</li>' ;
    //広島//
  html += '<li class="cat-item-1"><a href="/results/results3.php? name=広島">広島</a>' ;
  html += '<i class="fas fa-angle-down"></i>' ;
  html += '<ul class="children">' ;

  var areas = ["八丁堀"];
  areas.forEach((area) => {
  html += '<li class="cat-item-2"><a href="/results/results2.php? name='+ area +' ">' + area + '</a></li>' ;
  });

  html += '</ul>' ;
  html += '</li>' ;

    //閉じタグ//
  html += '</ul>' ;//.parents
  html += '</div>' ;//.categories
  html += '</div>' ;//#side-var

  document.write(html);
} ;
