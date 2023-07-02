<?php
date_default_timezone_set('Asia/Tokyo');
$regDate = date('Y-m-d H:i:s');

foreach ($_POST as $key => $value) {
  $$key = $value;
}

try {
  $pdo = new PDO('mysql:host=localhost', 'root', 'root');
  $pdo->query("CREATE DATABASE IF NOT EXISTS consumer DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci");
  $pdo->query("USE consumer; SET NAMES 'utf8mb4'");

  $pdo->query("CREATE TABLE IF NOT EXISTS inquiry (
    id        INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    fullName  VARCHAR(255),
    furigana  VARCHAR(255),
    email     VARCHAR(255),
    phone     VARCHAR(255),
    inqItem   VARCHAR(127),
    inqCont   TEXT,
    regDate   DATETIME
  )");

  $stmt = $pdo->prepare("INSERT INTO inquiry VALUES (0, ?, ?, ?, ?, ?, ?, ?)");
  $stmt->bindParam(1, $fullName, PDO::PARAM_STR);
  $stmt->bindParam(2, $furigana, PDO::PARAM_STR);
  $stmt->bindParam(3, $email, PDO::PARAM_STR);
  $stmt->bindParam(4, $phone, PDO::PARAM_STR);
  $stmt->bindParam(5, $inqItem, PDO::PARAM_STR);
  $stmt->bindParam(6, $inqCont, PDO::PARAM_STR);
  $stmt->bindParam(7, $regDate, PDO::PARAM_STR);
  $stmt->execute();

} catch (PDOException $e) {
  echo $e->getMessage() . '<br>';
  exit;
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP課題9-1｜会社名が入ります</title>
  <meta name="description" content>
  <link rel="stylesheet" href="../reset.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.0/css/all.css">
</head>
<body>
  <header>
    <div class="header_inner">
      <div class="header_upper">
        <div class="header_upper_left">
          <h1 class="site-name"><a href="../index.html">ここには会社名が入ります</a></h1>
        </div>
        <div class="header_upper_right">
          <nav class="header_btns">
            <ul>
              <li><a href="#" class="btn pink-btn">ボタン01</a></li>
              <li><a href="#" class="btn green-btn">ボタン02</a></li>
            </ul>
          </nav>
        </div>
      </div>
      <div class="header_lower">
        <nav class="header_menus">
          <ul>
            <li><a href="#">メニュー01</a></li>
            <li><a href="#">メニュー02</a></li>
            <li><a href="#">メニュー03</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>

  <div class="mv">
    <img src="../images/contact_mv.png" width="100%" alt>
  </div>

  <main>
    <div class="main_wrapper">
      <div class="main_top">
        <h1>お問い合わせ</h1>
        <h3>送信完了しました。</h3>
      </div>
    </div>
    
  </main>

  <footer>
    <div class="footer_area1">
      <div class="footer_area1_btn-box">
        <h3>こちらからご購入ください</h3>
        <a href="#" class="btn pink-btn">ネットショップ</a>
      </div>
      <div class="footer_area1_btn-box">
        <h3>お気軽にお問い合わせください</h3>
        <a href="index.html" class="btn green-btn">お問い合わせ</a>
      </div>
    </div>
    <div class="footer_area2">
      <ul>
        <li>ここには会社名が入ります</li>
        <li>住所が入ります</li>
        <li>03-1234-5678</li>
        <li>営業時間：9:00～18:00</li>
      </ul>
    </div>
    <div class="footer_area3">
      <nav class="footer_links">
        <ul>
          <li><a href="#" target="_blank">リンク01</a></li>
          <li><a href="#" target="_blank">リンク02</a></li>
          <li><a href="#" target="_blank">リンク03</a></li>
          <li><a href="#" target="_blank">リンク04</a></li>
          <li><a href="#" target="_blank">リンク05</a></li>
          <li><a href="#" target="_blank">リンク06</a></li>
          <li><a href="#" target="_blank">リンク07</a></li>
        </ul>
      </nav>
    </div>
    <div class="footer_area4">
      <p>ここには会社名が入ります©Copyright.</p>
    </div>
  </footer>  
</body>
</html>