<?php

require_once('include/db_connection.php');
require_once('include/headers.php');
require_once('config/config.php');

$name = $_POST["inputUser"];
$password = $_POST["inputPassword"];

$sql = "SELECT * FROM users WHERE name='{$name}' AND password='{$password}' LIMIT 1";
$result = sql_query($sql);

$registered = !empty($result);
$content = null;

if ($registered) {
  $user_info = $result[0];
  $_SESSION['username'] = $user_info['name'];
  $_SESSION['role'] = $user_info['role'];
  header("Location: {$BASE_URL}inventory.php");
} else {
  header("Location: {$BASE_URL}index.php");
}
