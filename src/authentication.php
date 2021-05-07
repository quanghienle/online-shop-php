<?php

include('db_connection.php');

$name = $_REQUEST["name"];
$password = $_REQUEST["password"];

$sql = "SELECT * FROM users WHERE name='{$name}' AND password='{$password}' LIMIT 1";
$result = sql_query($sql);

$registered = !empty($result);

$user_info = array();
if ($registered) {
  $user_info = sql_query($sql)[0];
}

$res = array('registered' => $registered, 'info' => $user_info);
echo json_encode($res);
?>

