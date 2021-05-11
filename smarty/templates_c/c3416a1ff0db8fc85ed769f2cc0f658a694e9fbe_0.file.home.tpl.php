<?php
/* Smarty version 3.1.39, created on 2021-05-11 18:31:26
  from '/Users/hienle/Sites/online-shop-php/templates/home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_609acd7e61c785_63155776',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3416a1ff0db8fc85ed769f2cc0f658a694e9fbe' => 
    array (
      0 => '/Users/hienle/Sites/online-shop-php/templates/home.tpl',
      1 => 1620757830,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/login.tpl' => 1,
    'file:templates/item_info.tpl' => 1,
    'file:templates/items_table.tpl' => 1,
    'file:templates/items_list.tpl' => 1,
    'file:templates/item_creation.tpl' => 1,
  ),
),false)) {
function content_609acd7e61c785_63155776 (Smarty_Internal_Template $_smarty_tpl) {
?><html>

<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <title>Guitar System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" />

    <?php echo '<script'; ?>
 type="text/javascript"
        src="http://localhost:8080/online-shop-php/public/js/public_js_functions.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="http://localhost:8080/online-shop-php/public/css/styles.css" type="text/css"
        media="screen" title="no title" charset="utf-8" />
</head>

<body>
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"><?php echo '</script'; ?>
>

    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="public/images/guitar_logo.jpeg" width="30" height="30" class="d-inline-block align-top" alt="">
            Guitar Shop
        </a>
        <?php echo $_smarty_tpl->tpl_vars['username']->value;?>

    </nav>

    <?php if ($_smarty_tpl->tpl_vars['route']->value == 'login') {?>
        <?php $_smarty_tpl->_subTemplateRender('file:templates/login.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['route']->value == 'itemInfo') {?>
        <?php $_smarty_tpl->_subTemplateRender('file:templates/item_info.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['route']->value == 'items_table') {?>
        <?php $_smarty_tpl->_subTemplateRender('file:templates/items_table.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['route']->value == 'items_list') {?>
        <?php $_smarty_tpl->_subTemplateRender('file:templates/items_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['route']->value == 'new_item') {?>
        <?php $_smarty_tpl->_subTemplateRender('file:templates/item_creation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>

</body>

</html>
<?php }
}
