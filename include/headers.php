<?php
require_once('smarty/Smarty.class.php');
require_once('config/smarty_config.php');

$smarty = new Smarty();
$smarty->template_dir = $smtemplate_config['template_dir'];
// $smarty->addTemplateDir($smtemplate_config['layouts_dir']);
$smarty->compile_dir = $smtemplate_config['compile_dir'];
$smarty->cache_dir = $smtemplate_config['cache_dir'];
$smarty->config_dir = $smtemplate_config['config_dir'];

if (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on") {
    $pro = 'https';
} else {
    $pro = 'http';
}
$port = ($_SERVER["SERVER_PORT"] == "80") ? "" : (":".$_SERVER["SERVER_PORT"]);
$current_url =  $pro."://".$_SERVER['SERVER_NAME'].$port.$_SERVER['REQUEST_URI'];
?>
