<?php
/* Smarty version 3.1.39, created on 2021-05-10 19:19:53
  from '/Users/hienle/Sites/online-shop-php/templates/item_info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_609987598cc602_33023328',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e969bcd36d704cdbf0d511a8000640a82d38da0' => 
    array (
      0 => '/Users/hienle/Sites/online-shop-php/templates/item_info.tpl',
      1 => 1620674388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609987598cc602_33023328 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="login" style="padding: 20px;">
  <form role="form" action="http://localhost:8080/online-shop-php/editItem.php" method="POST">
    <!-- id -->
    <div class="form-group row">
      <label for="inputId" class="col-sm-2 col-form-label">ID</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" disabled>
      </div>
    </div>
    <!-- Name -->
    <div class="form-group row">
      <label for="inputName" class="col-sm-2 col-form-label">Name</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
      </div>
    </div>
    <!-- Price -->
    <div class="form-group row">
      <label for="inputPrice" class="col-sm-2 col-form-label">Price</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="price" value="<?php echo $_smarty_tpl->tpl_vars['price']->value;?>
">
      </div>
    </div>
    <!-- Description -->
    <div class="form-group row">
      <label for="inputDescription" class="col-sm-2 col-form-label">Description</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="description" value="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
">
      </div>
    </div>
    <!-- Brand -->
    <div class="form-group row">
      <label for="inputBrand" class="col-sm-2 col-form-label">Brand</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="brand" value="<?php echo $_smarty_tpl->tpl_vars['brand']->value;?>
">
      </div>
    </div>
    <!-- Category -->
    <div class="form-group row">
      <label for="inputCategory" class="col-sm-2 col-form-label">Category</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="category" value="<?php echo $_smarty_tpl->tpl_vars['category']->value;?>
">
      </div>
    </div>
    <!-- Count -->
    <div class="form-group row">
      <label for="inputCount" class="col-sm-2 col-form-label">Count</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="count" value="<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
">
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

</div>
<?php }
}
