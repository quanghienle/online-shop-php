<?php
/* Smarty version 3.1.39, created on 2021-05-07 17:51:01
  from '/Users/hienle/Sites/online-shop-php/templates/views/item_info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60957e05073f86_91442261',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7729a18e2efa49715129ad778573745965928d2' => 
    array (
      0 => '/Users/hienle/Sites/online-shop-php/templates/views/item_info.tpl',
      1 => 1620409415,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60957e05073f86_91442261 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="login" style="padding: 20px;">
  <form role="form">
    <!-- id -->
    <div class="form-group row">
      <label for="inputId" class="col-sm-2 col-form-label">ID</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="inputId" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
      </div>
    </div>
    <!-- Name -->
    <div class="form-group row">
      <label for="inputName" class="col-sm-2 col-form-label">Name</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="inputName" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
      </div>
    </div>
    <!-- Price -->
    <div class="form-group row">
      <label for="inputPrice" class="col-sm-2 col-form-label">Price</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="inputPrice" value="<?php echo $_smarty_tpl->tpl_vars['price']->value;?>
">
      </div>
    </div>
    <!-- Description -->
    <div class="form-group row">
      <label for="inputDescription" class="col-sm-2 col-form-label">Description</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="inputDescription" value="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
">
      </div>
    </div>
    <!-- Brand -->
    <div class="form-group row">
      <label for="inputBrand" class="col-sm-2 col-form-label">Brand</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="inputBrand" value="<?php echo $_smarty_tpl->tpl_vars['brand']->value;?>
">
      </div>
    </div>
    <!-- Category -->
    <div class="form-group row">
      <label for="inputCategory" class="col-sm-2 col-form-label">Category</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="inputCategory" value="<?php echo $_smarty_tpl->tpl_vars['category']->value;?>
">
      </div>
    </div>
    <!-- Count -->
    <div class="form-group row">
      <label for="inputCount" class="col-sm-2 col-form-label">Count</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="inputCount" value="<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
">
      </div>
    </div>
  </form>
  <button class="btn btn-secondary" onclick="authenticate(this)">Sign In</button>
</div>
<?php }
}
