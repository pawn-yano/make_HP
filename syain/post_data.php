<?php
require_once('common.php');

if (isset($_POST['status'])) {
  $keys = ['id', 'name', 'age', 'work', 'old_id'];
  foreach ($keys as $key) {
    if (isset($_POST[$key])) {
      $$key = $_POST[$key];
    }
  }

  if ($_POST['status'] === 'create') {
    if (check_input($id, $name, $age, $work, $error) === false) {
      session_start();
      foreach ($keys as $key) {
        $_SESSION[$key] = $$key;
      }
      header("Location: syain_create.php?error={$error}");
      exit;
    }
    if ($db->idexist($id) === true) {
      $id = '';
      $error = '既に使用されている社員番号です';
      session_start();
      foreach ($keys as $key) {
        $_SESSION[$key] = $$key;
      }
      header("Location: syain_create.php?error={$error}");
      exit;
    }
    if ($db->createsyain($id, $name, $age, $work) === false) {
      $error = 'データベースエラー';
      session_start();
      foreach ($keys as $key) {
        $_SESSION[$key] = $$key;
      }
      header("Location: syain_create.php?error={$error}");
      exit;
    }
    header("Location: index.php");
    exit;
  }

  if ($_POST['status'] === 'update') {
    if (check_input($id, $name, $age, $work, $error) === false) {
      session_start();
      foreach ($keys as $key) {
        $_SESSION[$key] = $$key;
      }
      header("Location: syain_update.php?id={$old_id}&error={$error}");
      exit;
    }
    if ($id !== $old_id && $db->idexist($id) === true) {
      $id = '';
      $error = '既に使用されている社員番号です';
      session_start();
      foreach ($keys as $key) {
        $_SESSION[$key] = $$key;
      }
      header("Location: syain_update.php?id={$old_id}&error={$error}");
      exit;
    }
    if ($db->updatesyain($id, $name, $age, $work, $old_id) === false) {
      $error = 'データベースエラー';
      session_start();
      foreach ($keys as $key) {
        $_SESSION[$key] = $$key;
      }
      header("Location: syain_update.php?id={$old_id}&error={$error}");
      exit;
    }
    header("Location: index.php");
    exit;
  }

  if ($_POST['status'] === 'delete') {
    if ($db->deletesyain($id) === false) {
      $error = 'データベースエラー';
      header("Location: syain_delete.php?id={$id}&error={$error}");
      exit;
    }
    header("Location: index.php");
    exit;
  }
}
?>