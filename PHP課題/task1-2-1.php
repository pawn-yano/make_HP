<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP課題1-2-1</title>
  <meta name="description" content>
</head>
<body>
  <?php 
  define('TAX_RATE', '10');
  
  $pencil_name = '鉛筆';
  $pencil_price = '100';
  $pencil_withTax = '110';
  
  $eraser_name = '消しゴム';
  $eraser_price = '200';
  $eraser_withTax = '220';
  ?>
  
  <p>現在、消費税は<?= TAX_RATE; ?>%です。</p>
  <p><?= $pencil_name; ?>が<?= $pencil_price; ?>円で税込<?= $pencil_withTax; ?>円です。</p>
  <p><?= $eraser_name; ?>が<?= $eraser_price; ?>円で税込<?= $eraser_withTax; ?>円です。</p>
</body>
</html>