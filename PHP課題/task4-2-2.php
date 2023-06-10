<?php
$month = mt_rand(1, 12);
if ($month <= 2 || $month == 12) {
  $season = '冬';
} elseif ($month <= 5) {
  $season = '春';
} elseif ($month <= 8) {
  $season = '夏';
} else {
  $season = '秋';
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP課題4-2-2</title>
  <meta name="description" content>
</head>
<body>
  <h1><?= $month . '月は' . $season . 'です。'; ?></h1>
</body>
</html>