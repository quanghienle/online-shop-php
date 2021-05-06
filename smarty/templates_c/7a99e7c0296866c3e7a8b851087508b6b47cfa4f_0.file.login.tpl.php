<?php
/* Smarty version 3.1.39, created on 2021-05-06 17:10:59
  from '/Users/hienle/Sites/online-shop-php/templates/views/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_609423230e6f07_12242660',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a99e7c0296866c3e7a8b851087508b6b47cfa4f' => 
    array (
      0 => '/Users/hienle/Sites/online-shop-php/templates/views/login.tpl',
      1 => 1620321056,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609423230e6f07_12242660 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="login" style="padding: 20px;">
  <form role="form">
    <div class="form-group row">
      <label for="inputUser" class="col-sm-2 col-form-label">User Name</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="inputUser" name="user" placeholder="Username">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
      <div class="col-sm-5">
        <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password">
      </div>
    </div>
    <div class="form-group row">
      <div class="offset-sm-2 col-sm-10">
        <input type="submit" value="Sign in" name="submit" class="btn btn-primary" />
        <input type="submit" value="Sign Up" name="submit" class="btn btn-secondary" />
      </div>
    </div>
  </form>
</div>
<?php }
}
