<?php
$name       = $_POST['name'];
$furigana   = $_POST['furigana'];
$email      = $_POST['email'];
$phone      = $_POST['phone'];
$inqItem    = $_POST['inqItem'];
$inqContent = $_POST['inqContent'];
$privPol    = $_POST['privPol'];

$sendable = True;

$readonly = $sendable ? 'readonly' : '';
$disabled = $sendable ? 'disabled' : '';
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP課題8-1</title>
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
        <p>
          お問い合わせや業務内容に関するご質問は、電話またはこちらのお問い合わせフォームより承っております。<br>
          後ほど担当者よりご連絡させていただきます。
        </p>
      </div>

      <form action="<?= $sendable ? 'task9-1.php' : 'task8-1.php'; ?>" method="post">
        <table>
          <tr>
            <th>お名前<span class="reqd-icon">必須</span></th>
            <td><input class="text-box" type="text" name="name" placeholder="山田太郎" value="<?= $name; ?>" <?= $readonly; ?>></td>
          </tr>
          <tr>
            <th>フリガナ<span class="reqd-icon">必須</span></th>
            <td><input class="text-box" type="text" name="furigana" placeholder="ヤマダタロウ" value="<?= $furigana; ?>" <?= $readonly; ?>></td>
          </tr>
          <tr>
            <th>メールアドレス<span class="reqd-icon">必須</span></th>
            <td><input class="text-box" type="email" name="email" placeholder="info@fast-creademy.jp" value="<?= $email; ?>" <?= $readonly; ?>></td>
          </tr>
          <tr>
            <th>電話番号<span class="reqd-icon">必須</span></th>
            <td><input class="text-box" type="tel" name="phone" placeholder="000-0000-0000" value="<?= $phone; ?>" <?= $readonly; ?>></td>
          </tr>
          <tr>
            <th>お問い合わせ項目<span class="reqd-icon">必須</span></th>
            <td>
              <select name="inqItem" onchange="this.style.color='black';" <?= ($inqItem != '') ? 'style="color: black;"' : ''; ?> <?= $disabled; ?>>
                <option value="" hidden>選択してください</option>
                <option value="XXXX" <?= ($inqItem == 'XXXX') ? 'selected' : ''; ?>>XXXXについて</option>
                <option value="YYYY" <?= ($inqItem == 'YYYY') ? 'selected' : ''; ?>>YYYYについて</option>
                <option value="ZZZZ" <?= ($inqItem == 'ZZZZ') ? 'selected' : ''; ?>>ZZZZについて</option>
              </select>
              <?= $sendable ? '<input type="hidden" name="inqItem" value="'.$inqItem.'">' : ''; ?>
            </td>
          </tr>
          <tr>
            <th>お問い合わせ内容<span class="reqd-icon">必須</span></th>
            <td><textarea name="inqContent" rows="7" placeholder="こちらにお問い合わせ内容をご記入ください" <?= $readonly; ?>><?= $inqContent; ?></textarea></td>
          </tr>
          <tr>
            <th>個人情報保護方針<span class="reqd-icon">必須</span></th>
            <td>
              <input type="hidden" name="privPol" value="">
              <input type="checkbox" name="privPol" value="checked" <?= $privPol; ?> <?= $disabled; ?>>
              <?= $sendable ? '<input type="hidden" name="inqItem" value="'.$privPol.'">' : ''; ?>
              <a href="privpol.html" target="_blank">個人情報保護方針<span class="fas fa-window-restore"></span></a>に同意します。
            </td>
          </tr>
        </table>
        <div class="form_bottom">
          <button type="submit" class="btn green-btn">確認</button>
        </div>
      </form>
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
        <li><strong>ここには会社名が入ります</strong></li>
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