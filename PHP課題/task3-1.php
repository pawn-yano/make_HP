<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP課題3-1</title>
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
  <?php 
  define('TAX_RATE', 10);
  $pencil = ['name' => '鉛筆', 'price' => 100];
  $eraser = ['name' => '消しゴム', 'price' => 200];
  ?>
  
  <table>
    <thead>
      <tr>
        <th>商品</th>
        <th>価格</th>
        <th>税込価格</th>
        <th>1Dzの価格</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?= $pencil['name']; ?></th>
        <td><?= $pencil['price']; ?>円</td>
        <td><?= $pencil['price'] * (1 + TAX_RATE / 100); ?>円</td>
        <td><?= $pencil['price'] * (1 + TAX_RATE / 100) * 12; ?>円</td>
      </tr>
      <tr>
        <td><?= $eraser['name']; ?></th>
        <td><?= $eraser['price']; ?>円</td>
        <td><?= $eraser['price'] * (1 + TAX_RATE / 100); ?>円</td>
        <td><?= $eraser['price'] * (1 + TAX_RATE / 100) * 12; ?>円</td>
      <tr>
    </tbody>
  </table>
  <p>消費税は<?= TAX_RATE; ?>%です。</p>
</body>
</html>