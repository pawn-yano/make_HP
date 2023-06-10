<?php
$number = mt_rand(1, 100);
if ($number <= 5) {
  $fortune = '大凶';
} elseif ($number <= 20) {
  $fortune = '凶';
} elseif ($number <= 50) {
  $fortune = '吉';
} elseif ($number <= 80) {
  $fortune = '中吉';
} else {
  $fortune = '大吉';
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP課題4-1</title>
  <meta name="description" content>
</head>
<body>
  <h1>今日の運勢は"<?= $fortune; ?>"です。</h1>
</body>
</html>