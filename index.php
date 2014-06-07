<?php

include 'setsu.php';

require_once('function.php');
/*session_start();

if (!is_user()) {
  redirect('login.php');
}*/

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
    <title>スポーツちゃん</title>
    <link rel="stylesheet" href="css/shiki.css"/>
    <link rel="stylesheet" href="css/dark-hive/jquery-ui-1.10.4.custom.min.css"/>
    <script type="text/javascript" src="js/jquery-1.9.1.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.10.4.custom.min.js"></script>
    <script type="text/javascript" src="js/jvs.js"></script>
    <link href="css/style_sp.css" rel="stylesheet" type="text/css" media="only screen and (max-width:480px)">
    <link href="css/style_pad.css" rel="stylesheet" type="text/css" media="only screen and (min-width:481px) and (max-width:800px)">
</head>
 
<body>
  <div id="zentai">
  <!-- ヘッダ -->
  <header>
  <div id="kitagawa"><h1><a href="index.php">スポーツちゃん</a></h1>
  </div>
   <div><h4>admin test</h4>
    <h5>こんにちは <?php echo $_SESSION['yuzamei'].'さん';?>!&nbsp&nbsp<a href="logout.php">ログアウト</a></h5>
  </div>
</header>
  <!-- メインメニュー -->
<div class="headMenu">
         <ul>
          <li class="active"><a href="index.php"><span>ホーム</span></a></li>
            <li><a href="transaction.php"><span>トランザクション</span></a></li>
            <li><a href="bet.php"><span>ベット</span></a></li>
            <li><a href="match.php"><span>マッチ</span></a></li>
            <li><a href="player.php"><span>プレーヤー</span></a></li>
            <li><a href="playertransaction.php"><span>プレーヤートランザクション</span></a></li>
            <li><a href="agent.php"><span>エージェント</span></a></li>
            <li><a href="agenttransaction.php"><span>エージェントトランザクション</span></a></li>
            <li><a href="subagent.php"><span>サブエージェント</span></a></li>
            <li><a href="subagenttransaction.php"><span>サブエージェントトランザクション</span></a></li>
            <li><a href="book.php"><span>ブック</span></a></li>
            <li><a href="csvup.php"><span>CSVアップロード</span></a></li>
            <li><a href="csvdown.php"><span>CSVダウンロード</span></a></li>
         </ul>
      </div>
      <div id="chuuou">
      <h2>ホームページ</h2>
      <section>
        
<p>このテンプレートは<a href="http://template-party.com/">無料ホームページテンプレート配布サイトのTemplate Party</a>が配布している『<a href="http://template-party.com/temp_biz.html#biz25">ビジネスサイト向け 無料ホームページテンプレート tp_biz25</a>』です。<br>
必ず<a href="http://template-party.com/read.html">利用規約</a>をご一読の上でご利用下さい。不明な点があれば<a href="http://template-party.com/faq.html">ＦＡＱコーナー</a>をご一読下さい。</p>
<p>「地球に住む人々は、魂を重力に引かれて飛ぶことができない。」
      クワトロ・バジーナ</p>
<p><strong class="color1">■HP最下部の著作表示「Web Design:Template-Party」は無断で削除しないで下さい</strong><br>
わざと見えなく加工する事も禁止します。お守りいただけない場合、テンプレートの利用を中止し、違反金を請求いたします。</p>
<p><strong class="color1">■どうしても下部の著作を外したい場合は</strong><br>
<a href="http://template-party.com/member.html">ライセンス契約</a>を行う事でHP下部の著作を外す事ができます。おまけ特典として、制作時Photoshopファイルももらえます。</p>

</section>
      <hr>
      </div>
  <footer id="saikabu">
    <small>2014 スポーツちゃん</small>
</footer>
</div><!-- zentai -->
  </body>
</html>