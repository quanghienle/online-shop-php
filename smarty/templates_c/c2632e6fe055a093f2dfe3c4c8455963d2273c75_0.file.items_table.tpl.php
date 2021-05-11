<?php
/* Smarty version 3.1.39, created on 2021-05-10 20:40:27
  from '/Users/hienle/Sites/online-shop-php/templates/items_table.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60999a3b0083e7_59695646',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2632e6fe055a093f2dfe3c4c8455963d2273c75' => 
    array (
      0 => '/Users/hienle/Sites/online-shop-php/templates/items_table.tpl',
      1 => 1620678867,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60999a3b0083e7_59695646 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="items-table" style="padding: 10px;">
  <h2>List of items:</h2>
  <br />
  <a href="http://localhost:8080/online-shop-php/newItem.php" class="btn btn-primary">Add New Item</a>
  <br />
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
