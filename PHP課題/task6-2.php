<?php
function max_number($n1, $n2) {
  return ($n1 >= $n2) ? $n1 : $n2;
}
$a = 9;
$b = 21;
$max_a_b = max_number($a, $b);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP課題6-2</title>
  <meta name="description" content>
</head>
<body>
  <p>
    <?php
    echo '$a = ' . "$a <br>";
    echo '$b = ' . "$b <br>";
    echo '$aと$bのうち最大値は' . "{$max_a_b}です。";
    ?>
  </p>
</body>
</html>