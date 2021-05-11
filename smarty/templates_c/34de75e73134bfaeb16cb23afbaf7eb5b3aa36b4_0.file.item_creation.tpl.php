<?php
/* Smarty version 3.1.39, created on 2021-05-10 20:45:20
  from '/Users/hienle/Sites/online-shop-php/templates/item_creation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60999b60011ae0_10986060',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34de75e73134bfaeb16cb23afbaf7eb5b3aa36b4' => 
    array (
      0 => '/Users/hienle/Sites/online-shop-php/templates/item_creation.tpl',
      1 => 1620679319,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60999b60011ae0_10986060 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="login" style="padding: 20px;">
  <form role="form" action="http://localhost:8080/online-shop-php/addItem.php" method="POST">
    <!-- Name -->
    <div class="form-group row">
      <label for="inputName" class="col-sm-2 col-form-label">Name</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="name">
      </div>
    </div>
    <!-- Price -->
    <div class="form-group row">
      <label for="inputPrice" class="col-sm-2 col-form-label">Price</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="price">
      </div>
    </div>
    <!-- Description -->
    <div class="form-group row">
      <label for="inputDescription" class="col-sm-2 col-form-label">Description</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="description">
      </div>
    </div>
    <!-- Brand -->
    <div class="form-group row">
      <label for="inputBrand" class="col-sm-2 col-form-label">Brand</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="brand">
      </div>
    </div>
    <!-- Category -->
    <div class="form-group row">
      <label for="inputCategory" class="col-sm-2 col-form-label">Category</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="category">
      </div>
    </div>
    <!-- Count -->
    <div class="form-group row">
      <label for="inputCount" class="col-sm-2 col-form-label">Count</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="count">
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

</div>
<?php }
}
