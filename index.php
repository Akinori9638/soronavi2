<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- レスポンシブ対応 -->
    <title>一人でも入りやすい店検索サイト　ソロナビ</title>
    <link rel="stylesheet" href="/css/stylesheet.min.css">
    <link rel="stylesheet" href="/css/cardtype.min.css">
    <link rel="stylesheet" href="/css/responsive.min.css"><!-- レスポンシブ対応 -->
    <link rel="stylesheet" type="text/css" href="/css/slick-theme.css">　<!--　slick読込 -->
    <link rel="stylesheet" type="text/css" href="/css/slick.css">　<!--　slick読込 -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>　<!-- jquery 読込 -->
    <script type="text/javascript" src="/javascript/common.js"></script>

    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">

  </head>
  <body>
    <!-- ページ周り余白カットのため -->
    <div class="wrap">
    <!--　👇ヘッダー -->
    <script type="text/javascript">header();</script>


    <!-- 👇メイン -->
    <main>

      <!-- ページメインの写真 -->
      <div class="header-image">
        <div class="header-image-text">
          <h2 id="page-title">You can enjoy yourself as well</h2>
          <p>こっそり一人で入れるお店を探してみませんか？</p>
          <a href="about.html"><i class="fas fa-coffee"></i>ソロナビ</a>
        </div>
      </div>


      <!-- メイン内容 -->
      <div id="contents">

        <div id="main-contents">

          <!-- レスポンシブ時出現　スライダー -->
          <ul id="slider">
            <?php
             include('conect_db.php');
              $query = mysqli_query($mysqli,'select * from shops');

              foreach ($query as $value) { ?>

              <li class="slider_article">
                <a class="cardtype-link" href="/shops/shop<?php echo $value['id'] ?>.html">
                <img src="/images/shop<?php echo $value['id'] ?>/shop-img-1.jpg">
                <div class="cardtype__article-info">
                  <h2> 【 <?php echo $value['prefecture'] ?>　<?php echo $value['area'] ?> 】
                    <br /><?php echo $value['name'] ?>
                  </h2>
                </div>
                </a>
              </li>
              <?php } ?>
            </ul>

          <!-- カード形式紹介 -->
          <div class="cardtype">


            <?php foreach ($query as $value) { ?>
            <article class="cardtype-article">
                  <a class="cardtype-link" href="/shops/shop<?php echo $value['id'] ?>.html">
                  <img src="/images/shop<?php echo $value['id'] ?>/shop-img-1.jpg">
                  <div class="cardtype__article-info">
                    <h2>【 <?php echo $value['prefecture'] ?>　<?php echo $value['area'] ?> 】<br /><?php echo $value['name'] ?></h2>
                  </div>
                  </a>
            </article>

          <?php } ?>
        </div>
      </div>

  <!-- サイドバー　 -->
      <script type="text/javascript">sidevar();</script>

     </div>
    </main>

    <!--　👇フッター -->
    <script type="text/javascript">footer();</script>

  </div><!--.wrap  -->

  　
  　　<!-- javascript読込 -->
    <script type="text/javascript" src="/javascript/slick.min.js"></script>
  　<script src="javascript/script.js"></script>

  </body>
</html>
