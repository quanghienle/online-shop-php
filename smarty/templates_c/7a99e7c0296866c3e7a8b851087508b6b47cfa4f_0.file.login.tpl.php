<?php
/* Smarty version 3.1.39, created on 2021-05-10 15:46:44
  from '/Users/hienle/Sites/online-shop-php/templates/views/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_609955648cf350_19464259',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a99e7c0296866c3e7a8b851087508b6b47cfa4f' => 
    array (
      0 => '/Users/hienle/Sites/online-shop-php/templates/views/login.tpl',
      1 => 1620659900,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609955648cf350_19464259 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="login" style="padding: 20px;">
  <form role="form">
    <div class="form-group row">
      <label for="inputUser" class="col-sm-2 col-form-label">User Name</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="inputUser" placeholder="Username">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
      <div class="col-sm-5">
        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
      </div>
    </div>
  </form>
  <button class="btn btn-secondary" onclick="authenticate(this)">Sign In</button>
</div>
<?php }
}
