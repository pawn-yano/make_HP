<?php
require_once('common.php');

$id = $_GET['id'];
$member = $db->getsyain($id);
if (isset($_GET['error'])) {
  session_start();
  $default = $_SESSION;
  session_unset();
  session_destroy();
} else {
  $default = $member;
  $default['old_id'] = $id;
}

show_top('社員情報の更新');
show_syain($member);
show_update($default);
show_down(true);
?>