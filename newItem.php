
<?php
session_start();

require_once('include/db_connection.php');
require_once('include/headers.php');

$smarty->assign("route","new_item");
$smarty->assign("username", $_SESSION['username']);
$smarty->display('templates/home.tpl');
?>


