<?php
define('WEEK_LENGTH', 7);
$week = ['日', '月', '火', '水', '木', '金', '土'];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP課題5-2</title>
  <meta name="description" content>
</head>
<body>
  <ul>
    <?php
    $i = 0;
    while ($i < WEEK_LENGTH) {
      echo '<li>' . $week[$i] . '曜日</li>';
      $i++;
    }
    ?>
  </ul>
</body>
</html>