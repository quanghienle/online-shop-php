<?php

session_start();
require_once('include/db_connection.php');
require_once('include/headers.php');
require_once('config/config.php');


$smarty->assign('username', $_SESSION['username']);

$sql = "SELECT * FROM items";
$items = sql_query($sql);
$smarty->assign('items', $items);
$smarty->assign('route', 'items_table');
$smarty->display('templates/home.tpl');
