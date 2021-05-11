<?php

session_start();
require_once('include/db_connection.php');
require_once('include/headers.php');
require_once('config/config.php');


$condition = "";

if ($_SERVER['REQUEST_METHOD'] == "GET" && isset($_REQUEST["searchField"]) && isset($_REQUEST["searchInput"])) {
    $searchField = $_REQUEST["searchField"];
    $searchInput = $_REQUEST["searchInput"];
    if ($searchInput == "") {
        $condition = "";
    } elseif ($searchField == "id" || $searchField == "price" || $searchField == "count") {
        $condition = " WHERE {$searchField} = {$searchInput}";
    } else {
        $condition = " WHERE {$searchField} LIKE '%{$searchInput}%'";
    }
}

$smarty->assign('username', $_SESSION['username']);

$admin = $_SESSION['role'] == "admin";

$sql = "SELECT * FROM items" . $condition;
$items = sql_query($sql);
$smarty->assign('items', $items);
$smarty->assign('admin', $admin);
$smarty->assign('route', 'items_table');
$smarty->display('templates/home.tpl');
