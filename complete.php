<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about | ソロナビ</title>
    <link rel="stylesheet" href="/css/stylesheet.min.css">
    <link rel="stylesheet" href="/css/contact.min.css">
    <link rel="stylesheet" href="/css/responsive.min.css"><!-- レスポンシブ対応 -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script type="text/javascript" src="/javascript/common.js"></script>

    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  </head>


  <body>
    <!-- ページ周り余白カットのため -->
    <div class="wrap">

     <script type="text/javascript">header();</script>

    <main>
      <div id="contents">
        <div id="main-contents">
          <div class="text-contents">
              <ul class="links">
                <li>
                  <a href="index.php"><i class="fa fa-home fa-lg"></i> ホーム</a>
                </li>
              </ul>

              <?php
              include('conect_db.php');

                $query = mysqli_query($mysqli,'INSERT INTO customer(名前,メールアドレス,内容)
                  VALUES( "echo  $_POST["name"]"　,　"echo  $_POST["addres"]"　,　"echo $_POST["contents"]"　)');

                ?>

              <h2>送信完了</h2>
              <p>お問い合わせありがとうございます。</p>　
              <p>ご協力ありがとうございました。</p>





            </div>
        </div>


      </div>

    </main>
    <!--　👇フッター -->
    <script type="text/javascript">footer();</script>>


  </div>

  　
  　　<!--  javascript読込 -->

  　<script src="javascript/script.js"></script>

  </body>
</html>
