<?php
session_start();

include('include/db_connection.php');
include('include/headers.php');

$id = $_REQUEST["id"];
$sql = "SELECT * FROM items WHERE id={$id} LIMIT 1";
$result = sql_query($sql);


$isExisted = !empty($result);
$content = null;

if ($isExisted) {
  $item = $result[0];
  $smarty->assign('route', 'itemInfo');
  $smarty->assign('username', $_SESSION['username']);
  foreach ($item as $k => $v){
    $smarty->assign($k, $v);
  }
  // if ($_SESSION['role'] == 'admin'){
  //   $smarty->assign('readonly', false);
  // } else {
  //   $smarty->assign('readonly', true);
  // }
  $smarty->assign('readonly', false);
  // $smarty->display('templates/home.tpl');
  $content = $smarty->fetch('templates/home.tpl');
}

$res = array('isExisted'=>$isExisted, 'content' => $content);
echo json_encode($res);
