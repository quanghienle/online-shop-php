<?php
/* Smarty version 3.1.39, created on 2021-05-10 16:06:01
  from '/Users/hienle/Sites/online-shop-php/templates/items_table.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_609959e915a872_42216094',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f0f30b1038f8096177226994da44c1d300bf3d9' => 
    array (
      0 => '/Users/hienle/Sites/online-shop-php/templates/items_table.tpl',
      1 => 1620660354,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609959e915a872_42216094 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="items-table" style="padding: 10px;">
  <h2>List of items:</h2>
  <br />
  <table class="table table-hover">
    <thead class="thead-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Description</th>
        <th scope="col">Brand</th>
        <th scope="col">Category</th>
        <th scope="col">Count</th>
      </tr>
    </thead>
    <tbody>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
      <tr onclick="editItem(this)">
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['brand'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['category'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['count'];?>
</td>
      </tr>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
  </table>
</div>
<?php }
}
