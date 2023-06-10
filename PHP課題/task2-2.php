<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP課題2-2</title>
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
  $pencil = ['name' => '鉛筆', 'price' => 100, 'withTax' => 110];
  $eraser = ['name' => '消しゴム', 'price' => 200, 'withTax' => 220];
  $ruler = ['name' => '定規', 'price' => 300, 'withTax' => 330];
  ?>
  
  <table>
    <thead>
      <tr>
        <th>商品</th>
        <th>価格</th>
        <th>税込価格</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?= $pencil['name']; ?></th>
        <td><?= $pencil['price']; ?>円</td>
        <td><?= $pencil['withTax']; ?>円</td>
      </tr>
      <tr>
        <td><?= $eraser['name']; ?></th>
        <td><?= $eraser['price']; ?>円</td>
        <td><?= $eraser['withTax']; ?>円</td>
      </tr>
      <tr>
        <td><?= $ruler['name']; ?></th>
        <td><?= $ruler['price']; ?>円</td>
        <td><?= $ruler['withTax']; ?>円</td>
      </tr>
    </tbody>
  </table>
</body>
</html>