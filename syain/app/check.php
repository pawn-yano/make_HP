<?php
function check_input(&$id, $name, $age, $work, &$error)
{
  $error = '';
  if ($id === '' || $name === '') {
    $error = '入力されていない項目があります';
    return false;
  }
  if (!preg_match('/^[1-3][0-9]{4}$/', $id)) {
    $id = '';
    $error = '社員番号には1～3の数字で始まる5桁の整数を入力してください';
    return false;
  }
  return true;
}
?>