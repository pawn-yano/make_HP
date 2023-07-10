<?php
require_once('common.php');

if (isset($_GET['error'])) {
  session_start();
  $default = $_SESSION;
  session_unset();
  session_destroy();
} else {
  $default = [];
}

show_top('社員情報の追加');
show_create($default);
show_down(true);
?>