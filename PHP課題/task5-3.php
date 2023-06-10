<?php
$items = [
  'pencil' => ['name' => '鉛筆', 'price' => 100, 'withTax' => 110],
  'eraser' => ['name' => '消しゴム', 'price' => 200, 'withTax' => 220],
  'ruler' => ['name' => '定規', 'price' => 300, 'withTax' => 330],
];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP課題5-3</title>
  <meta name="description" content>
  <style>
    table {
      border-collapse: collapse;
    }
    th, td {
      border: 2px solid black;
      width: 100px;
      text-align: center;
    }
  </style>
</head>
<body>
  <table>
    <thead>
      <tr>
        <th>商品</th>
        <th>価格</th>
        <th>税込価格</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      foreach ($items as $item) {
        echo '<tr>';
        foreach ($item as $key => $value) {
          if ($key == 'price' || $key == 'withTax') {
            $value .= '円';
          }
          echo "<td> $value </td>";
        }
        echo '</tr>';
      }
      ?>
    </tbody>
  </table>
</body>
</html>