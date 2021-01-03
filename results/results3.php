<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>一人でも入りやすい店検索サイト　ソロナビ</title>
    <link rel="stylesheet" href="/css/stylesheet.min.css">
    <link rel="stylesheet" href="/css/cardtype.min.css">
    <link rel="stylesheet" href="/css/responsive.min.css"><!-- レスポンシブ対応 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script type="text/javascript" src="/javascript/common.js"></script>

    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">

  </head>
  <body>
    <!-- ページ周り余白カットのため -->
    <div class="wrap">
      <!--　👇ヘッダー -->
      <script type="text/javascript">header();</script>

    <main>

      <div id="contents">
        <div id="main-contents">
          <div class="search_results">

            <?php $getName = $_GET['name'] ;
            include('../conect_db.php');
            $query = mysqli_query($mysqli,"select * from shops where prefecture='{$getName}' ");
            ?>

            <ul class="links">
              <li>
                <a href="../index.php"><i class="fa fa-home fa-lg"></i> ホーム</a>
              </li>
            </ul>

            <h2>【<?php echo $getName ?>】のお店一覧</h2>

          </div>
          <div class="select_cardtype">

            <?php foreach ($query as $value) { ?>

              <article class="cardtype-article">
                    <a class="cardtype-link" href="../shops/shop<?php echo $value['id'] ?>.html">
                    <img src="../images/shop<?php echo $value['id'] ?>/shop-img-1.jpg">
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

  </div>

  　
  　<!--  javascript読込 -->

   <script src="/javascript/script.js"></script>

  </body>
</html>
