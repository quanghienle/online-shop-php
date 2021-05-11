<?php

session_start();
require_once('smarty/Smarty.class.php');
require_once('config/smarty_config.php');
require_once('include/headers.php');

$smarty->assign("route","login");
$smarty->assign("username", "");
$smarty->display('templates/home.tpl');

?>
