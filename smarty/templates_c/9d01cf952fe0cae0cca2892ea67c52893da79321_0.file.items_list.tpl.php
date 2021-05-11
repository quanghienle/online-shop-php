<?php
/* Smarty version 3.1.39, created on 2021-05-10 19:58:23
  from '/Users/hienle/Sites/online-shop-php/templates/items_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6099905f6d4584_38635992',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d01cf952fe0cae0cca2892ea67c52893da79321' => 
    array (
      0 => '/Users/hienle/Sites/online-shop-php/templates/items_list.tpl',
      1 => 1620666058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6099905f6d4584_38635992 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="d-flex align-items-start flex-wrap">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
  <div class="card" style="width: 18rem; margin: 10px;">
    <img class="card-img-top" style="height: 10rem; padding: 5px; object-fit: contain;" src=<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>

      alt="card image cap">
    <div class="card-body">
      <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</h5>
      <p class="card-text"> price: $<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
 </p>
      <a href="#item<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="btn btn-primary"> details</a>
    </div>
  </div>

  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</div>
<?php }
}
