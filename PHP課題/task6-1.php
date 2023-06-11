<?php
function showString($num, $str) {
  for ($i = 0; $i < $num; $i++) {
    echo "$str <br>";
  }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP課題6-1</title>
  <meta name="description" content>
</head>
<body>
  <p><?php showString(3, '気合いだ！'); ?></p>
</body>
</html>