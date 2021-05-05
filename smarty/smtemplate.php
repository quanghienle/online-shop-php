<?php
/**
 * @file
 * Wrapper for Smarty Template Engine
 */
 
require_once('Smarty.class.php');
require_once('config/smarty_config.php');
 
class SMTemplate{
     
    private $_smarty;
     
    function __construct(){
        $this->_smarty = new Smarty();
         
        global $smtemplate_config;
        $this->_smarty->template_dir = $smtemplate_config['template_dir'];
        $this->_smarty->addTemplateDir($smtemplate_config['layouts_dir']);
        $this->_smarty->compile_dir = $smtemplate_config['compile_dir'];
        $this->_smarty->cache_dir = $smtemplate_config['cache_dir'];
        $this->_smarty->config_dir = $smtemplate_config['config_dir'];
    }

    function render($template, $data = array(), $layout = 'page') {
        foreach ($data as $key => $value) {
            $this->_smarty->assign($key, $value);
        }
        $content = $this->_smarty->fetch($template . '.tpl');
        $this->_smarty->assign('__content', $content);
        $this->_smarty->display($layout . '.tpl');
    }
}

?>
