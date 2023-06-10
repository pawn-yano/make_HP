<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP課題2-1</title>
  <meta name="description" content>
</head>
<body>
  <?php
  $week = ['日', '月', '火', '水', '木', '金', '土'];
  ?>
  
  <ul>
    <li><?= $week[0]; ?>曜日</li>
    <li><?= $week[1]; ?>曜日</li>
    <li><?= $week[2]; ?>曜日</li>
    <li><?= $week[3]; ?>曜日</li>
    <li><?= $week[4]; ?>曜日</li>
    <li><?= $week[5]; ?>曜日</li>
    <li><?= $week[6]; ?>曜日</li>
  </ul>
</body>
</html>