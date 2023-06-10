<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP課題5-1</title>
  <meta name="description" content>
  <style>
    table {
      border-spacing: 15px 5px;
    }
  </style>
</head>
<body>
  <h1>九九の計算</h1>
  <table>
    <?php
    for ($i = 1; $i <= 9; $i++) {
      echo '<tr>';
      for ($j = 1; $j <= 9; $j++) {
        $p = $i * $j;
        echo "<td> $i × $j = $p </td>";
      }
      echo '</tr>';
    }
    ?>
  </table>
</body>
</html>