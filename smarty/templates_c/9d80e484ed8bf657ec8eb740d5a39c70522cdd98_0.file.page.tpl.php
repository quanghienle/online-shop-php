<?php
/* Smarty version 3.1.39, created on 2021-05-07 15:39:32
  from '/Users/hienle/Sites/online-shop-php/templates/layouts/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60955f34390c15_30026750',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d80e484ed8bf657ec8eb740d5a39c70522cdd98' => 
    array (
      0 => '/Users/hienle/Sites/online-shop-php/templates/layouts/page.tpl',
      1 => 1620401923,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60955f34390c15_30026750 (Smarty_Internal_Template $_smarty_tpl) {
?><html>

<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <title>Guitar System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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

    <!-- nav bar -->
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="public/images/guitar_logo.jpeg" width="30" height="30" class="d-inline-block align-top" alt="">
            Guitar Shop
        </a>
    </nav>
    <hr />
    <div id="mainContent">
        <?php echo $_smarty_tpl->tpl_vars['__content']->value;?>

    </div>
    <hr />

</body>

</html>
<?php }
}
