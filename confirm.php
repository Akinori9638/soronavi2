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
      <!--　👇ヘッダー -->
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

              <h2>お問い合わせ内容確認</h2>
              <p>以下の内容でお間違いないでしょうか</p>

              <form action="complete.php" method="post">
               <table class="confirm-text">
                <tr>
                  <th>お名前</th>
                  <td><?php echo $_POST['name']?></td>
                  <input type="hidden" name="name" value="<?php echo $_POST['name']?>" >
                </tr>
                <tr>
                  <th>メールアドレス</th>
                  <td><?php echo $_POST['addres']?></td>
                  <input type="hidden" name="addres" value="<?php echo $_POST['addres']?>" >
                </tr>
                <tr>
                  <th>お問い合わせ内容</th>
                  <td><?php echo $_POST['contents']?></td>
                  <input type="hidden" name="contents" value="<?php echo $_POST['contents']?>" >
                </tr>
               </table>
               <input id=contact_button type="submit"   value="送信" />
              </form>



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
