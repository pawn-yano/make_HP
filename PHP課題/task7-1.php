<?php
class Staff {
  private $name;
  private $age;
  private $sex;
  private $id;
  private static $count = 0;
  
  public function __construct($name, $age, $sex) {
    $this->name = $name;
    $this->age = $age;
    $this->sex = $sex;
  }
  
  public function number() {
    $this->id = sprintf('S%04d', ++self::$count);
    printf('(%s) ', $this->id);
  }
  
  public function show() {
    printf('%s %d歳 %s性<br>', $this->name, $this->age, $this->sex);
  }
}

$staffs = []; 
$staffs[] = new Staff('佐藤　一郎', 31, '男');
$staffs[] = new Staff('山田　花子', 25, '女');
$staffs[] = new Staff('鈴木　次郎', 27, '男');
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP課題7-1</title>
  <meta name="description" content>
</head>
<body>
  <p>
    <?php
    foreach ($staffs as $staff) {
      $staff->number();
      $staff->show();
    }
    ?>
  </p>
</body>
</html>