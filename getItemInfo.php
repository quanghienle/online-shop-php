<?php
session_start();

include('include/db_connection.php');
include('include/headers.php');

$id = $_REQUEST["id"];
$sql = "SELECT * FROM items WHERE id={$id} LIMIT 1";
$result = sql_query($sql);


$isExisted = !empty($result);
$content = null;
$res = array('isExisted'=>$isExisted);

if ($isExisted) {
  $item = $result[0];
  foreach ($item as $k => $v){
    $res[$k] = $v;
  }
}

echo json_encode($res);
